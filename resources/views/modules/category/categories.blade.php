@extends('layouts.list')

@section('header')
<h1>Halaman {{ $menu }}</h1>
@endsection

@section('content')
@if(count($categories)!=0)
@foreach ($categories as $category)
<article class="mb-5">
    <a href="/category/{{ $category->slug }}">
        <h3>{{ $category->name }}</h3>
    </a>
    <p>{{ $category->description }}</p>
</article>
@endforeach
@else
<div class="text-center">data kosong</div>
@endif
@endsection