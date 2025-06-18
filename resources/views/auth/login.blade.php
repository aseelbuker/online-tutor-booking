@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow-sm" style="max-width: 400px; width: 100%;">
        <div class="text-center mb-4">
            <img src="{{ asset('images/logo.png') }}" alt="Call A Tutor" width="50">
            <h4 class="mt-3 fw-bold">Sign in to your account</h4>
            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}">Sign up for free.</a></p>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required autofocus>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label d-flex justify-content-between">
                    <span>Password</span>
                </label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
            </div>
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
            <div class="text-center text-muted mb-3">Or continue with</div>
            <div class="d-flex justify-content-between">
                    <i class="fab fa-google me-2"></i> Google
                </a>
                    <i class="fab fa-facebook-f me-2"></i> Facebook
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
