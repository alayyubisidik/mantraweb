@extends('layouts.dashboard')

@section('title', 'Dashboard | Mantraweb')

@section('content')

    <!-- Container Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-corner-img">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9">
                                        <p class="text-muted text-uppercase mb-0 fw-normal fs-13">
                                            Total Category
                                        </p>
                                        <h4 class="mt-1 mb-0 fw-medium">{{ $total_categories }}</h4>
                                    </div>
                                    <div class="col-3 align-self-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center thumb-md border-dashed border-danger rounded mx-auto">
                                            <i class="iconoir-laptop-dev-mode fs-22 align-self-center mb-0 text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-corner-img">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9">
                                        <p class="text-muted text-uppercase mb-0 fw-normal fs-13">
                                            Total Clients
                                        </p>
                                        <h4 class="mt-1 mb-0 fw-medium">{{ $total_clients }}</h4>
                                    </div>
                                    <div class="col-3 align-self-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center thumb-md border-dashed border-danger rounded mx-auto">
                                            <i class="iconoir-community fs-22 align-self-center mb-0 text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-corner-img">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9">
                                        <p class="text-muted text-uppercase mb-0 fw-normal fs-13">
                                            Total Projects
                                        </p>
                                        <h4 class="mt-1 mb-0 fw-medium">{{ $total_projects }}</h4>
                                    </div>
                                    <div class="col-3 align-self-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center thumb-md border-dashed border-danger rounded mx-auto">
                                            <i class="iconoir-presentation fs-22 align-self-center mb-0 text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card bg-corner-img">
                            <div class="card-body">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-9">
                                        <p class="text-muted text-uppercase mb-0 fw-normal fs-13">
                                            Total Testimonials
                                        </p>
                                        <h4 class="mt-1 mb-0 fw-medium">{{ $total_testimonials }}</h4>
                                    </div>
                                    <div class="col-3 align-self-center">
                                        <div
                                            class="d-flex justify-content-center align-items-center thumb-md border-dashed border-danger rounded mx-auto">
                                            <i class="iconoir-chat-lines fs-22 align-self-center mb-0 text-danger"></i>
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
    <!-- Container End -->

@endsection
