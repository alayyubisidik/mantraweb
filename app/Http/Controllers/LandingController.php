<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $data = [
            'teams' => Team::limit(5)->get(),
            'testimonials' => Testimonial::with('client')
                ->latest()
                ->limit(3)
                ->get(),
        ];

        return view('landing.index', $data);

        // $testimonials = Testimonial::with('client')
        //     ->latest()
        //     ->limit(3)
        //     ->get();

        // return view('landing.index', compact('teams', 'testimonials'));
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
        $projects = Project::all();

        return view('landing.project')->with('projects', $projects);
    }
    public function projectDetail($slug)
    {
        // Ambil project berdasarkan slug
        $project = Project::with(['client', 'categories'])
            ->where('slug', $slug)
            ->firstOrFail();

        // Kirim ke view dengan with()
        return view('landing.project-detail')->with('project', $project);
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
