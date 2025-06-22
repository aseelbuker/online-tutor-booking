@extends('layouts.adminPnl')
@section('title', 'Subject Management')
@section('content')
<div class="container-fluid py-4">
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
                    <a href="{{ route('admin.subjects.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus me-1"></i> Add Subject</a>
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
                    @foreach($subjects as $subject)
                    <tr>
                        <td class="fw-bold text-primary">{{ $subject->name }}</td>
                        <td>{{ $subject->level }}</td>
                        <td>{{ $subject->tutors->count() }}</td>
                        <td>{{ $subject->bookings->count() }}</td>
                        <td>1250</td>
                        <td><span class="badge bg-success">active</span></td>
                        <td>
                            <a href="{{ route('admin.subjects.edit', $subject->id) }}" class="text-info me-2"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.subjects.destroy', $subject->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger p-0" onclick="return confirm('Are you sure you want to delete this subject?')"><i class="fas fa-trash"></i></button>
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