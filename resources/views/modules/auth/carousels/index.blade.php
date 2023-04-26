@extends('layouts.auth')

@section('head')
<script src="{{ asset('vendor/sweetalert/sweetalert.all.js') }}"></script>
@endsection

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Carousels</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
<div class="d-flex">
    <a href="{{ url('/dashboard/carousels/create') }}" class="btn btn-sm btn-primary mb-2">
        <i data-feather="file-plus"></i> Add carousel item</a>
</div>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="flex-shrink-0 me-2" data-feather="check-circle"></i>
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@include('sweetalert::alert')

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Position</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carousels as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->title }}</td>
                <td>{{ $item->position }}</td>
                <td>
                    <a href="{{ url('/dashboard/carousels/'.$item->id) }}"><span class="badge bg-info"><i
                                data-feather="eye"></i></span></a>
                    <a href="{{ url('/dashboard/carousels/'.$item->id.'/edit') }}"><span class="badge bg-warning"><i
                                data-feather="edit"></i></span></a>
                    <form action="{{ url('/dashboard/carousels/'.$item->id) }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button id="delete-btn-{{ $loop->iteration }}" class="badge bg-danger border-0"
                            onclick="return deleteConfirmation({{ $loop->iteration }})"><i
                                data-feather="trash-2"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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