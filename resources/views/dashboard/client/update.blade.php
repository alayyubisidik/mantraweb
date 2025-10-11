@extends('layout.dashboard-layout')

@section('title', 'Update Client')

@section('content')
    <h1>Update Client</h1>

    <form action="/dashboard/client/update/{{ $client->id }}" method="post" class="mt-4" style="width: 50%"
        enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            @error('name')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $client->name) }}"
                placeholder="John Doe">
        </div>

        <div class="mb-3">
            <label for="job_title" class="form-label">Job Title</label>
            @error('job_title')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="text" name="job_title" id="job_title" class="form-control"
                value="{{ old('job_title', $client->job_title) }}" placeholder="Manager">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            @error('email')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="email" name="email" id="email" class="form-control"
                value="{{ old('email', $client->email) }}" placeholder="example@gmail.com">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            @error('phone')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="text" name="phone" id="phone" class="form-control"
                value="{{ old('phone', $client->phone) }}" placeholder="08123456789">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            @error('address')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="text" name="address" id="address" class="form-control"
                value="{{ old('address', $client->address) }}" placeholder="Jl. Mawar No. 1">
        </div>

        <div class="mb-3">
            <label for="company" class="form-label">Company</label>
            @error('company')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="text" name="company" id="company" class="form-control"
                value="{{ old('company', $client->company) }}" placeholder="ABC Corp">
        </div>

        <div class="mb-3">
            <label for="company_logo_url" class="form-label">Company Logo</label>
            @error('company_logo_url')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror

            {{-- Input file dengan event onchange --}}
            <input type="file" name="company_logo_url" id="company_logo_url" class="form-control" accept="image/*"
                onchange="previewImage(event)">

            {{-- Tampilkan logo lama --}}
            @if ($client->company_logo_url)
                <div class="mt-3">
                    <p>Current Logo:</p>
                    <img src="{{ asset('storage/' . $client->company_logo_url) }}" alt="Logo Lama"
                        style="max-width: 150px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
            @endif

            {{-- Preview logo baru --}}
            <div class="mt-3">
                <p>New Logo Preview:</p>
                <img id="logoPreview" src="#" alt="Logo Preview"
                    style="display:none; max-width: 150px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection
