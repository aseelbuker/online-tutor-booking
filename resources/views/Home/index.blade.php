@extends('layouts.app')

@section('content')

<section class="bg-light py-5">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
        <div class="text-md-start text-center mb-4 mb-md-0">
            <h1 class="fw-bold">Find Your Perfect <span class="text-primary">Tutor</span> Today</h1>
            <p>Connect with expert tutors for 1-on-1 learning in any subject. Join thousands of students achieving their goals.</p>
            <form class="d-flex mt-3" action="{{ route('browse.subjects') }}" method="GET">
                <input type="text" class="form-control me-2" placeholder="Search for tutor or subjects..." name="q">
                <button class="btn btn-primary">Search</button>
            </form>
            <div class="mt-3 text-muted">
                <span>1K+ Expert Tutors | 50K+ Students | 100+ Subjects</span>
            </div>
        </div>
        <div class="position-relative">
            <img src="https://images.unsplash.com/photo-1501504905252-473c47e087f8?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Tutoring Session">
            <span class="badge bg-success position-absolute bottom-0 start-0 m-2">500 Tutors Online</span>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="py-5 how-it-works" style="background: #fff;">
    <div class="container text-center">
        <h2 class="mb-4">How It Works</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <i class="fas fa-user-check fa-2x mb-3" style="color: var(--color-primary);"></i>
                <h5>Find The Perfect Match</h5>
                <p>Browse profiles and reviews to find a tutor who specializes in your subject area.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-calendar-check fa-2x mb-3" style="color: var(--color-secondary);"></i>
                <h5>Book a Session</h5>
                <p>Schedule a time that works for you through our simple online platform.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-graduation-cap fa-2x mb-3" style="color: var(--color-accent-1);"></i>
                <h5>Learn & Succeed</h5>
                <p>Get personalized support to help you achieve your academic goals.</p>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <h2 class="mb-4">Experience high quality tutoring at an affordable price.</h2>
        <p class="mb-5">Education has never been so personal yet so convenient.</p>
        <div class="row g-4">
            <div class="col-md-4">
                <i class="fas fa-shield-alt fa-2x text-primary mb-3"></i>
                <h5>Certified/Vetted</h5>
                <p>Our tutors go through a rigorous selection process to ensure quality teaching.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-wallet fa-2x text-primary mb-3"></i>
                <h5>Affordable</h5>
                <p>Enjoy competitive pricing for sessions that won't break your budget.</p>
            </div>
            <div class="col-md-4">
                <i class="fas fa-lock fa-2x text-primary mb-3"></i>
                <h5>Safe</h5>
                <p>We take your data and session security seriously with end-to-end protection.</p>
            </div>
        </div>
        <a href="#" class="btn btn-primary mt-4">Find My Tutor</a>
    </div>
</section>

<!-- Testimonials -->
<section class="py-5 testimonials-section" style="background: #fff;">
    <div class="container text-center">
        <h4 class="mb-4">What Our Students Say</h4>
        <div class="row">
            @for($i = 0; $i < 3; $i++)
            <div class="col-md-4 mb-3">
                <div class="card p-4 shadow-sm h-100" style="border: 1px solid var(--color-accent-2);">
                    <img src="https://via.placeholder.com/60" class="rounded-circle mb-2 mx-auto" alt="User" style="border: 2px solid var(--color-accent-1);">
                    <h6 style="color: var(--color-text-dark);">Vizeh Robert</h6>
                    <small style="color: var(--color-secondary);">Nigeria</small>
                    <div class="mb-2" style="color: var(--color-accent-3);">
                        @for($j = 0; $j < 5; $j++) <i class="fas fa-star"></i> @endfor
                    </div>
                    <p style="color: var(--color-text-dark);">"My tutor helped me improve my calculus grade from a C to an A. The personalized approach made all the difference in my understanding."</p>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Top Subjects -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <h2 class="mb-4">Top Subjects</h2>
        <p class="mb-4">Browse through our wide range of subjects and find the perfect tutor to help you succeed</p>
        <div class="row g-3 justify-content-center">
            @php
                $subjects = ['Mathematics', 'Computer Science', 'Physics', 'Chemistry', 'English', 'History', 'Biology', 'Languages', 'Art & Design'];
            @endphp
            @foreach ($subjects as $subject)
                <div class="col-6 col-md-3">
                    <div class="border p-2 rounded bg-white d-flex justify-content-between align-items-center">
                        <span>{{ $subject }}</span>
                        <i class="fas fa-search text-muted"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
