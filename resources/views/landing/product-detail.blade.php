@extends('layouts.app')

@section('title', 'Team - Mantraweb')

@section('content')
    <main>

        <!-- breadcrumb-area-start -->
        <div class="breadcrumb__area breadcrumb-height-2 breadcrumb-overlay p-relative fix"
            data-background="{{ asset('landing/img/breadcrumb/breadcrumb-background.jpg') }}">
            <div class="breadcrumb__shape-2 z-index-4">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-3.png') }}" alt="">
            </div>
            <div class="breadcrumb__shape-3 z-index-4">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-4.png') }}" alt="">
            </div>
            <div class="breadcrumb__shape-4 z-index-4">
                <img src="{{ asset('landing/img/breadcrumb/breadcrumb-shape-5.png') }}" alt="">
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
        <div class="row justify-content-center">
            <div class="card m-2" style="width: 18rem;">
                <img src="{{ asset($product->thumbnail_url) }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    @foreach ($product->categories as $category)
                        <span class="badge text-bg-primary">{{ $category->name }}</span>
                    @endforeach
                    <p>Rp. {{ $product->price_start }} - Rp. {{ $product->price_max }}</p>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="{{ route('pages.order', $product->slug) }}" class="btn btn-primary">Pesan</a>
                </div>
            </div>
        </div>

        <!-- tp-team-area-end -->


    </main>
@endsection
