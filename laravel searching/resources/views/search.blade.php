<!DOCTYPE html>
<html>

<head>
    <title>Laravel Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Simple Search</h3><br>
                <form action="{{ route('simple_search') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Type the name"
                            aria-describedby="basic-addon2" name="search">
                        <div class="input-group-append">
                            <button class="btn btn-secondary" type="submit">Search</button>
                        </div>
                    </div>
                </form>
                <form action="{{ route('advance_search') }}" method="GET">
                    <h3>Advanced Search</h3><br>
                    <input type="text" name="name" class="form-control" placeholder="Person's name"><br>
                    <input type="text" name="address" class="form-control" placeholder="Address"><br>
                    <label>Range of Age</label>
                    <div class="input-group">
                        <input type="text" name="min_age" class="form-control" placeholder="Start Age">
                        <input type="text" name="max_age" class="form-control" placeholder="End of Age">
                    </div><br>
                    <input type="submit" value="Search" class="btn btn-secondary">
                </form>
            </div>
            <div class="col-md-8">
                <h3>List of People</h3>
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Age</th>
                    </tr>
                    @foreach($data as $pep)
                    <tr>
                        <td>{{ $pep->id }}</td>
                        <td>{{ $pep->name }}</td>
                        <td>{{ $pep->address }}</td>
                        <td>{{ $pep->age }}</td>
                    </tr>
                    @endforeach
                </table>
                {{ $data->appends(request()->except('page'))->links() }}
            </div>
        </div>
    </div>
</body>

</html>
