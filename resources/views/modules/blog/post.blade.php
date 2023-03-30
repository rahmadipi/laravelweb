@extends('layouts.single')

@section('header')
@endsection

@section('content')
<div class="col-xs-12 text-center">
    <h1>{{ $post->title }}</h1>
</div>
<div class="col-xs-12">
    <div class="w-100">
        <hr class="my-2">
    </div>
</div>
<div class="col-xs-12">
    <small class="text-muted">
        By <a href="/author/{{ $post->author->username }}" class="text-decoration-none text-danger">{{
            $post->author->name }}</a> in
        <a href="/category/{{ $post->category->slug }}" class="text-decoration-none text-danger">{{
            $post->category->name }}</a>
        <small><i>{{
                $post->created_at->diffForHumans() }}</i></small>
    </small>
    <div class="w-100">
        <hr class="mb-1 mt-0">
    </div>
    <img class="img-fluid" src="https://source.unsplash.com/1200x500?{{ $post->category->name }},{{ $post->title }}"
        alt="{{ $post->title }}">
    <div class="w-100">
        <hr class="my-1">
    </div>
    <article class="my-3">
        <p>{!! $post->body !!}</p>
    </article>
</div>
<div class="col-xs-12">
    <div class="w-100">
        <hr class="my-3">
    </div>
    <div class="flex-row">
        <div class="d-flex justify-content-start">
            <a href="/blog" class="btn btn-md btn-danger">Kembali ke menu blog</a>
        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection