@extends('layouts.dashboard')

@section('title', 'Product | Dashboard Mantraweb')

@section('content')

    <!--Container Start-->
    <div class="container-fluid" style="padding-bottom: 100px">
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
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Create New Product</h4>
                            </div>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" id="name" name="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name') }}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="name" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea id="editor" name="description" class="form-control @error('description') is-invalid @enderror"
                                        >{{ old('description') }}</textarea>
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
                                        value="{{ old('price_start') }}">
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
                                        value="{{ old('price_max') }}">
                                    @error('price_max')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="thumbnail_url" class="col-sm-2 col-form-label">Thumbnail</label>
                                <div class="col-sm-9">
                                    <input type="file" id="thumbnail_url" name="thumbnail_url" accept="image/*"
                                        onchange="previewImage(event)"
                                        class="form-control @error('thumbnail_url') is-invalid @enderror">
                                    @error('thumbnail_url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                    <img id="logoPreview" src="#" alt="Logo Preview"
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
                                                {{ collect(old('features'))->contains($feature->id) ? 'selected' : '' }}>
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
                                                {{ collect(old('sections'))->contains($section->id) ? 'selected' : '' }}>
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
                                                {{ collect(old('categories'))->contains($category->id) ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('categories')
                                        <div class="invalid-feedback d-block">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-9 ms-auto">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{ route('products.index') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container End-->

@endsection
