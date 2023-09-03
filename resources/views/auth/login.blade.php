@extends('layouts.app')

{{-- @section('title', 'Login') --}}

@section('content')
    {{-- <div class="card-header">{{ __('Login') }}</div> --}}
    <div class="center borderlogin px-3 py-3 mx-auto">
        <img src="{{ asset('assets/images/logo.png') }}" alt="" srcset="" class="img-fluid">
        <h1 class="text-center text-login mb-4 mt-1">Login</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="ms-5 me-5">
                <label for="email" class="form-label text-sub">E-mail</label>
                <input id="email" type="email" class="form-control form-emailLog" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off">
            </div>
            <div class="mt-4 ms-5 me-5">
                <label for="password" class="form-label text-sub">Password</label>
                <input id="password" type="password" class="form-control form-emailLog" @error('password') is-invalid @enderror" name="password" required">
                <div>
                    <div class="row mt-2 text-check">
                        <div class="col text-start">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <div class="col text-end">
                            <a class="text-forgot" href="">Forgot Password</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4 d-grid">
            </div>
            <div class="d-flex justify-content-center mb-2">
                <button name="submit" type="submit" class="btn button-login mx-auto {{ __('Login') }}">Login</button>
            </div>
            <div class="text-center text-doesntHave mb-5">
                Doesn’t have an account? <a href="{{ route('register') }}" class="text-toReg">Register</a>
            </div>
        </form>
    </div>
@endsection