@extends('layouts.dashboard')

@section('title', 'Update Project')

@section('content')

    <!--Container Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Project Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Project</a>
                            </li>
                            <li class="breadcrumb-item active">Form</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Update Project</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('project.update', ['projectId' => $project->id]) }}" method="POST" enctype="multipart/form-data"
                            class="needs-validation" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 row">
                                        <label for="client_id" class="col-sm-3 col-form-label">Client Name</label>
                                        <div class="col-sm-9">
                                            <select id="clientId" name="client_id">
                                                @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}"
                                                        {{ old('client_id', $project->client_id) == $client->id ? 'selected' : '' }}>
                                                        {{ $client->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="title" class="col-sm-3 col-form-label">Project Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="title" name="title"
                                                value="{{ old('title', $project->title) }}" required>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="name" class="col-sm-3 col-form-label">Service</label>
                                        <div class="col-sm-9">
                                            <select id="multiSelect" name="services[]" class="form-control" multiple>
                                                @foreach ($services as $service)
                                                    <option value="{{ $service->id }}"
                                                        {{ in_array($service->id, old('services', $project->projectService->pluck('id')->toArray())) ? 'selected' : '' }}>
                                                        {{ $service->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="5" id="description" name="description" required>{{ old('description', $project->description) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="start_date" class="col-sm-3 col-form-label">Start Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="date" id="start_date" name="start_date"
                                                value="{{ old('start_date', \Carbon\Carbon::parse($project->start_date)->format('Y-m-d')) }}"
                                                required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="end_date" class="col-sm-3 col-form-label">End Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="date" id="start_date" name="end_date"
                                                value="{{ old('start_date', \Carbon\Carbon::parse($project->end_date)->format('Y-m-d')) }}" />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-3 row">
                                        <label for="project_url" class="col-sm-3 col-form-label">Project URL</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="project_url" name="project_url"
                                                placeholder="https://example.com"
                                                value="{{ old('title', $project->project_url) }}">
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="thumbnail_url" class="col-sm-3 col-form-label">Project Thumbnail</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="thumbnail_url"
                                                name="thumbnail_url" accept="image/*" onchange="previewImage(event)">
                                            @if ($project->thumbnail_url)
                                                <div class="mt-2">
                                                    <img src="{{ asset('storage/' . $project->thumbnail_url) }}"
                                                        alt="Logo Lama" class="img-thumbnail img-fluid mt-2 w-50">
                                                </div>
                                            @endif
                                            <img id="logoPreview" src="#" alt="Logo Preview"
                                                class="img-thumbnail img-fluid mt-2 d-none w-50">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="status" class="col-sm-3 col-form-label">Status Project</label>
                                        <div class="col-sm-9">
                                            <select id="status" name="status">
                                                <option value="draft"
                                                    {{ old('status', $project->status) == 'draft' ? 'selected' : '' }}>
                                                    Draft</option>
                                                <option value="published"
                                                    {{ old('status', $project->status) == 'published' ? 'selected' : '' }}>
                                                    Published</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9 ms-auto">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                            <a href="{{ route('project.index') }}" class="btn btn-danger">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container Start-->

    <h1>Update Project</h1>

    <form action="/dashboard/project/update/{{ $project->id }}" method="post" class="mt-4" style="width: 60%"
        enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="client_id" class="form-label">Client</label>
            @error('client_id')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <select name="client_id" id="client_id" class="form-select">
                <option value="">-- Select Client --</option>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}"
                        {{ old('client_id', $project->client_id) == $client->id ? 'selected' : '' }}>
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
            <textarea name="description" id="description" class="form-control" rows="4"
                placeholder="Project description">{{ old('description', $project->description) }}</textarea>
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
                <option value="published" {{ old('status', $project->status) == 'published' ? 'selected' : '' }}>Published
                </option>
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
