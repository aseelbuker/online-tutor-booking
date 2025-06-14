@extends('layouts.app')
@section('content')
<section class="py-5" style="background: var(--color-bg);">
  <div class="container">
    <h2 class="mb-4" style="color: var(--color-text-dark); font-weight: 700;">Browse Subjects</h2>
    <p class="mb-4" style="color: var(--color-text-dark);">Find expert tutors in a wide range of academic and creative subjects. Filter by academic level, category, popularity, and more to find what suits your needs.</p>
    <div class="row">
      <!-- Filters -->
      <div class="col-md-3 mb-4">
        <div class="card p-3 shadow-sm">
          <input type="text" class="form-control mb-3" placeholder="Search by subject">
          <div class="mb-2"><strong>Academic Level</strong></div>
          <div class="mb-2">
            <div><input type="checkbox"> Primary</div>
            <div><input type="checkbox"> Middle School</div>
            <div><input type="checkbox"> High School</div>
            <div><input type="checkbox"> College/University</div>
            <div><input type="checkbox"> Adult Learning</div>
          </div>
          <div class="mb-2"><strong>Subject Category</strong></div>
          <div class="mb-2">
            <div><input type="checkbox"> STEM</div>
            <div><input type="checkbox"> Arts</div>
            <div><input type="checkbox"> Languages</div>
            <div><input type="checkbox"> Business</div>
            <div><input type="checkbox"> Social Sciences</div>
          </div>
          <div class="mb-2"><strong>Popularity</strong></div>
          <div class="mb-2">
            <div><input type="checkbox"> Trending</div>
            <div><input type="checkbox"> Most Popular</div>
            <div><input type="checkbox"> New</div>
            <div><input type="checkbox"> Highly Rated</div>
          </div>
          <div class="mb-2"><strong>Rating Range</strong></div>
          <div class="mb-2">
            <div><input type="checkbox"> 4.5+</div>
            <div><input type="checkbox"> 4.0+</div>
            <div><input type="checkbox"> 3.5+</div>
          </div>
          <div class="mb-3"><strong>Tutor Availability</strong></div>
          <button class="btn w-100 mb-2" style="background: var(--color-primary); color: #fff;">Apply Filters</button>
          <button class="btn w-100" style="background: #eee; color: var(--color-text-dark);">Clear All</button>
        </div>
      </div>
      <!-- Subjects Grid -->
      <div class="col-md-9">
        <div class="row">
          <!-- Example subject cards -->
          <div class="col-md-6 mb-4">
            <div class="card p-4 shadow-sm h-100">
              <div class="d-flex align-items-center mb-2"><i class="fas fa-calculator fa-lg me-2" style="color: var(--color-primary);"></i><strong>Mathematics</strong><span class="badge ms-2" style="background: var(--color-accent-2); color: #fff;">Most Popular</span></div>
              <div class="mb-2" style="color: #666;">Expert tutoring in all areas of mathematics from basic arithmetic to advanced calculus.</div>
              <div class="mb-2" style="font-size: 0.95rem; color: #888;"><i class="fas fa-users me-1"></i> 32 Tutors Available</div>
              <a href="#" class="btn btn-sm" style="background: var(--color-primary); color: #fff;">Explore</a>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card p-4 shadow-sm h-100">
              <div class="d-flex align-items-center mb-2"><i class="fas fa-atom fa-lg me-2" style="color: var(--color-accent-1);"></i><strong>Physics</strong><span class="badge ms-2" style="background: var(--color-accent-1); color: #fff;">High Demand</span></div>
              <div class="mb-2" style="color: #666;">Learn mechanics, electromagnetism, thermodynamics and more with expert physics tutors.</div>
              <div class="mb-2" style="font-size: 0.95rem; color: #888;"><i class="fas fa-users me-1"></i> 24 Tutors Available</div>
              <a href="#" class="btn btn-sm" style="background: var(--color-accent-1); color: #fff;">Explore</a>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card p-4 shadow-sm h-100">
              <div class="d-flex align-items-center mb-2"><i class="fas fa-flask fa-lg me-2" style="color: var(--color-secondary);"></i><strong>Chemistry</strong></div>
              <div class="mb-2" style="color: #666;">From basic chemistry concepts to advanced organic chemistry with qualified tutors.</div>
              <div class="mb-2" style="font-size: 0.95rem; color: #888;"><i class="fas fa-users me-1"></i> 17 Tutors Available</div>
              <a href="#" class="btn btn-sm" style="background: var(--color-secondary); color: #fff;">Explore</a>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card p-4 shadow-sm h-100">
              <div class="d-flex align-items-center mb-2"><i class="fas fa-laptop-code fa-lg me-2" style="color: var(--color-primary);"></i><strong>Computer Science</strong><span class="badge ms-2" style="background: #e0e0e0; color: var(--color-text-dark);">Trending</span></div>
              <div class="mb-2" style="color: #666;">Programming, algorithms, data structures and more with experienced CS tutors.</div>
              <div class="mb-2" style="font-size: 0.95rem; color: #888;"><i class="fas fa-users me-1"></i> 13 Tutors Available</div>
              <a href="#" class="btn btn-sm" style="background: var(--color-primary); color: #fff;">Explore</a>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card p-4 shadow-sm h-100">
              <div class="d-flex align-items-center mb-2"><i class="fas fa-dna fa-lg me-2" style="color: var(--color-accent-2);"></i><strong>Biology</strong><span class="badge ms-2" style="background: var(--color-accent-2); color: #fff;">High Demand</span></div>
              <div class="mb-2" style="color: #666;">Study cellular biology, genetics, ecology and more with passionate biology tutors.</div>
              <div class="mb-2" style="font-size: 0.95rem; color: #888;"><i class="fas fa-users me-1"></i> 21 Tutors Available</div>
              <a href="#" class="btn btn-sm" style="background: var(--color-accent-2); color: #fff;">Explore</a>
            </div>
          </div>
          <div class="col-md-6 mb-4">
            <div class="card p-4 shadow-sm h-100">
              <div class="d-flex align-items-center mb-2"><i class="fas fa-language fa-lg me-2" style="color: var(--color-accent-1);"></i><strong>Foreign Languages</strong></div>
              <div class="mb-2" style="color: #666;">Learn Spanish, French, Mandarin and more with native-speaking language tutors.</div>
              <div class="mb-2" style="font-size: 0.95rem; color: #888;"><i class="fas fa-users me-1"></i> 36 Tutors Available</div>
              <a href="#" class="btn btn-sm" style="background: var(--color-accent-1); color: #fff;">Explore</a>
            </div>
          </div>
        </div>
        <!-- Pagination -->
        <nav aria-label="Subjects pagination">
          <ul class="pagination justify-content-center mt-4">
            <li class="page-item disabled"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>
@endsection 