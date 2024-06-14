@extends('layouts.master')

@section('content')
    <div class="container my-4">
        <h1 class="mb-3">{{ $data[0]->name }}</h1>
        <p><strong>Status : </strong>{{ $data[0]->status }}</p>
        <p><strong>Created at : </strong>{{ $data[0]->created_at }}</p>
        <p><strong>Updated at : </strong>{{ $data[0]->updated_at }}</p>
    </div>
@endsection
