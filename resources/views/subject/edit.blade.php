@extends('layouts.app')

@section('title', 'Edit Subject')
@section('content')
<h1>Edit Subject</h1>
<form action="{{ route('subject.update', $subject->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $subject->name) }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="level" class="form-label">Level</label>
        <input type="text" name="level" id="level" class="form-control @error('level') is-invalid @enderror" value="{{ old('level', $subject->level) }}">
        @error('level')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="{{ route('subject.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection 