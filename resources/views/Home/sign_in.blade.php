
@extends('layouts.app')

@section('content')
<div class="container-fluid vh-100 d-flex p-0">
    <div class="row flex-fill m-0 w-100">
        <!-- Left Side: Login Form -->
        <div class="col-md-6 d-flex align-items-center justify-content-center bg-white px-5">
            <div class="w-100" style="max-width: 400px;">
                <div class="mb-4 text-center">
                    <img src="{{ asset('images/logo.png') }}" alt="Call A Tutor Logo" style="width: 40px;">
                    <h4 class="mt-2 fw-bold">Sign in to your account</h4>
                    <p class="small">Don't have an account? <a href="{{ route('register') }}">Sign up for free</a></p>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input id="email" type="email" class="form-control" name="email" required autofocus placeholder="Enter your email">
                    </div>

                    <div class="mb-3 d-flex justify-content-between align-items-center">
                        <label for="password" class="form-label">Password</label>
                        <a href="{{ route('password.request') }}" class="small">Forgot password?</a>
                    </div>
                    <div class="mb-3">
                        <input id="password" type="password" class="form-control" name="password" required placeholder="Enter your password">
                    </div>

                    <div class="mb-3 form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>

                <div class="text-center mt-4">
                    <p class="mb-2">Or continue with</p>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="btn btn-light border d-flex align-items-center">
                            <i class="fab fa-google me-2 text-danger"></i> Google
                        </a>
                        <a href="#" class="btn btn-light border d-flex align-items-center">
                            <i class="fab fa-facebook-f me-2 text-primary"></i> Facebook
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Side: Image + Testimonial -->
        <div class="col-md-6 d-none d-md-block position-relative p-0">
            <div class="bg-dark h-100 w-100 position-absolute" style="opacity: 0.6;"></div>
            <img src="{{ asset('images/login-cover.jpg') }}" class="h-100 w-100 object-fit-cover" alt="Students working" style="object-fit: cover;">

            <div class="position-absolute text-white px-5" style="bottom: 40px; left: 40px; max-width: 500px;">
                <p class="fs-5 fw-light fst-italic">"My tutor helped me improve my calculus grade from a C to an A. The personalized approach made all the difference in my understanding of the subject."</p>
                <p class="small">Emma Wilson – University Student</p>
            </div>
        </div>
    </div>
</div>
@endsection
