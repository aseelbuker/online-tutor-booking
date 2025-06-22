@extends('layouts.adminPnl')
@section('title', 'Tutor Management')
@section('content')
<div class="container-fluid py-4">
    <h1 class="fw-bold mb-2 text-primary">Tutor Management</h1>
    <p class="mb-4 text-muted">Manage tutors, approve applications, and monitor performance</p>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="fw-bold mb-0">All Tutors</h4>
                <a href="{{ route('admin.tutors.create') }}" class="btn btn-primary btn-sm">Add Tutor</a>
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
                    @foreach($tutors as $tutor)
                    <tr>
                        <td class="fw-bold text-primary">{{ $tutor->name }}</td>
                        <td>{{ $tutor->email }}</td>
                        <td>
                            @foreach($tutor->subjects as $subject)
                                <span class="badge bg-primary">{{ $subject->name }}</span>
                            @endforeach
                        </td>
                        <td>
                            @if($tutor->status === 'active')
                                <span class="badge bg-success">Active</span>
                            @elseif($tutor->status === 'pending')
                                <span class="badge bg-warning text-dark">Pending</span>
                            @else
                                <span class="badge bg-danger">Suspended</span>
                            @endif
                        </td>
                        <td>{{ $tutor->rating }}/5</td>
                        <td>{{ $tutor->sessions->count() }}</td>
                        <td>
                            <a href="{{ route('admin.tutors.edit', $tutor->id) }}" class="text-info me-2"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('admin.tutors.destroy', $tutor->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link text-danger p-0" onclick="return confirm('Are you sure you want to delete this tutor?')"><i class="fas fa-trash"></i></button>
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