@extends('layout.dashboard-layout')

@section('title', 'Create User')

@section('content')
    <h1>Create User</h1>

    <form action="/dashboard/user/create" method="post" class="mt-4" style="width: 50%">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            @error('name')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input name="name" type="name" class="form-control" id="name" placeholder="Jhon Doe"
                value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            @error('email')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input name="email" type="email" class="form-control" id="email" placeholder="example@gmail.com"
                value="{{ old('email') }}">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            @error('password')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input name="password" type="password" class="form-control" id="password" placeholder="........">
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            @error('role')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <select name="role" id="role" class="form-select">
                <option value="">-- Select Role --</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="team" {{ old('role') == 'team' ? 'selected' : '' }}>Team</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary ">Save</button>
    </form>

@endsection
