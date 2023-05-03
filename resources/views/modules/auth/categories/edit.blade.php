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
    <h1 class="h2">Edit Category</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
<div class="col-lg-8 col-xs-12">
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <i class="flex-shrink-0 me-2" data-feather="info"></i>
        <div>
            Image size recommended should be 250x150.
        </div>
    </div>
    <form method="POST" action="{{ url('/dashboard/categories/'.$category->slug) }}" enctype="multipart/form-data">
        @method('put')
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('title',$category->name) }}" required autofocus>
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                value="{{ old('slug',$category->slug) }}" required>
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label @error('image') is-invalid @enderror">Category Image</label>
            <input type="hidden" name="oldImage" value="{{ $category->image }}">
            @if($category->image)
            <img src="{{ asset('storage/'.$category->image) }}" class="img-preview img-fluid mb-3 col-lg-6 d-block">
            @else
            <img class="img-preview img-fluid mb-3 col-lg-6">
            @endif
            <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            @error('description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="description" type="hidden" name="description"
                value="{{ old('description',$category->description) }}">
            <trix-editor input="description"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Update Category</button>
    </form>
</div>
@endsection

@section('foot')
<script>
    const name=document.querySelector('#name');
    const slug=document.querySelector('#slug');

    name.addEventListener('change',()=>{
        fetch('/dashboard/categories/createSlug?name='+name.value)
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