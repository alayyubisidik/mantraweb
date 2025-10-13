@extends('layouts.app')

@section('title', "Mantraweb")
    
@section('content')
<main class="fix">

            <!-- tp-slider-area-start -->
            <div class="tp-hero-area tp-hero-pt pt-170 pb-70 p-relative">
               <div class="tp-hero-left-shape">
                  <img src="{{ asset('landing/img/hero/hero-left-shape-3-1.png') }}" alt="">
               </div>
               <div class="tp-hero-gradient-bg">
                  <img src="{{ asset('landing/img/hero/hero-gradient-3.jpg') }}" alt="">
               </div>
               <div class="container">
                  <div class="row justify-content-center z-index-3">
                     <div class="col-xl-11">
                        <div class="tp-hero-title-box text-center">
                           <h2 class="tp-hero-title-3 hero-text-anim pb-5">
                            <i><i class="child-1">Turning <span>Concept</span></i></i> 
                            <i><i class="child-1">Into Creative Reality.</i></i></h2>
                           <p class=" tp-char-animation-2">We turn your creative concepts into beautiful, impactful digital experiences. <br> Your imagination deserves to be seen.</p>
                        </div>
                        <div class="tp-hero-btn-3 text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                           <a class="tp-btn-blue-lg tp-btn-hover alt-color-black" href="#">
                              <span>Browse Portfolio</span>
                              <b></b>
                           </a>
                           <a class="tp-btn-border tp-btn-hover alt-color-black" href="#">
                              <span>Call Us Brader</span>
                              <b></b>
                           </a>
                        </div>
                        {{-- <div class="tp-hero-browser-wrapper d-flex align-items-center justify-content-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                           <div class="tp-hero-browser-item">
                              <a href="#">
                                 <img src="assets/img/hero/browser-icon-1.png" alt="">
                              </a>
                              <p class="d-none d-sm-block">Windows</p>
                           </div>
                           <div class="tp-hero-browser-item">
                              <a href="#">
                                 <img src="assets/img/hero/browser-icon-2.png" alt="">
                              </a>
                              <p class="d-none d-sm-block">Firefox</p>
                           </div>
                           <div class="tp-hero-browser-item">
                              <a href="#">
                                 <img src="assets/img/hero/browser-icon-3.png" alt="">
                              </a>
                              <p class="d-none d-sm-block">Chrome</p>
                           </div>
                           <div class="tp-hero-browser-item">
                              <a href="#">
                                 <img src="assets/img/hero/browser-icon-4.png" alt="">
                              </a>
                              <p class="d-none d-sm-block">macOS</p>
                           </div>
                           <div class="tp-hero-browser-item">
                              <a href="#">
                                 <img src="assets/img/hero/browser-icon-5.png" alt="">
                              </a>
                              <p class="d-none d-sm-block">Linux</p>
                           </div>
                        </div> --}}
                        <div class="tp-hero-3-wrapper p-relative">
                           <div class="tp-hero-3-border-wrap d-none d-md-block">
                              <span class="redius-shape-1"></span>
                              <span class="redius-shape-2"></span>
                              <span class="redius-shape-3"></span>
                           </div>
                           <div class="tp-hero-3-main-thumb z-index-5">
                              <img src="{{ asset('landing/img/hero/hero-img-3-1.png') }}" alt="">
                           </div>
                           <div class="tp-hero-3-shape-5 d-none d-lg-block wow frist-img animated">
                              <img src="{{ asset('landing/img/hero/hero-img-3-1-3.png') }}" alt="">
                           </div>
                           <div class="tp-hero-3-shape-6 d-none d-lg-block">
                              <span>
                                 <svg width="64" height="202" viewBox="0 0 64 202" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="line-2" d="M63.0029 7.94799C45.0715 -0.936415 14.5884 -8.38783 36.1059 32.8816C63.0029 84.4681 71.2089 85.3283 36.1059 75.8707C1.00293 66.4131 15.5915 92.2063 36.1059 118C56.6205 143.794 57.0764 169.587 28.3558 152.391C-0.364664 135.195 1.00293 144.653 28.3558 179.904C55.7087 215.155 22.4293 195.38 1.00293 196.24" stroke="#202124" stroke-width="2"/>
                                 </svg>
                              </span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tp-slider-area-end -->

            <!-- tp-integration-area-start -->
            <!-- <div class="tp-integration-area pb-110 tp-integration-mlr">
               <div class="container">
                  <div class="row align-items-end tp-integration-section-space">
                     <div class="col-xl-6 col-lg-8 wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                        <div class="tp-integration-section-box">
                           <h5 class="tp-integration-subtitle">Integration</h5>
                           <h3 class="tp-section-title-3">Integrated with Your <span>Favourite Apps</span></h3>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-4 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".7s">
                        <div class="tp-integration-btn text-lg-end text-start">
                           <a class="tp-btn-blue-lg tp-btn-hover alt-color-black" href="integrations.html">
                              <span>See all Integrations</span>
                              <b></b>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tp-integration-slider-wrapper pt-50 pb-50" data-background="assets/img/integration/integration-bg.jpg">
                  <div class="tp-integration-slider-active">
                     <div class="tp-integration-slider-main">
                        <div class="tp-integration-slider-item">
                           <img src="assets/img/integration/integration-1.png" alt="">
                        </div>
                     </div>
                     <div class="tp-integration-slider-main">
                        <div class="tp-integration-slider-item">
                           <img src="assets/img/integration/integration-2.png" alt="">
                        </div>
                     </div>
                     <div class="tp-integration-slider-main">
                        <div class="tp-integration-slider-item">
                           <img src="assets/img/integration/integration-3.png" alt="">
                        </div>
                     </div>
                     <div class="tp-integration-slider-main">
                        <div class="tp-integration-slider-item">
                           <img src="assets/img/integration/integration-4.png" alt="">
                        </div>
                     </div>
                  </div>
                  <div class="tp-integration-slider-active-2 carousel-rtl" dir="rtl">
                     <div class="tp-integration-slider-main">
                        <div class="tp-integration-slider-item">
                           <img src="assets/img/integration/integration-5.png" alt="">
                        </div>
                     </div>
                     <div class="tp-integration-slider-main">
                        <div class="tp-integration-slider-item">
                           <img src="assets/img/integration/integration-6.png" alt="">
                        </div>
                     </div>
                     <div class="tp-integration-slider-main">
                        <div class="tp-integration-slider-item">
                           <img src="assets/img/integration/integration-7.png" alt="">
                        </div>
                     </div>
                     <div class="tp-integration-slider-main">
                        <div class="tp-integration-slider-item">
                           <img src="assets/img/integration/integration-8.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div> -->
            <!-- tp-integration-area-end -->

            <!-- tp-brand-area-start -->
            <div class="tp-barnd-area tp-barnd-plr z-index-3 pb-160">
               <div class="tp-barnd-main-wrapper p-relative">
                  <div class="tp-barnd-shape-1">
                     <img src="{{ asset('landing/img/brand/image_01.png') }}" alt="">
                  </div>
                  <div class="container">
                     <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-4">
                           <div class="tp-barnd-left-item d-flex align-items-center">
                              <div class="tp-barnd-icon">
                                 <img src="{{ asset('landing/img/hero/hero-slider-icon-1.jpg') }}" alt="">
                              </div>
                              <h5 class="tp-barnd-title-sm">2k Companies <br> Trusted in the world</h5>
                           </div>
                        </div>
                        <div class="col-xl-8 col-lg-8">
                           <div class="tp-barnd-slider-wrapper">
                              <div class="tp-barnd-slider-active p-relative">
                                 <div class="tp-brand-item">
                                    <img src="{{ asset('landing/img/hero/hero-slider-icon-2.jpg') }}" alt="">
                                 </div>
                                 <div class="tp-brand-item">
                                    <img src="{{ asset('landing/img/hero/hero-slider-icon-3.jpg') }}" alt="">
                                 </div>
                                 <div class="tp-brand-item">
                                    <img src="{{ asset('landing/img/hero/hero-slider-icon-4.jpg') }}" alt="">
                                 </div>
                                 <div class="tp-brand-item">
                                    <img src="{{ asset('landing/img/hero/hero-slider-icon-5.jpg') }}" alt="">
                                 </div>
                                 <div class="tp-brand-item">
                                    <img src="{{ asset('landing/img/hero/hero-slider-icon-3.jpg') }}" alt="">
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tp-brand-area-end -->

            <!-- tp-account-area-strat -->
            <div class="tp-account-area pb-160 pt-160">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-xl-6 col-lg-6">
                        <div class="tp-account-thumb-wrapper p-relative text-center wow tpfadeLeft" data-wow-duration=".9s" data-wow-delay=".5s">
                           <div class="tp-account-bg">
                              <img src="{{ asset('landing/img/account/account-bg.png') }}" alt="">
                           </div>
                           <div class="tp-account-main-img">
                              <img src="{{ asset('landing/img/account/acc-main.png') }}" alt="">
                           </div>
                           <div class="tp-account-author">
                              <img src="{{ asset('landing/img/account/ac-author.png') }}" alt="">
                           </div>
                           <div class="tp-account-shape-1">
                              <img src="{{ asset('landing/img/account/ac-shape-1.png') }}" alt="">
                           </div>
                           <div class="tp-account-shape-2">
                              <img src="{{ asset('landing/img/account/ac-shape-2.png') }}" alt="">
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 wow tpfadeRight" data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="tp-sales-section-box pb-20">
                           <h4 class="tp-section-subtitle">OVER 150K+ CLIENT</h4>
                           <h3 class="tp-section-title-3 pb-15 ">Track and <span>Analyze Sales</span> in Real time</h3>
                           <p class="tp-title-anim">Centralize and simplify payments, and get comprehensive <br>
                              insights on your financials softuch.! </p>
                        </div>
                        <div class="tp-sales-feature pb-20">
                           <ul>
                              <li class="yellow-1"><span><i class="far fa-check"></i> <em>No hidden fees.</em></span></li>
                              <li class="purple-2"><span><i class="far fa-check"></i> <em>100% security. Guaranteed.</em></span></li>
                              <li class="green-3"><span><i class="far fa-check"></i> <em>No training or maintenance needed</em></span></li>
                           </ul>
                        </div>
                        <a class="tp-btn tp-btn-hover alt-color-black" href="about.html">
                                 <span>About Us</span>
                                 <b></b>
                              </a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tp-account-area-end -->

            <!-- tp-counter-area-start -->
            <div class="tp-counter-area tp-counter-space p-relative pb-160">
               <div class="tp-counter-shape-2">
                  <img src="{{ asset('landing/img/counter/counter-shape-2.png') }}" alt="">
               </div>
               <div class="tp-counter-shape-3">
                  <img src="{{ asset('landing/img/counter/counter-shape-1.png') }}" alt="">
               </div>
               <div class="tp-counter-shape-4 d-none d-sm-block">
                  <img src="{{ asset('landing/img/counter/counter-shape-4.png') }}" alt="">
               </div>
               <div class="container">
                  <div class="tp-counter-wrapper p-relative">
                     <div class="row gx-0">
                        <div class="col-xl-4 col-lg-4 col-md-4">
                           <div class="tp-counter-wrap d-flex justify-content-center">
                              <div class="tp-counter-item">
                                 <h4><span data-purecounter-duration="1" data-purecounter-end="350" class="purecounter">0</span>+</h4>
                                 <p>Team Members</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                           <div class="tp-counter-wrap d-flex justify-content-center">
                              <div class="tp-counter-item">
                                 <h4><span data-purecounter-duration="1" data-purecounter-end="10" class="purecounter">0</span><em>m</em>+</h4>
                                 <p>Total funding</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                           <div class="tp-counter-wrap d-flex justify-content-center">
                              <div class="tp-counter-item">
                                 <h4><span data-purecounter-duration="1" data-purecounter-end="500" class="purecounter">0</span><em>k</em></h4>
                                 <p>Total active user base</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tp-counter-area-end -->

            <!-- tp-service-area-start -->
            <div class="tp-service-area pb-160">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-xl-5">
                        <div class="tp-blog-section-box text-center mb-70">
                           <h4 class="tp-section-subtitle">OVER 150K+ CLIENT</h4>
                           <h3 class="tp-section-title-3">Our Latest <span>News and Articles</span></h3>
                        </div>
                     </div>
                  </div>
                  <div class="row gx-60">
                     <div class="col-xl-3 col-lg-3 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                        <div class="tp-service-2__item-wrapper p-relative">
                           <div class="tp-service-2__item d-flex justify-content-between flex-column">
                              <div class="tp-service-2__icon">
                                 <img src="assets/img/service/sv-icon-2-1.png" alt="">
                              </div>
                              <div class="tp-service-2__text">
                                 <h4 class="tp-service-2__title-sm"><a href="service-details.html">Online</a></h4>
                                 <a class="tp-service-2__link" href="service-details.html">Explore<i class="far fa-arrow-right"></i></a>
                              </div>
                           </div>
                           <div class="tp-service-2__bg-shape"></div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="tp-service-2__item-wrapper p-relative">
                           <div class="tp-service-2__item d-flex justify-content-between flex-column">
                              <div class="tp-service-2__icon">
                                 <img src="assets/img/service/sv-icon-2-2.png" alt="">
                              </div>
                              <div class="tp-service-2__text">
                                 <h4 class="tp-service-2__title-sm"><a href="service-details.html">Bank Transfers</a></h4>
                                 <a class="tp-service-2__link" href="service-details.html">Explore<i class="far fa-arrow-right"></i></a>
                              </div>
                           </div>
                           <div class="tp-service-2__bg-shape tp-service-2__color-2"></div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".8s">
                        <div class="tp-service-2__item-wrapper p-relative">
                           <div class="tp-service-2__item d-flex justify-content-between flex-column">
                              <div class="tp-service-2__icon">
                                 <img src="assets/img/service/sv-icon-2-3.png" alt="">
                              </div>
                              <div class="tp-service-2__text">
                                 <h4 class="tp-service-2__title-sm"><a href="service-details.html">Keyed</a></h4>
                                 <a class="tp-service-2__link" href="service-details.html">Explore<i class="far fa-arrow-right"></i></a>
                              </div>
                           </div>
                           <div class="tp-service-2__bg-shape tp-service-2__color-3"></div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 mb-40 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                        <div class="tp-service-2__item-wrapper p-relative">
                           <div class="tp-service-2__item  d-flex justify-content-between flex-column">
                              <div class="tp-service-2__icon">
                                 <img src="assets/img/service/sv-icon-2-4.png" alt="">
                              </div>
                              <div class="tp-service-2__text">
                                 <h4 class="tp-service-2__title-sm"><a href="service-details.html">In-Person</a></h4>
                                 <a class="tp-service-2__link" href="service-details.html">Explore<i class="far fa-arrow-right"></i></a>
                              </div>
                           </div>
                           <div class="tp-service-2__bg-shape tp-service-2__color-4"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- tp-service-area-end -->

            <!-- blog-grid-area-start -->
            <div class="blog-grid-area pb-160">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-xl-5">
                        <div class="tp-blog-section-box text-center mb-70">
                           <h4 class="tp-section-subtitle">OVER 150K+ CLIENT</h4>
                           <h3 class="tp-section-title-3">Our Latest <span>News and Articles</span></h3>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-12">
                        <div class="blog-grid-arrow p-relative">
                           <div class="grid-next d-none d-sm-block">
                              <button>
                                 <i class="far fa-angle-left"></i>
                                 <svg width="36" height="100" viewBox="0 0 36 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.99999 14C0 7.5 0.5 3.5 0 0L-0.000484467 99.5C-0.000415802 96.7234 1.00003 88 23 71.5C44.9999 55 32.5 37.1667 24 30.5C19.8333 27.1667 9.48375 19.8289 4.99999 14Z" fill="white"/>
                                 </svg>
                              </button>
                           </div>
                           <div class="grid-prev d-none d-sm-block">
                              <button>
                                 <i class="far fa-angle-right"></i>
                                 <svg width="36" height="100" viewBox="0 0 36 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M30.3164 14C35.3164 7.5 34.8164 3.5 35.3164 0L35.3169 99.5C35.3168 96.7234 34.3164 88 12.3164 71.5C-9.68354 55 2.81642 37.1667 11.3164 30.5C15.4831 27.1667 25.8327 19.8289 30.3164 14Z" fill="white"/>
                                 </svg>
                              </button>
                           </div>
                           <div class="swiper-container blog-grid-slider-active">
                              <div class="swiper-wrapper">
                                 <div class="swiper-slide">
                                    <div class="blog-grid-slider blog-grid-slider-bg d-flex align-items-center blog-grid-slider-height" data-background="assets/img/integration/integration-bg1.jpg">
                                       <div class="blog-grid-slider-wrapper">
                                          <div class="blog-grid-slider-meta">
                                             <!-- <span class="child-one">Resources</span>
                                             <span class="child-two">October 20, 2023</span> -->
                                             <div class="tp-testimonial-2-star">
                                                <span>
                                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M8 0L10.472 5.26604L16 6.11567L12 10.2124L12.944 16L8 13.266L3.056 16L4 10.2124L0 6.11567L5.528 5.26604L8 0Z" fill="#FFCF55"/>
                                                   </svg>
                                                </span>
                                                <span>
                                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M8 0L10.472 5.26604L16 6.11567L12 10.2124L12.944 16L8 13.266L3.056 16L4 10.2124L0 6.11567L5.528 5.26604L8 0Z" fill="#FFCF55"/>
                                                   </svg>
                                                </span>
                                                <span>
                                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M8 0L10.472 5.26604L16 6.11567L12 10.2124L12.944 16L8 13.266L3.056 16L4 10.2124L0 6.11567L5.528 5.26604L8 0Z" fill="#FFCF55"/>
                                                   </svg>
                                                </span>
                                                <span>
                                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M8 0L10.472 5.26604L16 6.11567L12 10.2124L12.944 16L8 13.266L3.056 16L4 10.2124L0 6.11567L5.528 5.26604L8 0Z" fill="#FFCF55"/>
                                                   </svg>
                                                </span>
                                                <span>
                                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M8 0L10.472 5.26604L16 6.11567L12 10.2124L12.944 16L8 13.266L3.056 16L4 10.2124L0 6.11567L5.528 5.26604L8 0Z" fill="#FFCF55"/>
                                                   </svg>
                                                </span>
                                                <span>
                                                   <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                      <path d="M8 0L10.472 5.26604L16 6.11567L12 10.2124L12.944 16L8 13.266L3.056 16L4 10.2124L0 6.11567L5.528 5.26604L8 0Z" fill="#FFCF55"/>
                                                   </svg>
                                                </span>
                                             </div>
                                          </div>
                                          <div class="blog-grid-slider-title-box">
                                             <!-- <h4 class="blog-grid-slider-title"><a href="blog-details.html">5 Companies doing Brand <br> Marketing Right</a></h4> -->
                                             <p style="font-size: 1.2em;">From publishing content and hoping to acquire leads to
                                                gaining audience insights and making personalized
                                                content, content marketing. From publishing content and hoping to acquire leads to
                                                gaining audience insights and making personalized
                                                content, content marketing.
                                             </p>
                                          </div>
                                          <div class="tp-blog-author-info-box blog-grid-avata-box d-flex align-items-center">
                                             <div class="tp-blog-avata">
                                                <img src="assets/img/blog/blog-avata-3.png" alt="">
                                             </div>
                                             <div class="tp-blog-author-info">
                                                <h5>Hilary Ouse</h5>
                                                <span>Founder & CEO Dulalix</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- <div class="swiper-slide">
                                    <div class="blog-grid-slider blog-grid-slider-bg d-flex align-items-center blog-grid-slider-height" data-background="assets/img/service/service-3-bg.png">
                                       <div class="blog-grid-slider-wrapper">
                                          <div class="blog-grid-slider-meta">
                                             <span class="child-one">Resources</span>
                                             <span class="child-two">October 20, 2023</span>
                                          </div>
                                          <div class="blog-grid-slider-title-box">
                                             <h4 class="blog-grid-slider-title"><a href="blog-details.html">5 Companies doing Brand <br> Marketing Right</a></h4>
                                             <p>From publishing content and hoping to acquire leads to <br>
                                                gaining audience insights and making personalized <br>
                                                content, content marketing.
                                             </p>
                                          </div>
                                          <div class="tp-blog-author-info-box blog-grid-avata-box d-flex align-items-center">
                                             <div class="tp-blog-avata">
                                                <img src="assets/img/blog/blog-avata-2.png" alt="">
                                             </div>
                                             <div class="tp-blog-author-info">
                                                <h5>Hilary Ouse</h5>
                                                <span>Founder & CEO Dulalix</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="blog-grid-slider blog-grid-slider-bg d-flex align-items-center blog-grid-slider-height" data-background="assets/img/blog/inner-blog-3.png">
                                       <div class="blog-grid-slider-wrapper">
                                          <div class="blog-grid-slider-meta">
                                             <span class="child-one">Resources</span>
                                             <span class="child-two">October 20, 2023</span>
                                          </div>
                                          <div class="blog-grid-slider-title-box">
                                             <h4 class="blog-grid-slider-title"><a href="#">5 Companies doing Brand <br> Marketing Right</a></h4>
                                             <p class="">From publishing content and hoping to acquire leads to <br>
                                                gaining audience insights and making personalized <br>
                                                content, content marketing.
                                             </p>
                                          </div>
                                          <div class="tp-blog-author-info-box blog-grid-avata-box d-flex align-items-center">
                                             <div class="tp-blog-avata">
                                                <img src="assets/img/blog/blog-avata-1.png" alt="">
                                             </div>
                                             <div class="tp-blog-author-info">
                                                <h5>Hilary Ouse</h5>
                                                <span>Founder & CEO Dulalix</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- blog-grid-area-end -->

            <!-- tp-team-area-start -->
            <div class="tp-team-area tp-team-inner pb-160">
               <div class="container">
                  <div class="tp-team-section-wrapper tp-team-inner-section mb-70">
                     <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                           <div class="tp-team-section-box text-center">
                              <h4 class="tp-section-subtitle">OVER 150K+ CLIENT</h4>
                              <h3 class="tp-section-title-3">Our Latest <span>News</span></h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center">
                     <div class="col-lg-4 col-md-6 col-sm-6 mb-70 tp-border-after-1 team-inner-border-right">
                        <div class="tp-team-item text-center tp-team-inner-title-color z-index">
                           <div class="tp-team-img">
                              <img src="assets/img/team/team-4-1.png" alt="">
                           </div>
                           <div class="tp-team-content">
                              <h4 class="tp-team-title-sm"><a href="team-details.html">Alexa Montes</a></h4>
                              <span>Partner & COO</span>
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
                     <div class="col-lg-4 col-md-6 col-sm-6 mb-70 tp-border-after-2 team-inner-border-right">
                        <div class="tp-team-item tp-team-inner-title-color text-center z-index">
                           <div class="tp-team-img">
                              <img src="assets/img/team/team-4-2.png" alt="">
                           </div>
                           <div class="tp-team-content">
                              <h4 class="tp-team-title-sm"><a href="team-details.html">Ravi Ganatra</a></h4>
                              <span>Designer</span>
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
                     <div class="col-lg-4 col-md-6 col-sm-6 mb-70 tp-border-after-3 team-inner-border-right">
                        <div class="tp-team-item tp-team-inner-title-color text-center z-index">
                           <div class="tp-team-img">
                              <img src="assets/img/team/team-4-3.png" alt="">
                           </div>
                           <div class="tp-team-content">
                              <h4 class="tp-team-title-sm"><a href="team-details.html">Imdat Cimsit</a></h4>
                              <span>CEO & Founder</span>
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
                     <div class="col-lg-4 col-md-6 col-sm-6 mb-70 tp-border-after-4 team-inner-border-right">
                        <div class="tp-team-item tp-team-inner-title-color text-center z-index">
                           <div class="tp-team-img">
                              <img src="assets/img/team/team-4-4.png" alt="">
                           </div>
                           <div class="tp-team-content">
                              <h4 class="tp-team-title-sm"><a href="team-details.html">Imdat Cimsit</a></h4>
                              <span>PHP Developer</span>
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
                     <div class="col-lg-4 col-md-6 col-sm-6 mb-70 tp-border-after-1 team-inner-border-right">
                        <div class="tp-team-item tp-team-inner-title-color text-center z-index">
                           <div class="tp-team-img">
                              <img src="assets/img/team/team-4-5.png" alt="">
                           </div>
                           <div class="tp-team-content">
                              <h4 class="tp-team-title-sm"><a href="team-details.html">Trevor Philips</a></h4>
                              <span>Marketing Lead</span>
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
                  </div>
               </div>
            </div>
            <!-- tp-team-area-end -->

            <!-- tp-contact-area-start -->
            <div class="contact-form-area pb-160">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-5 col-lg-6">
                        <div class="contact-form-left">
                           <div class="contact-form-section-box">
                              <h4 class="tp-section-subtitle">OVER 150K+ CLIENT</h4>
                              <h3 class="tp-section-title-3 pb-15">Our Latest <span>News and Articles</span></h3>
                              <p>While we're good with smoke signals,
                                 there <br> are easier ways to get in touch.</p>
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
                                          <span class="floating-label">Full  Name</span>
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
                                             <option>Your Inquiry about</option>
                                             <option>01 Year</option>
                                             <option>02 Year</option>
                                             <option>03 Year</option>
                                             <option>04 Year</option>
                                             <option>05 Year</option>
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
                                             <span>Send Your Request</span>
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