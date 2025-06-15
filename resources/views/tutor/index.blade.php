
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Tutor Dashboard</h2>
        <a href="{{ route('Tutors.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Add Tutor
        </a>
    </div>

    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Status</th>
                        <th>Photo</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($tutors as $tutor)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $tutor->name }}</td>
                            <td>{{ $tutor->email }}</td>
                            <td>{{ $tutor->subject }}</td>
                            <td>
                                <span class="badge bg-{{ $tutor->status === 'active' ? 'success' : 'secondary' }}">
                                    {{ ucfirst($tutor->status) }}
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
                                <a href="{{ route('Tutor.edit', $tutor->id) }}" class="btn btn-sm btn-outline-primary me-1">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('Tutors.destroy', $tutor->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this tutor?');">
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

@extends('layouts.app')

@section('title', 'Tutors')
@section('content')
<h1>Tutors</h1>
<a href="{{ route('tutor.create') }}" class="btn btn-primary mb-3">Add Tutor</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tutors as $tutor)
        <tr>
            <td>{{ $tutor->id }}</td>
            <td>{{ $tutor->name }}</td>
            <td>{{ $tutor->email }}</td>
            <td>
                <a href="{{ route('tutor.edit', $tutor->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('tutor.destroy', $tutor->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
