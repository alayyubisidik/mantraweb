@extends('layouts.dashboard')

@section('title', 'Team | Dashboard Mantraweb')

@section('content')

    <!--Container Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Team Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Team</a>
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
                                <h4 class="card-title">Create New Team</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <form action="{{ route('team.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3 row">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="name" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="position" class="col-sm-3 col-form-label">Position</label>
                                <div class="col-sm-9">
                                    <input type="text" id="position" name="position"
                                        class="form-control @error('position') is-invalid @enderror"
                                        value="{{ old('position') }}">
                                    @error('position')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="profile_url" class="col-sm-3 col-form-label">Profile Picture</label>
                                <div class="col-sm-9">
                                    <input type="file" id="profile_url" name="profile_url" accept="image/*"
                                        onchange="previewImage(event)"
                                        class="form-control @error('profile_url') is-invalid @enderror">
                                    @error('profile_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    <img id="logoPreview" src="#" alt="Logo Preview"
                                        class="img-thumbnail img-fluid mt-2 d-none w-50">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-9 ms-auto">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('team.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container Start-->

@endsection
