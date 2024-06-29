@extends('layouts.master')

@section('content')
    <div class="container my-4">
        <h1 class="mb-3">{{ $nightstay->nightstay }}</h1>
        <p><strong>Category : </strong>{{ $nightstay->category }}</p>
        <p><strong>Status : </strong>{{ $nightstay->status }}</p>
        <p><strong>Created at : </strong>{{ $nightstay->created_at }}</p>
        <p><strong>Updated at : </strong>{{ $nightstay->updated_at }}</p>
    </div>
@endsection
