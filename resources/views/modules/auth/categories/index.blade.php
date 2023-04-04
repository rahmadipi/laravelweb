@extends('layouts.auth')

@section('head')
@endsection

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Categories</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
<div class="d-flex">
    <a href="{{ url('/dashboard/categories/create') }}" class="btn btn-sm btn-primary mb-2">
        <i data-feather="file-plus"></i> Create new category</a>
</div>

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Created at</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at }}</td>
                <td>
                    <a href="{{ url('/dashboard/categories/'.$category->slug) }}"><span class="badge bg-info"><i
                                data-feather="eye"></i></span></a>
                    <a href="{{ url('/dashboard/categories/'.$category->slug.'/edit') }}"><span
                            class="badge bg-warning"><i data-feather="edit"></i></span></a>
                    <form action="{{ url('/dashboard/categories/'.$category->slug) }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><i
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
@endsection