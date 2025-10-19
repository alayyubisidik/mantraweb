<?php

namespace App\Http\Controllers;

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
            "projects" => Project::with(["client", "projectService"])->get()
        ]);
    }

    public function create(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view("dashboard.project.create", [
                "clients" => Client::all(),
                "services" => Service::all(),
            ]);
        }

        $validated = $request->validate([
            "title" => "required|string|max:255",
            "client_id" => "required|exists:clients,id",
            "services" => "required|array",
            "description" => "required|string",
            "project_url" => "required|string",
            "start_date" => "required|date",
            "end_date" => "nullable|date|after_or_equal:start_date",
            'status' => 'required|in:draft,published',
            "thumbnail_url" => "required|image|mimes:jpeg,png,jpg|max:2048",
        ]);

        $slug = Str::slug($validated["title"]);
        $checkProject = Project::where("slug", $slug)->first();
        if ($checkProject) {
            return redirect()->back()->with("message - error", "Duplicate slug");
        }

        if ($request->hasFile("thumbnail_url")) {
            $path = $request->file("thumbnail_url")->store("thumbnail_project", "public");
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

        $project->projectService()->attach($request->services);

        return redirect("/dashboard/project")->with("success", "Project created successfully");
    }

    public function delete($projectId)
    {
        $project = Project::findOrFail($projectId);

        $project->projectService()->detach();

        if ($project->thumbnail_url && Storage::disk('public')->exists($project->thumbnail_url)) {
            Storage::disk('public')->delete($project->thumbnail_url);
        }

        $project->delete();

        return redirect('/dashboard/project')->with('success', 'Project deleted successfully.');
    }

    public function update(Request $request, $projectId)
    {
        $project = Project::findOrFail($projectId);

        if ($request->isMethod("GET")) {
            return view("dashboard.project.update", [
                "project" => $project,
                "clients" => Client::all(),
                "services" => Service::all(),
            ]);
        }

        $validated = $request->validate([
            'client_id' => 'required|exists:clients,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumbnail_url' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'project_url' => 'nullable|url',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'status' => 'required|in:draft,published',
            'services' => 'nullable|array',
            'services.*' => 'exists:services,id',
        ]);

        if ($request->hasFile('thumbnail_url')) {
            if ($project->thumbnail_url && Storage::disk('public')->exists($project->thumbnail_url)) {
                Storage::disk('public')->delete($project->thumbnail_url);
            }

            $path = $request->file('thumbnail_url')->store('project-thumbnails', 'public');
            $validated['thumbnail_url'] = $path;
        }

        $validated['slug'] = Str::slug($validated['title']);

        $project->update($validated);

        if (isset($validated['services'])) {
            $project->projectService()->sync($validated['services']);
        }

        return redirect('/dashboard/project')->with('success', 'Project updated successfully.');
    }
}
