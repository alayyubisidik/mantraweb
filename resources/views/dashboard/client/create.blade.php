@extends('layout.dashboard-layout')

@section('title', 'Create Clent')

@section('content')
    <h1>Create Client</h1>

    <form action="/dashboard/client/create" method="post" enctype="multipart/form-data" class="mt-4" style="width: 50%">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            @error('name')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input name="name" type="name" class="form-control" id="name" placeholder="Jhon Doe"
                value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="job_title" class="form-label">Job Title</label>
            @error('job_title')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input name="job_title" type="text" class="form-control" id="job_title" placeholder="Ceo"
                value="{{ old('job_title') }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            @error('email')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input name="email" type="email" class="form-control" id="email" placeholder="example@gmail.com"
                value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            @error('phone')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input name="phone" type="number" class="form-control" id="phone" placeholder="097986"
                value="{{ old('phone') }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            @error('address')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input name="address" type="text" class="form-control" id="address" placeholder="jl pisang"
                value="{{ old('address') }}">
        </div>

        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            @error('company')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input name="company" type="text" class="form-control" id="company" placeholder="pt bintang jaya"
                value="{{ old('company') }}">
        </div>

        <div class="mb-3">
            <label for="company_logo_url" class="form-label">Company Logo</label>
            @error('company_logo_url')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="file" name="company_logo_url" id="company_logo_url" class="form-control" accept="image/*"
                onchange="previewImage(event)">
        </div>

        <div class="mb-3">
            <img id="logoPreview" src="#" alt="Logo Preview"
                style="display: none; max-width: 200px; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
        </div>


        <button type="submit" class="btn btn-primary ">Save</button>
    </form>

@endsection
