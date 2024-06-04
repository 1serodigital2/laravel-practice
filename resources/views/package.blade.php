@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="mb-4">Package Detail</h1>
        @php
            // print_r($package);
        @endphp
        <h2>Name : {{ $package[0]->name }}</h2>
        <h2>Duration : {{ $package[0]->days }}</h2>
        <h2>Description : {{ $package[0]->description }}</h2>
        <h2>Status : {{ $package[0]->status }}</h2>
        <h2>Created At : {{ $package[0]->created_at }}</h2>
        <h2>Updated At : {{ $package[0]->updated_at }}</h2>
        <h2>Category : {{ $package[0]->cat_name }}</h2>
        <h2>Nightstay : {{ $package[0]->nightstay }}</h2>
    </div>
@endsection
