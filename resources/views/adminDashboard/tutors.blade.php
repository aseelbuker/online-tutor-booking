@extends('layouts.adminPnl')
@section('title', 'Tutor Management')
@section('content')
<div class="container py-4">
    <h1 class="fw-bold mb-2 text-primary">Tutor Management</h1>
    <p class="mb-4 text-muted">Manage tutors, approve applications, and monitor performance</p>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold mb-0">All Tutors</h4>
                <form class="d-flex" style="max-width: 320px;">
                    <input class="form-control form-control-sm me-2" type="search" placeholder="Search tutors...">
                    <button class="btn btn-outline-secondary btn-sm" type="button"><i class="fas fa-filter"></i> Filter</button>
                </form>
            </div>
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subjects</th>
                        <th>Status</th>
                        <th>Rating</th>
                        <th>Sessions</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold text-primary">Dr. Emily Johnson</td>
                        <td>emily@example.com</td>
                        <td>
                            <span class="badge bg-primary">Mathematics</span>
                            <span class="badge bg-secondary">Physics</span>
                        </td>
                        <td><span class="badge bg-success">active</span></td>
                        <td>4.8/5</td>
                        <td>156</td>
                        <td>
                            <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                            <a href="#" class="text-danger"><i class="fas fa-ban"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-primary">Mark Thompson</td>
                        <td>mark@example.com</td>
                        <td>
                            <span class="badge bg-primary">Chemistry</span>
                            <span class="badge bg-secondary">Biology</span>
                        </td>
                        <td><span class="badge bg-warning text-dark">pending</span></td>
                        <td>4.6/5</td>
                        <td>89</td>
                        <td>
                            <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                            <a href="#" class="text-success me-2"><i class="fas fa-check"></i></a>
                            <a href="#" class="text-danger"><i class="fas fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-primary">Sarah Wilson</td>
                        <td>sarah@example.com</td>
                        <td>
                            <span class="badge bg-primary">English</span>
                            <span class="badge bg-secondary">Literature</span>
                        </td>
                        <td><span class="badge bg-danger">suspended</span></td>
                        <td>4.2/5</td>
                        <td>234</td>
                        <td>
                            <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 