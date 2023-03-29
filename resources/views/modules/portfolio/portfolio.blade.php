@extends('layouts.single')

@section('header')
<h1>{{ $portfolio->title }}</h1>
<div class="w-100">
    <hr class="my-3">
</div>
@endsection

@section('content')
<p>{{ $portfolio->description }}</p>
@endsection