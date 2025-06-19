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
                    <div class="display-6 fw-bold">2,847</div>
                    <div class="text-success small">+12% this month</div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-center h-100">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-dollar-sign fa-2x text-info"></i></div>
                    <h6 class="card-title">Total Revenue</h6>
                    <div class="display-6 fw-bold">$24,680</div>
                    <div class="text-success small">+8% this month</div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card text-center h-100">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-user-plus fa-2x text-info"></i></div>
                    <h6 class="card-title">New Tutors</h6>
                    <div class="display-6 fw-bold">47</div>
                    <div class="text-muted small">This month</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center h-100">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-exclamation-triangle fa-2x text-warning"></i></div>
                    <h6 class="card-title">Reported Reviews</h6>
                    <div class="display-6 fw-bold">23</div>
                    <div class="text-warning small">Needs attention</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center h-100">
                <div class="card-body">
                    <div class="mb-2"><i class="fas fa-bell fa-2x text-info"></i></div>
                    <h6 class="card-title">Notifications Sent</h6>
                    <div class="display-6 fw-bold">1,284</div>
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
                            <tr>
                                <td class="fw-bold text-primary">Dr. Emily Johnson</td>
                                <td>emily.johnson@email.com</td>
                                <td>PhD Mathematics</td>
                                <td>5 years</td>
                                <td><span class="badge bg-warning">pending</span></td>
                                <td>2024-05-25</td>
                                <td>
                                    <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="text-success me-2"><i class="fas fa-check"></i></a>
                                    <a href="#" class="text-danger"><i class="fas fa-times"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-primary">Mark Thompson</td>
                                <td>mark.thompson@email.com</td>
                                <td>MSc Physics</td>
                                <td>3 years</td>
                                <td><span class="badge bg-success">approved</span></td>
                                <td>2024-05-20</td>
                                <td>
                                    <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold text-primary">Sarah Wilson</td>
                                <td>sarah.wilson@email.com</td>
                                <td>BA English Literature</td>
                                <td>2 years</td>
                                <td><span class="badge bg-danger">rejected</span></td>
                                <td>2024-05-22</td>
                                <td>
                                    <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="recent-bookings" role="tabpanel">
                    <div class="text-center text-muted py-5">Recent Bookings content goes here.</div>
                </div>
                <div class="tab-pane fade" id="reported-chats" role="tabpanel">
                    <div class="text-center text-muted py-5">Reported Chats content goes here.</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 