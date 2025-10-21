@extends('layouts.app')

@section('title', 'Team - Mantraweb')

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

        <!-- tp-team-area-start -->
        <div class="tp-team-area tp-team-inner pt-100 pb-160">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach ($teams as $team)
                        <div class="col-lg-4 col-md-6 col-sm-6 mb-70 tp-border-after-1 team-inner-border-right">
                            <div class="tp-team-item text-center tp-team-inner-title-color z-index">
                                <div class="tp-team-img">
                                    <img src="{{ $team->profile_url
                                        ? asset('storage/' . $team->profile_url)
                                        : asset('landing/img/profile-picture/profile-default.png') }}"
                                        alt="{{ $team->name }}">

                                    {{-- <img src="{{ asset('storage/' . $team->profile_url) }}" alt=""> --}}
                                </div>
                                <div class="tp-team-content">
                                    <h4 class="tp-team-title-sm"><a href="#">{{ str($team->name)->words(2, '') }}</a>
                                    </h4>
                                    <span>{{ $team->position }}</span>
                                </div>
                                <div class="tp-team-social">
                                    <a class="icon-color-1" href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span></span>
                                    </a>
                                    <a class="icon-color-2" href="#">
                                        <i class="fab fa-instagram"></i>
                                        <span></span>
                                    </a>
                                    <a class="icon-color-3" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <span></span>
                                    </a>
                                    <a class="icon-color-4" href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- tp-team-area-end -->


    </main>
@endsection
