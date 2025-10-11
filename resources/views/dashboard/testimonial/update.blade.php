@extends('layout.dashboard-layout')

@section('title', 'Update Testimonial')

@section('content')
    <h1>Update Testimonial</h1>

    <form action="/dashboard/testimonial/update/{{ $testimonial->id }}" method="post" class="mt-4" style="width: 50%"
        enctype="multipart/form-data">
        @csrf

        {{-- Client --}}
        <div class="mb-3">
            <label for="client_id" class="form-label">Client</label>
            @error('client_id')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <select name="client_id" id="client_id" class="form-select">
                <option value="">-- Select Client --</option>
                @foreach ($clients as $client)
                    <option value="{{ $client->id }}" {{ old('client_id', $testimonial->client_id) == $client->id ? 'selected' : '' }}>
                        {{ $client->name }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- Message --}}
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            @error('message')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter testimonial message">{{ old('message', $testimonial->message) }}</textarea>
        </div>

        {{-- Rating --}}
        <div class="mb-3">
            <label for="rating" class="form-label">Rating (1 - 5)</label>
            @error('rating')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <select name="rating" id="rating" class="form-select">
                <option value="">-- Select Rating --</option>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}" {{ old('rating', $testimonial->rating) == $i ? 'selected' : '' }}>
                        {{ $i }}
                    </option>
                @endfor
            </select>
        </div>

        {{-- Image --}}
        <div class="mb-3">
            <label for="image_url" class="form-label">Image</label>
            @error('image_url')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror

            <input type="file" name="image_url" id="image_url" class="form-control" accept="image/*"
                onchange="previewImage(event)">

            {{-- Tampilkan gambar lama --}}
            @if ($testimonial->image_url)
                <div class="mt-3">
                    <p>Current Image:</p>
                    <img src="{{ asset('storage/' . $testimonial->image_url) }}" alt="Old Image"
                        style="max-width: 150px; border: 1px solid #ccc; border-radius: 5px;">
                </div>
            @endif

            {{-- Preview gambar baru --}}
            <div class="mt-3">
                <p>New Image Preview:</p>
                <img id="logoPreview" src="#" alt="Image Preview"
                    style="display:none; max-width: 150px; border: 1px solid #ccc; border-radius: 5px;">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
