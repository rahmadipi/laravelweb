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
@if($posts->count())
@foreach ($posts as $post)
<div class="card mb-3">
    <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
        <img class="card-img-top"
            src="https://source.unsplash.com/1200x200?{{ $post->category->name }},{{ $post->title }}"
            alt="{{ $post->title }}">
    </a>
    <div class="card-body">
        <h4 class="card-title text-center">
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none text-danger">{{ $post->title }}</a>
        </h4>
        <div class="w-100">
            <hr class="mb-0">
        </div>
        <p class="card-text text-center mb-0">
            <small class="text-muted">
                By <a href="/author/{{ $post->author->username }}" class="text-danger">{{ $post->author->name }}</a> in
                <a href="/category/{{ $post->category->slug }}" class="text-danger">{{ $post->category->name }}</a>
                <small><i>{{
                        $post->created_at->diffForHumans() }}</i></small>
            </small>
        </p>
        <div class="w-100 text-center">
            <hr class="w-50 my-0 mx-auto">
        </div>
        <p class="card-text text-justify">{{ $post->excerpt }}</p>
        <div class="w-100">
            <hr>
        </div>
        <div class="text-right">
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none btn btn-sm btn-danger">Read more</a>
        </div>
    </div>
</div>
@endforeach
@else
<div class="text-center">data kosong</div>
@endif
@endsection

@section('footer')
@if(isset($author) or isset($category))
<a href="/blog">Lihat semua blog post</a>
@endif
<div class="d-flex justify-content-end">
    {{ $posts->links() }}
</div>
@endsection