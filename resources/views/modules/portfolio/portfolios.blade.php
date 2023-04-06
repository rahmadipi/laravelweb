@extends('layouts.list')

@section('header')
<h1>Halaman {{ $menu }}</h1>
<div class="w-100">
    <hr class="my-3">
</div>
@endsection

@section('content')
@foreach ($portfolios as $portfolio)
<article class="mb-5">
    <a href="{{ url('/portfolio/'.$portfolio->slug) }}">
        <h3>{{ $portfolio->title }}</h3>
    </a>
    <p>{{ $portfolio->description }}</p>
</article>
@endforeach
@endsection