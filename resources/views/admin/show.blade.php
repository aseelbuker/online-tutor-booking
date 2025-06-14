@extends('layouts.app')

@section('title', 'Admin Details')
@section('content')
<h1>Admin Details</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $admin->name }}</h5>
        <p class="card-text"><strong>Email:</strong> {{ $admin->email }}</p>
        <a href="{{ route('admin.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection 