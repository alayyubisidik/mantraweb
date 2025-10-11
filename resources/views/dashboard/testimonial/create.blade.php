@extends('layout.dashboard-layout')

@section('title', 'Create Testimonial')

@section('content')
    <h1>Create Testimonial</h1>

    <form action="/dashboard/testimonial/create" method="POST" class="mt-4" style="width: 50%" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="client_id" class="form-label">Client</label>
            @error('client_id')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <select name="client_id" id="client_id" class="form-control" required>
                <option value="">-- Select Client --</option>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}" {{ old('client_id') == $client->id ? 'selected' : '' }}>
                        {{ $client->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            @error('message')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write testimonial here...">{{ old('message') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating (1 - 5)</label>
            @error('rating')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="number" name="rating" id="rating" class="form-control" min="1" max="5"
                value="{{ old('rating') }}" placeholder="Enter rating from 1 to 5">
        </div>

        <div class="mb-3">
            <label for="image_url" class="form-label">Image</label>
            @error('image_url')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="file" name="image_url" id="image_url" class="form-control" accept="image/*"
                onchange="previewImage(event)">
        </div>

        <div class="mb-3">
            <img id="logoPreview" src="#" alt="Image Preview"
                style="display: none; max-width: 200px; border: 1px solid #ccc; padding: 5px; border-radius: 8px;">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

  
@endsection
