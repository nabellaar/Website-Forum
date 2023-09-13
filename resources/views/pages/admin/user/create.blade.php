@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create User</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.user.store') }}" method="post">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="full_name">Full Name</label>
                    <input class="form-control @error('full_name') is-invalid @enderror" id="full_name" type="text"
                        required placeholder="Full Name" name="full_name" value="{{ old('full_name') }}">
                    @error('full_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input class="form-control @error('username') is-invalid @enderror" id="username" type="text"
                        required placeholder="Username" name="username" value="{{ old('username') }}">
                    @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email">Email address</label>
                    <input class="form-control @error('email') is-invalid @enderror" id="email" type="email" required
                        placeholder="Email" name="email" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password">Password</label>
                    <input class="form-control @error('password') is-invalid @enderror" id="password" type="text"
                        required placeholder="Password" name="password" value="{{ old('password') }}">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="no_handphone">No Handphone</label>
                    <input class="form-control @error('no_handphone') is-invalid @enderror" id="no_handphone" type="tel"
                        required placeholder="No Handphone" name="no_handphone" value="{{ old('no_handphone') }}">
                    @error('no_handphone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="role">Role</label><select class="form-control @error('role') is-invalid @enderror"
                        id="role" name="role">
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select>
                    @error('role')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <a href="{{ route('admin.user.index') }}" class="btn btn-outline-danger">Cancel</a>
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection