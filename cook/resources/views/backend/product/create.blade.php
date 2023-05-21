<?php Use Illuminate\Support\Facades\Auth; ?>

@extends('layouts.backend')
@section('title')
Add Recipe
@endsection

@section('content')

    <div class="col-md-10 bg-white mx-auto mt-5 py-5">

        <div class="card-header ">
            <h4 class="card-title mb-0 d-flex justify-content-between">
                Recipe List
                <a class="btn btn-sm btn-outline-danger" href="{{ route('product.index') }}">Back</a>
            </h4>
        </div>

        <div class="card-body">
            @include('backend.include.alert') {{-- error message shoe koranor jonno --}}

                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-md-8">

                            <div class="md-3 py-2">
                                <label for="product_name" class="form-label h6">Recipe Name</label>
                                <input type="text" name="product_name" class="form-control" id="product_name" placeholder="recipe name" value="{{ old('product_name') }}">
                                @error('product_name')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>

                            <div class="md-3 py-2">
                                <label for="product_des" class="form-label h6">Description</label>
                                <input type="text" name="product_des" class="form-control" id="product_des" placeholder="recipe description...." value="{{ old('product_des') }}">

                                @error('product_des')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>


                            <div class="md-3">
                                <label for="product_image" class="form-label h6">Recipe Image</label>
                                <input type="file" name="image" class="form-control" id="product_image" >
                                @error('image')
                                    <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>

                        </div>

                    <div class="col-md-4">

                        <div class="md-3 py-2">
                            <label for="category" class="form-label h6">Category</label>
                            <select name="category_id" id="category" class="form-control" value="{{ old('category') }}">
                                <option value="">Category Select</option>
                                @forelse ($catStatus as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @empty

                                @endforelse
                            </select>
                            @error('category_id')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <div class="md-3">
                            <label for="status" class="form-label h6">Status</label>

                            <select name="status" id="category" class="form-control">
                                <option value="">Brand Select</option>
                                    <option value="0"> Pending </option>
                                    <option value="1"> Active </option>
                            </select>

                            @error('status')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror

                        </div>

                        {{-- <input type="text" name="postBy"  class="form-control" value="{{ Auth::user->name }}" > --}}


                    </div>


                </div> <br>

                    <button type="submit" class="btn btn-info"> Create </button>

            </form>

        </div>
    </div>

@endsection
