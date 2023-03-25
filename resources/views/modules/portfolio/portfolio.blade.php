@extends('layouts.single')

@section('header')
<h1>{{ $portfolio->title }}</h1>
@endsection

@section('content')
<p>{{ $portfolio->description }}</p>
@endsection