@extends('layout.dashboard-layout')

@section('title', 'Update Service')

@section('content')
    <h1>Update Service</h1>

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

            {{-- Input file dengan preview --}}
            <input type="file" name="icon_url" id="icon_url" class="form-control" accept="image/*"
                onchange="previewImage(event)">

            {{-- Tampilkan icon lama --}}
            @if ($service->icon_url)
                <div class="mt-3">
                    <p>Current Icon:</p>
                    <img src="{{ asset('storage/' . $service->icon_url) }}" alt="Old Icon"
                        style="max-width: 150px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
            @endif

            {{-- Preview icon baru --}}
            <div class="mt-3">
                <p>New Icon Preview:</p>
                <img id="logoPreview" src="#" alt="Icon Preview"
                    style="display:none; max-width: 150px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>

   
@endsection
