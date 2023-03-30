@extends('layouts.main')

@section('head')
<link href="{{ asset('custom/css/registration.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration w-100 m-auto">
            <form>
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

                <div class="form-floating">
                    <input type="text" name="name" id="name" class="form-control rounded-top" id="floatingName"
                        placeholder="Name">
                    <label for="floatingName">Name</label>
                </div>
                <div class="form-floating">
                    <input type="text" name="username" id="username" class="form-control" id="floatingUsername"
                        placeholder="Username">
                    <label for="floatingUsername">Username</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" id="email" class="form-control" id="floatingInput"
                        placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" id="password" class="form-control rounded-bottom"
                        id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
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
@endsection