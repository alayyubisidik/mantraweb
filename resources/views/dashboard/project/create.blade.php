@extends('layout.dashboard-layout')

@section('title', 'Create Project')

@section('content')
    <h1>Create Project</h1>

    <form action="/dashboard/project/create" method="POST" class="mt-4" style="width: 60%" enctype="multipart/form-data">
        @csrf

        {{-- Select Client --}}
        <div class="mb-3">
            <label for="client_id" class="form-label">Client</label>
            @error('client_id')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <select name="client_id" id="client_id" class="form-control">
                <option value="">-- Select Client --</option>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>
                        {{ $client->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Title --}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            @error('title')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="text" name="title" id="title" class="form-control" placeholder="Project title"
                value="{{ old('title') }}">
        </div>

        {{-- Description --}}
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            @error('description')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <textarea name="description" id="description" class="form-control" rows="4"
                placeholder="Write project description here...">{{ old('description') }}</textarea>
        </div>

        {{-- Thumbnail --}}
        <div class="mb-3">
            <label for="thumbnail_url" class="form-label">Thumbnail</label>
            @error('thumbnail_url')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="file" name="thumbnail_url" id="thumbnail_url" class="form-control" accept="image/*"
                onchange="previewImage(event)">
        </div>

        {{-- Preview --}}
        <div class="mb-3">
            <img id="logoPreview" src="#" alt="Thumbnail Preview"
                style="display: none; max-width: 200px; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
        </div>

        {{-- Project URL --}}
        <div class="mb-3">
            <label for="project_url" class="form-label">Project URL</label>
            @error('project_url')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="url" name="project_url" id="project_url" class="form-control"
                placeholder="https://example.com" value="{{ old('project_url') }}">
        </div>

        {{-- Start Date --}}
        <div class="mb-3">
            <label for="start_date" class="form-label">Start Date</label>
            @error('start_date')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="datetime-local" name="start_date" id="start_date" class="form-control"
                value="{{ old('start_date') }}">
        </div>

        {{-- End Date --}}
        <div class="mb-3">
            <label for="end_date" class="form-label">End Date</label>
            @error('end_date')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="datetime-local" name="end_date" id="end_date" class="form-control"
                value="{{ old('end_date') }}">
        </div>

        {{-- Multiple Services --}}
        <div class="mb-3">
            <label for="services" class="form-label">Services</label>
            @error('services')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <select name="services[]" id="services" class="form-control" multiple>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}"
                        {{ collect(old('services'))->contains($service->id) ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
            <small class="text-muted">Hold CTRL (or CMD on Mac) to select multiple services.</small>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
