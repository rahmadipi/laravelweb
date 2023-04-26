@extends('layouts.auth')

@section('head')
@endsection

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Carousel Item</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
<div class="col-lg-8 col-xs-12">
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <i class="flex-shrink-0 me-2" data-feather="info"></i>
        <div>
            Image size recommended should be 1349x512.
        </div>
    </div>
    <form method="POST" action="{{ url('/dashboard/carousels/') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') }}" required autofocus>
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" name="link"
                value="{{ old('link') }}" required>
            @error('link')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Url</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url"
                value="{{ old('url') }}" required>
            @error('url')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <select class="form-select" name="position" required>
                @foreach($positions as $position)
                @if(old('position')==$position)
                <option value="{{ $position }}" selected>{{ $position }}</option>
                @else
                <option value="{{ $position }}">{{ $position }}</option>
                @endif
                @endforeach
            </select>
            @error('position')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label @error('image') is-invalid @enderror">Carousel Image</label>
            <img class="img-preview img-fluid mb-3 col-lg-6">
            <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <input type="text" class="form-control @error('body') is-invalid @enderror" id="body" name="body"
                value="{{ old('body') }}" required>
            @error('body')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-3">Add Carousel Item</button>
    </form>
</div>
@endsection

@section('foot')
<script>
    function previewImage(){
        const image=document.querySelector('#image');
        const imgPreview=document.querySelector('.img-preview');

        imgPreview.style.display="block";

        const oFReader=new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload=function(oFREvent){
            imgPreview.src=oFREvent.target.result;
        }
    } 
</script>
@endsection