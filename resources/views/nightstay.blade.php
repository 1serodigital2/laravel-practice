@extends('layouts.master')

@section('content')
    <div class="container my-4">
        <h1 class="mb-3">{{ $data->nightstay }}</h1>
        <p><strong>Category : </strong>{{ $data->category }}</p>
        <p><strong>Status : </strong>{{ $data->status }}</p>
        <p><strong>Created at : </strong>{{ $data->created_at }}</p>
        <p><strong>Updated at : </strong>{{ $data->updated_at }}</p>
    </div>
@endsection
