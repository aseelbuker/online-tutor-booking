@extends('layouts.adminPnl')
@section('title', 'Booking Management')
@section('content')
<div class="container-fluid py-4">
    <h1 class="fw-bold mb-2 text-primary">Booking Management</h1>
    <p class="mb-4 text-muted">View and monitor all platform bookings</p>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold mb-0">All Bookings</h4>
                <form class="d-flex" style="max-width: 320px;">
                    <input class="form-control form-control-sm me-2" type="search" placeholder="Search bookings...">
                    <button class="btn btn-outline-secondary btn-sm" type="button"><i class="fas fa-filter"></i> Filter</button>
                </form>
            </div>
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Student</th>
                        <th>Tutor</th>
                        <th>Subject</th>
                        <th>Date & Time</th>
                        <th>Duration</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td class="fw-bold text-primary">{{ $booking->student->name }}</td>
                        <td>{{ $booking->tutor->name }}</td>
                        <td>{{ $booking->subject->name }}</td>
                        <td><i class="far fa-calendar-alt me-1"></i>{{ $booking->scheduled_time->format('Y-m-d \a\t g:i A') }}</td>
                        <td>1h</td>
                        <td class="fw-bold text-primary">${{ number_format($booking->price, 2) }}</td>
                        <td><span class="badge bg-primary bg-opacity-25 text-primary">{{ $booking->status }}</span></td>
                        <td>
                            <a href="{{ route('admin.bookings.edit', $booking->id) }}" class="text-info me-2"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger p-0" onclick="return confirm('Are you sure you want to delete this booking?')"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 