@extends('layouts.app')

@section('title', 'Subjects')
@section('content')
<h1>Subjects</h1>
<a href="{{ route('subject.create') }}" class="btn btn-primary mb-3">Add Subject</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Level</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($subjects as $subject)
        <tr>
            <td>{{ $subject->id }}</td>
            <td>{{ $subject->name }}</td>
            <td>{{ $subject->level }}</td>
            <td>
                <a href="{{ route('subject.edit', $subject->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('subject.destroy', $subject->id) }}" method="POST" style="display:inline-block;">
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