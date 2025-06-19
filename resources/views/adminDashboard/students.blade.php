@extends('layouts.adminPnl')
@section('title', 'Student Management')
@section('content')
<div class="container py-4">
    <h1 class="fw-bold mb-2 text-primary">Student Management</h1>
    <p class="mb-4 text-muted">View and manage student accounts</p>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold mb-0">All Students</h4>
                <form class="d-flex" style="max-width: 320px;">
                    <input class="form-control form-control-sm me-2" type="search" placeholder="Search students...">
                    <button class="btn btn-outline-secondary btn-sm" type="button"><i class="fas fa-filter"></i> Filter</button>
                </form>
            </div>
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Total Sessions</th>
                        <th>Join Date</th>
                        <th>Last Active</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold text-primary">John Doe</td>
                        <td>john@example.com</td>
                        <td><span class="badge bg-success bg-opacity-25 text-success">active</span></td>
                        <td>45</td>
                        <td>2024-02-10</td>
                        <td>2024-05-27</td>
                        <td>
                            <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                            <a href="#" class="text-danger me-2"><i class="fas fa-user-slash"></i></a>
                            <a href="#" class="text-danger"><i class="fas fa-user-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-primary">Alice Smith</td>
                        <td>alice@example.com</td>
                        <td><span class="badge bg-success bg-opacity-25 text-success">active</span></td>
                        <td>23</td>
                        <td>2024-03-15</td>
                        <td>2024-05-26</td>
                        <td>
                            <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                            <a href="#" class="text-danger me-2"><i class="fas fa-user-slash"></i></a>
                            <a href="#" class="text-danger"><i class="fas fa-user-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-primary">Bob Johnson</td>
                        <td>bob@example.com</td>
                        <td><span class="badge bg-danger bg-opacity-25 text-danger">suspended</span></td>
                        <td>12</td>
                        <td>2024-01-20</td>
                        <td>2024-04-15</td>
                        <td>
                            <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                            <a href="#" class="text-success">Reactivate</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 