@extends("layout")
@section("content")
    <h1>Name: {{ $student->name }}</h1>
    <p>Email: {{ $student->email }}</p>
@endsection
