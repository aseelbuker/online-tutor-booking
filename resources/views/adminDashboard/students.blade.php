@extends('layouts.adminPnl')
@section('title', 'Student Management')
@section('content')
<div class="container-fluid py-4">
    <h1 class="fw-bold mb-2 text-primary">Student Management</h1>
    <p class="mb-4 text-muted">View and manage student accounts</p>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold mb-0">All Students</h4>
                <a href="{{ route('admin.students.create') }}" class="btn btn-primary btn-sm">Add Student</a>
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
                    @foreach($students as $student)
                    <tr>
                        <td class="fw-bold text-primary">{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td><span class="badge bg-success bg-opacity-25 text-success">active</span></td>
                        <td>45</td>
                        <td>2024-02-10</td>
                        <td>2024-05-27</td>
                        <td>
                            <a href="{{ route('admin.students.edit', $student->id) }}" class="text-info me-2"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.students.destroy', $student->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger p-0" onclick="return confirm('Are you sure you want to delete this student?')"><i class="fas fa-trash"></i></button>
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