@extends('layouts.app')

@section('title', 'Booking Session Details')
@section('content')
<h1>Booking Session Details</h1>
<table class="table table-bordered">
    <tr><th>ID</th><td>{{ $bookingSession->id }}</td></tr>
    <tr><th>Booking ID</th><td>{{ $bookingSession->booking_id }}</td></tr>
    <tr><th>Start Time</th><td>{{ $bookingSession->start_time }}</td></tr>
    <tr><th>End Time</th><td>{{ $bookingSession->end_time }}</td></tr>
    <tr><th>Meeting Link</th><td>{{ $bookingSession->meeting_link }}</td></tr>
    <tr><th>Status</th><td>{{ $bookingSession->status }}</td></tr>
    <tr><th>Notes</th><td>{{ $bookingSession->notes }}</td></tr>
</table>
<a href="{{ route('BookingSession.index') }}" class="btn btn-secondary">Back</a>
@endsection 