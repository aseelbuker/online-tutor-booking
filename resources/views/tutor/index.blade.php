@extends('layouts.app')

@section('title', 'Tutors')
@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Tutor Dashboard</h2>
        <a href="{{ route('tutor.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Add Tutor
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subjects</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tutors as $tutor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $tutor->name }}</td>
                            <td>{{ $tutor->email }}</td>
                            <td>
                                @foreach($tutor->subjects as $subject)
                                    <span class="badge bg-info me-1">{{ $subject->name }}</span>
                                @endforeach
                            </td>
                            <td>
                                <span class="badge bg-{{ $tutor->status === 'active' ? 'success' : 'secondary' }}">
                                    {{ ucfirst($tutor->status ?? 'inactive') }}
                                </span>
                            </td>
                            <td>
                                @if($tutor->photo)
                                    <img src="{{ asset('storage/' . $tutor->photo) }}" alt="Tutor Photo" width="40" class="rounded">
                                @else
                                    <span class="text-muted">N/A</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('tutor.edit', $tutor->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('tutor.destroy', $tutor->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this tutor?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-outline-danger">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted">No tutors found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
