@extends('layouts.app')

@section('title', 'Contact Message Details')
@section('content')
<h1>Contact Message Details</h1>
<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $contact->name }}</h5>
        <p class="card-text"><strong>Email:</strong> {{ $contact->email }}</p>
        <p class="card-text"><strong>Message:</strong> {{ $contact->message }}</p>
        <a href="{{ route('contactus.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection 