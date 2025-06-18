@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <span class="text-primary fw-bold">Contact Us</span>
        <h1 class="display-5 fw-bold mt-3">We're Here to Help</h1>
        <p class="lead mt-3">Have a question or need assistance? Our team is ready to provide you with the support you need.</p>
    </div>
</section>

<!-- Quick Actions -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-4">Quick Actions</h2>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm p-4 h-100">
                    <i class="fas fa-tools fa-2x text-primary mb-3"></i>
                    <h5>Technical Support</h5>
                    <p>Having trouble with our platform?</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Get Help</a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm p-4 h-100">
                    <i class="fas fa-file-invoice-dollar fa-2x text-primary mb-3"></i>
                    <h5>Billing Questions</h5>
                    <p>Questions about your account or billing?</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Billing Support</a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm p-4 h-100">
                    <i class="fas fa-user-plus fa-2x text-primary mb-3"></i>
                    <h5>Become a Tutor</h5>
                    <p>Interested in joining our team?</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Apply Now</a>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card shadow-sm p-4 h-100">
                    <i class="fas fa-handshake fa-2x text-primary mb-3"></i>
                    <h5>Partnership</h5>
                    <p>Want to partner with us?</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form and Info -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-6 mb-4">
                <h4 class="fw-bold mb-3">Send Us a Message</h4>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Full Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <select class="form-select">
                            <option selected disabled>Category</option>
                            <option>General Inquiry</option>
                            <option>Technical Support</option>
                            <option>Billing</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Message</button>
                </form>
            </div>

            <!-- Contact Info -->
            <div class="col-md-6">
                <h4 class="fw-bold mb-3">Get in Touch</h4>
                <div class="mb-3 p-3 bg-white shadow-sm rounded">
                    <i class="fas fa-phone-alt text-primary me-2"></i>
                    <strong>Phone Support</strong>
                    <p class="mb-0">Mon-Fri 9:00 AM - 6:00 PM EST</p>
                    <p>+1 234 567 890</p>
                </div>
                <div class="mb-3 p-3 bg-white shadow-sm rounded">
                    <i class="fas fa-envelope text-primary me-2"></i>
                    <strong>Email Support</strong>
                    <p class="mb-0">support@callatutor.com</p>
                </div>
                <div class="mb-3 p-3 bg-white shadow-sm rounded">
                    <i class="fas fa-comments text-primary me-2"></i>
                    <strong>Live Chat</strong>
                    <p>Available 24/7 for assistance</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Start Chat</a>
                </div>
                <div class="mb-3 p-3 bg-white shadow-sm rounded">
                    <i class="fas fa-map-marker-alt text-primary me-2"></i>
                    <strong>Office Location</strong>
                    <p>123 Education St. San Francisco, CA 94016</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Get Directions</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Business Hours -->
<section class="text-center py-3">
    <div class="container">
        <h5>Business Hours</h5>
        <p>Monday - Friday: 9:00 AM - 6:00 PM EST<br>Saturday: 10:00 AM - 4:00 PM EST<br>Sunday: Closed</p>
    </div>
</section>

@endsection
