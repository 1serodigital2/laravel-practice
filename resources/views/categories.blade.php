@extends('layouts.master')

@section('content')
    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-4">All Categories</h1>
            <a href="/add-category" class="btn btn-sm btn-primary">+ Add Category</a>
        </div>
        @php
            // print_r($data);
        @endphp
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $c = 1;
                @endphp
                @foreach ($data as $i => $category)
                    <tr>
                        <td>{{ $c++ }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->status }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <a href="{{ route('view.category', $category->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('update.category', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <a href="{{ route('delete.category', $category->id) }}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure to delte this category?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
