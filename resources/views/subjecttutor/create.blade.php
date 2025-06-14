@extends('layouts.app')

@section('title', 'Add Subject-Tutor Relation')
@section('content')
<h1>Add Subject-Tutor Relation</h1>
<form action="{{ route('subjecttutor.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="subject_id" class="form-label">Subject</label>
        <select name="subject_id" id="subject_id" class="form-control @error('subject_id') is-invalid @enderror">
            <option value="">Select Subject</option>
            @foreach($subjects as $subject)
                <option value="{{ $subject->id }}" {{ old('subject_id') == $subject->id ? 'selected' : '' }}>{{ $subject->name }}</option>
            @endforeach
        </select>
        @error('subject_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="tutor_id" class="form-label">Tutor</label>
        <select name="tutor_id" id="tutor_id" class="form-control @error('tutor_id') is-invalid @enderror">
            <option value="">Select Tutor</option>
            @foreach($tutors as $tutor)
                <option value="{{ $tutor->id }}" {{ old('tutor_id') == $tutor->id ? 'selected' : '' }}>{{ $tutor->name }}</option>
            @endforeach
        </select>
        @error('tutor_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Create</button>
    <a href="{{ route('subjecttutor.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection 