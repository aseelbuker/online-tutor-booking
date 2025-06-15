@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Edit Tutor</h2>

    @if ($tutors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($tutors->all() as $tutor)
                    <li>{{ $tutor }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
<form action="{{ route('Tutors.update', $tutors->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
 <!-- Important for method spoofing -->

        <div class="form-group mb-3">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name', $tutors->name) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="email">Email Address</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $tutors->email) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="subject">Subject Expertise</label>
            <input type="text" name="subject" class="form-control" value="{{ old('subject', $tutors->subject) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Bio / Description</label>
            <textarea name="description" class="form-control" rows="4">{{ old('description', $tutors->description) }}</textarea>
        </div>

        <div class="form-group mb-4">
            <label for="photo">Update Tutor Photo (optional)</label><br>
            @if ($tutors->photo)
                <img src="{{ asset('storage/' . $tutors->photo) }}" alt="Tutor Photo" width="120" class="mb-2">
            @endif
            <input type="file" name="photo" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-success">Update Tutor</button>
        <a href="{{ route('Tutors.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
