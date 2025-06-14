@extends('layouts.app')

@section('title', 'Subject-Tutor Relation Details')
@section('content')
<h1>Subject-Tutor Relation Details</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Subject: {{ $subjectTutor->subject->name ?? '' }}</h5>
        <p class="card-text"><strong>Tutor:</strong> {{ $subjectTutor->tutor->name ?? '' }}</p>
        <a href="{{ route('subjecttutor.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection 