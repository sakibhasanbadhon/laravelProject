<x-backend>

    <div class="card-header">
        <h4 class="card-title mb-0 d-flex justify-content-between">Personal Information List
            <a href="{{ route('info.create') }}" class="btn btn-sm btn-outline-danger"> Add</a>
        </h4>
    </div>

    <div class="card-body">
        <table class="table table-hover table-sm ">
            <thead>
                <th>SL</th>
                <th>roll</th>
                <th>fname</th>
                <th>username</th>
                <th>email</th>
                <th>District</th>
                <th>Upazila</th>
                <th>Father</th>
                <th>Mother</th>
                <th>Gender</th>

            </thead>

            <thead>

                @foreach ($student as $item)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $item->roll }}</td>
                        <td>{{ $item->fname }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->address->district }}</td>
                        <td>{{ $item->address->upazila }}</td>
                        <td>{{ $item->information->father_name }}</td>
                        <td>{{ $item->information->mother_name }}</td>
                        <td>{{ $item->information->gender }}</td>
                    </tr>
                @endforeach

            </thead>

        </table>
    </div>


</x-backend>


