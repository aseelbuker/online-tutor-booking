
@extends('layouts.subject')

@section('title', 'Subject Management')

@section('content')
<div class="container py-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold text-primary">Subject Management</h2>
        <p class="text-muted">Manage subjects and assign tutors</p>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="fw-bold mb-0">All Subjects</h5>
                <div class="d-flex gap-2">
                    <input type="text" class="form-control" placeholder="Search subjects..." />
                    <button class="btn btn-outline-secondary">
                        <i class="fas fa-filter"></i> Filter
                    </button>
                    <button class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Subject
                    </button>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Subject Name</th>
                            <th>Category</th>
                            <th>Tutors</th>
                            <th>Students</th>
                            <th>Sessions</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#" class="fw-semibold text-primary">Mathematics</a></td>
                            <td>STEM</td>
                            <td>15</td>
                            <td>234</td>
                            <td>1250</td>
                            <td><span class="badge bg-success-subtle text-success rounded-pill">active</span></td>
                            <td>
                                <i class="fas fa-eye text-dark me-2" style="cursor:pointer;"></i>
                                <i class="fas fa-edit text-dark" style="cursor:pointer;"></i>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#" class="fw-semibold text-primary">Physics</a></td>
                            <td>STEM</td>
                            <td>8</td>
                            <td>156</td>
                            <td>890</td>
                            <td><span class="badge bg-success-subtle text-success rounded-pill">active</span></td>
                            <td>
                                <i class="fas fa-eye text-dark me-2" style="cursor:pointer;"></i>
                                <i class="fas fa-edit text-dark" style="cursor:pointer;"></i>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="#" class="fw-semibold text-primary">English Literature</a></td>
                            <td>Arts</td>
                            <td>12</td>
                            <td>189</td>
                            <td>1100</td>
                            <td><span class="badge bg-success-subtle text-success rounded-pill">active</span></td>
                            <td>
                                <i class="fas fa-eye text-dark me-2" style="cursor:pointer;"></i>
                                <i class="fas fa-edit text-dark" style="cursor:pointer;"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
