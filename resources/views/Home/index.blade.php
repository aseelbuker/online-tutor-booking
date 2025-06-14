@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: var(--color-bg);">
  <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
    <div class="text-center text-md-start mb-4 mb-md-0">
      <h1 style="color: var(--color-text-dark);"><strong>FIND YOUR PERFECT <span style="color: var(--color-primary);">TUTOR</span> TODAY</strong></h1>
      <p class="lead" style="color: var(--color-text-dark);">Connect with expert tutors for 1-on-1 learning in any subject. Join thousands of students achieving their goals.</p>
      <form class="d-flex mt-3">
        <input class="form-control me-2" type="search" placeholder="Search for tutor or subjects..." aria-label="Search">
        <button class="btn" type="submit" style="background: var(--color-primary); color: #fff;"><i class="fas fa-search"></i></button>
      </form>
      <div class="mt-4 d-flex gap-3">
        <span style="color: var(--color-primary);"><strong>1k+</strong> Expert Tutors</span>
        <span style="color: var(--color-secondary);"><strong>50k+</strong> Success Stories</span>
        <span style="color: var(--color-accent-3);"><strong>100%</strong> Satisfaction</span>
      </div>
    </div>
    <div>
      <img src="{{ asset('images/hero-tutoring.jpg') }}" alt="Tutoring" class="img-fluid rounded shadow" style="background: var(--color-desk);">
      <span class="badge" style="background: var(--color-primary); color: #fff; margin-top: 8px;"><i class="fas fa-circle me-1" style="color: var(--color-accent-1);"></i> 500 Tutors Online</span>
    </div>
  </div>
</section>

<!-- How It Works -->
<section class="py-5 text-center how-it-works" style="background: #fff;">
  <div class="container">
    <h4 class="mb-4">How It Works</h4>
    <div class="row">
      <div class="col-md-4">
        <i class="fas fa-user-check fa-2x mb-3" style="color: var(--color-primary);"></i>
        <h5>Find the Perfect Match</h5>
        <p>Browse tutors and services to find a tutor who specializes in your subject area.</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-calendar-alt fa-2x mb-3" style="color: var(--color-secondary);"></i>
        <h5>Book a Session</h5>
        <p>Schedule a time that fits your calendar using our online platform.</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-graduation-cap fa-2x mb-3" style="color: var(--color-accent-1);"></i>
        <h5>Learn & Succeed</h5>
        <p>Get personalized instruction and support to help you succeed academically.</p>
      </div>
    </div>
  </div>
</section>

<!-- Features -->
<section class="bg-light py-5 text-center features-section" style="background: var(--color-bg);">
  <div class="container">
    <h4 class="mb-4">Experience high quality tutoring at an affordable price.</h4>
    <div class="row">
      <div class="col-md-4">
        <div class="card p-4 shadow-sm" style="border: 1px solid var(--color-primary);">
          <i class="fas fa-shield-alt fa-2x mb-2" style="color: var(--color-primary);"></i>
          <h5>Certified/Vetted</h5>
          <p>All our tutors are certified and thoroughly vetted for quality assurance.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-4 shadow-sm" style="border: 1px solid var(--color-secondary);">
          <i class="fas fa-dollar-sign fa-2x mb-2" style="color: var(--color-secondary);"></i>
          <h5>Affordable</h5>
          <p>We offer tutoring sessions at competitive prices for all budgets.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card p-4 shadow-sm" style="border: 1px solid var(--color-accent-1);">
          <i class="fas fa-lock fa-2x mb-2" style="color: var(--color-accent-1);"></i>
          <h5>Safe</h5>
          <p>We verify our tutors and secure the entire tutoring process.</p>
        </div>
      </div>
    </div>
    <a href="#" class="btn mt-4" style="background: var(--color-accent-3); color: #fff;">Find my Tutor</a>
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

<!-- Subjects -->
<section class="bg-light py-5 subjects-section" style="background: var(--color-bg);">
  <div class="container text-center">
    <h4 class="mb-4">Top Subject</h4>
    <div class="row">
      @foreach(['Mathematics', 'Computer Science', 'Physics', 'Chemistry', 'English', 'History', 'Biology', 'Languages', 'Art & Design'] as $subject)
      <div class="col-md-4 mb-3">
        <div class="card shadow-sm p-3" style="border: 1px solid var(--color-primary); background: #fff; color: var(--color-text-dark);">
          <i class="fas fa-book-open me-2" style="color: var(--color-accent-1);"></i> {{ $subject }}
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer bg-dark text-white py-4" style="background: var(--color-text-dark);">
  <div class="container d-flex flex-column flex-md-row justify-content-between">
    <div>
      <h5>CAMa Tutor</h5>
      <p>Our vision is to provide convenient online tutoring services to students globally.</p>
      <div class="d-flex gap-2">
        <a href="#" class="text-white"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-white"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div>
      <h6>About</h6>
      <ul class="list-unstyled">
        <li><a href="#" class="text-white">How it works</a></li>
        <li><a href="#" class="text-white">Tutor Registration</a></li>
        <li><a href="#" class="text-white">Business Relation</a></li>
      </ul>
    </div>
    <div>
      <h6>Community</h6>
      <ul class="list-unstyled">
        <li><a href="#" class="text-white">Events</a></li>
        <li><a href="#" class="text-white">Blog</a></li>
        <li><a href="#" class="text-white">Invite a friend</a></li>
      </ul>
    </div>
    <div>
      <h6>Policies</h6>
      <ul class="list-unstyled">
        <li><a href="#" class="text-white">Privacy Policy</a></li>
        <li><a href="#" class="text-white">Terms & Conditions</a></li>
      </ul>
    </div>
  </div>
</footer>
@endsection
