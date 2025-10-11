@extends('layout.dashboard-layout')

@section('title', 'Update User')

@section('content')
    <h1>Update User</h1>

    <form action="/dashboard/user/update/{{ $user->id }}" method="post" class="mt-4" style="width: 50%">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            @error('name')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}"
                placeholder="John Doe">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            @error('email')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="email" name="email" id="email" class="form-control"
                value="{{ old('email', $user->email) }}" placeholder="example@gmail.com">
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password (leave blank if not changing)</label>
            @error('password')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <input type="password" name="password" id="password" class="form-control"
                placeholder="New password (optional)">
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            @error('role')
                <p class="text-danger fs-6">{{ $message }}</p>
            @enderror
            <select name="role" id="role" class="form-select">
                <option value="">-- Select Role --</option>
                <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="team" {{ old('role', $user->role) == 'team' ? 'selected' : '' }}>Team</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>


@endsection
