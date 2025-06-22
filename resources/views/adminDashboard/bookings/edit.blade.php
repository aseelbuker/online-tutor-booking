@extends('layouts.adminPnl')
@section('title', 'Edit Booking')
@section('content')
<div class="container-fluid py-4">
    <h1 class="fw-bold mb-2">Edit Booking</h1>
    <p class="mb-4 text-muted">Update the booking's information.</p>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.bookings.update', $booking->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select" id="status" name="status">
                        <option value="scheduled" @if($booking->status == 'scheduled') selected @endif>Scheduled</option>
                        <option value="completed" @if($booking->status == 'completed') selected @endif>Completed</option>
                        <option value="cancelled" @if($booking->status == 'cancelled') selected @endif>Cancelled</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update Booking</button>
            </form>
        </div>
    </div>
</div>
@endsection 