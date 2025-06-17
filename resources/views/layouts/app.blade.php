<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CAMa Tutor')</title>

    <!-- Common Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">
    <link href="/css/style.css" rel="stylesheet">

    @yield('head') <!-- Optional extra styles/scripts -->
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand fw-bold text-primary" href="#">
                <i class="fas fa-graduation-cap me-1"></i> CAl-Tutor
            </a>

            <!-- Toggle for mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-3">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/browse">Browse Subjects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pricing">Pricing</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>

                <!-- Auth Buttons -->
                <div class="d-flex">
                    <a href="/register" class="btn btn-outline-primary me-2">Signup</a>
                    <a href="/login" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    </nav>

    

    <!-- Content from child views goes here -->
    @yield('content')

    <!-- Common Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts') <!-- Optional scripts -->

    <footer class="bg-dark text-white py-4">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <div>
            <h5>Our Vision</h5>
            <p class="small">To provide convenient online tutoring for all students worldwide.</p>
            <div>
                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div>
            <h6>About</h6>
            <ul class="list-unstyled small">
                <li><a href="#" class="text-white">How it works</a></li>
                <li><a href="#" class="text-white">Tutor</a></li>
                <li><a href="#" class="text-white">Business Solution</a></li>
            </ul>
        </div>
        <div>
            <h6>Community</h6>
            <ul class="list-unstyled small">
                <li><a href="#" class="text-white">Events</a></li>
                <li><a href="#" class="text-white">Invite a Friend</a></li>
                <li><a href="#" class="text-white">Support</a></li>
            </ul>
        </div>
        <div>
            <h6>Socials</h6>
            <ul class="list-unstyled small">
                <li><a href="#" class="text-white">Facebook</a></li>
                <li><a href="#" class="text-white">Instagram</a></li>
                <li><a href="#" class="text-white">Twitter</a></li>
            </ul>
        </div>
    </div>
    <div class="text-center mt-3 small">
        &copy; 2025 CAA Tutor. All rights reserved. | <a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Terms & Conditions</a>
    </div>
</footer>
</body>
</html>