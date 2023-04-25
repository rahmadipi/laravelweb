@extends('layouts.auth')

@section('head')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">View carousel item</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
<div class="col-lg-8 col-xs-12">
    <div class="col-xs-12">
        <a href="{{ url('/dashboard/carousels/') }}"><span class="btn btn-sm btn-dark"><i data-feather="arrow-left"></i>
                Back to
                carousels</span></a>
        <a href="{{ url('/dashboard/carousels/'.$carousel->id.'/edit') }}"><span
                class="btn btn-sm btn-warning text-light"><i data-feather="edit"></i> Edit item</span></a>
        <form action="{{ url('/dashboard/carousels/'.$carousel->id) }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button id="delete-btn-0" class="btn btn-sm btn-danger" onclick="return deleteConfirmation(0)"><i
                    data-feather="trash-2"></i> Delete item</button>
        </form>
    </div>
    <div class="col-xs-12">
        <div class="w-100">
            <hr class="my-2">
        </div>
    </div>
    <div class="col-xs-12">
        @if($carousel->image)
        <div style="max-height:512px;overflow:hidden;">
            <img class="img-fluid" src="{{ asset('storage/'.$carousel->image) }}" alt="{{ $carousel->title }}">
        </div>
        @else
        <img class="img-fluid" src="https://source.unsplash.com/random/1349x512/?animal" alt="{{ $carousel->title }}">
        @endif

        <div
            class="@if($carousel->position=='left') text-start @elseif($carousel->position=='right') text-end @else text-center @endif">
            <h1>{{ $carousel->title }}</h1>
            <p>{{ $carousel->body }}</p>
            <p><a class="btn btn-lg btn-danger" href="{{ $carousel->url }}">{{ $carousel->link }}</a></p>
        </div>
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