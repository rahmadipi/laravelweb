@extends('layouts.list')

@section('header')
<h1>Halaman {{ $menu }}</h1>
@endsection

@section('content')
@foreach ($categories as $category)
<article class="mb-5">
    <a href="/category/{{ $category->slug }}">
        <h3>{{ $category->title }}</h3>
    </a>
    <p>{{ $category->description }}</p>
</article>
@endforeach
@endsection