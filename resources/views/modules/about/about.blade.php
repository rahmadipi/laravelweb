@extends('layouts.main')

@section('header')
<div class="container mt-4 text-center">
    <h1>Halaman {{ $menu }}</h1>
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
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777"
                    dy=".3em">140x140</text>
            </svg>

            <h2 class="mt-3">{{ $site_descriptions->owner }}</h2>
            <p>And lastly this, the third column of representative placeholder content.</p>
            <p class="fs-3">
                <i class="bi bi-whatsapp"></i> <i class="bi bi-google"></i> <i class="bi bi-linkedin"></i> <i
                    class="bi bi-github"></i>
            </p>
        </div>
        <div class="col-lg-8">
            abcde
        </div>
    </div>
</div>
@endsection