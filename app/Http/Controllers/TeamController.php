<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        return view("dashboard.team.index", [
            "teams" => Team::all()

        ]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view("dashboard.team.create");
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'position' => 'required|string|max:100',
            'profile_url' => 'required|image|mimes:jpg,jpeg,png,webp,svg|max:2048', // max 2MB
        ]);

        $path = $request->file('profile_url')->store('profile-picture', 'public');
        $validated['profile_url'] = $path; // simpan path ke database

        Team::create($validated);

        return redirect("/dashboard/team");
    }

    public function delete($teamId)
    {
        $team = Team::findOrFail($teamId);

        if ($team->profile_url && Storage::disk('public')->exists($team->profile_url)) {
            Storage::disk('public')->delete($team->profile_url);
        }

        $team->delete();

        return redirect('/dashboard/team')->with('success', 'Client deleted successfully.');
    }

    public function update(Request $request, $teamId)
    {
        $team = Team::findOrFail($teamId);

        if ($request->isMethod("GET")) {
            return view("dashboard.team.update", [
                "team" => $team
            ]);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'position' => 'required|string|max:100',
            'profile_url' => 'required|image|mimes:jpg,jpeg,png,webp,svg|max:2048', // max 2MB
        ]);

        if ($request->hasFile('profile_url')) {
            if ($team->profile_url && Storage::disk('public')->exists($team->profile_url)) {
                Storage::disk('public')->delete($team->profile_url);
            }

            $path = $request->file('profile_url')->store('profile-picture', 'public');
            $validated['profile_url'] = $path;
        }

        $team->update($validated);

        return redirect('/dashboard/team')->with('success', 'Client updated successfully.');
    }
}
