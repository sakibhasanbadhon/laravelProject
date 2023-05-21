
@extends('layouts.backend')
@section('title')
Category
@endsection

@section('content')



<div class="col-md-10 bg-white mx-auto mt-5 py-5">

    <div class="card-header ">
        <h4 class="card-title mb-0 d-flex justify-content-between">
            Category List
            <a class="btn btn-sm btn-outline-primary" href="{{ route('category.create') }}">Add Category</a>
        </h4>
    </div>

    <div class="card-body">
        <table class="table table-sm table-hover text-center table-striped">
            <thead>
                <th>SL</th>
                <th>Category Name</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>

                @forelse ($categories as $item)
                    <tr>
                        <td> {{ $loop->index+1 }}</td>
                        <td> {{ $item->name }} </td>
                        <td class="py-2">
                            @if ($item->status == 1)
                                <span class="text-success h3"><i class="fas fa-check-square"></i></span>
                            @else
                                <span class="text-warning h3"><i class="fas fa-eye-slash"></i></span>
                            @endif

                        </td>
                        <td>


                            <div class="d-flex py-2 align-items-center">

                                <a href="{{ route('category.edit',$item->id) }}" class="btn btn-info mr-2 text-white btn-sm"><i class="fas fa-edit"></i></a>

                                <form id="delete-form-{{ $item->id }}" action="{{ route('category.delete',$item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')


                                </form>

                                <button type="button" onclick="sweetAlert({{ $item->id }})" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"></i></button>
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
