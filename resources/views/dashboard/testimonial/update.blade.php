@extends('layouts.dashboard')

@section('title', 'Testimonial | Dashboard Mantraweb')

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
                        <form action="{{ route('testimonial.update', ['testimonialId' => $testimonial->id]) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- Client --}}
                            <div class="mb-3 row">
                                <label for="client_id" class="col-sm-3 col-form-label">Client Name</label>
                                <div class="col-sm-9">
                                    <select id="clientId" name="client_id"
                                        class="form-control @error('client_id') is-invalid @enderror">
                                        <option value="" disabled selected>-- Pilih Client --</option>
                                        @foreach ($clients as $client)
                                            <option value="{{ $client->id }}"
                                                {{ old('client_id', $testimonial->client_id) == $client->id ? 'selected' : '' }}>
                                                {{ $client->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('client_id')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Profile Image --}}
                            <div class="mb-3 row">
                                <label for="image_url" class="col-sm-3 col-form-label">Profile Picture</label>
                                <div class="col-sm-9">
                                    <input type="file" id="image_url" name="image_url" accept="image/*"
                                        onchange="previewImage(event)"
                                        class="form-control @error('image_url') is-invalid @enderror">
                                    @error('image_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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

                            {{-- Message --}}
                            <div class="mb-3 row">
                                <label for="message" class="col-sm-3 col-form-label">Message</label>
                                <div class="col-sm-9">
                                    <textarea id="message" name="message" rows="4" class="form-control @error('message') is-invalid @enderror">{{ $testimonial->message }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            {{-- Rating --}}
                            <div class="mb-3 row">
                                <label for="rating" class="col-sm-3 col-form-label">Rating</label>
                                <div class="col-sm-9">
                                    <div class="d-flex flex-row-reverse justify-content-end">
                                        @for ($i = 5; $i >= 1; $i--)
                                            <input type="radio" id="star{{ $i }}" name="rating"
                                                value="{{ $i }}" class="d-none"
                                                {{ old('rating', $testimonial->rating ?? '') == $i ? 'checked' : '' }} />
                                            <label for="star{{ $i }}" class="fs-4 mx-1"
                                                style="cursor: pointer; color: {{ $i <= ($testimonial->rating ?? 0) ? '#f4a14d' : '#97a0b4' }}">
                                                <i class="fas fa-star"></i>
                                            </label>
                                        @endfor
                                    </div>

                                    @error('rating')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            {{-- Action Buttons --}}
                            <div class="row">
                                <div class="col-sm-9 ms-auto">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('testimonial.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                        {{-- <form action="{{ route('testimonial.update', ['testimonialId' => $testimonial->id]) }}" method="POST" class="needs-validation" novalidate
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
                                    <textarea class="form-control" rows="5" id="message" name="message" required>{{ $testimonial->message }}</textarea>
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
                        </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container End-->

@endsection
