@extends('layouts.app')

@section('title', "Team - Mantraweb")
    
@section('content')
<main>

         <!-- breadcrumb-area-start -->
         <div class="breadcrumb__area breadcrumb-height p-relative" data-background="{{ asset('landing/img/project/project-brdcrmb-bg.jpg') }}">
            <div class="breadcrumb__shape-1">
               <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-1.png') }}" alt="">
            </div>
            <div class="breadcrumb__shape-2">
               <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xl-8 col-lg-7">
                     <div class="breadcrumb__content">
                        <h3 class="breadcrumb__title tp-char-animation text-black">Team Member</h3>
                        <div class="breadcrumb__list tp-title-anim">
                           <span class="child-one" ><a href="#">Home</a></span>
                           <span class="dvdr"><i class="fal fa-angle-right"></i></span>
                           <span class="text-black">Team Member</span>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-5 col-lg-4 text-center text-md-end">
                     <div class="breadcrumb__img p-relative text-start z-index">
                        <img class="z-index-3" src="{{ asset('landing/img/breadcrumb/breadcrumb-3.png') }}" alt="">
                        <div class="breadcrumb__sub-img wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                           <img src="{{ asset('landing/img/breadcrumb/breadcrumb-sub-1.png') }}" alt="">
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
                              <img src="{{ asset('landing/img/team/team-4-5.png') }}" alt="">
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
                              <img src="{{ asset('landing/img/team/team-4-5.png') }}" alt="">
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
                              <img src="{{ asset('landing/img/team/team-4-2.png') }}" alt="">
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
                              <img src="{{ asset('landing/img/team/team-4-5.png') }}" alt="">
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
                              <img src="{{ asset('landing/img/team/team-4-5.png') }}" alt="">
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


         </main>
@endsection