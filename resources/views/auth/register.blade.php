@extends('layouts.app')

{{-- @section('title', 'Login') --}}

@section('content')
    <div class="center borderlogin px-3 py-3 mx-auto">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" srcset="" class="img-fluid">
        <h1 class="text-center text-login mb-4 mt-1">Signup</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="ms-5 me-5">
                <label for="email" class="form-label text-sub">Email</label>
                <input id="email" type="email" class="form-control form-emailLog" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off">
            </div>
            <div class="ms-5 me-5 mt-3">
                <label for="name" class="form-label text-sub">Username</label>
                <input class="form-control form-emailLog" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="off">
            </div>
            <div class="ms-5 me-5 mt-3">
                <label for="email" class="form-label text-sub">Role</label>
                <select name="role_id" id="role_id" class="form-select form-emailLog" aria-label="Default select example">
                    <option value="{{ __(1) }}">Konsultan</option>
                    <option value="{{ __(2) }}">Klien</option>
                </select>
            </div>
            <div class="mt-3 ms-5 me-5">
                <label for="password" class="form-label text-sub">Password</label>
                <input id="password" type="password" class="form-control form-emailLog" @error('password') is-invalid @enderror" name="password" required">
            </div>
            <div class="mt-3 ms-5 me-5">
                <label for="password" class="form-label text-sub">Confirm Password</label>
                <input id="password-confirm" type="password" name="password_confirmation" required class="form-control form-emailLog">
            </div>
            <div class="mb-4 d-grid">
            </div>
            <div class="d-flex justify-content-center mb-2">
                <button type="submit" class="btn button-login mx-auto">Signup</button>
            </div>
            <div class="text-center text-doesntHave mb-3">
                Have an account? <a href="{{ route('login') }}" class="text-toReg">Login</a>
            </div>
        </form>
    </div>
@endsection