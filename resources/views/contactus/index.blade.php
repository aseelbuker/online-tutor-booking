@extends('layouts.app')

@section('title', 'Contact Messages')
@section('content')
<h1>Contact Messages</h1>
<a href="{{ route('contactus.create') }}" class="btn btn-primary mb-3">New Message</a>
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
        @foreach($contacts as $contact)
        <tr>
            <td>{{ $contact->id }}</td>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>
                <a href="{{ route('contactus.show', $contact->id) }}" class="btn btn-sm btn-info">Show</a>
                <form action="{{ route('contactus.destroy', $contact->id) }}" method="POST" style="display:inline-block;">
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