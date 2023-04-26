@extends('layouts.auth')

@section('head')
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">View post</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
<div class="col-lg-8 col-xs-12">
    <div class="col-xs-12 text-center">
        <h1>{{ $post->title }}</h1>
    </div>
    <div class="col-xs-12">
        <div class="w-100">
            <hr class="my-2">
        </div>
    </div>
    <div class="col-xs-12">
        <a href="{{ url('/dashboard/posts/') }}"><span class="btn btn-sm btn-dark"><i data-feather="arrow-left"></i>
                Back to
                posts</span></a>
        <a href="{{ url('/dashboard/posts/'.$post->slug.'/edit') }}"><span class="btn btn-sm btn-warning text-light"><i
                    data-feather="edit"></i> Edit post</span></a>
        <form action="{{ url('/dashboard/posts/'.$post->slug) }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button id="delete-btn-0" class="btn btn-sm btn-danger" onclick="return deleteConfirmation(0)"><i
                    data-feather="trash-2"></i>
                Delete post</button>
        </form>
    </div>
    <div class="col-xs-12">
        <div class="w-100">
            <hr class="my-2">
        </div>
    </div>
    <div class="col-xs-12">
        <small class="text-muted">
            category <u>{{ $post->category->name }}</u>
        </small>
        <div class="w-100">
            <hr class="mb-1 mt-0">
        </div>
        @if($post->image)
        <div style="max-height:450px;overflow:hidden;">
            <img class="img-fluid" src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->title }}">
        </div>
        @else
        <img class="img-fluid"
            src="https://source.unsplash.com/random/1200x500/?{{ $post->category->name }},{{ $post->title }}"
            alt="{{ $post->title }}">
        @endif
        <div class="w-100">
            <hr class="my-1">
        </div>
        <article class="my-3">
            <p>{!! $post->body !!}</p>
        </article>
    </div>
</div>
@endsection

@section('foot')
<script type="application/javascript">
    function deleteConfirmation(id){
        const btn = document.getElementById('delete-btn-'+id);
        btn.disabled = true; // disable the button

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If user confirms deletion, submit the form
                btn.form.submit();
            } else {
                // If user cancels deletion, enable the button again
                btn.disabled = false;
            }
        });

        // Return false to prevent the default form submission behavior
        return false;
    }
</script>
@endsection