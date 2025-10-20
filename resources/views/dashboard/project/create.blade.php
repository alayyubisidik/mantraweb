@extends('layouts.dashboard')

@section('title', 'Project | Dashboard Mantraweb')

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
                                <h4 class="card-title">Create New Project</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('project.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">

                                    {{-- Client --}}
                                    <div class="mb-3 row">
                                        <label for="client_id" class="col-sm-3 col-form-label">Client Name</label>
                                        <div class="col-sm-9">
                                            <select id="clientId" name="client_id">
                                                <option value="" disabled selected>-- Pilih Client --</option>
                                                @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}">
                                                        {{ $client->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('client_id')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Project Title --}}
                                    <div class="mb-3 row">
                                        <label for="title" class="col-sm-3 col-form-label">Project Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="title" name="title"
                                                class="form-control @error('title') is-invalid @enderror"
                                                value="{{ old('title') }}">
                                            @error('title')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Categories --}}
                                    <div class="mb-3 row">
                                        <label for="categories" class="col-sm-3 col-form-label">Categories</label>
                                        <div class="col-sm-9">
                                            <select id="multiSelect" name="categories[]" class="form-control">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('categories')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Description --}}
                                    <div class="mb-3 row">
                                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="description" name="description" rows="5"
                                                class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Start Date --}}
                                    <div class="mb-3 row">
                                        <label for="start_date" class="col-sm-3 col-form-label">Start Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" id="start_date" name="start_date"
                                                class="form-control @error('start_date') is-invalid @enderror"
                                                value="{{ old('start_date') }}">
                                            @error('start_date')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- End Date --}}
                                    <div class="mb-3 row">
                                        <label for="end_date" class="col-sm-3 col-form-label">End Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" id="end_date" name="end_date"
                                                class="form-control @error('end_date') is-invalid @enderror"
                                                value="{{ old('end_date') }}">
                                            @error('end_date')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">

                                    {{-- Project URL --}}
                                    <div class="mb-3 row">
                                        <label for="project_url" class="col-sm-3 col-form-label">Project URL</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="project_url" name="project_url"
                                                class="form-control @error('project_url') is-invalid @enderror"
                                                placeholder="https://example.com" value="{{ old('project_url') }}">
                                            @error('project_url')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Thumbnail --}}
                                    <div class="mb-3 row">
                                        <label for="thumbnail_url" class="col-sm-3 col-form-label">Project Thumbnail</label>
                                        <div class="col-sm-9">
                                            <input type="file" id="thumbnail_url" name="thumbnail_url"
                                                accept="image/*" onchange="previewImage(event)"
                                                class="form-control @error('thumbnail_url') is-invalid @enderror">
                                            @error('thumbnail_url')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror

                                            <img id="logoPreview" src="#" alt="Thumbnail Preview"
                                                class="img-thumbnail img-fluid mt-2 d-none w-50">
                                        </div>
                                    </div>

                                    {{-- Status --}}
                                    <div class="mb-3 row">
                                        <label for="status" class="col-sm-3 col-form-label">Status Project</label>
                                        <div class="col-sm-9">
                                            <select id="status" name="status"
                                                class="form-select @error('status') is-invalid @enderror">
                                                <option value="" disabled selected>-- Pilih Status --</option>
                                                <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>
                                                    Draft</option>
                                                <option value="published"
                                                    {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Action Buttons --}}
                                    <div class="row">
                                        <div class="col-sm-9 ms-auto">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <a href="{{ route('project.index') }}" class="btn btn-danger">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        {{-- <form action="{{ route('project.create') }}" method="POST" enctype="multipart/form-data"
                            class="needs-validation" novalidate>
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-3 row">
                                        <label for="client_id" class="col-sm-3 col-form-label">Client Name</label>
                                        <div class="col-sm-9">
                                            <select id="clientId" name="client_id">
                                                @foreach ($clients as $client)
                                                    <option value="{{ $client->id }}">
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
                                                required>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="name" class="col-sm-3 col-form-label">Categories</label>
                                        <div class="col-sm-9">
                                            <select id="multiSelect" name="categories[]" class="form-control">
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="5" id="description" name="description" required></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="start_date" class="col-sm-3 col-form-label">Start Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="date" id="start_date" name="start_date" required />
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="end_date" class="col-sm-3 col-form-label">End Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="date" id="start_date" name="end_date" />
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
                                                placeholder="https://example.com">
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="thumbnail_url" class="col-sm-3 col-form-label">Project Thumbnail</label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="thumbnail_url"
                                                name="thumbnail_url" accept="image/*" onchange="previewImage(event)">
                                            <img id="logoPreview" src="#" alt="Logo Preview"
                                                class="img-thumbnail img-fluid mt-2 d-none w-50">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="status" class="col-sm-3 col-form-label">Status Project</label>
                                        <div class="col-sm-9">
                                            <select id="status" name="status">
                                                <option value="draft">Draft</option>
                                                <option value="published">Published</option>
                                            </select>
                                            <div class="valid-feedback">Looks good!</div>
                                            <div class="invalid-feedback">Please choose a username.</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-9 ms-auto">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <a href="{{ route('project.index') }}" class="btn btn-danger">Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container Start-->

@endsection
