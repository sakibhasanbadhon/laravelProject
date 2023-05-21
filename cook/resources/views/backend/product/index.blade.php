
@extends('layouts.backend')
@section('title')
Recipe
@endsection

@section('content')



<div class="col-md-10 bg-white mx-auto mt-5 py-5">

    <div class="card-header ">
        <h4 class="card-title mb-0 d-flex justify-content-between">
            Recipe List
            <a class="btn btn-sm btn-outline-primary" href="{{ route('product.create') }}">Add Recipe</a>
        </h4>
    </div>

    <div class="card-body">
        <table class="table table-sm table-hover text-center table-striped">
            <thead>
                <th>SL</th>
                <th>Image</th>
                <th>product</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>

                @forelse ($products as $item)
                    <tr>
                        <td> {{ $loop->index+1 }}</td>
                        <td> <img width="80" height="80" src="{{ $item->image != null ? asset('images/products/'.$item->image)  : 'https://via.placeholder.com/80' }}"> </td>
                        <td> {{ $item->product_name }} </td>
                        <td> {{ $item->product_des }} </td>
                        <td class="py-2">
                            @if ($item->status == 1)
                                <span class="text-success h3"><i class="fas fa-check-square"></i></span>
                            @else
                                <span class="badge badge-warning">Pending</span>
                            @endif

                        </td>
                        <td style="background-color: #9292a518">


                            <div class="d-flex py-2 align-items-center">

                                <a href="{{ route('category.edit',$item->id) }}" class="btn btn-success mr-2 text-white btn-sm"><i class="fas fa-eye"></i></a>
                                <a href="{{ route('product.edit',$item->id) }}" class="btn btn-secondary mr-2 text-white btn-sm"><i class="fas fa-edit"></i></a>

                                <form id="delete-form-{{ $item->id }}" action="{{ route('category.delete',$item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')


                                </form>

                                <button type="button" onclick="sweetAlert({{ $item->id }})" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </div>


                        </td>
                    </tr>

                @empty

                <tr>
                    <td colspan="4" class="text-danger"> No data found</td>
                </tr>

                @endforelse



            </tbody>
        </table>
    </div>

</div>




@endsection
