@extends('layouts.auth')

@section('head')
@endsection

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">View post</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
<div class="col-lg-8 col-xs-12">
    <div class="col-xs-12 text-center">
        <h1>{{ $post->title }}</h1>
    </div>
    <div class="col-xs-12">
        <div class="w-100">
            <hr class="my-2">
        </div>
    </div>
    <div class="col-xs-12">
        <a href="{{ url('/dashboard/posts/') }}"><span class="btn btn-sm btn-dark"><i data-feather="arrow-left"></i>
                Back to
                posts</span></a>
        <a href="{{ url('/dashboard/posts/'.$post->slug.'/edit') }}"><span class="btn btn-sm btn-warning text-light"><i
                    data-feather="edit"></i> Edit post</span></a>
        <form action="{{ url('/dashboard/posts/'.$post->slug) }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure ?')"><i
                    data-feather="trash-2"></i> Delete post</button>
        </form>
    </div>
    <div class="col-xs-12">
        <div class="w-100">
            <hr class="my-2">
        </div>
    </div>
    <div class="col-xs-12">
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
</div>
@endsection

@section('foot')
@endsection