@extends('layouts.dashboard')

@section('title', 'Team | Dashboard Mantraweb')

@section('content')

    <!--Container Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Team Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Team</li>
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
                                <h4 class="card-title">Team Directory</h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('teams.create') }}" class="btn bg-primary text-white">
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
                                        <th>Position</th>
                                        <th>Profile</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teams as $team)
                                        <tr>
                                            <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ $team->name }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ $team->position }}
                                                </p>
                                            </td>
                                            <td>
                                                @if ($team->profile_url)
                                                    <img src="{{ asset($team->profile_url) }}" alt="Logo"
                                                        class="img-fluid" style="max-width: 100px;">
                                                @else
                                                    <span class="badge rounded text-body bg-secondary-subtle">No
                                                        Image</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('teams.edit', $team) }}" class="btn btn-outline-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action="{{ route('teams.destroy', $team) }}" method="POST"
                                                        style="display:inline;">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-outline-danger delete-btn"
                                                            data-name="{{ $team->name }}">
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
    <!--Container Start-->

@endsection
