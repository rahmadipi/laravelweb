@extends('layouts.single')

@section('header')
<h1>{{ $post->title }}</h1>
@endsection

@section('content')
<h5>By: {{ $post->author->name }}</h5>
<p>{{ $post->body }}</p>
@endsection