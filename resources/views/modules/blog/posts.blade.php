@extends('layouts.list')

@section('header')
<h1>Halaman {{ $menu }}</h1>
<div class="w-100">
    <hr class="my-3">
</div>
@isset($author)
<h4>Posts by <a href="/author/{{ $author->username }}">{{ $author->name }}</a></h4>
<div class="w-100">
    <hr class="my-1">
</div>
@endisset
@isset($category)
<h4>Post in <a href="/category/{{ $category->slug }}">{{ $category->name }}</a></h4>
<div class="w-100">
    <hr class="my-1">
</div>
@endisset
@if(request('search') and request('search')!='')
<h4>with keyword <b>{{ request('search') }}</b></h4>
<div class="w-100">
    <hr class="my-1">
</div>
@endisset
@endsection

@section('content')
<div class="row">
    @if($posts->count())
    <div class="col-xs-12 px-3">
        <div class="card mb-3">
            <a href="/blog/{{ $posts->first()->slug }}" class="text-decoration-none">
                <img class="card-img-top"
                    src="https://source.unsplash.com/1200x300?{{ $posts->first()->category->name }},{{ $posts->first()->title }}"
                    alt="{{ $posts->first()->title }}">
            </a>
            <div class="card-body">
                <h4 class="card-title text-center">
                    <a href="/blog/{{ $posts->first()->slug }}" class="text-decoration-none text-danger">{{
                        $posts->first()->title
                        }}</a>
                </h4>
                <div class="w-100">
                    <hr class="mb-0">
                </div>
                <p class="card-text text-center mb-0">
                    <small class="text-muted">
                        By <a href="/author/{{ $posts->first()->author->username }}" class="text-danger">{{
                            $posts->first()->author->name
                            }}</a> in
                        <a href="/category/{{ $posts->first()->category->slug }}" class="text-danger">{{
                            $posts->first()->category->name
                            }}</a>
                        <small><i>{{
                                $posts->first()->created_at->diffForHumans() }}</i></small>
                    </small>
                </p>
                <div class="w-100 text-center">
                    <hr class="w-50 mt-0 mb-1 mx-auto">
                </div>
                <p class="card-text text-justify">{{ $posts->first()->excerpt }}</p>
            </div>
            <div class="card-footer w-100">
                <div class="text-right">
                    <a href="/blog/{{ $posts->first()->slug }}" class="text-decoration-none btn btn-sm btn-danger">Read
                        more</a>
                </div>
            </div>
        </div>
    </div>

    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 col-xs-12 mb-3">
        <div class="card d-flex flex-column justify-content-between align-items-end h-100">
            <a href="/blog/{{ $post->slug }}" class="text-decoration-none">
                <img class="card-img-top"
                    src="https://source.unsplash.com/800x400?{{ $post->category->name }},{{ $post->title }}"
                    alt="{{ $post->title }}">
            </a>
            <div class="card-body">
                <h4 class="card-title text-center">
                    <a href="/blog/{{ $post->slug }}" class="text-decoration-none text-danger">{{ $post->title
                        }}</a>
                </h4>
                <div class="w-100">
                    <hr class="mb-0">
                </div>
                <p class="card-text text-center mb-0">
                    <small class="text-muted">
                        By <a href="/author/{{ $post->author->username }}" class="text-danger">{{
                            $post->author->name
                            }}</a>
                        in
                        <a href="/category/{{ $post->category->slug }}" class="text-danger">{{ $post->category->name
                            }}</a>
                        <small><i>{{
                                $post->created_at->diffForHumans() }}</i></small>
                    </small>
                </p>
                <div class="w-100 text-center">
                    <hr class="w-50 mt-0 mb-1 mx-auto">
                </div>
                <p class="card-text text-justify">{{ $post->excerpt }}</p>
            </div>
            <div class="card-footer w-100">
                <div class="text-right">
                    <a href="/blog/{{ $post->slug }}" class="text-decoration-none btn btn-sm btn-danger">Read
                        more</a>
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