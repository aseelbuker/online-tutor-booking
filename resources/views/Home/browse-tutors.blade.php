@extends('layouts.app')

@section('content')
<div class="container-fluid py-5 bg-light">
    <div class="container">
        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold">Browse Tutors</h2>
                <p class="text-muted">Find expert tutors in a wide range of academic and creative subjects</p>
            </div>
            <div class="btn-group" role="group">
                <a href="{{ route('browse.tutors') }}" class="btn btn-primary active">Tutors</a>
                <a href="{{ route('browse.subjects') }}" class="btn btn-outline-primary">Subjects</a>
            </div>
        </div>
        <form action="{{ route('browse.tutors') }}" method="GET" class="input-group mb-4 mx-auto" style="max-width: 400px;">
            <input type="text" name="q" class="form-control" placeholder="Search tutors...">
            <button type="submit" class="btn btn-outline-primary">Search</button>
        </form>
        <div class="row">
            <!-- Filter Sidebar -->
            <div class="col-lg-3 mb-4">
                <div class="card p-3 shadow-sm">
                    <h5 class="fw-bold mb-3">Filters</h5>

                    <!-- Search -->
                    <input type="text" class="form-control mb-3" placeholder="Search by name or subject">

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

                    <!-- Rating Range -->
                    <h6 class="fw-semibold mt-3">Rating Range</h6>
                    @foreach(['4.5+', '4.0+'] as $rating)
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="rate-{{ $rating }}">
                            <label class="form-check-label" for="rate-{{ $rating }}">{{ $rating }}</label>
                        </div>
                    @endforeach

                    <!-- Tutor Availability -->
                    <h6 class="fw-semibold mt-3">Tutor Availability</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="availability">
                        <label class="form-check-label" for="availability">Available Now</label>
                    </div>

                    <!-- Buttons -->
                    <button class="btn btn-primary w-100 mt-3 mb-2">Apply Filters</button>
                    <button class="btn btn-outline-secondary w-100">Clear All</button>
                </div>
            </div>

            <!-- Tutors Grid -->
            <div class="col-lg-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">48 Tutors Found</span>
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
                    @php
                        $tutors = [
                            [
                                'name' => 'Michael Johnson',
                                'subjects' => ['Mathematics', 'Physics'],
                                'rating' => '4.8',
                                'reviews' => 124,
                                'description' => 'Experienced mathematics tutor with 8+ years teaching at university level. Specializing in calculus and algebra with a patient approach to help students build confidence.',
                                'languages' => ['English', 'Spanish'],
                                'availability' => 'Evenings',
                                'traits' => ['Patient', 'Verified'],
                                'price' => '$35/hr'
                            ],
                            [
                                'name' => 'Sarah Williams',
                                'subjects' => ['Chemistry', 'Biology'],
                                'rating' => '4.9',
                                'reviews' => 98,
                                'description' => 'PhD in Chemistry with 5 years of teaching experience. Passionate about making complex scientific concepts easy to understand.',
                                'languages' => ['English', 'French'],
                                'availability' => 'Weekends',
                                'traits' => ['Experienced', 'Verified'],
                                'price' => '$40/hr'
                            ],
                            [
                                'name' => 'David Chen',
                                'subjects' => ['Computer Science', 'Mathematics'],
                                'rating' => '4.7',
                                'reviews' => 156,
                                'description' => 'Software engineer with 10+ years of experience. Expert in programming languages and algorithms.',
                                'languages' => ['English', 'Chinese'],
                                'availability' => 'Flexible',
                                'traits' => ['Expert', 'Verified'],
                                'price' => '$45/hr'
                            ]
                        ];
                    @endphp

                    @foreach ($tutors as $tutor)
                        <div class="col-md-6 col-lg-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle me-3" width="48" height="48" alt="Tutor">
                                        <div>
                                            <h5 class="card-title mb-0">{{ $tutor['name'] }}</h5>
                                            <p class="text-muted small mb-0">{{ implode(', ', $tutor['subjects']) }}</p>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <i class="fas fa-star text-warning"></i> {{ $tutor['rating'] }} ({{ $tutor['reviews'] }} reviews)
                                    </div>
                                    <p class="card-text small text-muted">{{ $tutor['description'] }}</p>
                                    <div class="mb-2">
                                        @foreach($tutor['languages'] as $language)
                                            <span class="badge bg-primary me-1">{{ $language }}</span>
                                        @endforeach
                                        <span class="badge bg-secondary me-1">{{ $tutor['availability'] }}</span>
                                        @foreach($tutor['traits'] as $trait)
                                            <span class="badge bg-info">{{ $trait }}</span>
                                        @endforeach
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">{{ $tutor['price'] }}</h5>
                                        <a href="#" class="btn btn-outline-primary btn-sm">Book Now</a>
                                    </div>
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