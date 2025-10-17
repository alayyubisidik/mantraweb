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
               <div style="color: black;" class="container">
                  <div class="breadcrumb__content-wrap">
                     <div class="row justify-content-center">
                        <div class="col-xl-12">
                           <div class="breadcrumb__content z-index-3 mb-60">
                              <div class="breadcrumb__text wow tpfadeIn" data-wow-duration=".9s" data-wow-delay=".6s">
                                 <span>Development,  App Design</span>
                              </div>
                              <h3 class="breadcrumb__title text-black">Mobile App Design</h3>
                           </div>
                        </div>
                     </div>
                     <div class="row g-0 z-index-3">
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-40 pd-border-right">
                           <div class="breadcrumb__client-info space-left-1">
                              <span>CLIENT</span>
                              <p>Microsoft App Holing Ltd, <br>
                                 Australia Area</p>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-40 pd-border-right">
                           <div class="breadcrumb__client-info space-left-2">
                              <span>Services</span>
                              <p>Design, Branding, App, <br>
                                 Development</p>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-40 pd-border-right">
                           <div class="breadcrumb__client-info space-left-3">
                              <span>Project Date</span>
                              <p>October 23th, 2022 <br>
                                 Release Started</p>
                           </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 mb-40 pd-border-right">
                           <div class="breadcrumb__client-info space-left-4">
                              <span>Project Date</span>
                              <div class="breadcrumb__live-btn">
                                 <a class="tp-btn-inner-border" href="#">See live <i class="fal fa-arrow-up"></i></a>
                              </div>
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

            <!-- project-details-area-start -->
            <div class="pd-details-area pt-100 pb-160">
               <div class="container">
                  <div class="row g-0">
                     <div class="col-xl-2 col-lg-2 social-box-pin">
                        <div class="pd-details-social-box text-lg-center text-start p-relative">
                           <div class="pd-details-social-title">
                              <span>Share This <br>Story</span>
                           </div>
                           <div class="pd-details-social">
                              <a href="#"><i class="fab fa-facebook-f"></i></a>
                              <a href="#"><i class="fab fa-vimeo-v"></i></a>
                              <a href="#"><i class="fab fa-twitter"></i></a>
                              <a href="#"><i class="fab fa-linkedin-in"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-10 col-lg-10 ">
                        <div class="pd-details-wrapper">
                           <div class="pd-details-info">
                              <h4 class="pd-details-title">Duis aute irure dolor in reprehenderit</h4>
                              <p>Posuere nibh vestibulum, velit pulvinar interdum sed in. Magnis netus magna urna, in tempor magna. Tortor vel vitae vel mi. Leo pellentesque eget pellentesque magnis. Pellentesque molestie sem massa nibh suspendisse ante eget. Sit dolor arcu scelerisque sit nibh nunc, vulputate cursus. Feugiat in tortor non mauris, sit. Hac adipiscing dui sit magna. Integer elementum et amet hac turpis. Sagittis magna nulla ut gravida integer pellentesque. </p>
                           </div>
                           <div class="pd-details-overview">
                              <h4 class="pd-details-title">Overview</h4>
                              <ul>
                                 <li>Create & Save your notes with multi-media</li>
                                 <li>Complete note editor with rich text options</li>
                                 <li>Automatically sync in real time</li>
                                 <li>Web Clipper Extension</li>
                              </ul>
                              <p>Felis morbi ut tristique pretium libero. Eget purus, enim, orci, quis tempor sed. Sed nec eget nibh et Ut orci, sagittis tellus dui congue. Blandit laoreet nullam amet eget. Ut tincidunt diam tempor sed turpis odio vitae sem lobortis. Lobortis enim non eu a.</p>
                           </div>
                           <div class="pd-details-info">
                              <h4 class="pd-details-title">Solution & Result</h4>
                              <p>Posuere nibh vestibulum, velit pulvinar interdum sed in. Magnis netus magna urna, in tempor magna. Tortor vel vitae vel mi. Leo pellentesque eget pellentesque magnis. Pellentesque molestie sem massa nibh suspendisse ante eget. Sit dolor arcu scelerisque sit nibh nunc, vulputate cursus. Feugiat in tortor non mauris, sit. Hac adipiscing dui sit magna. Integer elementum et amet hac turpis. Sagittis magna nulla ut gravida integer pellentesque. </p>
                           </div>
                           {{-- <div class="pd-details-solution">
                              <div class="pd-details-solution-img-box d-flex align-items-center">
                                 <div class="pd-details-solution-img mr-30">
                                    <img src="assets/img/project/solution-1.jpg" alt="">
                                 </div>
                                 <div class="pd-details-solution-img">
                                    <img src="assets/img/project/solution-2.jpg" alt="">
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-md-3">
                                    <div class="pd-solution-title-box">
                                       <h4 class="pd-details-title">Solution & Result</h4>
                                    </div>
                                 </div>
                                 <div class="col-md-9">
                                    <div class="pd-solution-paragraph">
                                       <p>Felis morbi ut tristique pretium libero. Eget purus, enim, orci, quis tempor sed. Sed nec eget nibh et Ut orci, sagittis tellus dui congue. Blandit laoreet nullam amet eget. Ut tincidunt diam tempor sed turpis odio vitae sem lobortis. Lobortis enim non eu a. In gravida velit pretium commodo odio ridiculus odio enim.Tincidunt eget tellus pellentesque nulla.</p>
                                       <p>Sed morbi dignissim odio enim volutpat. Viverra facilisi aliquet sed purus id ornare nunc, sit ipsum.Risus amet non eget velit nunc, libero vitae. Arcu maecenas in montes, tincidunt pulvinar euismod ac proin</p>
                                    </div>
                                 </div>
                              </div>
                           </div> --}}
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- project-details-area-end -->

         </main>
@endsection