@extends('layouts.adminPnl')
@section('title', 'Edit Student')
@section('content')
<div class="container-fluid py-4">
    <h1 class="fw-bold mb-2">Edit Student</h1>
    <p class="mb-4 text-muted">Update the student's information.</p>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $student->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password (leave blank to keep current password)</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Update Student</button>
            </form>
        </div>
    </div>
</div>
@endsection 