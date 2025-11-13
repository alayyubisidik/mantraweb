@extends('layouts.app')

@section('title', 'Product - Mantraweb')

@section('content')
    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb__area breadcrumb-height-3 breadcrumb-overlay p-relative fix"
            data-background="{{ asset('landing/img/breadcrumb/breadcrumb-background.jpg') }}">
            <div class="breadcrumb__shape-1">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-1.png') }}" alt="">
            </div>
            <div class="breadcrumb__shape-2">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="breadcrumb__content z-index-3 text-center">
                            <h3 class="breadcrumb__title tp-char-animation text-black">Pilih Mantramu</h3>
                            <div class="breadcrumb__text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                                <p>Temukan paket produk yang paling cocok dengan visi bisnismu —
                                    <br> dari landing page sederhana hingga aplikasi web penuh daya magis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- project-img-area-start -->
        <div class="pd-thumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pd-thumb">
                            <img src="{{ asset('landing/img/about/about-product.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- project-img-area-end -->


        <!--Portfolio Start-->
        <div class="portfolio-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="portfolio-filter masonary-menu text-center mb-35">
                            <button data-filter="*" class="active"><span>All</span></button>
                            @foreach ($categories as $category)
                                @php
                                    // Ambil kata pertama dari nama kategori
                                    $firstWord = Str::of($category->name)->explode(' ')->first();
                                @endphp
                                <button data-filter=".{{ $firstWord }}"><span>{{ $category->name }}</span></button>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    @foreach ($products as $product)
                        <div
                            class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item
                        @foreach ($product->categories as $category) {{ Str::of($category->name)->explode(' ')->first() }} @endforeach
                        ">
                            <div class="inner-project-item mb-30">
                                <div class="inner-project-img fix p-relative">
                                    <img class="w-100"
                                        src="{{ $product->thumbnail_url
                                            ? asset($product->thumbnail_url)
                                            : asset('landing/img/project-thumbnail/thumbnail-default.png') }}"
                                        alt="{{ $product->name }}">
                                </div>
                                <div class="inner-project-content">
                                    @foreach ($product->categories as $category)
                                        <span class="inner-project-category-title">{{ $category->name }}@if (!$loop->last)
                                                ,
                                            @endif
                                        </span>
                                    @endforeach
                                    <h4 class="inner-project-title"><a
                                            href="{{ route('pages.product.detail', $product->slug) }}">{{ $product->name }}</a>
                                    </h4>
                                    <p>
                                        Rp{{ number_format($product->price_start, 0, ',', '.') }} 
                                        - 
                                        Rp{{ number_format($product->price_max, 0, ',', '.') }}
                                    </p>

                                    <div class="tp-testimonial__link mb-3">
                                        <a href="{{ route('pages.product.detail', $product->slug) }}">
                                            Detail Product
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 7H13" stroke="#6865FF" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="M7 1L13 7L7 13" stroke="#6865FF" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--Portfolio End-->

        <!-- tp-team-area-start -->
        {{-- <div class="tp-team-area tp-team-inner pt-100 pb-160">
            <div class="container">

                <form method="GET" action="{{ route('pages.products') }}" class="mb-4 text-center">
                    <select name="category" onchange="this.form.submit()" class="form-select w-auto ">
                        <option value="">-- All Categories --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ isset($categoryId) && $categoryId == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </form>

                <div class="row justify-content-center">
                    @forelse ($products as $product)
                        <div class="card m-2" style="width: 18rem;">
                            <img src="{{ asset($product->thumbnail_url) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                @foreach ($product->categories as $category)
                                    <span class="badge text-bg-primary">{{ $category->name }}</span>
                                @endforeach
                                <p>Rp. {{ $product->price_start }} - Rp. {{ $product->price_max }}</p>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="{{ route('pages.product.detail', $product->slug) }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    @empty
                        <p class="text-center">No products found in this category.</p>
                    @endforelse
                </div>
            </div>
        </div> --}}

        <!-- tp-team-area-end -->


    </main>
@endsection
