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
                            <i><i class="child-1">Solusi <span>Terpercaya</span></i></i> 
                            <i><i class="child-1">untuk Bisnis Digital Anda.</i></i></h2>
                           <p class=" tp-char-animation-2">Dapatkan dukungan teknologi terbaik untuk bisnis dan menjangkau lebih banyak pelanggan. <br> Semua bisa Anda lakukan dalam satu tempat.</p>
                        </div>
                        <div class="tp-hero-btn-3 text-center wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".7s">
                           <a class="tp-btn-blue-lg tp-btn-hover alt-color-black" href="#">
                              <span>Jelajahi Portfolio</span>
                              <b></b>
                           </a>
                           <a class="tp-btn-border tp-btn-hover alt-color-black" href="#">
                              <span>Panggil Aja</span>
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
                           <div class="tp-barnd-left-item d-flex align-items-center justify-content-center justify-content-lg-start">
                              {{-- <div class="tp-barnd-icon">
                                 <img src="{{ asset('landing/img/hero/hero-slider-icon-1.jpg') }}" alt="">
                              </div> --}}
                              <h5 class="tp-barnd-title-sm text-center text-lg-start">Beberapa mitra dan klien <br> yang telah mempercayai kami</h5>
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
                           <h4 class="tp-section-subtitle">KOLABORASI SEJAK 2025</h4>
                           <h3 class="tp-section-title-3 pb-15 ">Membangun <span>Masa Depan</span> Digital Anda.</h3>
                           <p class="tp-title-anim">Tim inovator yang berdedikasi menciptakan website yang fungsional,<br>
                              dan siap membawa bisnis Anda online ke level berikutnya.</p>
                        </div>
                        <div class="tp-sales-feature pb-20">
                           <ul>
                              <li class="yellow-1"><span><i class="far fa-check"></i> <em>Teknologi terbaru dan teruji.</em></span></li>
                              <li class="purple-2"><span><i class="far fa-check"></i> <em>Desain custom dan eksklusif.</em></span></li>
                              <li class="green-3"><span><i class="far fa-check"></i> <em>Proses cepat dan terarah.</em></span></li>
                           </ul>
                        </div>
                        <a class="tp-btn tp-btn-hover alt-color-black" href="{{ route('pages.about') }}">
                                 <span>Kenalan Yuk</span>
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

                           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                              <div class="tp-counter-wrap d-md-flex justify-content-md-center align-items-md-center text-center"> 
                                 <div class="tp-counter-item">
                                       <h4><span data-purecounter-duration="1" data-purecounter-end="1" class="purecounter">0</span>+</h4>
                                       <p>Proyek Selesai</p>
                                 </div>
                              </div>
                           </div>

                           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                              <div class="tp-counter-wrap d-md-flex justify-content-md-center align-items-md-center text-center">
                                    <div class="tp-counter-item">
                                       <h4><span data-purecounter-duration="1" data-purecounter-end="5" class="purecounter">0</span>+</h4>
                                       <p>Tim Berpengalaman</p>
                                    </div>
                              </div>
                           </div>

                           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                              <div class="tp-counter-wrap d-md-flex justify-content-md-center align-items-md-center text-center">
                                    <div class="tp-counter-item">
                                       <h4><span data-purecounter-duration="1" data-purecounter-end="98" class="purecounter">0</span><em>%</em></h4>
                                       <p>Klien Puas</p>
                                    </div>
                              </div>
                           </div>

                           <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                              <div class="tp-counter-wrap d-md-flex justify-content-md-center align-items-md-center text-center">
                                    <div class="tp-counter-item">
                                       <h4><span data-purecounter-duration="1" data-purecounter-end="10" class="purecounter">0</span>+</h4>
                                       <p>Industri Ditangani</p>
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
                           <h4 class="tp-section-subtitle">LAYANAN KAMI</h4>
                           <h3 class="tp-section-title-3">Solusi <span>Terbaik</span></h3>
                        </div>
                     </div>
                  </div>
                  <div class="row gy-5 gx-lg-5 gx-4 px-3 px-sm-4 px-md-0">
                     <div class="col-xl-3 col-lg-3 col-md-6 mb-4 mb-md-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                        <div class="tp-service-2__item-wrapper p-relative">
                           <div class="tp-service-2__item d-flex justify-content-between flex-column">
                              <div class="tp-service-2__icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" class="duoicon duoicon-building" style="color: rgb(99, 102, 241);"><path fill="currentColor" fill-rule="evenodd" d="M13 3a2 2 0 0 1 1.995 1.85L15 5v14h1V9.5a.5.5 0 0 1 .41-.492L16.5 9H18a2 2 0 0 1 1.995 1.85L20 11v8h1a1 1 0 0 1 .117 1.993L21 21H3a1 1 0 0 1-.117-1.993L3 19h1V5a2 2 0 0 1 1.85-1.995L6 3h7Z" class="duoicon-secondary-layer" opacity=".3"></path><path fill="currentColor" fill-rule="evenodd" d="M11 7H8v2h3V7Zm0 4H8v2h3v-2Zm0 4H8v2h3v-2Z" class="duoicon-primary-layer"></path></svg>
                              </div>
                              <div class="tp-service-2__text">
                                 <h4 class="tp-service-2__title-sm"><a href="service-details.html">Website App</a></h4>
                                 <a class="tp-service-2__link" href="service-details.html">Explore<i class="far fa-arrow-right"></i></a>
                              </div>
                           </div>
                           <div class="tp-service-2__bg-shape tp-service-2__color-4"></div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 mb-4 mb-md-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="tp-service-2__item-wrapper p-relative">
                           <div class="tp-service-2__item d-flex justify-content-between flex-column">
                              <div class="tp-service-2__icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" class="duoicon duoicon-shopping-bag" style="color: rgb(99, 102, 241);"><path fill="currentColor" fill-rule="evenodd" d="M10.464 3.282a2 2 0 0 1 2.964-.12l.108.12L17.468 8h2.985a1.49 1.49 0 0 1 1.484 1.655l-.092.766-.1.74-.082.554-.095.595-.108.625-.122.648-.136.661c-.072.333-.149.667-.232.998a20.957 20.957 0 0 1-.832 2.584l-.221.54-.214.488-.202.434-.094.194-.249.49c-.32.61-.924.97-1.563 1.022l-.16.006H6.555a1.928 1.928 0 0 1-1.71-1.008l-.232-.45-.18-.37-.095-.205-.2-.449a21.511 21.511 0 0 1-1.108-3.276 34.602 34.602 0 0 1-.156-.654l-.142-.648-.127-.634-.112-.613-.1-.587-.087-.554-.074-.513-.09-.683-.066-.556-.017-.153a1.489 1.489 0 0 1 1.348-1.64L3.543 8h2.989l3.932-4.718Z" class="duoicon-secondary-layer" opacity=".3"></path><path fill="currentColor" fill-rule="evenodd" d="M12 4.562 9.135 8h5.73L12 4.562Zm3.164 7.452a1 1 0 0 0-1.125.708l-.025.114-.5 3a1 1 0 0 0 1.947.442l.025-.114.5-3a1 1 0 0 0-.822-1.15Zm-5.203.708a1 1 0 0 0-1.96.326l.013.116.5 3 .025.114a1 1 0 0 0 1.96-.326l-.013-.116-.5-3-.025-.114Z" class="duoicon-primary-layer"></path></svg>
                              </div>
                              <div class="tp-service-2__text">
                                 <h4 class="tp-service-2__title-sm"><a href="service-details.html">E-Commerce</a></h4>
                                 <a class="tp-service-2__link" href="service-details.html">Explore<i class="far fa-arrow-right"></i></a>
                              </div>
                           </div>
                           <div class="tp-service-2__bg-shape tp-service-2__color-4"></div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 mb-4 mb-md-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".8s">
                        <div class="tp-service-2__item-wrapper p-relative">
                           <div class="tp-service-2__item d-flex justify-content-between flex-column">
                              <div class="tp-service-2__icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" class="duoicon duoicon-id-card" style="color: rgb(99, 102, 241);"><path fill="currentColor" d="M20 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16Z" class="duoicon-secondary-layer" opacity=".3"></path><path fill="currentColor" d="M10 9v2H8V9h2Zm7 2h-3a1 1 0 0 0-.117 1.993L14 13h3a1 1 0 0 0 .117-1.993L17 11Z" class="duoicon-primary-layer"></path><path fill="currentColor" d="M10 7H8a2 2 0 0 0-1.995 1.85L6 9v2a2 2 0 0 0 1.85 1.995L8 13h2a2 2 0 0 0 1.995-1.85L12 11V9a2 2 0 0 0-1.85-1.995L10 7Zm7 8H7a1 1 0 1 0 0 2h10a1 1 0 1 0 0-2Z" class="duoicon-primary-layer"></path></svg>
                              </div>
                              <div class="tp-service-2__text">
                                 <h4 class="tp-service-2__title-sm"><a href="service-details.html">Landing Page</a></h4>
                                 <a class="tp-service-2__link" href="service-details.html">Explore<i class="far fa-arrow-right"></i></a>
                              </div>
                           </div>
                           <div class="tp-service-2__bg-shape tp-service-2__color-4"></div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 mb-4 mb-md-5 wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".9s">
                        <div class="tp-service-2__item-wrapper p-relative">
                           <div class="tp-service-2__item  d-flex justify-content-between flex-column">
                              <div class="tp-service-2__icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" class="duoicon duoicon-settings" style="color: rgb(99, 102, 241);"><path fill="currentColor" fill-rule="evenodd" d="M9.965 2.809a1.51 1.51 0 0 0-1.401-.203 10.007 10.007 0 0 0-2.982 1.725 1.51 1.51 0 0 0-.524 1.313c.075.753-.058 1.48-.42 2.106-.361.627-.925 1.106-1.615 1.417-.458.203-.786.62-.875 1.113a10.035 10.035 0 0 0 0 3.44c.093.537.46.926.875 1.114.69.31 1.254.79 1.616 1.416.361.627.494 1.353.419 2.106-.045.452.107.964.524 1.313a10.007 10.007 0 0 0 2.982 1.725c.471.169.996.093 1.4-.203.615-.442 1.312-.691 2.036-.691s1.42.249 2.035.691c.37.266.89.39 1.401.203a10.007 10.007 0 0 0 2.982-1.725c.417-.349.57-.86.524-1.313-.075-.753.057-1.48.42-2.106.361-.627.925-1.105 1.615-1.416.414-.188.782-.577.875-1.114a10.085 10.085 0 0 0 0-3.44 1.512 1.512 0 0 0-.875-1.113c-.69-.311-1.254-.79-1.616-1.417-.362-.626-.494-1.353-.419-2.106a1.513 1.513 0 0 0-.524-1.313 10.007 10.007 0 0 0-2.982-1.725 1.514 1.514 0 0 0-1.4.203C13.42 3.25 12.723 3.5 12 3.5c-.723 0-1.42-.249-2.035-.691Z" class="duoicon-secondary-layer" opacity=".3"></path><path fill="currentColor" fill-rule="evenodd" d="M9 12c0-2.309 2.5-3.753 4.5-2.598A3 3 0 0 1 15 12c0 2.309-2.5 3.753-4.5 2.598A3 3 0 0 1 9 12Z" class="duoicon-primary-layer"></path></svg>
                              </div>
                              <div class="tp-service-2__text">
                                 <h4 class="tp-service-2__title-sm"><a href="service-details.html">Maintenace</a></h4>
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
                           <h4 class="tp-section-subtitle">APA KATA MEREKA</h4>
                           <h3 class="tp-section-title-3">Testimoni <span>Klien</span></h3>
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
                                                <img src="{{ asset('landing/img/blog/blog-avata-3.png') }}" alt="">
                                             </div>
                                             <div class="tp-blog-author-info">
                                                <h5>Hilary Ouse</h5>
                                                <span>Founder & CEO Dulalix</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
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
                              <h4 class="tp-section-subtitle">PROFESIONAL TEAM</h4>
                              <h3 class="tp-section-title-3">Dirancang <span>Tim Keren</span></h3>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row justify-content-center">
                     <div class="col-lg-4 col-md-6 col-sm-6 mb-70 tp-border-after-1 team-inner-border-right">
                        <div class="tp-team-item text-center tp-team-inner-title-color z-index">
                           <div class="tp-team-img">
                              <img src="{{ asset('landing/img/team/team-4-2.png') }}" alt="">
                           </div>
                           <div class="tp-team-content">
                              <h4 class="tp-team-title-sm"><a href="team-details.html">Anieza Dwi</a></h4>
                              <span>Member</span>
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
                              <img src="{{ asset('landing/img/team/team-4-5.png') }}" alt="">
                           </div>
                           <div class="tp-team-content">
                              <h4 class="tp-team-title-sm"><a href="team-details.html">Al Ayyubi</a></h4>
                              <span>Member</span>
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
                              <img src="{{ asset('landing/img/team/team-4-5.png') }}" alt="">
                           </div>
                           <div class="tp-team-content">
                              <h4 class="tp-team-title-sm"><a href="team-details.html">Fahri Ahmad</a></h4>
                              <span>Member</span>
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
                              <img src="{{ asset('landing/img/team/team-4-5.png') }}" alt="">
                           </div>
                           <div class="tp-team-content">
                              <h4 class="tp-team-title-sm"><a href="team-details.html">Agung Prasetya</a></h4>
                              <span>Member</span>
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
                              <img src="{{ asset('landing/img/team/team-4-5.png') }}" alt="">
                           </div>
                           <div class="tp-team-content">
                              <h4 class="tp-team-title-sm"><a href="team-details.html">Angga Budiaksa</a></h4>
                              <span>Member</span>
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
                              <h4 class="tp-section-subtitle">BUTUH BANTUAN?</h4>
                              <h3 class="tp-section-title-3 pb-15">Siap Memulai <span>Proyek Digital</span> Anda</h3>
                              <p>Hubungi kami dan temukan solusi terbaik
                                 <br> untuk bisnis Anda hari ini.</p>
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