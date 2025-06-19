@extends('layouts.app')

@section('title', 'Booking Details')
@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Booking Details</h2>
        <div class="d-flex gap-2">
            <a href="{{ route('booking.edit', $booking->id) }}" class="btn btn-warning">
                <i class="fas fa-edit me-1"></i> Edit
            </a>
            <a href="{{ route('booking.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left me-1"></i> Back to List
            </a>
        </div>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="mb-3">Booking Information</h4>
                    <table class="table">
                        <tr>
                            <th>Booking ID:</th>
                            <td>{{ $booking->id }}</td>
                        </tr>
                        <tr>
                            <th>Status:</th>
                            <td>
                                <span class="badge bg-{{ $booking->status === 'confirmed' ? 'success' : ($booking->status === 'cancelled' ? 'danger' : 'warning') }}">
                                    {{ ucfirst($booking->status) }}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <th>Scheduled Time:</th>
                            <td>{{ $booking->scheduled_time->format('M d, Y H:i') }}</td>
                        </tr>
                        <tr>
                            <th>Price:</th>
                            <td>${{ number_format($booking->price, 2) }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                    <h4 class="mb-3">Participants</h4>
                    <table class="table">
                        <tr>
                            <th>Student:</th>
                            <td>{{ $booking->student->name }}</td>
                        </tr>
                        <tr>
                            <th>Tutor:</th>
                            <td>{{ $booking->tutor->name }}</td>
                        </tr>
                        <tr>
                            <th>Subject:</th>
                            <td>{{ $booking->subject->name }} ({{ $booking->subject->level }})</td>
                        </tr>
                    </table>
                </div>
            </div>

            @if($booking->session)
                <div class="mt-4">
                    <h4 class="mb-3">Session Information</h4>
                    <table class="table">
                        <tr>
                            <th>Start Time:</th>
                            <td>{{ $booking->session->start_time->format('M d, Y H:i') }}</td>
                        </tr>
                        <tr>
                            <th>End Time:</th>
                            <td>{{ $booking->session->end_time ? $booking->session->end_time->format('M d, Y H:i') : 'Not ended' }}</td>
                        </tr>
                        <tr>
                            <th>Meeting Link:</th>
                            <td>
                                @if($booking->session->meeting_link)
                                    <a href="{{ $booking->session->meeting_link }}" target="_blank" class="btn btn-sm btn-primary">
                                        <i class="fas fa-video me-1"></i> Join Meeting
                                    </a>
                                @else
                                    Not provided
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Notes:</th>
                            <td>{{ $booking->session->notes ?? 'No notes' }}</td>
                        </tr>
                    </table>
                </div>
            @endif

            <div class="mt-4">
                <form action="{{ route('booking.destroy', $booking->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this booking?')">
                        <i class="fas fa-trash me-1"></i> Delete Booking
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 