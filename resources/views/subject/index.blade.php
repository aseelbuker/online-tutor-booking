@extends('layouts.app')

@section('title', 'Subjects')
@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Subject Management</h2>
        <a href="{{ route('subject.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Add Subject
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Level</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($subjects as $subject)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $subject->name }}</td>
                                <td>{{ $subject->level ?? 'N/A' }}</td>
                                <td>
                                    <a href="{{ route('subject.edit', $subject->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('subject.destroy', $subject->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this subject?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">No subjects found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection 