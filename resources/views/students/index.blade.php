@extends("layout")
@section("content")
    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-3">
            <h1 class="h2">Students</h1>
            <a href="/students/create" class="btn btn-success">Add Student</a>
        </div>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>
                            <a href="{{ url('/students/' . $student->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ url('/students/' . $student->id . '/edit') }}" class="btn btn-warning btn-sm">Update</a>
                            <form action="{{ url('/students/' . $student->id) }}" method="POST">
                                {!! csrf_field() !!}
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
