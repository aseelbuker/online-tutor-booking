@extends('layouts.app')
@section('content')
<section class="py-5" style="background: var(--color-bg);">
  <div class="container">
    <h2 class="mb-3" style="color: var(--color-primary); font-weight: 700;">Mathematics</h2>
    <p class="mb-4" style="color: var(--color-text-dark);">Explore expert tutors for Mathematics. Algebra, Calculus, Statistics, and more.</p>
    <div class="row">
      <!-- Example tutor cards -->
      <div class="col-md-4 mb-4">
        <div class="card p-4 shadow-sm h-100" style="border: 2px solid var(--color-primary);">
          <div class="d-flex align-items-center mb-2">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-2" width="48" height="48" alt="Tutor">
            <div>
              <strong>Michael Johnson</strong><br>
              <span style="font-size: 0.95rem; color: #888;">Mathematics, Physics</span>
            </div>
          </div>
          <div class="mb-2" style="color: #FFA500;"><i class="fas fa-star"></i> 4.8 (124 reviews)</div>
          <div class="mb-2" style="font-size: 0.95rem; color: #666;">Experienced mathematics tutor with 8+ years teaching at university level. Specializing in calculus and algebra.</div>
          <div class="mb-2">
            <span class="badge" style="background: var(--color-primary); color: #fff;">English</span>
            <span class="badge" style="background: var(--color-secondary); color: #fff;">Spanish</span>
            <span class="badge" style="background: #e0e0e0; color: var(--color-primary);">Verified</span>
          </div>
          <div class="mb-2" style="font-weight: 700; color: var(--color-text-dark);">$35/hr</div>
          <div class="d-flex gap-2">
            <a href="/book/1" class="btn btn-sm w-50" style="background: var(--color-primary); color: #fff;">Book a Session</a>
            <a href="/tutor/1" class="btn btn-sm w-50" style="background: #fff; color: var(--color-primary); border: 1px solid var(--color-primary);">View Profile</a>
          </div>
        </div>
      </div>
      <!-- Add more tutor cards as needed -->
    </div>
  </div>
</section>
@endsection 