@extends('layouts.app')

@section('title', 'Subject-Tutor Relations')
@section('content')
<h1>Subject-Tutor Relations</h1>
<a href="{{ route('subjecttutor.create') }}" class="btn btn-primary mb-3">Add Relation</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Subject</th>
            <th>Tutor</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($subjectTutors as $relation)
        <tr>
            <td>{{ $relation->id }}</td>
            <td>{{ $relation->subject->name ?? '' }}</td>
            <td>{{ $relation->tutor->name ?? '' }}</td>
            <td>
                <a href="{{ route('subjecttutor.edit', $relation->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('subjecttutor.destroy', $relation->id) }}" method="POST" style="display:inline-block;">
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