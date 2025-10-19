@extends('layouts.dashboard')

@section('title', 'Update Service')

@section('content')

<!--Container Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Service Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('service.index') }}">Service</a>
                            </li>
                            <li class="breadcrumb-item active">Form</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Update Service</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('service.update', ['serviceId' => $service->id]) }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $service->name) }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please choose a username.</div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="description" class="col-sm-3 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="5" id="description" name="description" required>{{ old('description', $service->description) }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="icon_url" class="col-sm-3 col-form-label">Icon</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="icon_url" name="icon_url"
                                        placeholder="Paste SVG, FA, BI, etc." required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-9 ms-auto">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('service.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container End-->


    {{-- <h1>Update Service</h1>

    <form action="/dashboard/service/update/{{ $service->id }}" method="post" class="mt-4" style="width: 50%" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Service Name</label>
            @error('name')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="text" name="name" id="name" class="form-control"
                value="{{ old('name', $service->name) }}" placeholder="Service name">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            @error('description')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Service description">{{ old('description', $service->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="icon_url" class="form-label">Icon</label>
            @error('icon_url')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror

            <input type="file" name="icon_url" id="icon_url" class="form-control" accept="image/*"
                onchange="previewImage(event)">

            @if ($service->icon_url)
                <div class="mt-3">
                    <p>Current Icon:</p>
                    <img src="{{ asset('storage/' . $service->icon_url) }}" alt="Old Icon"
                        style="max-width: 150px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
            @endif

            <div class="mt-3">
                <p>New Icon Preview:</p>
                <img id="logoPreview" src="#" alt="Icon Preview"
                    style="display:none; max-width: 150px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form> --}}

   
@endsection
