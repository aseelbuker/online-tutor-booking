@extends('layouts.app')

@section('title', 'Tutor Details')
@section('content')
<h1>Tutor Details</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $tutor->name }}</h5>
        <p class="card-text"><strong>Email:</strong> {{ $tutor->email }}</p>
        <a href="{{ route('tutor.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection 