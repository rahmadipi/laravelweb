@extends('layouts.list')

@section('header')
<div class="row">
    <h1>Halaman {{ $menu }}</h1>
    <div class="w-100">
        <hr class="my-1">
    </div>
    @isset($author)
    <small>Posts by <a href="/author/{{ $author->username }}" class="text-decoration-none text-danger">{{ $author->name
            }}</a>
    </small>
    <div class="w-100">
        <hr class="my-1">
    </div>
    @endisset
    @isset($category)
    <small>Post in <a href="/category/{{ $category->slug }}" class="text-decoration-none text-danger">{{ $category->name
            }}</a>
    </small>
    <div class="w-100">
        <hr class="my-1">
    </div>
    @endisset
    @if(request('search') and request('search')!='')
    <small>with keyword <b>{{ request('search') }}</b></small>
    <div class="w-100">
        <hr class="my-1">
    </div>
    @endisset
</div>
@endsection

@section('content')
<div class="row">
    @if($posts->count())
    <div class="col-xs-12">
        <div class="card mb-3">
            <a href="/blog/{{ $posts->first()->slug }}" class="text-decoration-none">
                <img class="card-img-top"
                    src="https://source.unsplash.com/random/1200x450/?{{ $posts->first()->category->name }},{{ $posts->first()->title }}"
                    alt="{{ $posts->first()->title }}">
            </a>
            <div class="card-body">
                <h4 class="card-title text-center">
                    <a href="/blog/{{ $posts->first()->slug }}" class="text-decoration-none text-danger">{{
                        $posts->first()->title
                        }}</a>
                </h4>
                <div class="w-100">
                    <hr class="w-75 my-0 mx-auto">
                </div>
                <p class="card-text text-center mb-0">
                    <small class="text-muted">
                        By <a href="/author/{{ $posts->first()->author->username }}"
                            class="text-decoration-none text-danger">{{
                            $posts->first()->author->name
                            }}</a> in
                        <a href="/category/{{ $posts->first()->category->slug }}"
                            class="text-decoration-none text-danger">{{
                            $posts->first()->category->name
                            }}</a>
                    </small>
                </p>
                <div class="w-100 text-center">
                    <hr class="w-75 mt-0 mb-1 mx-auto">
                </div>
                <p class="card-text text-justify">{{ $posts->first()->excerpt }}</p>
            </div>
            <div class="card-footer w-100">
                <div class="d-flex align-items-end justify-content-between">
                    <small class="text-muted pb-2">
                        <i>{{
                            $posts->first()->created_at->diffForHumans() }}</i>
                    </small>
                    <div class="text-right">
                        <a href="/blog/{{ $posts->first()->slug }}" class="btn btn-sm btn-danger">Read
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 col-xs-12 mb-3">
        <div class="card d-flex flex-column justify-content-between align-items-end h-100">
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                <img class="card-img-top"
                    src="https://source.unsplash.com/random/800x300/?{{ $post->category->name }},{{ $post->title }}"
                    alt="{{ $post->title }}">
            </a>
            <div class="card-body">
                <h4 class="card-title text-center">
                    <a href="/blog/{{ $post->slug }}" class="text-decoration-none text-danger">{{ $post->title
                        }}</a>
                </h4>
                <div class="w-100">
                    <hr class="w-75 my-0 mx-auto">
                </div>
                <p class="card-text text-center mb-0">
                    <small class="text-muted">
                        By <a href="/author/{{ $post->author->username }}" class="text-decoration-none text-danger">{{
                            $post->author->name
                            }}</a>
                        in
                        <a href="/category/{{ $post->category->slug }}" class="text-decoration-none text-danger">{{
                            $post->category->name
                            }}</a>
                    </small>
                </p>
                <div class="w-100 text-center">
                    <hr class="w-75 mt-0 mb-1 mx-auto">
                </div>
                <p class="card-text text-justify">{{ $post->excerpt }}</p>
            </div>
            <div class="card-footer w-100">
                <div class="d-flex align-items-end justify-content-between">
                    <small class="text-muted pb-2">
                        <i>{{
                            $post->created_at->diffForHumans() }}</i>
                    </small>
                    <div class="text-right">
                        <a href="/blog/{{ $post->slug }}" class="btn btn-sm btn-danger">Read
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @else
    <div class="col-xs-12">
        <div class="text-center">data kosong</div>
    </div>
    @endif
</div>
@endsection

@section('footer')
<div class="row">
    @if(isset($author) or isset($category))
    <div class="w-100">
        <hr class="my-3">
    </div>
    <div class="flex-row">
        <div class="d-flex justify-content-center">
            <a href="/blog" class="btn btn-md btn-danger">Lihat semua blog post</a>
        </div>
    </div>
    @endif
    <div class="w-100">
        <hr class="my-3">
    </div>
    <div class="flex-row">
        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection