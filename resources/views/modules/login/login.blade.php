@extends('layouts.main')

@section('head')
<link href="{{ asset('custom/css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-4">

        @if(session()->has('register'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('register') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <main class="form-signin w-100 m-auto">
            <form action="{{ url('/login') }}" method="POST">
                @csrf

                <h1 class="h3 mb-3 fw-normal text-center">Login Form</h1>

                <div class="form-floating">
                    <input type="email" name="email" id="email"
                        class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com"
                        value="{{ old('email') }}" autofocus required>
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    <label for="password">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">
                    Login <i class="bi bi-box-arrow-in-right"></i>
                </button>
            </form>
            <small class="d-block text-center mt-2">
                Not registered yet ? <a href="{{ url('/register') }}"><u>Register here</u></a>
            </small>
        </main>
    </div>
</div>
@endsection