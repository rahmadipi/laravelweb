@extends('layouts.list')

@section('header')
<div class="row">
    <h1>{{ $menu }}</h1>
    <div class="w-100">
        <hr class="my-1">
    </div>
    @if(request('author') and request('author')!='')
    <small>Posts by <a href="{{ url('blog?author='.request('author')) }}" class="text-decoration-none text-danger">{{
            request('author') }}</a>
    </small>
    <div class="w-100">
        <hr class="my-1">
    </div>
    @endif
    @if(request('category') and request('category')!='')
    <small>Post in <a href="{{ url('blog?category='.request('category')) }}" class="text-decoration-none text-danger">{{
            request('category') }}</a>
    </small>
    <div class="w-100">
        <hr class="my-1">
    </div>
    @endif
    @if(request('search') and request('search')!='')
    <small>with keyword <b>{{ request('search') }}</b></small>
    <div class="w-100">
        <hr class="my-1">
    </div>
    @endif
</div>
@endsection

@section('content')
<div class="row">
    @if($posts->count())
    <div class="col-xs-12">
        <div class="card mb-3">
            <a href="{{ url('/blog/'.$posts->first()->slug) }}" class="text-decoration-none">
                @if($posts->first()->image)
                <div style="max-height:450px;overflow:hidden;">
                    <img class="img-fluid" src="{{ asset('storage/'.$posts->first()->image) }}"
                        alt="{{ $posts->first()->title }}">
                </div>
                @else
                <img class="card-img-top"
                    src="https://source.unsplash.com/random/1200x450/?{{ $posts->first()->category->name }},{{ $posts->first()->title }}"
                    alt="{{ $posts->first()->title }}">
                @endif
            </a>
            <div class="card-body">
                <h4 class="card-title text-center">
                    <a href="{{ url('/blog/'.$posts->first()->slug) }}" class="text-decoration-none text-danger">{{
                        $posts->first()->title
                        }}</a>
                </h4>
                <div class="w-100">
                    <hr class="w-75 my-0 mx-auto">
                </div>
                <p class="card-text text-center mb-0">
                    <small class="text-muted">
                        By <a href="{{ url('blog?author='.$posts->first()->author->username) }}"
                            class="text-decoration-none text-danger">{{
                            $posts->first()->author->name
                            }}</a> in
                        <a href="{{ url('blog?category='.$posts->first()->category->slug) }}"
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
                        <a href="{{ url('/blog/'.$posts->first()->slug) }}" class="btn btn-sm btn-danger">Read
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 col-xs-12 mb-3">
        <div class="card d-flex flex-column justify-content-between align-items-end h-100">
            <a href="{{ url('/blog/'.$post->slug) }}" class="text-decoration-none">
                @if($post->image)
                <div style="max-height:300px;overflow:hidden;">
                    <img class="img-fluid" src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}">
                </div>
                @else
                <img class="card-img-top"
                    src="https://source.unsplash.com/random/800x300/?{{ $post->category->name }},{{ $post->title }}"
                    alt="{{ $post->title }}">
                @endif
            </a>
            <div class="card-body">
                <h4 class="card-title text-center">
                    <a href="{{ url('/blog/'.$post->slug) }}" class="text-decoration-none text-danger">{{ $post->title
                        }}</a>
                </h4>
                <div class="w-100">
                    <hr class="w-75 my-0 mx-auto">
                </div>
                <p class="card-text text-center mb-0">
                    <small class="text-muted">
                        By <a href="{{ url('blog?author='.$post->author->username) }}"
                            class="text-decoration-none text-danger">{{
                            $post->author->name
                            }}</a>
                        in
                        <a href="{{ url('blog?category='.$post->category->slug) }}"
                            class="text-decoration-none text-danger">{{
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
                        <a href="{{ url('/blog/'.$post->slug) }}" class="btn btn-sm btn-danger">Read
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
            <a href="{{ url('/blog') }}" class="btn btn-md btn-danger">Lihat semua blog post</a>
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