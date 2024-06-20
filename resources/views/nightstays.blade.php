@extends('layouts.master')

@section('content')
    <div class="container my-4">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="mb-3">All Nightstays</h1>
            <a href="{{ route('add.nightstaypage') }}" class="btn btn-sm btn-primary">+ Add Nightstay</a>
        </div>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Category</th>
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
                @foreach ($data as $i => $nightstay)
                    <tr>
                        <td>{{ $c++ }}</td>
                        <td>{{ $nightstay->nightstay }}</td>
                        <td>{{ $nightstay->category }}</td>
                        <td>{{ $nightstay->status }}</td>
                        <td>{{ $nightstay->created_at }}</td>
                        <td>{{ $nightstay->updated_at }}</td>
                        <td>
                            <a href="{{ route('view.nightstay', $nightstay->id) }}" class="btn btn-sm btn-info">View</a>
                            <a href="" class="btn btn-warning btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure to delte this nightstay?')">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
