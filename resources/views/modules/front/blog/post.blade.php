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
        By <a href="{{ url('blog?author='.$post->author->username) }}" class="text-decoration-none text-danger">{{
            $post->author->name }}</a> in
        <a href="{{ url('blog?category='.$post->category->slug) }}" class="text-decoration-none text-danger">{{
            $post->category->name }}</a>
        <small><i>{{
                $post->created_at->diffForHumans() }}</i></small>
    </small>
    <div class="w-100">
        <hr class="mb-1 mt-0">
    </div>
    @if($post->image)
    <div style="max-height:450px;overflow:hidden;">
        <img class="img-fluid" src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}">
    </div>
    @else
    <img class="img-fluid"
        src="https://source.unsplash.com/random/1200x450/?{{ $post->category->name }},{{ $post->title }}"
        alt="{{ $post->title }}">
    @endif
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
            <a href="{{ url('/blog') }}" class="btn btn-md btn-danger">Back to blog posts</a>
        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection