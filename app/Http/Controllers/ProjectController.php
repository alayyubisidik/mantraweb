<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use App\Models\Project;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.project.index', [
            'projects' => Project::all()
        ]);
    }

    public function edit(Project $project)
    {
        return view('dashboard.project.edit', [
            'project' => $project,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $messages = [
            'title.required' => 'Judul project wajib diisi.',
            'title.string' => 'Judul project harus berupa teks.',
            'title.max' => 'Judul project maksimal 255 karakter.',
            'title.unique' => 'Judul project sudah digunakan.',

            'description.required' => 'Deskripsi project wajib diisi.',
            'description.string' => 'Deskripsi harus berupa teks.',

            'thumbnail_url.image' => 'File thumbnail harus berupa gambar.',
            'thumbnail_url.mimes' => 'Format thumbnail harus jpg, jpeg, png, atau webp.',
            'thumbnail_url.max' => 'Ukuran file maksimal 2MB.',

            'end_date.after_or_equal' => 'Tanggal selesai tidak boleh sebelum tanggal mulai.',
        ];


        $validated = $request->validate([
            'title' => 'required|string|max:255|unique:projects,title,' . $project->id,
            'description' => 'required|string',
            'thumbnail_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'project_url' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:draft,published',
        ], $messages);

        if ($request->hasFile('thumbnail_url')) {
            // misalnya kamu punya helper upload file seperti ini:
            $logoPath = $this->uploadFile($request->file('thumbnail_url'), $project->thumbnail_url, 'images/project-thumbnails');
            $project->thumbnail_url = $logoPath;
        }

        $project->title = $validated["title"];
        $project->description = $validated["description"];
        $project->status = $validated["status"];
        if ($request->project_url) {
            $project->project_url = $validated["project_url"];
        }
        $project->slug = Str::slug($validated["title"]);
        $project->save();


        return redirect()->route('projects.index')->with('message-success', 'Project berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->thumbnail_url && file_exists(public_path($project->thumbnail_url))) {
            File::delete(public_path($project->thumbnail_url));
        }

        $project->delete();

        return redirect()
            ->route("projects.index")
            ->with("message-success", "Project berhasil dihapus!");
    }
}
