@extends('layouts.dashboard')

@section('title', 'Client')

@section('content')

    <!--Container Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Client Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Client</li>
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
                                <h4 class="card-title">Client Directory</h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('client.create') }}" class="btn bg-primary text-white">
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
                                        {{-- <th>Phone</th> --}}
                                        {{-- <th>Address</th> --}}
                                        <th>Company</th>
                                        <th>Company Logo</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clients as $client)
                                        <tr>
                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 text-truncate">
                                                        <h6 class="m-0"> {{ $client->name }}</h6>
                                                        <p class="fs-12 text-muted mb-0"> {{ $client->job_title }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#"
                                                    class="text-body text-decoration-underline">{{ $client->email }}</a>
                                            </td>
                                            {{-- <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ $client->phone }}
                                                </p>
                                            </td> --}}
                                            {{-- <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ $client->address }}
                                                </p>
                                            </td> --}}
                                            <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ $client->company }}
                                                </p>
                                            </td>
                                            <td>
                                                @if ($client->company_logo_url)
                                                    <img src="{{ asset('storage/' . $client->company_logo_url) }}"
                                                        alt="Logo" class="img-fluid" style="max-width: 100px;">
                                                @else
                                                    <span class="badge rounded text-body bg-secondary-subtle">No
                                                        Image</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('client.update', ['clientId' => $client->id]) }}"
                                                        class="btn btn-outline-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('client.delete', ['clientId' => $client->id]) }}"
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
    <!--Container Start-->


    {{-- <h1>Client</h1>

    <a href="/dashboard/client/create">
        <button type="button" class="btn btn-success mt-3 mb-2">Create new Client</button>
    </a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Job Title</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Company</th>
                <th scope="col">Company Logo</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->job_title }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>{{ $client->address }}</td>
                    <td>{{ $client->company }}</td>
                    <td><img src="{{ asset('storage/' . $client->company_logo_url) }}"  alt=""></td>
                    <td class="d-flex gap-2">

                        <a href="/dashboard/client/delete/{{ $client->id }}" onclick="return confirm('are you sure?')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="red"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg>
                        </a>

                        <a href="/dashboard/client/update/{{ $client->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="blue"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                            </svg>
                        </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@endsection
