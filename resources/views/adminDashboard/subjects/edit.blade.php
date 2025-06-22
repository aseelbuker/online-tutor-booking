@extends('layouts.adminPnl')
@section('title', 'Edit Subject')
@section('content')
<div class="container-fluid py-4">
    <h1 class="fw-bold mb-2">Edit Subject</h1>
    <p class="mb-4 text-muted">Update the subject's information.</p>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.subjects.update', $subject->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $subject->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="level" class="form-label">Level</label>
                    <input type="text" class="form-control" id="level" name="level" value="{{ $subject->level }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update Subject</button>
            </form>
        </div>
    </div>
</div>
@endsection 