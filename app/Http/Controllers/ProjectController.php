<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Client;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        return view("dashboard.project.index", [
            "projects" => Project::with(["client", "projectCategory"])->get()
        ]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view("dashboard.project.create", [
                "clients" => Client::all(),
                "categories" => Category::all(),
            ]);
        }

        $messages = [
            'title.required' => 'Judul project wajib diisi.',
            'title.string' => 'Judul project harus berupa teks.',
            'title.max' => 'Judul project maksimal 255 karakter.',

            'client_id.required' => 'Client wajib dipilih.',
            'client_id.exists' => 'Client yang dipilih tidak valid.',

            'categories.required' => 'Minimal pilih satu kategori.',
            'categories.array' => 'Format kategori tidak valid.',

            'description.required' => 'Deskripsi project wajib diisi.',
            'description.string' => 'Deskripsi harus berupa teks.',

            'project_url.required' => 'Link project wajib diisi.',
            'project_url.string' => 'Link project harus berupa teks.',

            'start_date.required' => 'Tanggal mulai wajib diisi.',
            'start_date.date' => 'Format tanggal mulai tidak valid.',

            'end_date.date' => 'Format tanggal selesai tidak valid.',
            'end_date.after_or_equal' => 'Tanggal selesai tidak boleh sebelum tanggal mulai.',

            'status.required' => 'Status wajib dipilih.',
            'status.in' => 'Status tidak valid.',

            'thumbnail_url.required' => 'Thumbnail project wajib diunggah.',
            'thumbnail_url.image' => 'File thumbnail harus berupa gambar.',
            'thumbnail_url.mimes' => 'Format thumbnail harus jpg, jpeg, png, atau webp.',
            'thumbnail_url.max' => 'Ukuran file maksimal 2MB.',
        ];

        $validated = $request->validate([
            "title" => "required|string|max:255",
            "client_id" => "required|exists:clients,id",
            "categories" => "required|array",
            "description" => "required|string",
            "project_url" => "required|string",
            "start_date" => "required|date",
            "end_date" => "nullable|date|after_or_equal:start_date",
            'status' => 'required|in:draft,published',
            "thumbnail_url" => "required|image|mimes:jpeg,png,jpg,webp|max:2048",
        ], $messages);

        $slug = Str::slug($validated["title"]);
        $checkProject = Project::where("slug", $slug)->first();

        if ($checkProject) {
            return redirect()->back()->with("message-error", "Judul project sudah digunakan!");
        }

        if ($request->hasFile("thumbnail_url")) {
            $path = $request->file("thumbnail_url")->store("project-thumbnails", "public");
            $validated["thumbnail_url"] = $path;
        }

        $project = Project::create([
            "title" => $validated["title"],
            "slug" => $slug,
            "client_id" => $validated["client_id"],
            "description" => $validated["description"],
            "project_url" => $validated["project_url"],
            "start_date" => $validated["start_date"],
            "end_date" => $validated["end_date"],
            "status" => $validated["status"],
            "thumbnail_url" => $validated["thumbnail_url"],
        ]);

        $project->projectCategory()->attach($validated["categories"]);

        return redirect("/dashboard/project")->with("message-success", "Project berhasil ditambahkan!");
    }

    public function update(Request $request, $projectId)
    {
        $project = Project::find($projectId);

        if (!$project) {
            return redirect('/dashboard/project')->with('message-error', 'Project tidak ditemukan!');
        }

        if ($request->isMethod("GET")) {
            return view("dashboard.project.update", [
                "project" => $project,
                "clients" => Client::all(),
                "categories" => Category::all(),
            ]);
        }

        $messages = [
            'title.required' => 'Judul project wajib diisi.',
            'title.string' => 'Judul project harus berupa teks.',
            'title.max' => 'Judul project maksimal 255 karakter.',

            'client_id.required' => 'Client wajib dipilih.',
            'client_id.exists' => 'Client yang dipilih tidak valid.',

            'description.required' => 'Deskripsi project wajib diisi.',
            'description.string' => 'Deskripsi harus berupa teks.',

            'thumbnail_url.image' => 'File thumbnail harus berupa gambar.',
            'thumbnail_url.mimes' => 'Format thumbnail harus jpg, jpeg, png, atau webp.',
            'thumbnail_url.max' => 'Ukuran file maksimal 2MB.',

            'project_url.required' => 'Link project wajib diisi.',
            'project_url.string' => 'Link project harus berupa teks.',

            'start_date.required' => 'Tanggal mulai wajib diisi.',
            'start_date.date' => 'Format tanggal mulai tidak valid.',

            'end_date.date' => 'Format tanggal selesai tidak valid.',
            'end_date.after_or_equal' => 'Tanggal selesai tidak boleh sebelum tanggal mulai.',

            'status.required' => 'Status wajib dipilih.',
            'status.in' => 'Status tidak valid.',

            'categories.array' => 'Format kategori tidak valid.',
            'categories.*.exists' => 'Kategori yang dipilih tidak valid.',
        ];

        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'project_url' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'status' => 'required|in:draft,published',
            'categories' => 'nullable|array',
            'categories.*' => 'exists:categories,id',
        ], $messages);

        $slug = Str::slug($validated['title']);
        $duplicate = Project::where('slug', $slug)->where('id', '!=', $projectId)->first();
        if ($duplicate) {
            return redirect()->back()->with('message-error', 'Judul project sudah digunakan!');
        }

        if ($request->hasFile('thumbnail_url')) {
            if ($project->thumbnail_url && Storage::disk('public')->exists($project->thumbnail_url)) {
                Storage::disk('public')->delete($project->thumbnail_url);
            }

            $path = $request->file('thumbnail_url')->store('project-thumbnails', 'public');
            $validated['thumbnail_url'] = $path;
        } else {
            unset($validated['thumbnail_url']);
        }

        $validated['slug'] = $slug;

        $project->update($validated);

        if (isset($validated['categories'])) {
            $project->projectCategory()->sync($validated['categories']);
        }

        return redirect('/dashboard/project')->with('message-success', 'Project berhasil diperbarui!');
    }

    public function delete($projectId)
    {
        $project = Project::find($projectId);

        if (!$project) {
            return redirect('/dashboard/project')->with('message-error', 'Project tidak ditemukan!');
        }

        $project->projectCategory()->detach();

        if ($project->thumbnail_url && Storage::disk('public')->exists($project->thumbnail_url)) {
            Storage::disk('public')->delete($project->thumbnail_url);
        }

        $project->delete();

        return redirect('/dashboard/project')->with('message-success', 'Project berhasil dihapus!');
    }
}
