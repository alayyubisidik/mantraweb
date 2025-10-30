@extends('layouts.dashboard')

@section('title', 'Product | Dashboard Mantraweb')

@section('content')

    <!--Container Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Product Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Product</li>
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
                                <h4 class="card-title">Product Directory</h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('products.create') }}" class="btn bg-primary text-white">
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
                                        <th>Thumbnail</th>
                                        <th>Name</th>
                                        <th>Categories</th>
                                        <th>Features</th>
                                        <th>Sections</th>
                                        <th>Price Start</th>
                                        <th>Price Max</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>
                                                <img src="{{ asset($product->thumbnail_url) }}" alt="Logo" class="img-fluid"
                                                    style="max-width: 100px;">
                                            </td>
                                            <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ $product->name }}
                                                </p>
                                            </td>
                                            <td>
                                                @foreach ($product->categories as $category)
                                                    <span class="badge text-bg-primary">{{ $category->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($product->features as $feature)
                                                    <span class="badge text-bg-primary">{{ $feature->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($product->sections as $section)
                                                    <span class="badge text-bg-primary">{{ $section->name }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ $product->price_start }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ $product->price_max }}
                                                </p>
                                            </td>
                                            <td>
                                                @if ($product->status == "active")
                                                    <span class="badge text-bg-success">Active</span>
                                                @else
                                                    <span class="badge text-bg-danger">Inactive</span>
                                                @endif
                                            </td>

                                            <td class="text-end">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('products.edit', $product) }}"
                                                        class="btn btn-outline-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('products.destroy', $product) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-outline-danger delete-btn"
                                                            data-name="{{ $product->name }}">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </button>
                                                    </form>
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
