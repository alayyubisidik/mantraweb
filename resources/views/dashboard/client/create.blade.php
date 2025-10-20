@extends('layouts.dashboard')

@section('title', 'Client | Dashboard Mantraweb')

@section('content')

    <!--Container Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Client Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Client</a>
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
                                <h4 class="card-title">Create New Client</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <form action="{{ route('client.create') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">

                                    {{-- Name --}}
                                    <div class="mb-3 row">
                                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="name" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name') }}">
                                            @error('name')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Job Title --}}
                                    <div class="mb-3 row">
                                        <label for="job_title" class="col-sm-3 col-form-label">Job Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="job_title" name="job_title"
                                                class="form-control @error('job_title') is-invalid @enderror"
                                                value="{{ old('job_title') }}">
                                            @error('job_title')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Email --}}
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" id="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}">
                                            @error('email')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Phone --}}
                                    <div class="mb-3 row">
                                        <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="phone" name="phone"
                                                class="form-control @error('phone') is-invalid @enderror"
                                                value="{{ old('phone') }}">
                                            @error('phone')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Address --}}
                                    <div class="mb-3 row">
                                        <label for="address" class="col-sm-3 col-form-label">Address</label>
                                        <div class="col-sm-9">
                                            <textarea id="address" name="address" rows="4" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                                            @error('address')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-6">

                                    {{-- Company --}}
                                    <div class="mb-3 row">
                                        <label for="company" class="col-sm-3 col-form-label">Company</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="company" name="company"
                                                class="form-control @error('company') is-invalid @enderror"
                                                value="{{ old('company') }}">
                                            @error('company')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Company Logo --}}
                                    <div class="mb-3 row">
                                        <label for="company_logo_url" class="col-sm-3 col-form-label">Company Logo</label>
                                        <div class="col-sm-9">
                                            <input type="file" id="company_logo_url" name="company_logo_url"
                                                accept="image/*" onchange="previewImage(event)"
                                                class="form-control @error('company_logo_url') is-invalid @enderror">
                                            @error('company_logo_url')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror

                                            <img id="logoPreview" src="#" alt="Logo Preview"
                                                class="img-thumbnail img-fluid mt-2 d-none w-50">
                                        </div>
                                    </div>

                                    {{-- Action Buttons --}}
                                    <div class="row">
                                        <div class="col-sm-9 ms-auto">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <a href="{{ route('client.index') }}" class="btn btn-danger">Cancel</a>
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

@endsection
