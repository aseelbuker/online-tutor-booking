@extends('layouts.app')

@section('content')
<div class="container-fluid py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-3">Browse Subjects</h2>
        <p class="text-center text-muted mb-5">Find expert tutors in a wide range of academic and creative subjects. Filter by academic level, category, popularity, and more.</p>

        <div class="row">
            <!-- Filter Sidebar -->
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm p-3">
                    <h5 class="fw-bold mb-3">Filters</h5>

                    <input type="text" class="form-control mb-3" placeholder="Search by subjects">

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Academic Level</label>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> Primary</div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> Middle School</div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> High School</div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> College/University</div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> Adult Learning</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Subject Category</label>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> STEM</div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> Arts</div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> Languages</div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> Business</div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> Social Sciences</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Popularity</label>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> Trending</div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> Highly Rated</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Rating Range</label>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> 4.5+ </div>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> 4.0+</div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tutor Availability</label>
                        <div class="form-check"><input class="form-check-input" type="checkbox"> Available Now</div>
                    </div>

                    <button class="btn btn-primary w-100 mb-2">Apply Filters</button>
                    <button class="btn btn-outline-secondary w-100">Clear All</button>
                </div>
            </div>

            <!-- Subjects Grid -->
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">48 Subjects Found</span>
                    <div>
                        <label class="form-label me-2">Sort by:</label>
                        <select class="form-select d-inline w-auto">
                            <option>Best Match</option>
                            <option>Highest Rated</option>
                            <option>Most Popular</option>
                        </select>
                    </div>
                </div>

                <div class="row g-4">
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h5 class="card-title mb-0">Mathematics</h5>
                                        <span class="badge bg-warning text-dark">Most Popular</span>
                                    </div>
                                    <p class="card-text small text-muted">Expert teaching in all areas of mathematics from basics to calculus and algebra.</p>
                                    <div class="mb-2">
                                        <strong class="small">Majors:</strong> <span class="badge bg-light text-dark">Algebra</span> <span class="badge bg-light text-dark">Geometry</span>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <i class="fas fa-star text-warning"></i> 4.8 (1,250)
                                        </div>
                                        <div class="small text-muted">32 Tutors Available</div>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-0 text-end">
                                    <a href="#" class="btn btn-outline-primary btn-sm">Explore</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <!-- Pagination -->
                <div class="d-flex justify-content-center mt-4">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
