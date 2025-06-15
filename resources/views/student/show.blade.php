@extends('layouts.app')

@section('title', 'Student Details')
@section('content')
<h1>Student Details</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $student->name }}</h5>
        <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
        <a href="{{ route('student.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection 