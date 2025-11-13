@extends('layouts.app')

@section('title', 'Product - Mantraweb')

@section('content')
    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb__area breadcrumb-height-3 breadcrumb-overlay p-relative fix"
            data-background="assets/img/project/project-brdcrmb-bg.jpg">
            <div class="breadcrumb__shape-1">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-1.png') }}" alt="">
            </div>
            <div class="breadcrumb__shape-2">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- project-img-area-start -->
        <div class="pd-thumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pd-thumb">
                            <img class="w-100"
                                src="{{ $product->thumbnail_url
                                    ? asset($product->thumbnail_url)
                                    : asset('landing/img/project-thumbnail/thumbnail-default.png') }}"
                                alt="{{ $product->name }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="career-details-area pt-100 pb-100">
            <div class="container">
                <div class="row align-content-start">
                    <div class="col-xl-7 col-lg-7">
                        <div class="career-details-wrapper">
                            <div class="career-details-title-box">
                                @foreach ($product->categories as $category)
                                    <span>{{ $category->name }}
                                    </span>
                                @endforeach
                                {{-- <span>Web App, Landing Page</span> --}}
                                <h4 class="career-details-title">{{ $product->name }}</h4>
                            </div>
                            <div class="career-details-location-box">
                                <span>
                                    Rp{{ number_format($product->price_start, 0, ',', '.') }}
                                    -
                                    Rp{{ number_format($product->price_max, 0, ',', '.') }}
                                </span>
                            </div>
                            <div class="career-details-job-responsiblity mb-45">
                                <h4 class="career-details-title-sm">Deskripsi Produk</h4>
                                <p>{{ strip_tags($product->description) }}</p>
                            </div>
                            <div class="career-details-job-responsiblity mb-45">
                                <h4 class="career-details-title-sm">Layout Produk</h4>
                                <p class="pb-15">Berikut adalah daftar modul yang tersedia dalam template layout produk untuk membangun halaman yang efektif</p>
                                <div class="career-details-job-list">
                                    <ul>
                                        @foreach ($product->sections as $section)
                                            <li>
                                                <i class="fal fa-long-arrow-right"></i>
                                                {{ $section->name }}
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="career-details-job-responsiblity mb-45">
                                <h4 class="career-details-title-sm">Fitur Produk</h4>
                                <p class="pb-15">Nikmati berbagai fitur canggih yang dirancang untuk meningkatkan efisiensi dan pengalaman pengguna.</p>
                                <div class="career-details-job-list">
                                    <ul>
                                        @foreach ($product->features as $feature)
                                            <li>
                                                <i class="fal fa-long-arrow-right"></i>
                                                {{ $feature->name }}
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 career-details-pin">
                        <div class="col-xxl-12">
                            <a href="{{ route('pages.order', $product->slug) }}" class="submit-btn mb-50 w-100">
                                <span>Mulai Proyek</span>
                                <b></b>
                            </a>
                        </div>
                        <div class="col-xxl-12">
                            <div class="career-details-social-box mb-20">
                                <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="instagram p-relative" href="#">
                                    <div class="insta-bg"></div>
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="career-details-bottom-text text-center">
                                <a href="{{ route('pages.contact') }}">Ada Pertanyaan?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
