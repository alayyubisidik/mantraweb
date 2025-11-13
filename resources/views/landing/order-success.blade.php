@extends('layouts.app')

@section('title', 'Order Success - Mantraweb')

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
                            <h3 class="breadcrumb__title tp-char-animation text-black">Pesanan Sukses</h3>
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
        <div class="pd-thumb-area pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="pd-thumb">
                            <img src="{{ asset('landing/img/about/about-product.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- project-img-area-end -->


    </main>
@endsection
