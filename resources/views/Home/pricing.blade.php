@extends('layouts.app')
@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: var(--color-bg); padding: 60px 0 40px 0;">
  <div class="container text-center">
    <h1 class="mt-3 mb-2" style="color: var(--color-primary); font-weight: 700;">Simple, Transparent Pricing</h1>
    <p class="lead mb-4" style="color: var(--color-text-dark);">Choose the plan that fits your learning needs. All plans include access to our qualified tutors and learning platform.</p>
    <div class="mb-2">
      <span class="badge" style="background: var(--color-secondary); color: #fff;">Monthly</span>
      <span class="badge" style="background: #e0e0e0; color: var(--color-text-dark);">Yearly</span>
    </div>
  </div>
</section>
<!-- Pricing Cards -->
<section class="py-5" style="background: #fff;">
  <div class="container">
    <div class="row justify-content-center align-items-end">
      <!-- Basic Plan -->
      <div class="col-md-4 mb-4">
        <div class="card p-4 shadow-sm h-100" style="border: 2px solid var(--color-primary);">
          <div class="text-center mb-3">
            <i class="fas fa-user fa-2x mb-2" style="color: var(--color-primary);"></i>
            <h5 style="color: var(--color-primary); font-weight: 700;">Basic</h5>
            <div class="display-5 mb-2" style="color: var(--color-text-dark);">$29</div>
            <div style="color: #888; font-size: 0.95rem;">per month</div>
          </div>
          <ul class="list-unstyled mb-4">
            <li>✔ 3 tutoring sessions per month</li>
            <li>✔ Email support</li>
            <li>✔ Basic learning analytics</li>
            <li>✔ Dashboard access</li>
            <li>✔ Standard tutors</li>
          </ul>
          <a href="#" class="btn w-100" style="background: var(--color-primary); color: #fff;">Get Started</a>
        </div>
      </div>
      <!-- Pro Plan -->
      <div class="col-md-4 mb-4">
        <div class="card p-4 shadow-sm h-100" style="border: 2px solid var(--color-accent-1); background: var(--color-bg); position: relative;">
          <div class="text-center mb-3">
            <span class="badge mb-2" style="background: var(--color-accent-1); color: #fff; position: absolute; top: -18px; left: 50%; transform: translateX(-50%);">Most Popular</span>
            <i class="fas fa-user-graduate fa-2x mb-2" style="color: var(--color-accent-1);"></i>
            <h5 style="color: var(--color-accent-1); font-weight: 700;">Pro</h5>
            <div class="display-5 mb-2" style="color: var(--color-text-dark);">$59</div>
            <div style="color: #888; font-size: 0.95rem;">per month</div>
          </div>
          <ul class="list-unstyled mb-4">
            <li>✔ Unlimited tutoring sessions</li>
            <li>✔ Priority scheduling</li>
            <li>✔ 24/7 chat support</li>
            <li>✔ Progress tracking & analytics</li>
            <li>✔ Organize sessions by subject</li>
          </ul>
          <a href="#" class="btn w-100" style="background: var(--color-accent-1); color: #fff;">Get Started</a>
        </div>
      </div>
      <!-- Enterprise Plan -->
      <div class="col-md-4 mb-4">
        <div class="card p-4 shadow-sm h-100" style="border: 2px solid var(--color-accent-2);">
          <div class="text-center mb-3">
            <i class="fas fa-building fa-2x mb-2" style="color: var(--color-accent-2);"></i>
            <h5 style="color: var(--color-accent-2); font-weight: 700;">Enterprise</h5>
            <div class="display-5 mb-2" style="color: var(--color-text-dark);">$149</div>
            <div style="color: #888; font-size: 0.95rem;">per month</div>
          </div>
          <ul class="list-unstyled mb-4">
            <li>✔ Everything in Pro</li>
            <li>✔ Custom onboarding</li>
            <li>✔ Dedicated account manager</li>
            <li>✔ Custom reports & analytics</li>
            <li>✔ Team management</li>
          </ul>
          <a href="#" class="btn w-100" style="background: var(--color-accent-2); color: #fff;">Get Started</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 