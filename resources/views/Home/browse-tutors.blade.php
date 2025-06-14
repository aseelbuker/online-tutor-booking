@extends('layouts.app')
@section('content')
<section class="py-5" style="background: var(--color-bg);">
  <div class="container">
    <h2 class="mb-4" style="color: var(--color-text-dark); font-weight: 700;">Find a Tutor</h2>
    <p class="mb-4" style="color: var(--color-text-dark);">Explore expert tutors for every subject and level. Use the filters to find someone who matches your learning style, availability, and budget.</p>
    <div class="row">
      <!-- Filters -->
      <div class="col-md-3 mb-4">
        <div class="card p-3 shadow-sm">
          <input type="text" class="form-control mb-3" placeholder="Search tutor name or subject">
          <div class="mb-2"><strong>Subject</strong></div>
          <select class="form-select mb-2">
            <option>All Subjects</option>
            <option>Mathematics</option>
            <option>Physics</option>
            <option>Chemistry</option>
            <option>Computer Science</option>
            <option>Biology</option>
            <option>Languages</option>
          </select>
          <div class="mb-2"><strong>Level</strong></div>
          <div class="mb-2">
            <div><input type="checkbox"> Primary</div>
            <div><input type="checkbox"> High School</div>
            <div><input type="checkbox"> University</div>
            <div><input type="checkbox"> Adult Learning</div>
          </div>
          <div class="mb-2"><strong>Rating</strong></div>
          <div class="mb-2">
            <div><input type="radio" name="rating"> 4.5+ <i class="fas fa-star text-warning"></i></div>
            <div><input type="radio" name="rating"> 4.0+ <i class="fas fa-star text-warning"></i></div>
            <div><input type="radio" name="rating"> 3.5+ <i class="fas fa-star text-warning"></i></div>
            <div><input type="radio" name="rating" checked> Any Rating</div>
          </div>
          <div class="mb-2"><strong>Language</strong></div>
          <div class="mb-2">
            <div><input type="checkbox"> English</div>
            <div><input type="checkbox"> Spanish</div>
            <div><input type="checkbox"> French</div>
            <div><input type="checkbox"> German</div>
            <div><input type="checkbox"> Chinese</div>
          </div>
          <div class="mb-2"><strong>Availability</strong></div>
          <div class="mb-2">
            <input type="range" class="form-range" min="10" max="100" step="5">
            <div style="font-size: 0.95rem; color: #888;">Up to $50/hour</div>
          </div>
          <button class="btn w-100 mb-2" style="background: var(--color-primary); color: #fff;">Apply Filters</button>
          <button class="btn w-100" style="background: #eee; color: var(--color-text-dark);">Reset Filters</button>
        </div>
      </div>
      <!-- Tutors Grid -->
      <div class="col-md-9">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div style="color: #888;">148 Tutors Available</div>
          <div>
            <label for="sort" class="me-2">Sort by:</label>
            <select id="sort" class="form-select d-inline-block w-auto">
              <option>Best Match</option>
              <option>Highest Rated</option>
              <option>Lowest Price</option>
            </select>
          </div>
        </div>
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
              <div class="mb-2" style="color: #FFA500;">
                <i class="fas fa-star"></i> 4.8 (124 reviews)
              </div>
              <div class="mb-2" style="font-size: 0.95rem; color: #666;">Experienced mathematics tutor with 8+ years teaching at university level. Specializing in calculus and algebra with a patient approach to help students build confidence.</div>
              <div class="mb-2">
                <span class="badge" style="background: var(--color-primary); color: #fff;">English</span>
                <span class="badge" style="background: var(--color-secondary); color: #fff;">Spanish</span>
                <span class="badge" style="background: #e0e0e0; color: var(--color-text-dark);">Evenings</span>
                <span class="badge" style="background: var(--color-accent-2); color: #fff;">Patient</span>
                <span class="badge" style="background: #e0e0e0; color: var(--color-primary);">Verified</span>
              </div>
              <div class="mb-2" style="font-weight: 700; color: var(--color-text-dark);">$35/hr</div>
              <div class="d-flex gap-2">
                <a href="#" class="btn btn-sm w-50" style="background: var(--color-primary); color: #fff;">Book a Session</a>
                <a href="#" class="btn btn-sm w-50" style="background: #fff; color: var(--color-primary); border: 1px solid var(--color-primary);">View Profile</a>
              </div>
            </div>
          </div>
          <!-- Add more tutor cards as needed -->
        </div>
        <!-- Pagination -->
        <nav aria-label="Tutors pagination">
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