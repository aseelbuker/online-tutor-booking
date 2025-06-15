@extends('layouts.app')
@section('content')
<section class="py-5" style="background: var(--color-bg);">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle mb-3" width="120" height="120" alt="Tutor">
        <h3 style="color: var(--color-primary); font-weight: 700;">Michael Johnson</h3>
        <div class="mb-2" style="color: #888;">Mathematics, Physics</div>
        <div class="mb-2" style="color: #FFA500;"><i class="fas fa-star"></i> 4.8 (124 reviews)</div>
        <a href="/book/1" class="btn w-100 mb-2" style="background: var(--color-primary); color: #fff;">Book a Session</a>
      </div>
      <div class="col-md-8">
        <h5 style="color: var(--color-text-dark); font-weight: 600;">About</h5>
        <p style="color: var(--color-text-dark);">Experienced mathematics tutor with 8+ years teaching at university level. Specializing in calculus and algebra with a patient approach to help students build confidence.</p>
        <h6 class="mt-4" style="color: var(--color-accent-1); font-weight: 600;">Reviews</h6>
        <div class="mb-3 p-3 bg-white rounded shadow-sm">
          <strong>Sarah W.</strong> <span class="text-warning"><i class="fas fa-star"></i> 5.0</span>
          <p class="mb-0">Michael is a fantastic tutor! Helped me ace my calculus exam.</p>
        </div>
        <div class="mb-3 p-3 bg-white rounded shadow-sm">
          <strong>Emily R.</strong> <span class="text-warning"><i class="fas fa-star"></i> 4.9</span>
          <p class="mb-0">Very patient and explains concepts clearly.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 