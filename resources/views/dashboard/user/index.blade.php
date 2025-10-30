@extends('layouts.dashboard')

@section('title', 'User | Dashboard Mantraweb')

@section('content')

    <!--Container Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">User Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a>
                            <li class="breadcrumb-item active"><a href="{{ route('users.index') }}">User</a>
                            </li>
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
                                <h4 class="card-title">User Directory</h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('users.create') }}" class="btn bg-primary text-white">
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
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>
                                                <p class="d-inline-block align-middle mb-0">
                                                    <span class="font-13 fw-medium">{{ $user->name }}</span>
                                                </p>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-body text-decoration-underline">{{ $user->email }}</a>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge rounded-pill
                                                    {{ $user->role === 'admin'
                                                        ? 'bg-success-subtle text-success'
                                                        : ($user->role === 'team'
                                                            ? 'bg-secondary-subtle text-body'
                                                            : 'bg-secondary-subtle text-secondary') }}">
                                                    {{ ucfirst($user->role) }}
                                                </span>
                                            </td>
                                            <td class="text-end">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('users.edit', $user) }}"
                                                        class="btn btn-outline-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('users.destroy', $user) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-outline-danger delete-btn" data-name="{{ $user->name }}">
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
