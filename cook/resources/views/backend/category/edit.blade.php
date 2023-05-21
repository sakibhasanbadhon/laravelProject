
@extends('layouts.backend')
@section('title')
Update
@endsection

@section('content')

<div class="col-md-8 bg-white mx-auto mt-5 py-5 p-5">

    <div class="card-header ">
        <h4 class="card-title mb-0 d-flex justify-content-between">
            Update Category
            <a class="btn btn-sm btn-outline-danger" href="{{ route('category.index') }}">Back</a>
        </h4>
    </div>

    <div class="card-body">
        @include('backend.include.alert')
        <form action="{{ route('category.update',$category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="md-3">
                <label class="h6" for="category_name"> Category Name</label>
                <input type="text" name="category_name" class="form-control" value="{{ $category->name }}" id="category_name" >

                @error('category_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div class="md-3">
                <label class="h6" for="status"> Category Name</label>
                <select name="status" id="status" class="form-control">
                    <option value="0" {{ $category->status== 0 ? 'selected' : '' }}> Pending </option>
                    <option value="1" {{ $category->status== 1 ? 'selected' : '' }}> Active </option>
                </select>

                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

            </div> <br>
            <div class="text-end">
                <button type="submit" class="btn btn-sm btn-primary"> Create</button>

            </div>




        </form>

        <img src="images/icon.avatar-03.jpg" alt="">

    </div>



</div>



@endsection
