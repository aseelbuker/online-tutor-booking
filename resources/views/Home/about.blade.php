@extends('layouts.app')
@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: var(--color-bg); padding: 60px 0 40px 0;">
  <div class="container text-center">
    <span class="badge" style="background: var(--color-secondary); color: #fff;">About Call A Tutor</span>
    <h1 class="mt-3 mb-2" style="color: var(--color-text-dark); font-weight: 700;">Revolutionizing Education Through Technology</h1>
    <p class="lead mb-4" style="color: var(--color-text-dark);">Our mission is to make quality education accessible to everyone by connecting students with expert tutors worldwide.</p>
    <a href="#" class="btn" style="background: var(--color-primary); color: #fff; margin-right: 10px;">Join Our Community</a>
    <a href="#" class="btn" style="background: var(--color-accent-1); color: #fff;">Become a Tutor</a>
  </div>
</section>
<!-- Impact Numbers -->
<section class="py-5" style="background: #fff;">
  <div class="container text-center">
    <h3 class="mb-4" style="color: var(--color-text-dark); font-weight: 600;">Our Impact in Numbers</h3>
    <div class="row justify-content-center">
      <div class="col-md-3 mb-3">
        <div class="card p-4 shadow-sm" style="border: 1px solid var(--color-primary);">
          <h2 style="color: var(--color-primary); font-weight: 700;">10,000+</h2>
          <p>Students Helped</p>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card p-4 shadow-sm" style="border: 1px solid var(--color-secondary);">
          <h2 style="color: var(--color-secondary); font-weight: 700;">500+</h2>
          <p>Expert Tutors</p>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card p-4 shadow-sm" style="border: 1px solid var(--color-accent-1);">
          <h2 style="color: var(--color-accent-1); font-weight: 700;">95%</h2>
          <p>Success Rate</p>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card p-4 shadow-sm" style="border: 1px solid var(--color-accent-2);">
          <h2 style="color: var(--color-accent-2); font-weight: 700;">25+</h2>
          <p>Countries</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Vision Section -->
<section class="py-5" style="background: var(--color-bg);">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <h4 class="mb-3" style="color: var(--color-text-dark); font-weight: 600;">From Vision to Reality</h4>
        <p style="color: var(--color-text-dark);">Call A Tutor was founded in 2020 by a group of educators and tech enthusiasts who saw a gap in the educational support system. Many students were struggling to find qualified tutors who could provide personalized help when they needed it most.<br><br>Our founders believed that with the right technology, they could create a platform that would make it easy for students to connect with qualified tutors in any subject, at any time, from anywhere in the world.<br><br>Today, Call A Tutor has helped thousands of students improve their grades, build their confidence, and achieve their academic goals through personalized tutoring sessions with expert educators.</p>
      </div>
      <div class="col-md-6 text-center">
        <img src="{{ asset('images/hero-tutoring.jpg') }}" alt="Tutoring" class="img-fluid rounded shadow" style="background: var(--color-desk); max-width: 90%;">
      </div>
    </div>
  </div>
</section>
@endsection
