@extends('layouts.adminPnl')
@section('title', 'Admin Dashboard')
@section('content')
<div class="container-fluid py-4">
    <h1 class="fw-bold mb-2">Admin Dashboard</h1>
    <p class="mb-4 text-muted">Manage tutors, students, and platform content</p>
    <div class="row mb-4 g-3">
        <div class="col-md-2">
            <div class="card text-center h-100">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-calendar-alt fa-2x text-primary"></i></div>
                    <h6 class="card-title">Total Bookings</h6>
                    <div class="display-6 fw-bold">{{ number_format($totalBookings) }}</div>
                    <div class="text-success small">+12% this month</div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-center h-100">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-dollar-sign fa-2x text-info"></i></div>
                    <h6 class="card-title">Total Revenue</h6>
                    <div class="display-6 fw-bold">${{ number_format($totalRevenue, 2) }}</div>
                    <div class="text-success small">+8% this month</div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-center h-100">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-user-plus fa-2x text-info"></i></div>
                    <h6 class="card-title">New Tutors</h6>
                    <div class="display-6 fw-bold">{{ number_format($newTutors) }}</div>
                    <div class="text-muted small">This month</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center h-100">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-exclamation-triangle fa-2x text-warning"></i></div>
                    <h6 class="card-title">Reported Reviews</h6>
                    <div class="display-6 fw-bold">{{ ($reportedReviews) }}</div>
                    <div class="text-warning small">Needs attention</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center h-100">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-bell fa-2x text-info"></i></div>
                    <h6 class="card-title">Notifications Sent</h6>
                    <div class="display-6 fw-bold">{{ ($notificationsSent) }}</div>
                    <div class="text-muted small">This month</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4 g-3">
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Bookings Trend</h5>
                    <div class="d-flex flex-column align-items-center justify-content-center" style="height:180px;">
                        <i class="fas fa-arrow-up fa-2x text-primary mb-2"></i>
                        <span class="text-muted">Line Chart: Last 6 months</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">Active Tutors per Week</h5>
                    <div class="d-flex flex-column align-items-center justify-content-center" style="height:180px;">
                        <i class="fas fa-user-clock fa-2x text-info mb-2"></i>
                        <span class="text-muted">Bar Chart: Weekly Activity</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <ul class="nav nav-tabs mb-3" id="dashboardTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="tutor-app-tab" data-bs-toggle="tab" data-bs-target="#tutor-app" type="button" role="tab">Tutor Applications</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="recent-bookings-tab" data-bs-toggle="tab" data-bs-target="#recent-bookings" type="button" role="tab">Recent Bookings</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reported-chats-tab" data-bs-toggle="tab" data-bs-target="#reported-chats" type="button" role="tab">Reported Chats</button>
                </li>
            </ul>
            <div class="tab-content" id="dashboardTabsContent">
                <div class="tab-pane fade show active" id="tutor-app" role="tabpanel">
                    <h5 class="mb-3">Recent Tutor Applications</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <div></div>
                        <form class="d-flex" style="max-width: 300px;">
                            <input class="form-control form-control-sm me-2" type="search" placeholder="Search applications...">
                            <button class="btn btn-outline-secondary btn-sm" type="button"><i class="fas fa-filter"></i> Filter</button>
                        </form>
                    </div>
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Qualification</th>
                                <th>Experience</th>
                                <th>Status</th>
                                <th>Apply Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($recentTutorApplications as $tutor)
                            <tr>
                                <td class="fw-bold text-primary">{{ $tutor->name }}</td>
                                <td>{{ $tutor->email }}</td>
                                <td>{{ $tutor->qualification }}</td>
                                <td></td>
                                <td>
                                    <span class="badge 
                                        @if($tutor->background_check_status == 'pending') bg-warning
                                        @elseif($tutor->background_check_status == 'approved') bg-success
                                        @else bg-danger @endif">
                                        {{ $tutor->background_check_status }}
                                    </span>
                                </td>
                                <td>{{ $tutor->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="text-success me-2"><i class="fas fa-check"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="recent-bookings" role="tabpanel">
                    <h5 class="mb-3">Recent Bookings</h5>
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Student</th>
                                <th>Tutor</th>
                                <th>Subject</th>
                                <th>Scheduled Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($recentBookings as $booking)
                            <tr>
                                <td>{{ $booking->student->name ?? '-' }}</td>
                                <td>{{ $booking->tutor->name ?? '-' }}</td>
                                <td>{{ $booking->subject->name ?? '-' }}</td>
                                <td>{{ $booking->scheduled_time->format('Y-m-d H:i') }}</td>
                                <td>{{ ucfirst($booking->status) }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="reported-chats" role="tabpanel">
                    <h5 class="mb-3">Reported Chats</h5>
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Reporter</th>
                                <th>Reason</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($recentReports as $report)
                            <tr>
                                <td>{{ $report->reporter->name ?? '-' }}</td>
                                <td>{{ $report->reason }}</td>
                                <td>
                                    <span class="badge {{ $report->resolved ? 'bg-success' : 'bg-warning' }}">
                                        {{ $report->resolved ? 'Resolved' : 'Pending' }}
                                    </span>
                                </td>
                                <td>{{ $report->created_at->format('Y-m-d H:i') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 