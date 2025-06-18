@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <span class="text-primary fw-bold">About Call A Tutor</span>
        <h1 class="display-5 fw-bold mt-3">Revolutionizing Education Through Technology</h1>
        <p class="lead mt-3">Our mission is to make quality education accessible to everyone by connecting students with expert tutors worldwide.</p>
        <div class="mt-4">
            <a href="#" class="btn btn-primary me-2">Join Us Conveniently</a>
            <a href="#" class="btn btn-outline-primary">Become a Tutor</a>
        </div>
    </div>
</section>

<!-- Impact Section -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-5">Our Impact in Numbers</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card shadow-sm p-4">
                    <i class="fas fa-user-graduate fa-2x text-primary mb-3"></i>
                    <h4>10,000+</h4>
                    <p>Students served worldwide</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm p-4">
                    <i class="fas fa-chalkboard-teacher fa-2x text-primary mb-3"></i>
                    <h4>500+</h4>
                    <p>Professional Tutors Available</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm p-4">
                    <i class="fas fa-smile fa-2x text-primary mb-3"></i>
                    <h4>95%</h4>
                    <p>Student Satisfaction Rate</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card shadow-sm p-4">
                    <i class="fas fa-globe fa-2x text-primary mb-3"></i>
                    <h4>25+</h4>
                    <p>Countries Covered</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
                <h3 class="fw-bold">From Vision to Reality</h3>
                <p>Call A Tutor was founded in 2020 by a group of educators and tech enthusiasts who saw a gap in the online learning space. Our mission has always been to bridge this gap by providing a platform where personalized and flexible tutoring meets technological ease.</p>
                <p>Our belief is that the right technology, the right people, and the right passion can transform how students learn, making education not only accessible but enjoyable.</p>
                <p>Today, we proudly connect students with the best tutors globally, making a difference in thousands of learners’ academic journeys and personal growth stories.</p>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8c3R1ZHl8ZW58MHx8MHx8fDA%3D" alt="Vision Image" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>
@endsection
