@extends('layouts.single')

@section('header')
@endsection

@section('content')
<div class="col-xs-12">
    <h1>{{ $post->title }}</h1>
</div>
<div class="col-xs-12">
    <small class="text-muted">
        By <a href="/author/{{ $post->author->username }}" class="text-danger">{{ $post->author->name }}</a> in
        <a href="/category/{{ $post->category->slug }}" class="text-danger">{{ $post->category->name }}</a>
        <small><i>{{
                $post->created_at->diffForHumans() }}</i></small>
    </small>
    <img class="img-fluid" src="https://source.unsplash.com/1200x500?{{ $post->category->name }},{{ $post->title }}"
        alt="{{ $post->title }}">
    <article class="my-3">
        <p>{!! $post->body !!}</p>
    </article>
</div>
<div class="col-xs-12">
    <a href="/blog">Kembali ke menu Blog</a>
</div>
@endsection

@section('footer')
@endsection