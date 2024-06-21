<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $resumes = Resume::latest()->get();
        return view('admin.resume.index', compact('resumes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resume.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'resume' => 'required',
         ]);

        $requestData = $request->all();

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $resume_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('resume/', $resume_name);
            $requestData['resume'] = $resume_name;
        }

        Resume::create($requestData);
        return redirect()->route('admin.resume.index')->with('seccess', 'Resume created successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resume $resume)
    {
        return view('admin.resume.edit', compact('resume'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resume $resume)
    {
        $requestData = $request->all();

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $resume_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('resume/', $resume_name);
            $requestData['resume'] = $resume_name;
        }

        $resume->update($requestData);
        return redirect()->route('admin.resume.index')->with('seccess', 'Resume edited successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resume $resume)
    {
        $resume->delete();
        return redirect()->route('admin.resume.index')->with('seccess', 'Resume edited successfuly');
    }
}
