@extends('layouts.app')

@section('title', 'Project - Mantraweb')

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
                            <h3 class="breadcrumb__title tp-char-animation text-black">Proyek Mantra</h3>
                            <div class="breadcrumb__text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                                <p>Kombinasi teknologi modern dan sentuhan kreatif
                                    <br> untuk menciptakan pengalaman terbaik.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!--Portfolio Start-->
        <div class="portfolio-area pt-100 pb-160">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="portfolio-filter masonary-menu text-center mb-35">
                            <button data-filter="*" class="active"><span>All</span></button>
                            @foreach ($categories as $category)
                                @php
                                    // Ambil kata pertama dari nama kategori untuk class filter
                                    $firstWord = Str::of($category->name)->explode(' ')->first();
                                @endphp
                                <button data-filter=".{{ $firstWord }}">
                                    <span>{{ $category->name }}</span>
                                </button>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row grid">
                    @foreach ($projects as $project)
                        @php
                            // Ambil semua kategori produk project
                            $categoryClasses = $project->product->categories
                                ->map(fn($c) => Str::of($c->name)->explode(' ')->first())
                                ->implode(' ');
                        @endphp

                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item {{ $categoryClasses }}">
                            <div class="inner-project-item mb-30">
                                <div class="inner-project-img fix p-relative">
                                    <img class="w-100"
                                        src="{{ $project->thumbnail_url
                                            ? asset($project->thumbnail_url)
                                            : asset('landing/img/project-thumbnail/thumbnail-default.png') }}"
                                        alt="{{ $project->title }}">
                                    <div class="inner-project-brand">
                                        <img src="{{ $project->client->company_logo_url
                                            ? asset($project->client->company_logo_url)
                                            : asset('landing/img/company-logo/company-default.png') }}"
                                            alt="{{ $project->client->company }}">
                                    </div>
                                </div>

                                <div class="inner-project-content">
                                    <span class="inner-project-category-title">
                                        @foreach ($project->product->categories as $category)
                                            {{ $category->name }}@if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                    </span>

                                    <h4 class="inner-project-title">
                                        <a href="{{ route('pages.project.detail', $project->slug) }}">
                                            {{ $project->title }}
                                        </a>
                                    </h4>
                                    <p>{{ Str::limit($project->description, 70) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--Portfolio End-->


    </main>
@endsection
