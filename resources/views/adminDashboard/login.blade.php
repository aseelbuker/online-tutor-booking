@extends('layouts.adminPnl')
@section('title', 'Admin Login')
@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; background: #f8f9fa;">
    <div class="card shadow" style="width: 400px;">
        <div class="card-body p-4">
            <h2 class="fw-bold text-center mb-4 text-primary">Admin Login</h2>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt me-2"></i>Sign In</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 