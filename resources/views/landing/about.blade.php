@extends('layouts.app')

@section('title', 'About - Mantraweb')

@section('content')

    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb__area breadcrumb-height-3 breadcrumb-overlay p-relative fix"
            data-background="{{ asset('landing/img/project/project-brdcrmb-bg.jpg') }}">
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
                            <h3 class="breadcrumb__title tp-char-animation text-black">Tentang Kami</h3>
                            <div class="breadcrumb__text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                                <p>Tim kreatif yang berfokus pada pengembangan website modern dan fungsional.
                                    <br>Kami menciptakan pengalaman digital yang berkesan.
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
                            <img src="{{ asset('landing/img/project/pd-img-1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- project-img-area-end -->


        <!--ab-brand-area-start -->
        <div class="ab-brand-area pt-100">
            <div class="container">
                <div class="ab-brand-border-bottom pb-90">
                    <div class="row">
                        <div class="col-12">
                            <div class="ab-brand-section-box text-center mb-50">
                                <h4 class="ab-brand-title">Teknologi Pendukung</h4>
                                <p>Dibangun dengan fondasi kuat menggunakan teknologi terpercaya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 justify-content-center">
                                <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".2s">
                                    <div class="ab-brand-item mb-25">
                                        <img src="{{ asset('landing/img/brand/brand-inner-1.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                                    <div class="ab-brand-item mb-25">
                                        <img src="{{ asset('landing/img/brand/brand-inner-2.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                                    <div class="ab-brand-item mb-25">
                                        <img src="{{ asset('landing/img/brand/brand-inner-3.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".8s">
                                    <div class="ab-brand-item mb-25">
                                        <img src="{{ asset('landing/img/brand/brand-inner-4.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                                    <div class="ab-brand-item mb-25">
                                        <img src="{{ asset('landing/img/brand/brand-inner-5.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1s">
                                    <div class="ab-brand-item mb-25">
                                        <img src="{{ asset('landing/img/brand/brand-inner-6.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.1s">
                                    <div class="ab-brand-item mb-25">
                                        <img src="{{ asset('landing/img/brand/brand-inner-7.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.2s">
                                    <div class="ab-brand-item mb-25">
                                        <img src="{{ asset('landing/img/brand/brand-inner-8.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col wow tpfadeUp" data-wow-duration=".9s" data-wow-delay="1.3s">
                                    <div class="ab-brand-item mb-25">
                                        <img src="{{ asset('landing/img/brand/brand-inner-9.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--ab-brand-area-end -->

        <!--ab-company-area-start -->
        <div class="ab-company-area pt-105 pb-100">
            <div class="container">
                <div class="row ab-company-section-space">
                    <div class="col-xl-6">
                        <div class="ab-company-section-box">
                            <h4 class="tp-section-subtitle">DARI TUJUAN</h4>
                            <h3 class="tp-section-title">Sebagai Perwujudan <br>
                                Ide Digitalmu.</h3>
                        </div>
                    </div>
                    <div class="col-xl-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="ab-company-right">
                            <div class="ab-company-section-text">
                                <p class="pb-10">Mantraweb lahir dari keinginan untuk membantu bisnis, komunitas, dan
                                    individu membangun kehadiran digital yang kuat.</p>
                                <p class="pb-10">Kami percaya setiap ide pantas memiliki tampilan profesional di dunia
                                    online.</p>
                                <p class="pb-10">Dengan tim kecil yang bersemangat dan teknologi modern, kami berfokus
                                    menciptakan website yang cepat, menarik, dan mudah digunakan.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-4">
                        <div class="ab-company-video">
                            <a class="popup-video" href="https://www.youtube.com/watch?v=EW4ZYb3mCZk"><i
                                    class="fas fa-play"></i></a>
                            <span>Tonton Demo</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--ab-company-area-end -->

        <!-- tp-about-area-start -->
        <div class="tp-about__area tp-about__pt-pb pb-160">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".2s">
                        <div class="tp-about__img-wrapper text-center text-lg-end p-relative">
                            <div class="tp-about__bg-shape">
                                <img src="{{ asset('landing/img/about/about-bg-shape.png') }}" alt="">
                            </div>
                            <div class="tp-about__main-img z-index">
                                <img src="{{ asset('landing/img/about/about-2.jpg') }}" alt="">
                            </div>
                            <div class="tp-about__sub-img-1 d-none d-sm-block z-index-3">
                                <img src="{{ asset('landing/img/about/about-1.jpg') }}" alt="">
                            </div>
                            <div class="tp-about__sub-img-2 d-none d-sm-block">
                                <img src="{{ asset('landing/img/about/about-3.jpg') }}" alt="">
                            </div>
                            <div class="tp-about__sub-img-3 d-none d-sm-block z-index-3">
                                <img src="{{ asset('landing/img/about/about-5.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="tp-about__right">
                            <div class="tp-about__section-box">
                                <h4 class="tp-section-subtitle">HINGGA VISI</h4>
                                <h3 class="tp-section-title mb-15">Mendorong Transformasi Lewat Kreativitas
                                </h3>
                                <p>Kreativitas adalah kunci untuk beradaptasi dan tumbuh di era digital. <br>
                                    — dan kami mewujudkannya lewat karya.</p>
                            </div>
                            <div class="tp-about__list">
                                <ul>
                                    <li><i class="fal fa-check"></i>Inovasi Tanpa Henti</li>
                                    <li><i class="fal fa-check"></i>Kolaborasi yang Dekat</li>
                                    <li><i class="fal fa-check"></i>Hasil yang Berdampak</li>
                                </ul>
                            </div>
                            <a class="tp-btn tp-btn-hover alt-color-black" href="{{ route('pages.project') }}">
                                <span>Liat Projectnya</span>
                                <b></b>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- tp-about-area-end -->

    </main>

@endsection
