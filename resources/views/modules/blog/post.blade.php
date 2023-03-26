@extends('layouts.single')

@section('header')
<h1>{{ $post->title }}</h1>
@endsection

@section('content')
<h5>By: <a href="/author/{{ $post->author->username }}">{{ $post->author->name }}</a></h5>
<h5>Kategori: <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
<p>{{ $post->body }}</p>
@endsection

@section('footer')
<a href="/blog">Kembali ke menu Blog</a>
@endsection