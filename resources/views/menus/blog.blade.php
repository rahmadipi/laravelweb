@extends('layouts.blog')

@section('container')
<h1>Halaman {{ $menu }}</h1>
@endsection

@section('posts')
@foreach ($posts as $post)
<article class="mb-5">
    <a href="/blog/{{ $post['slug'] }}">
        <h3>{{ $post['title'] }}</h3>
    </a>
    <h5>{{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
</article>
@endforeach
@endsection