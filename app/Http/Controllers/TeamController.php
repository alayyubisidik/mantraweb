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
            'profile_url' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.max' => 'Nama maksimal 100 karakter.',
            'position.required' => 'Posisi wajib diisi.',
            'position.max' => 'Posisi maksimal 100 karakter.',
            'profile_url.image' => 'File harus berupa gambar.',
            'profile_url.mimes' => 'Format gambar harus jpg, jpeg, png, webp, atau svg.',
            'profile_url.max' => 'Ukuran gambar maksimal 2MB.',
        ]);

        if ($request->hasFile('profile_url')) {
            $path = $request->file('profile_url')->store('profile-picture', 'public');
            $validated['profile_url'] = $path;
        }

        Team::create($validated);

        return redirect("/dashboard/team")->with('message-success', 'Team berhasil ditambahkan!');
    }

    public function update(Request $request, $teamId)
    {
        $team = Team::find($teamId);

        if (!$team) {
            return redirect('/dashboard/team')->with('message-error', 'Team tidak ditemukan!');
        }

        if ($request->isMethod("GET")) {
            return view("dashboard.team.update", compact('team'));
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'position' => 'required|string|max:100',
            'profile_url' => 'nullable|image|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.max' => 'Nama maksimal 100 karakter.',
            'position.required' => 'Posisi wajib diisi.',
            'position.max' => 'Posisi maksimal 100 karakter.',
            'profile_url.image' => 'File harus berupa gambar.',
            'profile_url.mimes' => 'Format gambar harus jpg, jpeg, png, webp, atau svg.',
            'profile_url.max' => 'Ukuran gambar maksimal 2MB.',
        ]);

        if ($request->hasFile('profile_url')) {
            if ($team->profile_url && Storage::disk('public')->exists($team->profile_url)) {
                Storage::disk('public')->delete($team->profile_url);
            }

            $path = $request->file('profile_url')->store('profile-picture', 'public');
            $validated['profile_url'] = $path;
        }

        $team->update($validated);

        return redirect('/dashboard/team')->with('message-success', 'Team berhasil diperbarui!');
    }


    public function delete($teamId)
    {
        $team = Team::find($teamId);

        if (!$team) {
            return redirect('/dashboard/team')->with('message-error', 'Team tidak ditemukan!');
        }

        if ($team->profile_url && Storage::disk('public')->exists($team->profile_url)) {
            Storage::disk('public')->delete($team->profile_url);
        }

        $team->delete();

        return redirect('/dashboard/team')->with('message-success', 'Team berhasil dihapus!');
    }
}
