@extends('layouts.dashboard')

@section('title', 'Update Testimonial')

@section('content')

    <!--Container Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Testimonial Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('testimonial.create') }}">Testimonial</a>
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
                                <h4 class="card-title">Update Testimonial</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('testimonial.update', ['testimonialId' => $testimonial->id]) }}" method="POST" class="needs-validation" novalidate
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label for="client_id" class="col-sm-3 col-form-label">Client Name</label>
                                <div class="col-sm-9">
                                    <select id="clientId" name="client_id">
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id }}"
                                                {{ old('client_id', $testimonial->client_id) == $client->id ? 'selected' : '' }}>
                                                {{ $client->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="valid-feedback">Looks good!</div>
                                    <div class="invalid-feedback">Please choose a username.</div>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="image_url" class="col-sm-3 col-form-label">Image URL</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="image_url" name="image_url"
                                        accept="image/*" onchange="previewImage(event)">
                                    @if ($testimonial->image_url)
                                        <div class="mt-2">
                                            <img src="{{ asset('storage/' . $testimonial->image_url) }}" alt="Logo Lama"
                                                class="img-thumbnail img-fluid mt-2 w-50">
                                        </div>
                                    @endif
                                    <img id="logoPreview" src="#" alt="Logo Preview"
                                        class="img-thumbnail img-fluid mt-2 d-none w-50">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="message" class="col-sm-3 col-form-label">Message</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" rows="5" id="message" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="rating" class="col-sm-3 col-form-label">Rating</label>
                                <div class="col-sm-9 d-flex flex-row-reverse justify-content-end">
                                    @for ($i = 5; $i >= 1; $i--)
                                        <input type="radio" id="star{{ $i }}" name="rating"
                                            value="{{ $i }}" class="d-none"
                                            {{ old('rating', $testimonial->rating ?? '') == $i ? 'checked' : '' }} />
                                        <label for="star{{ $i }}" class="fs-4 mx-1"
                                            style="cursor: pointer; color: {{ $i <= ($testimonial->rating ?? 0) ? '#ffc107' : '#ddd' }}">
                                            <i class="fas fa-star"></i>
                                        </label>
                                    @endfor
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9 ms-auto">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                    <a href="{{ route('testimonial.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container End-->


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
                    <option value="{{ $client->id }}"
                        {{ old('client_id', $testimonial->client_id) == $client->id ? 'selected' : '' }}>
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
                    <option value="{{ $i }}"
                        {{ old('rating', $testimonial->rating) == $i ? 'selected' : '' }}>
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
