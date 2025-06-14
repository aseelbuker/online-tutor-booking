@extends('layouts.app')
@section('content')
<section class="py-5" style="background: var(--color-bg);">
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh;">
    <div class="card p-4 shadow-sm" style="max-width: 400px; width: 100%; background: #fff;">
      <h3 class="mb-4 text-center" style="color: var(--color-primary); font-weight: 700;">Sign In</h3>
      <form>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="remember">
          <label class="form-check-label" for="remember">Remember Me</label>
        </div>
        <button type="submit" class="btn w-100" style="background: var(--color-primary); color: #fff;">Sign In</button>
      </form>
      <div class="mt-3 text-center">
        <span>Don't have an account? <a href="/register" style="color: var(--color-accent-1);">Sign Up</a></span>
      </div>
    </div>
  </div>
</section>
@endsection 