<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::latest()->get();
        return view('admin.skill.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'icons' => 'required',
            'degree' => 'required',
         ]);

        $requestData = $request->all();

        Skill::create($requestData);
        return redirect()->route('admin.skill.index')->with('seccess', 'Skill created saccessfuly');
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
    public function edit(Skill $skill)
    {
        return view('admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        $this->validate($request, [
            'title' => 'required',
            'icons' => 'required',
            'degree' => 'required',
         ]);

        $requestData = $request->all();

        $skill->update($requestData);
        return redirect()->route('admin.skill.index')->with('seccess', 'Skill edited saccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        $skill->delete();
        return redirect()->route('admin.skill.index')->with('seccess', 'Skill edited saccessfuly');
    }
}
