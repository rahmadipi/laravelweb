@extends('layouts.list')

@section('header')
<h1>Halaman {{ $menu }}</h1>
@endsection

@section('content')
@foreach ($posts as $post)
<article class="mb-5">
    <a href="/blog/{{ $post->slug }}">
        <h3>{{ $post->title }}</h3>
    </a>
    <h5>By: {{ $post->author->name }}</h5>
    <p>{{ $post->excerpt }}</p>
</article>
@endforeach
@endsection