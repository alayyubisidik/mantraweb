@extends('layouts.dashboard')

@section('title', 'Product | Dashboard Mantraweb')

@section('content')
    <!--Container Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Product Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Product</a>
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
                                <h4 class="card-title">Update Product</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <form action="{{ route('products.update', $product) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-6">

                                    {{-- Name --}}
                                    <div class="mb-3 row">
                                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="name" name="name"
                                                class="form-control @error('name') is-invalid @enderror"
                                                value="{{ old('name', $product->name) }}">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Job Title --}}
                                    <div class="mb-3 row">
                                        <label for="name" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="editor" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $product->description) }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Email --}}
                                    <div class="mb-3 row">
                                        <label for="price_start" class="col-sm-2 col-form-label">Price Start</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="price_start" name="price_start"
                                                class="form-control @error('price_start') is-invalid @enderror"
                                                value="{{ old('price_start', $product->price_start) }}">
                                            @error('price_start')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Phone --}}
                                    <div class="mb-3 row">
                                        <label for="price_max" class="col-sm-2 col-form-label">Price Max</label>
                                        <div class="col-sm-9">
                                            <input type="number" id="price_max" name="price_max"
                                                class="form-control @error('price_max') is-invalid @enderror"
                                                value="{{ old('price_max', $product->price_max) }}">
                                            @error('price_max')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <div class="col-lg-6">
                                    <div class="mb-3 row">
                                        <label for="thumbnail_url" class="col-sm-3 col-form-label">Thumbnail</label>
                                        <div class="col-sm-9">
                                            <input type="file" id="thumbnail_url" name="thumbnail_url" accept="image/*"
                                                class="form-control @error('thumbnail_url') is-invalid @enderror"
                                                onchange="previewImage(event)">
                                            @error('thumbnail_url')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror

                                            {{-- Preview gambar lama --}}
                                            @if ($product->thumbnail_url)
                                                <div class="mt-2">
                                                    <img src="{{ asset($product->thumbnail_url) }}" alt="Current Image"
                                                        class="img-thumbnail img-fluid mt-2 w-50">
                                                </div>
                                            @endif

                                            {{-- Preview gambar baru --}}
                                            <img id="logoPreview" src="#" alt="New Preview"
                                                class="img-thumbnail img-fluid mt-2 d-none w-50">
                                        </div>
                                    </div>

                                    {{-- Company --}}
                                    <div class="mb-3 row">
                                        <label for="categories" class="col-sm-3 col-form-label">Categories</label>
                                        <div class="col-sm-9">
                                            <select id="categories" name="categories[]"
                                                class="form-select @error('categories') is-invalid @enderror" multiple>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}"
                                                        {{ collect(old('categories', $product->categories->pluck('id')))->contains($category->id) ? 'selected' : '' }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('categories')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Company Logo --}}
                                    <div class="mb-3 row">
                                        <label for="features" class="col-sm-3 col-form-label">Features</label>
                                        <div class="col-sm-9">
                                            <select id="features" name="features[]"
                                                class="form-select @error('features') is-invalid @enderror" multiple>
                                                @foreach ($features as $feature)
                                                    <option value="{{ $feature->id }}"
                                                        {{ collect(old('features', $product->features->pluck('id')))->contains($feature->id) ? 'selected' : '' }}>
                                                        {{ $feature->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('features')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="sections" class="col-sm-3 col-form-label">Sections</label>
                                        <div class="col-sm-9">
                                            <select id="sections" name="sections[]"
                                                class="form-select @error('sections') is-invalid @enderror" multiple>
                                                @foreach ($sections as $section)
                                                    <option value="{{ $section->id }}"
                                                        {{ collect(old('sections', $product->sections->pluck('id')))->contains($section->id) ? 'selected' : '' }}>
                                                        {{ $section->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('sections')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select id="status" name="status"
                                                class="form-select @error('status') is-invalid @enderror">
                                                <option value="active"
                                                    {{ old('status', $product->status) == 'active' ? 'selected' : '' }}>
                                                    Active
                                                </option>
                                                <option value="inactive"
                                                    {{ old('status', $product->status) == 'inactive' ? 'selected' : '' }}>
                                                    Inactive
                                                </option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback d-block">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Action Buttons --}}
                                    <div class="row">
                                        <div class="col-sm-9 ms-auto">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                            <a href="{{ route('products.index') }}" class="btn btn-danger">Cancel</a>
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


    <!--Container Start-->
    {{-- <div class="container-fluid" style="padding-bottom: 100px">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Product Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Product</a></li>
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
                                <h4 class="card-title">Update Product</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <form action="{{ route('products.update', $product) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="name" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $product->name) }}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea id="editor" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description', $product->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="price_start" class="col-sm-2 col-form-label">Price Start</label>
                                <div class="col-sm-9">
                                    <input type="number" id="price_start" name="price_start"
                                        class="form-control @error('price_start') is-invalid @enderror"
                                        value="{{ old('price_start', $product->price_start) }}">
                                    @error('price_start')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="price_max" class="col-sm-2 col-form-label">Price Max</label>
                                <div class="col-sm-9">
                                    <input type="number" id="price_max" name="price_max"
                                        class="form-control @error('price_max') is-invalid @enderror"
                                        value="{{ old('price_max', $product->price_max) }}">
                                    @error('price_max')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="thumbnail_url" class="col-sm-3 col-form-label">Thumbnail</label>
                                <div class="col-sm-9">
                                    <input type="file" id="thumbnail_url" name="thumbnail_url" accept="image/*"
                                        class="form-control @error('thumbnail_url') is-invalid @enderror"
                                        onchange="previewImage(event)">
                                    @error('thumbnail_url')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror

                                    @if ($product->thumbnail_url)
                                        <div class="mt-2">
                                            <img src="{{ asset($product->thumbnail_url) }}" alt="Current Image"
                                                class="img-thumbnail img-fluid mt-2 w-50">
                                        </div>
                                    @endif

                                    <img id="logoPreview" src="#" alt="New Preview"
                                        class="img-thumbnail img-fluid mt-2 d-none w-50">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="features" class="col-sm-2 col-form-label">Features</label>
                                <div class="col-sm-9">
                                    <select id="features" name="features[]"
                                        class="form-select @error('features') is-invalid @enderror" multiple>
                                        @foreach ($features as $feature)
                                            <option value="{{ $feature->id }}"
                                                {{ collect(old('features', $product->features->pluck('id')))->contains($feature->id) ? 'selected' : '' }}>
                                                {{ $feature->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('features')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="sections" class="col-sm-2 col-form-label">Sections</label>
                                <div class="col-sm-9">
                                    <select id="sections" name="sections[]"
                                        class="form-select @error('sections') is-invalid @enderror" multiple>
                                        @foreach ($sections as $section)
                                            <option value="{{ $section->id }}"
                                                {{ collect(old('sections', $product->sections->pluck('id')))->contains($section->id) ? 'selected' : '' }}>
                                                {{ $section->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('sections')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="categories" class="col-sm-2 col-form-label">Categories</label>
                                <div class="col-sm-9">
                                    <select id="categories" name="categories[]"
                                        class="form-select @error('categories') is-invalid @enderror" multiple>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ collect(old('categories', $product->categories->pluck('id')))->contains($category->id) ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('categories')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <select id="status" name="status"
                                        class="form-select @error('status') is-invalid @enderror">
                                        <option value="active"
                                            {{ old('status', $product->status) == 'active' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="inactive"
                                            {{ old('status', $product->status) == 'inactive' ? 'selected' : '' }}>Inactive
                                        </option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-9 ms-auto">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                    <a href="{{ route('products.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--Container End-->

@endsection
