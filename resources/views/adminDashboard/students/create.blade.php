@extends('layouts.adminPnl')
@section('title', 'Add New Student')
@section('content')
<div class="container-fluid py-4">
    <h1 class="fw-bold mb-2">Add New Student</h1>
    <p class="mb-4 text-muted">Fill out the form to add a new student to the platform.</p>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.students.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    </div>
</div>
@endsection 