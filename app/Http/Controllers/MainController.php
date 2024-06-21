<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Resume;

class MainController extends Controller
{
    public function index()
    {
        $resumes = Resume::latest()->get();
        $experiences = Experience::latest()->get();
        $skills = Skill::latest()->get();
        $categories = Category::all();
        $portfolios = Portfolio::latest()->get();
        return view('index', compact('portfolios', 'categories', 'skills', 'experiences', 'resumes'));
    }
}
