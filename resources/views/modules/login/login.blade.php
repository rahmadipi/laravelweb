@extends('layouts.main')

@section('head')
<link href="{{ asset('custom/css/login.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signin w-100 m-auto">
            <form>
                <h1 class="h3 mb-3 fw-normal text-center">Login Form</h1>

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
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