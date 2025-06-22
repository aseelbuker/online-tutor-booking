@extends('layouts.adminPnl')
@section('title', 'Edit Tutor')
@section('content')
<div class="container-fluid py-4">
    <h1 class="fw-bold mb-2">Edit Tutor</h1>
    <p class="mb-4 text-muted">Update the tutor's information.</p>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.tutors.update', $tutor->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $tutor->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $tutor->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password (leave blank to keep current password)</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <!-- Add other fields from the Tutor model as needed -->
                <button type="submit" class="btn btn-primary">Update Tutor</button>
            </form>
        </div>
    </div>
</div>
@endsection 