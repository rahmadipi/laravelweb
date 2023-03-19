@extends('layouts.blog')

@section('container')
<h1>{{ $post->title }}</h1>
@endsection

@section('posts')
<h5>By: {{ $post->author }}</h5>
<p>{{ $post->body }}</p>
@endsection