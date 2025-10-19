@extends('layouts.dashboard')

@section('title', 'Service')

@section('content')

    <!--Container End-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Service Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Service</li>
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
                                <h4 class="card-title">Service Directory</h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('service.create') }}" class="btn bg-primary text-white">
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
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Icon</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>
                                                <p class="d-inline-block align-middle mb-0">
                                                    <span class="font-13 fw-medium">{{ $service->name }}</span>
                                                </p>
                                            </td>
                                            <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ Str::limit($service->description, 50) }}
                                                </p>
                                            </td>
                                            <td>
                                                @if ($service->icon_url)
                                                    <div class="w-4 h-4">
                                                        {!! $service->icon_url !!}
                                                    </div>
                                                @else
                                                    <span class="badge rounded text-body bg-secondary-subtle">No
                                                        Icon</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('service.update', ['serviceId' => $service->id]) }}"
                                                        class="btn btn-outline-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('service.delete', ['serviceId' => $service->id]) }}"
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
