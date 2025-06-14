@extends('layouts.app')

@section('title', 'Booking Sessions')
@section('content')
<h1>Booking Sessions</h1>
<a href="{{ route('bookingsession.create') }}" class="btn btn-primary mb-3">Add Booking Session</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Booking ID</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Meeting Link</th>
            <th>Status</th>
            <th>Notes</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($bookingSessions as $session)
        <tr>
            <td>{{ $session->id }}</td>
            <td>{{ $session->booking_id }}</td>
            <td>{{ $session->start_time }}</td>
            <td>{{ $session->end_time }}</td>
            <td>{{ $session->meeting_link }}</td>
            <td>{{ $session->status }}</td>
            <td>{{ $session->notes }}</td>
            <td>
                <a href="{{ route('bookingsession.edit', $session->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('bookingsession.destroy', $session->id) }}" method="POST" style="display:inline-block;">
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
