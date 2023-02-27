@extends("layout")
@section("content")
    <div class="container my-5">
        <div class="card">
            <div class="card-header">Student Create</div>
            <div class="card-body">
                <form action="{{ url('/students') }}" method="POST">
                    {!! csrf_field() !!}
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                        @error("name")
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error("email")
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
