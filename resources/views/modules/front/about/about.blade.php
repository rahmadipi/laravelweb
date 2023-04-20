@extends('layouts.main')

@section('header')
<div class="container mt-4 text-center">
    <h1>{{ $menu }}</h1>
    <div class="w-100">
        <hr class="my-3">
    </div>
</div>
@endsection

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-4 text-center">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>{{ $site_descriptions->owner }}</title>
                <image width="140" height="140" xlink:href="{{ asset('storage/site-desc/owner.jpg') }}"></image>
            </svg>

            <h2 class="mt-3">{{ $site_descriptions->owner }}</h2>
            <p>an Indonesian Web Programmer.</p>
            <p class="fs-3">
                <a href="https://wa.me/6289524469080" class="text-decoration-none" style="color:#51cd5d;"><i
                        class="bi bi-whatsapp"></i></a> <a href="mailto:putrarahmadi615@gmail.com"
                    class="text-decoration-none" style="color:#ea4335;"><i class="bi bi-google"></i></a> <a
                    href="https://id.linkedin.com/in/putrarahmadi" class="text-decoration-none"
                    style="color:#0a66c2;"><i class="bi bi-linkedin"></i> <a href="https://github.com/rahmadipi"
                        class="text-decoration-none" style="color:#24292f;"><i class="bi bi-github"></i></a>
            </p>
        </div>
        <div class="col-lg-8">
            abcde
        </div>
    </div>
</div>
@endsection