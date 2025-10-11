@extends('layout.dashboard-layout')

@section('title', 'Update Project')

@section('content')
    <h1>Update Project</h1>

    <form action="/dashboard/project/update/{{ $project->id }}" method="post" class="mt-4" style="width: 60%" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="client_id" class="form-label">Client</label>
            @error('client_id')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <select name="client_id" id="client_id" class="form-select">
                <option value="">-- Select Client --</option>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}" {{ old('client_id', $project->client_id) == $client->id ? 'selected' : '' }}>
                        {{ $client->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            @error('title')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="text" name="title" id="title" class="form-control"
                value="{{ old('title', $project->title) }}" placeholder="Project title">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            @error('description')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Project description">{{ old('description', $project->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="project_url" class="form-label">Project URL</label>
            @error('project_url')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="url" name="project_url" id="project_url" class="form-control"
                value="{{ old('project_url', $project->project_url) }}" placeholder="https://example.com">
        </div>

        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            @error('start_date')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="datetime-local" name="start_date" id="start_date" class="form-control"
                value="{{ old('start_date', \Carbon\Carbon::parse($project->start_date)->format('Y-m-d\TH:i')) }}">
        </div>

        <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            @error('end_date')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="datetime-local" name="end_date" id="end_date" class="form-control"
                value="{{ old('end_date', \Carbon\Carbon::parse($project->end_date)->format('Y-m-d\TH:i')) }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            @error('status')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <select name="status" id="status" class="form-select">
                <option value="draft" {{ old('status', $project->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status', $project->status) == 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="thumbnail_url" class="form-label">Thumbnail</label>
            @error('thumbnail_url')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="file" name="thumbnail_url" id="thumbnail_url" class="form-control" accept="image/*"
                onchange="previewImage(event)">

            @if ($project->thumbnail_url)
                <div class="mt-3">
                    <p>Current Thumbnail:</p>
                    <img src="{{ asset('storage/' . $project->thumbnail_url) }}" alt="Current Thumbnail"
                        style="max-width: 200px; border: 1px solid #ccc; border-radius: 8px;">
                </div>
            @endif

            <div class="mt-3">
                <p>New Thumbnail Preview:</p>
                <img id="logoPreview" src="#" alt="Thumbnail Preview"
                    style="display:none; max-width:200px; border:1px solid #ccc; border-radius:8px;">
            </div>
        </div>

        <div class="mb-3">
            <label for="services" class="form-label">Related Services</label>
            @error('services')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <select name="services[]" id="services" class="form-select" multiple>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}"
                        {{ in_array($service->id, old('services', $project->projectService->pluck('id')->toArray())) ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Project</button>
    </form>
@endsection
