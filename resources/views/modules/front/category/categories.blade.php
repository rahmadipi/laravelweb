@extends('layouts.list')

@section('header')
<h1>{{ $menu }}</h1>
<div class="w-100">
    <hr class="my-3">
</div>
@endsection

@section('content')
@if($categories->count())
<div class="card-deck">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-lg-4 col-xs-12">
            <div class="card mb-3">
                <a href="{{ url('blog?category='.$category->slug) }}" class="text-decoration-none">
                    @if($category->image)
                    <div style="max-height:250px;overflow:hidden;">
                        <img class="border border-danger rounded img-fluid"
                            src="{{ asset('storage/'.$category->image) }}" alt="{{ $category->name }}" height="100%"
                            width="100%">
                    </div>
                    @else
                    <img class="card-img-top border border-danger rounded"
                        src="https://source.unsplash.com/random/250x150/?{{ $category->name }}"
                        alt="{{ $category->name }}">
                    @endif
                    <div class="card-img-overlay d-flex align-items-center">
                        <h4 class="card-title text-center border border-light text-white flex-fill px-1 py-2"
                            style="background-color:rgba(220, 53, 69, 0.8)">
                            {{ $category->name }}
                        </h4>
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<div class="text-center">data kosong</div>
@endif
@endsection