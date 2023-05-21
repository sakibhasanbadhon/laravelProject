
@extends('layouts.backend')
@section('title')
Category
@endsection

@section('content')

<div class="col-md-8 bg-white mx-auto mt-5 py-5 p-5">

    <div class="card-header ">
        <h4 class="card-title mb-0 d-flex justify-content-between">
            New Category
            <a class="btn btn-sm btn-outline-danger" href="{{ route('category.index') }}">Back</a>
        </h4>
    </div>

    <div class="card-body">
        @include('backend.include.alert')
        <form action="{{ route('category.store') }}" method="POST">
            @csrf

            <div class="md-3">
                <label class="h6" for="category_name"> Category Name</label>
                <input type="text" name="category_name" class="form-control " id="category_name" placeholder="Type category name" >

                @error('category_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div class="md-3">
                <label class="h6" for="status"> Category Name</label>
                <select name="status" id="status" class="form-control">
                    <option value="0"> Pending </option>
                    <option value="1"> Active </option>
                </select>

                @error('status')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div> <br>
            <div class="text-end">
                <button type="submit" class="btn btn-sm btn-primary"> Create</button>

            </div>




        </form>

    </div>



</div>



@endsection
