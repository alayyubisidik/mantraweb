@extends('layout.dashboard-layout')

@section('title', 'Create Service')

@section('content')
    <h1>Create Service</h1>

    <form action="/dashboard/service/create" method="post" class="mt-4" style="width: 50%" enctype="multipart/form-data">
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
            <label for="description" class="form-label">Description</label>
            @error('description')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input name="description" type="text" class="form-control" id="description" placeholder="test"
                value="{{ old('description') }}">
        </div>

        <div class="mb-3">
            <label for="icon_url" class="form-label">Icon Url</label>
            @error('icon_url')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="file" name="icon_url" id="icon_url" class="form-control" accept="image/*"
                onchange="previewImage(event)">
        </div>

        <div class="mb-3">
            <img id="logoPreview" src="#" alt="Logo Preview"
                style="display: none; max-width: 200px; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
        </div>

        <button type="submit" class="btn btn-primary ">Save</button>
    </form>

@endsection
