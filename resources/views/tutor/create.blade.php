@extends('layouts.app')

@section('title', 'Add Tutor')
@section('content')
<h1>Add Tutor</h1>
<form action="{{ route('tutor.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
        @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Create</button>
    <a href="{{ route('tutor.index') }}" class="btn btn-secondary">Cancel</a>
</form>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Add New Tutor</h2>

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

    <form action="{{ route('Tutors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-3">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control" required placeholder="Enter tutor's full name">
        </div>

        <div class="form-group mb-3">
            <label for="email">Email Address</label>
            <input type="email" name="email" class="form-control" required placeholder="Enter email">
        </div>

        <div class="form-group mb-3">
            <label for="subject">Subject Expertise</label>
            <input type="text" name="subject" class="form-control" required placeholder="e.g. Mathematics, Science">
        </div>

        <div class="form-group mb-3">
            <label for="description">Brief Bio / Description</label>
            <textarea name="description" class="form-control" rows="4" placeholder="Tell us about the tutor..."></textarea>
        </div>

        <div class="form-group mb-4">
            <label for="photo">Tutor Photo (optional)</label>
            <input type="file" name="photo" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Add Tutor</button>
        <a href="{{ route('tutors.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
