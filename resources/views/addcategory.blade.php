@extends('layouts.master')

@section('content')
    <div class="container my-4">
        <div class="card mx-md-5">
            <div class="card-body">
                <div class="card-title">Add Category</div>
                <form action="{{ route('add.category') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="">Name</label>
                        <input type="text" name="cat_name" class="form-control" required>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
