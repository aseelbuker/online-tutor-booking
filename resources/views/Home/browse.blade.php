@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Browse Subjects</h2>
        <p class="text-muted">Find expert tutors in a wide range of academic subjects</p>

        <form action="{{ route('browse.search') }}" method="GET" class="input-group mx-auto" style="max-width: 400px;">
            <input type="text" name="q" class="form-control" placeholder="Search subjects...">
            <button type="submit" class="btn btn-outline-primary">Search</button>
        </form>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach([
            ['Mathematics', 'Algebra, Calculus, Statistics, and more', 24, '📘'],
            ['Sciences', 'Physics, Chemistry, Biology, and more', 18, '🔬'],
            ['Languages', 'English, Spanish, French, and more', 32, '🗣️'],
            ['Computer Science', 'Programming, Data Structures, Algorithms', 15, '💻'],
            ['Business Studies', 'Economics, Management, Finance', 12, '📊'],
            ['History', 'World History, US History, European History', 8, '🏛️'],
            ['Arts', 'Drawing, Painting, Music, Theater', 9, '🎨'],
            ['Literature', 'Classic Literature, Essays, Creative Writing', 14, '📚'],
        ] as $subject)
        <div class="col">
            <div class="card h-100 shadow-sm border rounded-3">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                        <h5 class="card-title">
                            {{ $subject[3] ?? '📘' }} <strong>{{ $subject[0] }}</strong>
                        </h5>
                        <p class="text-muted mb-2">{{ $subject[1] }}</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <small class="text-secondary">{{ $subject[2] }} tutors available</small>
                        <a href="#" class="btn btn-link text-primary p-0">View Tutors</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
