@extends('layouts.app')

@section('title', "About - Mantraweb")
    
@section('content')

<main>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb__area breadcrumb-height-3 breadcrumb-overlay p-relative fix" data-background="{{ asset('landing/img/project/project-brdcrmb-bg.jpg') }}">
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
                           <h3 class="breadcrumb__title tp-char-animation text-black">About Us</h3>
                           <div class="breadcrumb__text wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                              <p>We have an experienced team of production and inspection personnel <br> to ensure
                                 quality.</p>
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
                              <h4 class="ab-brand-title">Trusted by Thousands Business</h4>
                              <p>More than 100,000+ teams are using Softec</p>
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
                           <h4 class="inner-section-subtitle">ABOUT THE COMPANY</h4>
                           <h3 class="tp-section-title">Softuch is Made <br>
                              For the Creator.</h3>
                        </div>
                     </div>
                     <div class="col-xl-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="ab-company-right">
                           <div class="ab-company-section-text">
                              <p class="pb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Rutrum arcu sollicitudin viverra sit elit leo in. Vitae eu tellus mattis quis. Eu, tempus donec nam mauris egestas. Id aliquet ultricies ligula tellus arcu dolor. Massa arcu pulvinar in mattis</p>
                              <p class="pb-10">Feugiat purus congue risus, blandit a sed. In aenean quam aenean purus dictum pellentesque consequat.!</p>
                              <p><span>Our clean and simple APIs and transparent SaaS model will give you complete peace of mind.</span></p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-xl-4">
                        <div class="ab-company-video">
                           <a class="popup-video" href="https://www.youtube.com/watch?v=EW4ZYb3mCZk"><i class="fas fa-play"></i></a>
                           <span>Watch Demo</span>
                        </div>
                     </div>
                     <div class="col-xl-8">
                        <div class="row">
                           <div class="col-md-4 col-sm-4 mb-40">
                              <div class="ab-company-fun-fact-wrap d-flex justify-content-start">
                                 <div class="ab-company-fun-fact">
                                    <span>USED BY</span>
                                    <h4>11,000<em>+</em></h4>
                                    <p>Creators</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-4 mb-40">
                              <div class="ab-company-fun-fact-wrap d-flex justify-content-md-center justify-content-left">
                                 <div class="ab-company-fun-fact">
                                    <span>VALUE</span>
                                    <h4>46<em>m</em></h4>
                                    <p>Revenue per Year</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4 col-sm-4 mb-40">
                              <div class="ab-company-fun-fact-wrap ab-company-border-none d-flex justify-content-md-center justify-content-left">
                                 <div class="ab-company-fun-fact">
                                    <span>IN</span>
                                    <h4>150<em>+</em></h4>
                                    <p>Countries using</p>
                                 </div>
                              </div>
                           </div>
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
                              <img src="{{ asset('landing/img/about/about-2.jpg" alt="') }}">
                           </div>
                           <div class="tp-about__sub-img-1 d-none d-sm-block z-index-3">
                              <img src="{{ asset('landing/img/about/about-1.jpg" alt="') }}">
                           </div>
                           <div class="tp-about__sub-img-2 d-none d-sm-block">
                              <img src="{{ asset('landing/img/about/about-3.jpg" alt="') }}">
                           </div>
                           <div class="tp-about__sub-img-3 d-none d-sm-block z-index-3">
                              <img src="{{ asset('landing/img/about/about-5.png" alt="') }}">
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="tp-about__right">
                           <div class="tp-about__section-box">
                              <h4 class="tp-section-subtitle">OVER 150K+ CLIENT</h4>
                              <h3 class="tp-section-title mb-15">We Offer Real Time Data Solutions
                              </h3>
                              <p>Excepteur sint occaecat cupidatat officia non proident <br>
                                 sunt in culpa qui deserunt.!</p>
                           </div>
                           <div class="tp-about__list">
                              <ul>
                                 <li><i class="fal fa-check"></i>Various analysis options.</li>
                                 <li><i class="fal fa-check"></i>Page Load (time, size, number of requests).</li>
                                 <li><i class="fal fa-check"></i>Big data analysis.</li>
                              </ul>
                           </div>
                           <div class="tp-about__btn">
                              <a class="tp-btn tp-btn-inner tp-btn-hover alt-color-black" href="about.html">
                                 <span>About Us</span>
                                 <b></b>
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tp-about-area-end -->

         </main>

@endsection