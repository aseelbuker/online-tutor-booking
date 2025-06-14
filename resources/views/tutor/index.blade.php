@extends('layouts.app')

@section('title', 'Tutors')
@section('content')
<h1>Tutors</h1>
<a href="{{ route('tutor.create') }}" class="btn btn-primary mb-3">Add Tutor</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tutors as $tutor)
        <tr>
            <td>{{ $tutor->id }}</td>
            <td>{{ $tutor->name }}</td>
            <td>{{ $tutor->email }}</td>
            <td>
                <a href="{{ route('tutor.edit', $tutor->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('tutor.destroy', $tutor->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
