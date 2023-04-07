@extends('layouts.main')

@section('head')
<link href="{{ asset('custom/css/registration.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration w-100 m-auto">
                <form action="{{ url('/register') }}" method="POST">
                    @csrf

                    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

                    <div class="form-floating">
                        <input type="text" name="name" id="name"
                            class="form-control rounded-top @error('name') is-invalid @enderror" placeholder="Name"
                            value="{{ old('name') }}" autofocus>
                        <label for="name">Name</label>
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" id="username"
                            class="form-control @error('username') is-invalid @enderror" placeholder="Username"
                            value="{{ old('username') }}">
                        <label for="username">Username</label>
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror" placeholder="name@example.com"
                            value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" id="password"
                            class="form-control rounded-bottom @error('password') is-invalid @enderror"
                            placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">
                        Register <i class="bi bi-door-open"></i>
                    </button>
                </form>
                <small class="d-block text-center mt-2">
                    Already registered ? <a href="{{ url('/login') }}"><u>Login</u></a>
                </small>
            </main>
        </div>
    </div>
</div>
@endsection