@extends('layouts.app')

@section('content')
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold">Browse Subjects</h2>
                <p class="text-muted">Find expert tutors in a wide range of academic and creative subjects</p>
            </div>
            <div class="btn-group" role="group">
            </div>
        </div>
            <input type="text" name="q" class="form-control" placeholder="Search subjects...">
            <button type="submit" class="btn btn-outline-primary">Search</button>
        </form>
        <div class="row">
            <!-- Filter Sidebar -->
            <div class="col-lg-3 mb-4">
                <div class="card p-3 shadow-sm">
                    <h5 class="fw-bold mb-3">Filters</h5>

                    <!-- Search -->
                    <input type="text" class="form-control mb-3" placeholder="Search by subject">

                    <!-- Academic Level -->
                    <h6 class="fw-semibold">Academic Level</h6>
                    @foreach(['Primary', 'Middle School', 'High School', 'College/University', 'Adult Learning'] as $level)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="level-{{ $level }}">
                            <label class="form-check-label" for="level-{{ $level }}">{{ $level }}</label>
                        </div>
                    @endforeach

                    <!-- Subject Category -->
                    <h6 class="fw-semibold mt-3">Subject Category</h6>
                    @foreach(['STEM', 'Arts', 'Languages', 'Business', 'Social Sciences'] as $cat)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="cat-{{ $cat }}">
                            <label class="form-check-label" for="cat-{{ $cat }}">{{ $cat }}</label>
                        </div>
                    @endforeach

                    <!-- Popularity -->
                    <h6 class="fw-semibold mt-3">Popularity</h6>
                    @foreach(['Trending', 'Highly Rated'] as $pop)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="pop-{{ $pop }}">
                            <label class="form-check-label" for="pop-{{ $pop }}">{{ $pop }}</label>
                        </div>
                    @endforeach

                    <!-- Buttons -->
                    <button class="btn btn-primary w-100 mt-3 mb-2">Apply Filters</button>
                    <button class="btn btn-outline-secondary w-100">Clear All</button>
                </div>
            </div>

            <!-- Subjects Grid -->
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">48 Subjects Found</span>
                    <div>
                        <label class="form-label me-2">Sort by:</label>
                        <select class="form-select d-inline w-auto">
                            <option selected>Best Match</option>
                            <option>Most Popular</option>
                            <option>Highest Rated</option>
                        </select>
                    </div>
                </div>

                <div class="row g-4">
                    @foreach ($subjects as $subject)
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <h5 class="card-title">{{ $subject->icon ?? '📘' }} {{ $subject->name }}</h5>
                                        {{-- You can add a badge here if you want --}}
                                    </div>
                                    <p class="card-text text-muted small">Level: {{ $subject->level ?? 'N/A' }}</p>
                                    <div class="d-flex justify-content-between align-items-center small">
                                        <div>
                                            <i class="fas fa-user text-warning"></i> {{ $subject->tutors_count }} Tutors
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent text-end border-0">
                                    <a href="#" class="btn btn-outline-primary btn-sm">Explore</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
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