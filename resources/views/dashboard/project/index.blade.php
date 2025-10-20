@extends('layouts.dashboard')

@section('title', 'Project | Dashboard Mantraweb')

@section('content')

    <!--Container Start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box d-md-flex justify-content-md-between align-items-center">
                    <h4 class="page-title">Project Management</h4>
                    <div class="">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Project</li>
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
                                <h4 class="card-title">Project Directory</h4>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('project.create') }}" class="btn bg-primary text-white">
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
                                        {{-- <th>Client Name</th> --}}
                                        <th>Project Title</th>
                                        <th>Thumbnail</th>
                                        <th>Project URL</th>
                                        {{-- <th>Start Date</th>
                                        <th>End Date</th> --}}
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project)
                                        <tr>
                                            {{-- <td>
                                                <p class="d-inline-block align-middle mb-0">
                                                    <span class="font-13 fw-medium">{{ $project->client->name ?? '-' }}</span>
                                                </p>
                                            </td> --}}
                                            <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ $project->title }}
                                                </p>
                                            </td>
                                            <td>
                                                @if ($project->thumbnail_url)
                                                    <img src="{{ asset('storage/' . $project->thumbnail_url) }}" alt="Logo"
                                                    class="img-fluid" style="max-width: 100px;">
                                                @else
                                                    <span class="badge rounded text-body bg-secondary-subtle">No
                                                        Thumbnail</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ $project->project_url }}" target="_blank"
                                                    class="text-primary text-decoration-underline">Link Project</a>
                                            </td>
                                            {{-- <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ \Carbon\Carbon::parse($project->start_date)->format('d M Y') }}
                                                </p>
                                            </td>
                                            <td>
                                                <p class="d-inline-block align-middle mb-0 text-body">
                                                    {{ \Carbon\Carbon::parse($project->end)->format('d M Y') }}
                                                </p>
                                            </td> --}}
                                            <td>
                                                @if ($project->status === 'published')
                                                    <span
                                                        class="badge rounded text-success bg-success-subtle">Published</span>
                                                @else
                                                    <span class="badge rounded text-body bg-secondary-subtle">Draft</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('project.update', ['projectId' => $project->id]) }}"
                                                        class="btn btn-outline-warning">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('project.delete', ['projectId' => $project->id]) }}"
                                                        class="btn btn-outline-danger delete-btn"
                                                        data-name="{{ $project->title }}">
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

    {{-- <h1>Project</h1>

    <a href="/dashboard/project/create">
        <button type="button" class="btn btn-success mt-3 mb-2">Create new Project</button>
    </a>

    <table class="table table-striped align-middle">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Client</th>
                <th>Services</th>
                <th>Status</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Thumbnail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->client->name ?? '-' }}</td>
                    <td>
                        @foreach ($project->projectService as $service)
                            <span class="badge bg-secondary">{{ $service->name }}</span>
                        @endforeach
                    </td>
                    <td>
                        @if ($project->status === 'published')
                            <span class="badge bg-success">Published</span>
                        @else
                            <span class="badge bg-warning text-dark">Draft</span>
                        @endif
                    </td>
                    <td>{{ \Carbon\Carbon::parse($project->start_date)->format('d M Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($project->end_date)->format('d M Y') }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $project->thumbnail_url) }}" alt="Thumbnail"
                            style="width: 80px; height: 80px; object-fit: cover; border-radius: 5px;">
                    </td>
                    <td class="d-flex gap-2">
                        <a href="/dashboard/project/update/{{ $project->id }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="blue"
                                class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path
                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                <path fill-rule="evenodd"
                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                            </svg>
                        </a>
                        <a href="/dashboard/project/delete/{{ $project->id }}" onclick="return confirm('are you sure?')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="red"
                                class="bi bi-trash" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                <path
                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                            </svg>
                        </a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@endsection
