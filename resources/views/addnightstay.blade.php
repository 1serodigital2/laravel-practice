@extends('layouts.master')

@section('content')
    <div class="container my-4">
        <div class="card mx-md-5">
            <div class="card-body">
                <div class="card-title">Add Nightstay</div>
                <form action="{{ route('add.nightstay') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">Nightstay</label>
                                <input type="text" name="nightstay" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="">Category</label>
                                <select name="category" id="" class="form-control">
                                    <option value="">--Select Nightstay--</option>
                                    @foreach ($data as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
