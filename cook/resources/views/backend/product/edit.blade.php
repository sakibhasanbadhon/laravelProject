@extends('layouts.backend')
@section('content')

<style>
    #imgStyle{
        border: 1px solid #ddd; /* Gray border */
        border-radius: 4px;  /* Rounded border */
        padding: 5px; /* Some padding */
        width: 150px; /* Set a small width */

    }

    #imgStyle:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>

<div class="col-md-10 bg-white mx-auto mt-5 py-5">

    <div class="card-header">
        <h4 class="card-title mb-0 d-flex justify-content-between"> Update Product
            <a href="{{ route('product.index') }}" class="btn btn-sm btn-outline-danger"> Back</a>
        </h4>
    </div>

    <div class="card-body bg-white">
        @include('backend.include.alert') {{-- error message shoe koranor jonno --}}

        <form action="{{ route('product.update',$catStatus->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-8">
                    <div class="md-3 py-4">
                        <label for="product_name" class="form-label">product Name</label>
                        <input type="text" value="{{ $catStatus->product_name }}" name="product_name" class="form-control" id="product_name" >
                        @error('product_name')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label for="product_des" class="form-label">product Description</label>
                        <input type="text" value="{{ $catStatus->product_des }}" name="product_des" class="form-control" id="product_des" >
                        @error('product_des')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>



                    <div class="md-3 py-4">
                        <label for="product_image" class="form-label">Feature Image</label>
                        <input type="file" name="image" class="form-control" id="product_image" >
                        @error('image')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>



                </div> <br>


                <div class="col-md-4">

                    <img id="imgStyle" class="ml-5" src="{{ $catStatus->image != null ? asset('images/products/'.$catStatus->image)  : 'https://via.placeholder.com/80' }}" width="100" height="80" alt="">
                    <hr>



                    <div class="md-3">
                        <label for="category" class="form-label">Category</label>
                        <select name="category_id" id="category" class="form-control">
                            <option value="">Brand Select</option>
                            @forelse ($categories as $category)
                                <option value="{{ $category->id }}" {{ $catStatus->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                            @empty

                            @endforelse
                        </select>
                        @error('category_id')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label for="status" class="form-label">status</label>

                        <select name="status" id="category" class="form-control">
                            <option value="">Brand Select</option>
                                <option value="0" {{ $catStatus->status == 0 ? 'selected' : '' }}> Pending </option>
                                <option value="1" {{ $catStatus->status == 1 ? 'selected' : '' }}> Published </option>
                        </select>

                        @error('status')
                            <span class="text-danger"> {{ $message }}</span>
                        @enderror
                    </div>



                </div>
            </div>


            <button type="submit" class="btn btn-info"> Update </button>


        </form>

    </div>
</div>

@endsection
