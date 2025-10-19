@extends('layouts.dashboard')

@section('title', 'Testimonial')

@section('content')

    <!--Container Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Testimonial Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Testimonial</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Testimonial Directory</h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('testimonial.create') }}" class="btn bg-primary text-white">
                                    <i class="fas fa-plus me-1"></i> Add Data
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table mb-0" id="datatable_1">
                                <thead class="table-light">
                                    <tr>
                                        <th>Client Name</th>
                                        <th>Image URL</th>
                                        <th>Description</th>
                                        <th>Rating</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonials as $testimonial)
                                        <tr>
                                            <td>
                                                <p class="d-inline-block align-middle mb-0">
                                                    <span class="font-13 fw-medium">{{ $testimonial->client->name }}</span>
                                                </p>
                                            </td>
                                            <td>
                                                @if ($testimonial->image_url)
                                                    <img src="{{ asset('storage/' . $testimonial->image_url) }}"
                                                        alt="Logo" class="img-fluid" style="max-width: 100px;">
                                                @else
                                                    <span class="badge rounded text-body bg-secondary-subtle">No
                                                        Image</span>
                                                @endif
                                            </td>
                                            <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ Str::limit($testimonial->message, 40) }}
                                                </p>
                                            </td>
                                            <td class="text-warning">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $testimonial->rating)
                                                        <i class="fas fa-star"></i>
                                                    @else
                                                        <i class="far fa-star"></i>
                                                    @endif
                                                @endfor
                                            </td>
                                            <td class="text-end">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('testimonial.update', ['testimonialId' => $testimonial->id]) }}"
                                                        class="btn btn-outline-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('testimonial.delete', ['testimonialId' => $testimonial->id]) }}"
                                                        class="btn btn-outline-danger">
                                                        <i class="fa fa-trash-alt"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container End-->

@endsection
