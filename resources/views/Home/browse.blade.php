@extends('layouts.app')
@section('content')
<section class="py-5" style="background: #fff;">
  <div class="container">
    <h1 class="text-center mb-4" style="color: var(--color-text-dark); font-weight: 700;">Browse Subjects</h1>
    <p class="text-center mb-5" style="color: var(--color-text-dark);">Find expert tutors in a wide range of academic subjects</p>
    <div class="row justify-content-center">
      <!-- Example subject cards -->
      <div class="col-md-3 mb-4">
        <div class="card p-4 shadow-sm h-100">
          <div class="d-flex align-items-center mb-2"><i class="fas fa-calculator fa-lg me-2" style="color: var(--color-primary);"></i><strong>Mathematics</strong></div>
          <div class="mb-2" style="color: #666;">Algebra, Calculus, Statistics, and more</div>
          <div class="mb-2" style="font-size: 0.95rem; color: #888;">24 tutors available</div>
          <a href="#" class="btn btn-sm" style="background: var(--color-primary); color: #fff;">View Tutors</a>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card p-4 shadow-sm h-100">
          <div class="d-flex align-items-center mb-2"><i class="fas fa-flask fa-lg me-2" style="color: var(--color-accent-1);"></i><strong>Sciences</strong></div>
          <div class="mb-2" style="color: #666;">Physics, Chemistry, Biology, and more</div>
          <div class="mb-2" style="font-size: 0.95rem; color: #888;">18 tutors available</div>
          <a href="#" class="btn btn-sm" style="background: var(--color-accent-1); color: #fff;">View Tutors</a>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card p-4 shadow-sm h-100">
          <div class="d-flex align-items-center mb-2"><i class="fas fa-language fa-lg me-2" style="color: var(--color-accent-2);"></i><strong>Languages</strong></div>
          <div class="mb-2" style="color: #666;">English, Spanish, French, and more</div>
          <div class="mb-2" style="font-size: 0.95rem; color: #888;">32 tutors available</div>
          <a href="#" class="btn btn-sm" style="background: var(--color-accent-2); color: #fff;">View Tutors</a>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card p-4 shadow-sm h-100">
          <div class="d-flex align-items-center mb-2"><i class="fas fa-laptop-code fa-lg me-2" style="color: var(--color-secondary);"></i><strong>Computer Science</strong></div>
          <div class="mb-2" style="color: #666;">Programming, Data Structures, Algorithms</div>
          <div class="mb-2" style="font-size: 0.95rem; color: #888;">15 tutors available</div>
          <a href="#" class="btn btn-sm" style="background: var(--color-secondary); color: #fff;">View Tutors</a>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card p-4 shadow-sm h-100">
          <div class="d-flex align-items-center mb-2"><i class="fas fa-briefcase fa-lg me-2" style="color: var(--color-primary);"></i><strong>Business Studies</strong></div>
          <div class="mb-2" style="color: #666;">Economics, Management, Finance</div>
          <div class="mb-2" style="font-size: 0.95rem; color: #888;">12 tutors available</div>
          <a href="#" class="btn btn-sm" style="background: var(--color-primary); color: #fff;">View Tutors</a>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card p-4 shadow-sm h-100">
          <div class="d-flex align-items-center mb-2"><i class="fas fa-landmark fa-lg me-2" style="color: var(--color-accent-1);"></i><strong>History</strong></div>
          <div class="mb-2" style="color: #666;">World History, US History, European History</div>
          <div class="mb-2" style="font-size: 0.95rem; color: #888;">8 tutors available</div>
          <a href="#" class="btn btn-sm" style="background: var(--color-accent-1); color: #fff;">View Tutors</a>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card p-4 shadow-sm h-100">
          <div class="d-flex align-items-center mb-2"><i class="fas fa-paint-brush fa-lg me-2" style="color: var(--color-accent-2);"></i><strong>Arts</strong></div>
          <div class="mb-2" style="color: #666;">Drawing, Painting, Music, Theater</div>
          <div class="mb-2" style="font-size: 0.95rem; color: #888;">9 tutors available</div>
          <a href="#" class="btn btn-sm" style="background: var(--color-accent-2); color: #fff;">View Tutors</a>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card p-4 shadow-sm h-100">
          <div class="d-flex align-items-center mb-2"><i class="fas fa-book fa-lg me-2" style="color: var(--color-secondary);"></i><strong>Literature</strong></div>
          <div class="mb-2" style="color: #666;">Classic Literature, Essays, Creative Writing</div>
          <div class="mb-2" style="font-size: 0.95rem; color: #888;">14 tutors available</div>
          <a href="#" class="btn btn-sm" style="background: var(--color-secondary); color: #fff;">View Tutors</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection 