@extends('layouts.list')

@section('header')
<h1>Halaman {{ $menu }}</h1>
@isset($author)
<h3>dengan author: <a href="/author/{{ $author->username }}">{{ $author->name }}</a></h3>
@endisset
@isset($category)
<h3>dengan kategori: <a href="/category/{{ $category->slug }}">{{ $category->name }}</a></h3>
@endisset
@endsection

@section('content')
@if(count($posts)!=0)
@foreach ($posts as $post)
<article class="mb-5">
    <a href="/blog/{{ $post->slug }}">
        <h3>{{ $post->title }}</h3>
    </a>
    <h5>By: <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a></h5>
    <h5>Kategori: <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    <p>{{ $post->excerpt }}</p>
</article>
@endforeach
@else
<div class="text-center">data kosong</div>
@endif
@endsection

@if(isset($author) or isset($category))
@section('footer')
<a href="/blog">Lihat semua blog post</a>
@endsection
@endif