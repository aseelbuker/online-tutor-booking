@extends('layouts.app')
@section('content')
<section class="py-5" style="background: var(--color-bg);">
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh;">
    <div class="card p-4 shadow-sm" style="max-width: 400px; width: 100%; background: #fff;">
      <h3 class="mb-4 text-center" style="color: var(--color-primary); font-weight: 700;">Sign Up</h3>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" placeholder="Enter your name">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Create a password">
        </div>
        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm your password">
        </div>
        <button type="submit" class="btn w-100" style="background: var(--color-primary); color: #fff;">Sign Up</button>
      </form>
      <div class="mt-3 text-center">
        <span>Already have an account? <a href="/login" style="color: var(--color-accent-1);">Sign In</a></span>
      </div>
    </div>
  </div>
</section>
@endsection 