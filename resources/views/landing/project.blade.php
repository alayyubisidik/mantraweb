@extends('layouts.app')

@section('title', 'Project - Mantraweb')

@section('content')
    <main>
        <!-- breadcrumb-area-start -->
        <div class="breadcrumb__area breadcrumb-height-2 breadcrumb-overlay p-relative fix"
            data-background="{{ asset('landing/img/project/project-brdcrmb-bg.jpg') }}">
            <div class="breadcrumb__shape-2 z-index-4">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-2-2.png') }}" alt="">
            </div>
            <div class="breadcrumb__shape-3 z-index-4">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-sub-2.png') }}" alt="">
            </div>
            <div class="breadcrumb__shape-4 z-index-4">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-sub-3.png') }}" alt="">
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
                            <button data-filter=".Landing"><span>Landing Page</span></button>
                            <button data-filter=".Web"><span>Web App</span></button>
                            <button data-filter=".E-Commerce"><span>E-Commerce</span></button>
                            <button data-filter=".Portfolio"><span>Portfolio</span></button>
                            <button data-filter=".Government"><span>Government</span></button>
                        </div>
                    </div>
                </div>
                <div class="row grid">
                    @foreach ($projects as $project)
                        <div
                            class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item
                            @foreach ($project->categories as $category) {{ $category->name }} @endforeach ">
                            <div class="inner-project-item mb-30">
                                <div class="inner-project-img fix p-relative">
                                    <img class="w-100" src="{{ asset('landing/img/project/pd-img-1.png') }}"
                                        alt="">
                                    <div class="inner-project-brand">
                                        <img src="{{ asset('landing/img/project/project-inner-brand-1.png') }}"
                                            alt="">
                                    </div>
                                </div>
                                <div class="inner-project-content">
                                    @foreach ($project->categories as $category)
                                        <span class="inner-project-category-title">{{ $category->name }}@if (!$loop->last), @endif</span>
                                    @endforeach
                                    </span>
                                    <h4 class="inner-project-title"><a
                                            href="{{ route('pages.project.detail', $project->slug) }}">{{ $project->title }}</a>
                                    </h4>
                                    <p>Quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo.</p>
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
