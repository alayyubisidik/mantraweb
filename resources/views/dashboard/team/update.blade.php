@extends('layouts.dashboard')

@section('title', 'Update Client')

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
                                <h4 class="card-title">Update Team</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <form action="{{ route('team.update', ['teamId' => $team->id]) }}" method="POST"
                            enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf
                            <div class="mb-3 row">
                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name', $team->name) }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please choose a username.</div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="position" class="col-sm-3 col-form-label">Position</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="position" name="position"
                                        value="{{ old('name', $team->position) }}" required>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please choose a username.</div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="profile_url" class="col-sm-3 col-form-label">Profile Picture</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="profile_url" name="profile_url"
                                        accept="image/*" onchange="previewImage(event)">
                                    @if ($team->profile_url)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $team->profile_url) }}" alt="Logo Lama"
                                                class="img-thumbnail img-fluid mt-2 w-50">
                                        </div>
                                    @endif
                                    <img id="logoPreview" src="#" alt="Logo Preview"
                                        class="img-thumbnail img-fluid mt-2 d-none w-50">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9 ms-auto">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
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
