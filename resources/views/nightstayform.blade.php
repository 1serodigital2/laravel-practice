@extends('layouts.master')

@section('content')
    <div class="container my-4">
        <div class="card mx-md-5">
            <div class="card-body">
                <div class="card-title">{{ isset($edit->id) ? 'Update' : 'Add' }} Nightstay</div>
                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                @if (isset($edit->id))
                    <form action="{{ route('nightstays.update', $edit->id) }}" method="POST">
                        @method('PUT')
                    @else
                        <form action="{{ route('nightstays.store') }}" method="POST">
                @endif
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="">Nightstay</label>
                            <input type="text" name="nightstay" class="form-control"
                                value="{{ old('nightstay', isset($edit->id) ? $edit->nightstay : null) }}">
                            @error('nightstay')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label for="">Category</label>
                            <select name="category_id" id="" class="form-control">
                                <option value="">--Select Nightstay--</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', isset($edit->id) ? $edit->category_id : '') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
