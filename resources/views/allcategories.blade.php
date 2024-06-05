@extends('layouts.master')

@section('content')
    <div class="container my-4">

        <h1>All Categories</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>SL No</th>
                    <th>name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $c = 1;
                @endphp
                @foreach ($data as $id => $category)
                    <tr>
                        <td>{{ $c++ }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                            <a href="{{ route('view.category', $category->id) }}" class="btn btn-sm btn-info">View
                                category</a>
                            <a href="{{ route('delete.category', $category->id) }}" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure you want to delete this data?');">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
