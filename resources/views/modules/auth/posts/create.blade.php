@extends('layouts.auth')

@section('head')
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
<style>
    trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
    }
</style>
@endsection

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
<div class="col-lg-8 col-xs-12">
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <i class="flex-shrink-0 me-2" data-feather="info"></i>
        <div>
            Image size recommended should be 1200x450.
        </div>
    </div>
    <form method="POST" action="{{ url('/dashboard/posts/') }}" enctype="multipart/form-data">
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
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                value="{{ old('slug') }}" required>
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Category</label>
            <select class="form-select" name="category_id" required>
                @foreach($categories as $category)
                @if(old('category_id')==$category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label @error('image') is-invalid @enderror">Post Image</label>
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
            @error('body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
            <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Create Post</button>
    </form>
</div>
@endsection

@section('foot')
<script>
    const title=document.querySelector('#title');
    const slug=document.querySelector('#slug');

    title.addEventListener('change',()=>{
        fetch('/dashboard/posts/createSlug?title='+title.value)
        .then(response => response.json())
        .then(data=>slug.value=data.slug);
    });

    document.addEventListener('trix-file-accept',function(e){
        e.preventDefault();
    });

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