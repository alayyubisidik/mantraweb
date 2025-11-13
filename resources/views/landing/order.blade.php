@extends('layouts.app')

@section('title', 'Order - Mantraweb')

@section('content')
    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb__area breadcrumb-height-2 breadcrumb-overlay p-relative fix"
            data-background="{{ asset('landing/img/breadcrumb/breadcrumb-background.jpg') }}">
            <div class="breadcrumb__shape-2 z-index-4">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-3.png') }}" alt="">
            </div>
            <div class="breadcrumb__shape-3 z-index-4">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-4.png') }}" alt="">
            </div>
            <div class="breadcrumb__shape-4 z-index-4">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-5.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="breadcrumb__content z-index-3 text-center">
                            <h3 class="breadcrumb__title tp-char-animation text-black">Perapal di Balik Layar</h3>
                            <div class="breadcrumb__text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                                <p>Di balik setiap desain dan kode, ada tim yang penuh semangat menciptakan sesuatu
                                    <br> melalui kreativitas dan teknologi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <div class="career-details-area pt-100 pb-100">
            <div class="container">
                <div class="row align-content-start">
                    <!-- Kolom Kiri -->
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="career-details-profile-box pb-20">
                            <h4 class="career-details-title-xs">Application Details</h4>
                            <p>Summarize your relevant experience</p>
                        </div>
                        <div class="postbox__comment-form">
                            <div class="row gx-20">
                                <div class="col-12">
                                    <img class="w-75 rounded mb-30"
                                        src="{{ $product->thumbnail_url
                                            ? asset($product->thumbnail_url)
                                            : asset('landing/img/project-thumbnail/thumbnail-default.png') }}"
                                        alt="{{ $product->name }}">
                                </div>
                                <div class="col-12">
                                    <div class="postbox__comment-input mb-30">
                                        <input type="text" class="inputText" required value="{{ $product->name }}"
                                            readonly>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="postbox__comment-input mb-30">
                                        <input type="text" class="inputText" required
                                            value="{{ $product->categories->pluck('name')->implode(', ') }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Spacer tengah -->
                    <div class="col-xl-2 d-none d-xl-block"></div>

                    <!-- Kolom Kanan -->
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <form action="{{ route('pages.order.store', $product->slug) }}" method="POST" novalidate>
                            @csrf
                            <div class="career-details-profile-box pb-20">
                                <h4 class="career-details-title-xs">Profile</h4>
                                <p>Basic information about you</p>
                            </div>
                            <div class="postbox__comment-form">
                                <div class="row gx-20">

                                    <!-- Name -->
                                    <div class="col-12">
                                        <div class="postbox__comment-input mb-30">
                                            <input type="text" name="name"
                                                class="inputText @error('name') is-invalid @enderror"
                                                value="{{ old('name') }}" required>
                                            <span class="floating-label">Your Name</span>
                                        </div>
                                        @error('name')
                                            <p style="color:red; font-size:14px; margin-top:-20px; margin-bottom:15px;">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Job Title -->
                                    <div class="col-12">
                                        <div class="postbox__comment-input mb-30">
                                            <input type="text" name="job_title"
                                                class="inputText @error('job_title') is-invalid @enderror"
                                                value="{{ old('job_title') }}" required>
                                            <span class="floating-label">Your Job Title</span>
                                        </div>
                                        @error('job_title')
                                            <p style="color:red; font-size:14px; margin-top:-20px; margin-bottom:15px;">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="col-12">
                                        <div class="postbox__comment-input mb-30">
                                            <input type="email" name="email"
                                                class="inputText @error('email') is-invalid @enderror"
                                                value="{{ old('email') }}" required>
                                            <span class="floating-label">Your Email</span>
                                        </div>
                                        @error('email')
                                            <p style="color:red; font-size:14px; margin-top:-20px; margin-bottom:15px;">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Phone -->
                                    <div class="col-12">
                                        <div class="postbox__comment-input mb-30">
                                            <input type="text" name="phone"
                                                class="inputText @error('phone') is-invalid @enderror"
                                                value="{{ old('phone') }}" required>
                                            <span class="floating-label">Phone</span>
                                        </div>
                                        @error('phone')
                                            <p style="color:red; font-size:14px; margin-top:-20px; margin-bottom:15px;">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Address -->
                                    <div class="col-12">
                                        <div class="postbox__comment-input mb-35">
                                            <textarea name="address" class="textareaText @error('address') is-invalid @enderror" required>{{ old('address') }}</textarea>
                                            <span class="floating-label-2">Address</span>
                                        </div>
                                        @error('address')
                                            <p style="color:red; font-size:14px; margin-top:-10px; margin-bottom:15px;">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>

                                    <!-- Company -->
                                    <div class="col-12">
                                        <div class="postbox__comment-input mb-35">
                                            <input type="text" name="company"
                                                class="inputText @error('company') is-invalid @enderror"
                                                value="{{ old('company') }}" required>
                                            <span class="floating-label">Company</span>
                                        </div>
                                        @error('company')
                                            <p style="color:red; font-size:14px; margin-top:-20px; margin-bottom:15px;">
                                                {{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>
                            </div>

                            <div class="postbox__btn-box mb-50">
                                <button class="submit-btn w-100" type="submit">Kirim Permintaan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <!-- tp-team-area-start -->
        {{-- <div class="tp-team-area tp-team-inner pt-100 pb-160">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="row justify-content-center">
                        <div class="card m-2" style="width: 18rem;">
                            <img src="{{ asset($product->thumbnail_url) }}" class="card-img-top"
                                alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                @foreach ($product->categories as $category)
                                    <span class="badge text-bg-primary">{{ $category->name }}</span>
                                @endforeach
                                <p>Rp. {{ $product->price_start }} - Rp. {{ $product->price_max }}</p>
                                <p class="card-text">{{ $product->description }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h4 class="card-title">Order</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <form action="{{ route('pages.order.store', $product->slug) }}" method="POST"
                                        enctype="multipart/form-data" novalidate>
                                        @csrf

                                        <div class="mb-3 mt-3 row">
                                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="name" name="name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ old('name') }}">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 mt-3 row">
                                            <label for="job_title" class="col-sm-3 col-form-label">Job Title</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="job_title" name="job_title"
                                                    class="form-control @error('job_title') is-invalid @enderror"
                                                    value="{{ old('job_title') }}">
                                                @error('job_title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 mt-3 row">
                                            <label for="email" class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" id="email" name="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 mt-3 row">
                                            <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                                            <div class="col-sm-9">
                                                <input type="number" id="phone" name="phone"
                                                    class="form-control @error('phone') is-invalid @enderror"
                                                    value="{{ old('phone') }}">
                                                @error('phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 mt-3 row">
                                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                                            <div class="col-sm-9">
                                                <textarea id="address" name="address" class="form-control @error('address') is-invalid @enderror">{{ old('address') }}</textarea>
                                                @error('address')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mb-3 mt-3 row">
                                            <label for="company" class="col-sm-3 col-form-label">Company</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="company" name="company"
                                                    class="form-control @error('company') is-invalid @enderror"
                                                    value="{{ old('company') }}">
                                                @error('company')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="mb-3 mt-3 row">
                                            <label for="company_logo" class="col-sm-3 col-form-label">Company Logo</label>
                                            <div class="col-sm-9">
                                                <input type="file" id="company_logo" name="company_logo" accept="image/*"
                                                    onchange="previewImage(event)"
                                                    class="form-control @error('company_logo') is-invalid @enderror">
                                                @error('company_logo')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror

                                                <img id="logoPreview" src="#" alt="Logo Preview"
                                                    class="img-thumbnail img-fluid mt-2 d-none w-50">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-9 ms-auto">
                                                <button type="submit" class="btn btn-primary">Save</button>
                                                <a href="{{ route('features.index') }}" class="btn btn-danger">Cancel</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- tp-team-area-end -->


    </main>
@endsection
