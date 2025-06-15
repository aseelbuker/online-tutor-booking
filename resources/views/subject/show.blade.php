@extends('layouts.app')

@section('title', 'Subject Details')
@section('content')
<h1>Subject Details</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $subject->name }}</h5>
        <p class="card-text"><strong>Level:</strong> {{ $subject->level }}</p>
        <a href="{{ route('subject.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection 