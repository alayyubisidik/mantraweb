<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("dashboard.team.index", [
            "teams" => Team::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashboard.team.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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


        if ($request->hasFile("profile_url")) {
            $filepath = $this->uploadFile($request->file("profile_url"), null, "profile-picture");
            $validated["profile_url"] = $filepath;
        }

        Team::create($validated);

        return redirect()->route("teams.index")->with('message-success', 'Team berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view("dashboard.team.edit", compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
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

        if ($request->hasFile("profile_url")) {
            $filepath = $this->uploadFile($request->file("profile_url"), $request->profile_url, "profile-picture");
            $validated["profile_url"] = $filepath;
        }

        $team->update($validated);

        return redirect()->route("teams.index")->with('message-success', 'Team berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        if ($team->profile_url != "/defaults/profile.png") {
            File::delete(public_path($team->profile_url));
        }

        $team->delete();

        return redirect()->route("teams.index")->with('message-success', 'Team berhasil dihapus!');
    }
}
