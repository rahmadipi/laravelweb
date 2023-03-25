@extends('layouts.list')

@section('header')
<h1>Halaman {{ $menu }}</h1>
@endsection

@section('content')
@foreach ($portfolios as $portfolio)
<article class="mb-5">
    <a href="/portfolio/{{ $portfolio->slug }}">
        <h3>{{ $portfolio->title }}</h3>
    </a>
    <p>{{ $portfolio->description }}</p>
</article>
@endforeach
@endsection