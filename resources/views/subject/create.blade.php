@extends('layouts.app')

@section('title', 'Add Subject')
@section('content')
<h1>Add Subject</h1>
<form action="{{ route('subject.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="level" class="form-label">Level</label>
        <input type="text" name="level" id="level" class="form-control @error('level') is-invalid @enderror" value="{{ old('level') }}">
        @error('level')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Create</button>
    <a href="{{ route('subject.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection 