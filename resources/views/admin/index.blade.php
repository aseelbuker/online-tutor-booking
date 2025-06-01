
@extends('layouts.app') {{-- Assuming you have a main layout --}}
@section('content')
<div class="container-fluid">
    <div class="row">
        {{-- Sidebar --}}
        <div class="col-md-2 bg-light vh-100 p-3">
            <h4 class="mb-4">Admin Panel</h4>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link active" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Tutors</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Students</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Subjects</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Bookings</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Reviews</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Notifications</a></li>
                <li class="nav-item"><a class="nav-link active" href="#">Reports</a></li>
                <li class="nav-item mt-4"><a class="nav-link text-danger" href="#">Logout</a></li>
            </ul>
        </div>

        {{-- Main Dashboard --}}
        <div class="col-md-10 p-4">
            <h2>Admin Dashboard</h2>
            <p class="text-muted">Manage tutors, students, and platform content</p>

            {{-- Stats Boxes --}}
            <div class="row mb-4">
                <div class="col-md-2 card text-center m-2 p-3">
                    <h5>Total Bookings</h5>
                    <h3>2,847</h3>
                    <small class="text-success">+12% this month</small>
                </div>
                <div class="col-md-2 card text-center m-2 p-3">
                    <h5>Total Revenue</h5>
                    <h3>$24,680</h3>
                    <small class="text-success">+8% this month</small>
                </div>
                <div class="col-md-2 card text-center m-2 p-3">
                    <h5>New Tutors</h5>
                    <h3>47</h3>
                    <small>This month</small>
                </div>
                <div class="col-md-2 card text-center m-2 p-3">
                    <h5>Reported Reviews</h5>
                    <h3>23</h3>
                    <small class="text-warning">Needs attention</small>
                </div>
                <div class="col-md-2 card text-center m-2 p-3">
                    <h5>Notifications Sent</h5>
                    <h3>1,284</h3>
                    <small>This month</small>
                </div>
            </div>

            {{-- Charts (placeholder boxes) --}}
            <div class="row mb-4">
                <div class="col-md-6 card p-4">
                    <h5>Bookings Trend</h5>
                    <p class="text-muted">Line Chart: Last 6 months</p>
                </div>
                <div class="col-md-6 card p-4">
                    <h5>Active Tutors per Week</h5>
                    <p class="text-muted">Bar Chart: Weekly Activity</p>
                </div>
            </div>

            {{-- Tabs Section --}}
            <ul class="nav nav-tabs mb-3">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Tutor Applications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Recent Bookings</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Reported Chats</a>
                </li>
            </ul>

            {{-- Applications Table --}}
            <div class="card p-3">
                <h5>Recent Tutor Applications</h5>
                <table class="table table-hover">
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
                            <td>Dr. Emily Johnson</td>
                            <td>emily.johnson@email.com</td>
                            <td>PhD Mathematics</td>
                            <td>5 years</td>
                            <td><span class="badge bg-warning text-dark">Pending</span></td>
                            <td>2024-05-25</td>
                            <td>
                                <a href="#" class="text-success me-2"><i class="fas fa-check-circle"></i></a>
                                <a href="#" class="text-danger"><i class="fas fa-times-circle"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Mark Thompson</td>
                            <td>mark.thompson@email.com</td>
                            <td>MSc Physics</td>
                            <td>3 years</td>
                            <td><span class="badge bg-success">Approved</span></td>
                            <td>2024-05-20</td>
                            <td>
                                <a href="#" class="text-success me-2"><i class="fas fa-check-circle"></i></a>
                                <a href="#" class="text-danger"><i class="fas fa-times-circle"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>Sarah Wilson</td>
                            <td>sarah.wilson@email.com</td>
                            <td>BA English Literature</td>
                            <td>2 years</td>
                            <td><span class="badge bg-danger">Rejected</span></td>
                            <td>2024-05-22</td>
                            <td>
                                <a href="#" class="text-success me-2"><i class="fas fa-check-circle"></i></a>
                                <a href="#" class="text-danger"><i class="fas fa-times-circle"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection
