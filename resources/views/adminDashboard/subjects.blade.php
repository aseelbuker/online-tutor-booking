@extends('layouts.adminPnl')
@section('title', 'Subject Management')
@section('content')
<div class="container py-4">
    <h1 class="fw-bold mb-2 text-primary">Subject Management</h1>
    <p class="mb-4 text-muted">Manage subjects and assign tutors</p>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold mb-0">All Subjects</h4>
                <div class="d-flex gap-2">
                    <form class="d-flex" style="max-width: 320px;">
                        <input class="form-control form-control-sm me-2" type="search" placeholder="Search subjects...">
                        <button class="btn btn-outline-secondary btn-sm" type="button"><i class="fas fa-filter"></i> Filter</button>
                    </form>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-plus me-1"></i> Add Subject</a>
                </div>
            </div>
            <table class="table align-middle">
                <thead>
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
                        <td class="fw-bold text-primary">Mathematics</td>
                        <td>STEM</td>
                        <td>15</td>
                        <td>234</td>
                        <td>1250</td>
                        <td><span class="badge bg-success">active</span></td>
                        <td>
                            <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                            <a href="#" class="text-dark"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-primary">Physics</td>
                        <td>STEM</td>
                        <td>8</td>
                        <td>156</td>
                        <td>890</td>
                        <td><span class="badge bg-success">active</span></td>
                        <td>
                            <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                            <a href="#" class="text-dark"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold text-primary">English Literature</td>
                        <td>Arts</td>
                        <td>12</td>
                        <td>189</td>
                        <td>1100</td>
                        <td><span class="badge bg-success">active</span></td>
                        <td>
                            <a href="#" class="text-info me-2"><i class="fas fa-eye"></i></a>
                            <a href="#" class="text-dark"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection 