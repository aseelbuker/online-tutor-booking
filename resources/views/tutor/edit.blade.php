@extends('layouts.app')

@section('title', 'Edit Tutor')
@section('content')
<div class="container">
    <h2 class="mb-4">Edit Tutor</h2>

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

    <form action="{{ route('tutor.update', $tutor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $tutor->name) }}" required placeholder="Enter tutor's full name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="email">Email Address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $tutor->email) }}" required placeholder="Enter email">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="password">Password (leave blank to keep current)</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="subject_ids">Subject Expertise</label>
            <select name="subject_ids[]" id="subject_ids" class="form-control @error('subject_ids') is-invalid @enderror" multiple required>
                @foreach($subjects as $subject)
                    <option value="{{ $subject->id }}" {{ in_array($subject->id, old('subject_ids', $tutor->subjects->pluck('id')->toArray())) ? 'selected' : '' }}>
                        {{ $subject->name }}
                    </option>
                @endforeach
            </select>
            <small class="form-text text-muted">Hold Ctrl (Windows) or Command (Mac) to select multiple subjects</small>
            @error('subject_ids')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="description">Brief Bio / Description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="4" placeholder="Tell us about the tutor...">{{ old('description', $tutor->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="photo">Current Photo</label>
            @if($tutor->photo)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $tutor->photo) }}" alt="Current Photo" class="img-thumbnail" style="max-width: 200px">
                </div>
            @else
                <p class="text-muted">No photo uploaded</p>
            @endif
        </div>

        <div class="form-group mb-4">
            <label for="photo">Update Photo (optional)</label>
            <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror">
            @error('photo')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Tutor</button>
        <a href="{{ route('tutor.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
