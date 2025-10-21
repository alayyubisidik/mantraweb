@extends('layouts.app')

@section('title', 'Contact - Mantraweb')

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
                            <h3 class="breadcrumb__title tp-char-animation text-black">Waktunya Merapal</h3>
                            <div class="breadcrumb__text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                                <p>Biarkan kami menenun ide-ide digitalmu jadi karya yang hidup.
                                    <br> Setiap kolaborasi dimulai dari satu panggilan.
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
                            <img src="{{ asset('landing/img/about/about-us.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- project-img-area-end -->

        <!-- tp-contact-area-start -->
        <div class="contact-form-area pt-100 pb-160">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-form-left">
                            <div class="contact-form-section-box">
                                <h4 class="tp-section-subtitle">BUTUH BANTUAN?</h4>
                                <h3 class="tp-section-title-3 pb-15">Siap Memulai <span>Proyek Digital</span> Anda</h3>
                                <p>Hubungi kami dan temukan solusi terbaik
                                    <br> untuk bisnis Anda hari ini.
                                </p>
                            </div>
                            <!-- <div class="contact-form-social-box">
                                  <div class="contact-form-social-item">
                                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                                     <a href="#"><i class="fab fa-twitter"></i></a>
                                     <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                     <a href="#"><i class="fab fa-instagram"></i></a>
                                  </div>
                               </div> -->
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="contact-form-right-warp">
                            <div class="postbox__comment-form">
                                <form action="#" class="box">
                                    <div class="row gx-20">
                                        <div class="col-6">
                                            <div class="postbox__comment-input mb-30">
                                                <input type="text" class="inputText" required>
                                                <span class="floating-label">Full Name</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="postbox__comment-input mb-30">
                                                <input type="text" class="inputText" required>
                                                <span class="floating-label">Your Email</span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="postbox__select mb-30">
                                                <select>
                                                    <option value="" disabled selected>Your Inquiry about</option>
                                                    <option>Website Service</option>
                                                    <option>Collaboration</option>
                                                    <option>Technical Support</option>
                                                    <option>Others</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="postbox__comment-input mb-30">
                                                <textarea class="textareaText" required></textarea>
                                                <span class="floating-label-2">Message...</span>
                                            </div>
                                        </div>
                                        <div class="col-xxl-12">
                                            <div class="postbox__btn-box">
                                                <button class="tp-btn-blue-lg tp-btn-hover alt-color-black w-100">
                                                    <span>Kirim Permintaan</span>
                                                    <b></b>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tp-contact-area-end -->

    </main>
@endsection
