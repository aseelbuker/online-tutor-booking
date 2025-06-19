@extends('layouts.adminPnl')
@section('title', 'Booking Management')
@section('content')
<div class="container py-4">
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
                    <tr>
                        <td class="fw-bold text-primary">John Doe</td>
                        <td>Dr. Emily Johnson</td>
                        <td>Mathematics</td>
                        <td><i class="far fa-calendar-alt me-1"></i>2024-05-28 at 3:00 PM</td>
                        <td>1h</td>
                        <td class="fw-bold text-primary">$50</td>
                        <td><span class="badge bg-primary bg-opacity-25 text-primary">scheduled</span></td>
                        <td><a href="#" class="text-info"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-primary">Alice Smith</td>
                        <td>Mark Thompson</td>
                        <td>Physics</td>
                        <td><i class="far fa-calendar-alt me-1"></i>2024-05-29 at 10:00 AM</td>
                        <td>1.5h</td>
                        <td class="fw-bold text-primary">$75</td>
                        <td><span class="badge bg-success bg-opacity-25 text-success">completed</span></td>
                        <td><a href="#" class="text-info"><i class="fas fa-eye"></i></a></td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-primary">Bob Johnson</td>
                        <td>Sarah Wilson</td>
                        <td>English</td>
                        <td><i class="far fa-calendar-alt me-1"></i>2024-05-30 at 2:00 PM</td>
                        <td>1h</td>
                        <td class="fw-bold text-primary">$50</td>
                        <td><span class="badge bg-danger bg-opacity-25 text-danger">cancelled</span></td>
                        <td><a href="#" class="text-info"><i class="fas fa-eye"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 