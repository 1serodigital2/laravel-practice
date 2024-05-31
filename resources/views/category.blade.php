@extends('layouts.master')

@section('content')
    <div class="container my-4">

        <h1>Category Detail</h1>
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>SL No</th>
                    <th>Name</th>
                    <th>Created At</th>
                    <th>Updated At</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
