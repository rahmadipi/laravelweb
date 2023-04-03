@extends('layouts.auth')

@section('head')
@endsection

@section('content')
<div class="col-lg-8 col-xs-12 text-center">
    <h1>{{ $post->title }}</h1>
</div>
<div class="clearfix"></div>
<div class="col-lg-8 col-xs-12">
    <div class="w-100">
        <hr class="my-2">
    </div>
</div>
<div class="clearfix"></div>
<div class="col-lg-8 col-xs-12">
    <a href="{{ url('/dashboard/posts/') }}"><span class="btn btn-sm btn-dark"><i data-feather="arrow-left"></i> Back to
            posts</span></a>
    <a href=""><span class="btn btn-sm btn-warning text-light"><i data-feather="edit"></i> Edit post</span></a>
    <a href=""><span class="btn btn-sm btn-danger"><i data-feather="trash-2"></i> Delete post</span></a>
</div>
<div class="clearfix"></div>
<div class="col-lg-8 col-xs-12">
    <div class="w-100">
        <hr class="my-2">
    </div>
</div>
<div class="clearfix"></div>
<div class="col-lg-8 col-xs-12">
    <small class="text-muted">
        category <u>{{ $post->category->name }}</u>
    </small>
    <div class="w-100">
        <hr class="mb-1 mt-0">
    </div>
    <img class="img-fluid"
        src="https://source.unsplash.com/random/1200x500/?{{ $post->category->name }},{{ $post->title }}"
        alt="{{ $post->title }}">
    <div class="w-100">
        <hr class="my-1">
    </div>
    <article class="my-3">
        <p>{!! $post->body !!}</p>
    </article>
</div>
@endsection

@section('foot')
@endsection