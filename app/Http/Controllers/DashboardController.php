<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::count(),
            'total_teams' => Team::count(),
            'total_services' => Service::count(),
            'total_clients' => Client::count(),
            'total_projects' => Project::count(),
            'total_testimonials' => Testimonial::count(),
        ];

        return view('dashboard.index', $stats);
    }
}
