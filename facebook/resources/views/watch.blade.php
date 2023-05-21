<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Watch List</title>
</head>
<body>


    <div class="card-header">
        <h4 class="card-title mb-0">Product List

        </h4>
    </div>


    <div class="card-body">
        <table class="table table-sm table-hover text-center table-bordered">
            <thead>
                <th> SL </th>
                <th> Email </th>
                <th> pcode </th>

            </thead>
            <tbody>


                    @foreach ($home_val as $item)
                        <tr>
                            <td> {{ $loop->index+1 }} </td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->email }} </td>

                            {{-- <td>
                                <a href="{{ route('products.show',$product->id) }}" class="btn btn-success btn-sm">  view </a>

                                <a href="{{ route('products.edit',$product->id) }}" class="btn btn-info btn-sm"> edit </a>

                                <form method="POST" id="delete-form-{{ $product->id }}" class="pl-2 d-none" action="{{ route('products.destroy',$product->id) }}" >
                                    @csrf
                                    @method('DELETE')

                                </form>

                                <button type="button" onclick="sweetAlert({{ $product->id }})"  class="btn btn-danger btn-sm"> delete</button>

                            </td> --}}

                        </tr>
                    @endforeach




            </tbody>
        </table>
    </div>

</body>
</html>
