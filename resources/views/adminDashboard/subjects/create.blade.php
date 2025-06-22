@extends('layouts.adminPnl')
@section('title', 'Add New Subject')
@section('content')
<div class="container-fluid py-4">
    <h1 class="fw-bold mb-2">Add New Subject</h1>
    <p class="mb-4 text-muted">Fill out the form to add a new subject to the platform.</p>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.subjects.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="level" class="form-label">Level</label>
                    <input type="text" class="form-control" id="level" name="level" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Subject</button>
            </form>
        </div>
    </div>
</div>
@endsection
