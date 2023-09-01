@extends('layout/aplikasi')

@section('title', 'Login')

@section('konten')
    <div class="center borderlogin px-3 py-3 mx-auto">
        <h1 class="text-center text-login mb-4 mt-5">Login</h1>
        <form action="" method="POST">
            @csrf
            <div class="ms-5 me-5">
                <label for="email" class="form-label text-sub">E-mail</label>
                <input type="email" value="{{ Session::get('email') }}" name="email" class="form-control form-emailLog">
            </div>
            <div class="mt-4 ms-5 me-5">
                <label for="password" class="form-label text-sub">Password</label>
                <input type="password" name="password" class="form-control form-emailLog">
                <div>
                    <div class="row mt-2 text-check">
                        <div class="col text-start">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <div class="col text-end">
                            Forgot Password
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-3 d-grid">
            </div>
            <div class="d-flex justify-content-center mb-2">
                <button name="submit" type="submit" class="btn button-login mx-auto">Login</button>
            </div>
            <div class="text-center text-doesntHave mb-5">
                Doesn’t have an account? <a href="" class="text-toReg">Register</a>
            </div>
        </form>
    </div>
@endsection