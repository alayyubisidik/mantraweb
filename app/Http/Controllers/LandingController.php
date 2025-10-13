<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function about()
    {
        return view('landing.about');
    }

    public function team()
    {
        return view('landing.team');
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
