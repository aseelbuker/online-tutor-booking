@extends('layouts.app')

@section('title', 'Edit Booking Session')
@section('content')
<h1>Edit Booking Session</h1>
<form action="{{ route('bookingsession.update', $bookingSession->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="booking_id" class="form-label">Booking ID</label>
        <input type="number" name="booking_id" id="booking_id" class="form-control @error('booking_id') is-invalid @enderror" value="{{ old('booking_id', $bookingSession->booking_id) }}">
        @error('booking_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="start_time" class="form-label">Start Time</label>
        <input type="datetime-local" name="start_time" id="start_time" class="form-control @error('start_time') is-invalid @enderror" value="{{ old('start_time', $bookingSession->start_time) }}">
        @error('start_time')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="end_time" class="form-label">End Time</label>
        <input type="datetime-local" name="end_time" id="end_time" class="form-control @error('end_time') is-invalid @enderror" value="{{ old('end_time', $bookingSession->end_time) }}">
        @error('end_time')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="meeting_link" class="form-label">Meeting Link</label>
        <input type="text" name="meeting_link" id="meeting_link" class="form-control @error('meeting_link') is-invalid @enderror" value="{{ old('meeting_link', $bookingSession->meeting_link) }}">
        @error('meeting_link')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
            <option value="pending" {{ old('status', $bookingSession->status) == 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="confirmed" {{ old('status', $bookingSession->status) == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
            <option value="completed" {{ old('status', $bookingSession->status) == 'completed' ? 'selected' : '' }}>Completed</option>
            <option value="canceled" {{ old('status', $bookingSession->status) == 'canceled' ? 'selected' : '' }}>Canceled</option>
        </select>
        @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="notes" class="form-label">Notes</label>
        <textarea name="notes" id="notes" class="form-control @error('notes') is-invalid @enderror">{{ old('notes', $bookingSession->notes) }}</textarea>
        @error('notes')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('bookingsession.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection
