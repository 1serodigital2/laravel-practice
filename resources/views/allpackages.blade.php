@extends('layouts.master')

@section('content')
    <div class="container my-4">
        <h1 class="mb-3">All Packages</h1>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Duration</th>
                    <th>Category</th>
                    <th>Nightstays</th>
                    <th>Status</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $c = 0;
                @endphp
                @foreach ($data as $package)
                    <tr>
                        <td>{{ $c++ }}</td>
                        <td>{{ $package->pkg_name }}</td>
                        <td>{{ $package->days }}</td>
                        <td>{{ $package->cat_name }}</td>
                        <td>{{ $package->nightstay }}</td>
                        <td>{{ $package->status }}</td>
                        <td><a href="{{ route('view.package', $package->pkg_id) }}" class="btn btn-sm btn-info">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
