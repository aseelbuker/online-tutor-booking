@extends('layouts.app')

@section('title', 'Edit Subject')
@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Edit Subject</h2>
        <a href="{{ route('subject.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Back to List
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('subject.update', $subject->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Subject Name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $subject->name) }}" required placeholder="Enter subject name">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="level" class="form-label">Level</label>
                    <select name="level" id="level" class="form-control @error('level') is-invalid @enderror" required>
                        <option value="">Select Level</option>
                        <option value="Primary" {{ old('level', $subject->level) == 'Primary' ? 'selected' : '' }}>Primary</option>
                        <option value="High School" {{ old('level', $subject->level) == 'High School' ? 'selected' : '' }}>High School</option>
                        <option value="College" {{ old('level', $subject->level) == 'College' ? 'selected' : '' }}>College</option>
                    </select>
                    @error('level')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-1"></i> Update Subject
                    </button>
                    <a href="{{ route('subject.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 