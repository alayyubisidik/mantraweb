<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $teams = Team::limit(5)->get();

        return view('landing.index')->with('teams', $teams);
    }

    public function about()
    {
        return view('landing.about');
    }

    public function team()
    {
        $teams = Team::all();

        return view('landing.team')->with('teams', $teams);
    }

    public function project()
    {
        return view('landing.project');
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
