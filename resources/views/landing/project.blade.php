@extends('layouts.app')

@section('title', "Project - Mantraweb")
    
@section('content')
<main>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb__area breadcrumb-height-2 breadcrumb-overlay p-relative fix" data-background="{{ asset('landing/img/project/project-brdcrmb-bg.jpg') }}">
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
                           <h3 class="breadcrumb__title tp-char-animation text-black">Our Projects</h3>
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

            <!--Portfolio Start-->
            <div class="portfolio-area pt-100 pb-160">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="portfolio-filter masonary-menu text-center mb-35">
                           <button data-filter="*" class="active"><span>All</span></button>
                           <button data-filter=".cat1"><span>Design Work</span></button>
                           <button data-filter=".cat2"><span>Branding</span></button>
                           <button data-filter=".cat3"><span>Development</span></button>
                           <button data-filter=".cat4"><span>Illusutration</span></button>
                           <button data-filter=".cat5"><span>App Design</span></button>
                        </div>
                     </div>
                  </div>
                  <div class="row grid">
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item  cat1 cat4 cat3 cat5">
                        <div class="inner-project-item mb-30">
                           <div class="inner-project-img fix p-relative">
                              <img class="w-100" src="{{ asset('landing/img/project/project-inner-1.jpg') }}" alt="">
                              <div class="inner-project-brand">
                                 <img src="{{ asset('landing/img/project/project-inner-brand-1.png') }}" alt="">
                              </div>
                           </div>
                           <div class="inner-project-content">
                              <span class="inner-project-category-title">Design Wok, Branding</span>
                              <h4 class="inner-project-title"><a href="project-details.html">Airbnb Upgrade</a></h4>
                              <p>Quis nostrud exercitation ullamco laboris
                                 nisi ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item  cat4 cat2 cat1 ">
                        <div class="inner-project-item  mb-30">
                           <div class="inner-project-img fix p-relative">
                              <img src="{{ asset('landing/img/project/project-inner-2.jpg') }}" alt="">
                              <div class="inner-project-brand">
                                 <img class="w-100" src="{{ asset('landing/img/project/project-inner-brand-2.png') }}" alt="">
                              </div>
                           </div>
                           <div class="inner-project-content">
                              <span class="inner-project-category-title">Development, App Design</span>
                              <h4 class="inner-project-title"><a href="project-details.html">Mobile App Design</a></h4>
                              <p>Quis nostrud exercitation ullamco laboris
                                 nisi ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item  cat3 cat4 cat5 ">
                        <div class="inner-project-item mb-30">
                           <div class="inner-project-img fix p-relative">
                              <img class="w-100" src="{{ asset('landing/img/project/project-inner-3.jpg') }}" alt="">
                              <div class="inner-project-brand">
                                 <img src="{{ asset('landing/img/project/project-inner-brand-3.png') }}" alt="">
                              </div>
                           </div>
                           <div class="inner-project-content">
                              <span class="inner-project-category-title">Branding, Illusutration</span>
                              <h4 class="inner-project-title"><a href="project-details.html">Branding & Identity</a></h4>
                              <p>Quis nostrud exercitation ullamco laboris
                                 nisi ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item  cat4 cat2 cat1">
                        <div class="inner-project-item mb-30">
                           <div class="inner-project-img fix p-relative">
                              <img class="w-100" src="{{ asset('landing/img/project/project-inner-5.jpg') }}" alt="">
                              <div class="inner-project-brand">
                                 <img src="{{ asset('landing/img/project/project-inner-brand-5.png') }}" alt="">
                              </div>
                           </div>
                           <div class="inner-project-content">
                              <span class="inner-project-category-title">Design Wok, Illusutration</span>
                              <h4 class="inner-project-title"><a href="project-details.html">Muckup Design</a></h4>
                              <p>Quis nostrud exercitation ullamco laboris
                                 nisi ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item  cat1 cat2 cat3 cat5">
                        <div class="portfolio__single">
                           <div class="portfolio__img">
                              <div class="inner-project-item mb-30">
                                 <div class="inner-project-img fix p-relative">
                                    <img class="w-100" src="{{ asset('landing/img/project/project-inner-4.jpg') }}" alt="">
                                    <div class="inner-project-brand">
                                       <img src="{{ asset('landing/img/project/project-inner-brand-4.png') }}" alt="">
                                    </div>
                                 </div>
                                 <div class="inner-project-content">
                                    <span class="inner-project-category-title">Design Wok, Branding</span>
                                    <h4 class="inner-project-title"><a href="project-details.html">Realistic Scenarios</a></h4>
                                    <p>Quis nostrud exercitation ullamco laboris
                                       nisi ut aliquip ex ea commodo.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item  cat1 cat5 cat2 cat3 cat4">
                        <div class="inner-project-item mb-30">
                           <div class="inner-project-img fix p-relative">
                              <img src="{{ asset('landing/img/project/project-inner-6.jpg') }}" alt="">
                              <div class="inner-project-brand">
                                 <img src="{{ asset('landing/img/project/project-inner-brand-6.png') }}" alt="">
                              </div>
                           </div>
                           <div class="inner-project-content">
                              <span class="inner-project-category-title">Design Wok, App Design</span>
                              <h4 class="inner-project-title"><a href="project-details.html">Design System & Ul Kit</a></h4>
                              <p>Quis nostrud exercitation ullamco laboris
                                 nisi ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item  cat4 cat2 cat1">
                        <div class="inner-project-item mb-30">
                           <div class="inner-project-img fix p-relative">
                              <img class="w-100" src="{{ asset('landing/img/project/project-inner-7.jpg') }}" alt="">
                              <div class="inner-project-brand">
                                 <img src="{{ asset('landing/img/project/project-inner-brand-5.png') }}" alt="">
                              </div>
                           </div>
                           <div class="inner-project-content">
                              <span class="inner-project-category-title">Design Wok, Illusutration</span>
                              <h4 class="inner-project-title"><a href="project-details.html">Web Design</a></h4>
                              <p>Quis nostrud exercitation ullamco laboris
                                 nisi ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item  cat1 cat2 cat3 cat5">
                        <div class="portfolio__single">
                           <div class="portfolio__img">
                              <div class="inner-project-item mb-30">
                                 <div class="inner-project-img fix p-relative">
                                    <img class="w-100" src="{{ asset('landing/img/project/project-inner-8.jpg') }}" alt="">
                                    <div class="inner-project-brand">
                                       <img src="{{ asset('landing/img/project/project-inner-brand-4.png') }}" alt="">
                                    </div>
                                 </div>
                                 <div class="inner-project-content">
                                    <span class="inner-project-category-title">Design Wok, Branding</span>
                                    <h4 class="inner-project-title"><a href="project-details.html">Landing Page Design</a></h4>
                                    <p>Quis nostrud exercitation ullamco laboris
                                       nisi ut aliquip ex ea commodo.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item  cat1 cat5 cat2 cat3 cat4">
                        <div class="inner-project-item mb-30">
                           <div class="inner-project-img fix p-relative">
                              <img src="{{ asset('landing/img/project/project-inner-9.jpg') }}" alt="">
                              <div class="inner-project-brand">
                                 <img src="{{ asset('landing/img/project/project-inner-brand-6.png') }}" alt="">
                              </div>
                           </div>
                           <div class="inner-project-content">
                              <span class="inner-project-category-title">Design Wok, App Design</span>
                              <h4 class="inner-project-title"><a href="project-details.html">Mobile Design</a></h4>
                              <p>Quis nostrud exercitation ullamco laboris
                                 nisi ut aliquip ex ea commodo.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--Portfolio End-->

         </main>
@endsection