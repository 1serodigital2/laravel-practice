@extends('layouts.master')

@section('content')
    <div class="container my-4">

        <h1>Category Detail</h1>
        <h2>Category Name : {{ $data[0]->name }}</h2>
        <h2>Creation Date : {{ $data[0]->created_at }}</h2>
        <h2>Update Date : {{ $data[0]->updated_at }}</h2>
    </div>
@endsection
