@extends('layouts.master')

@section('content')
    {{-- @php
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    @endphp --}}
    <div class="container my-4">
        <h1 class="mb-4">All Nightstays</h1>
        <table class="table table-striped table-hovered table-bordered">
            <thead>
                <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $c = 1;
                @endphp
                @foreach ($data as $i => $nstay)
                    <tr>
                        <td>{{ $c++ }}</td>
                        <td>{{ $nstay->name }}</td>
                        <td>{{ $nstay->cat_name }}</td>
                        <td>{{ $nstay->status }}</td>
                        <td>{{ $nstay->created_at }}</td>
                        <td>{{ $nstay->updated_at }}</td>
                        <td><a href="{{ route('view.nightstay', $nstay->id) }}">View</a></td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
