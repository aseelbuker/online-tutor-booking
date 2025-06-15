@extends('layouts.app')
@section('content')
<!-- Hero Section -->
<section class="hero-section" style="background: var(--color-bg); padding: 60px 0 40px 0;">
  <div class="container text-center">
    <span class="badge" style="background: var(--color-secondary); color: #fff;">Contact Us</span>
    <h1 class="mt-3 mb-2" style="color: var(--color-primary); font-weight: 700;">We're Here to Help</h1>
    <p class="lead mb-4" style="color: var(--color-text-dark);">Have a question or need assistance? Our team is ready to provide you with the support you need.</p>
  </div>
</section>
<!-- Quick Actions -->
<section class="py-4" style="background: #fff;">
  <div class="container text-center">
    <h5 class="mb-3" style="color: var(--color-text-dark); font-weight: 600;">Quick Actions</h5>
    <div class="row justify-content-center">
      <div class="col-md-3 mb-3">
        <div class="card p-3 shadow-sm h-100" style="border: 1px solid var(--color-primary);">
          <h6 style="color: var(--color-primary);">Technical Support</h6>
          <p style="font-size: 0.95rem;">Having technical issues with our platform?</p>
          <a href="#" class="btn btn-sm" style="background: var(--color-primary); color: #fff;">Get Help</a>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card p-3 shadow-sm h-100" style="border: 1px solid var(--color-secondary);">
          <h6 style="color: var(--color-secondary);">Billing Questions</h6>
          <p style="font-size: 0.95rem;">Questions about your subscription?</p>
          <a href="#" class="btn btn-sm" style="background: var(--color-secondary); color: #fff;">Billing Support</a>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card p-3 shadow-sm h-100" style="border: 1px solid var(--color-accent-1);">
          <h6 style="color: var(--color-accent-1);">Become a Tutor</h6>
          <p style="font-size: 0.95rem;">Interested in joining our team?</p>
          <a href="#" class="btn btn-sm" style="background: var(--color-accent-1); color: #fff;">Apply Now</a>
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <div class="card p-3 shadow-sm h-100" style="border: 1px solid var(--color-accent-2);">
          <h6 style="color: var(--color-accent-2);">Partnership</h6>
          <p style="font-size: 0.95rem;">Want to partner with us?</p>
          <a href="#" class="btn btn-sm" style="background: var(--color-accent-2); color: #fff;">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact Form & Info -->
<section class="py-5" style="background: var(--color-bg);">
  <div class="container">
    <div class="row">
      <!-- Contact Form -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="card p-4 shadow-sm" style="background: #fff;">
          <h5 class="mb-3" style="color: var(--color-text-dark); font-weight: 600;">Send Us a Message</h5>
          <form>
            <div class="row mb-3">
              <div class="col">
                <input type="text" class="form-control" placeholder="Full Name*">
              </div>
              <div class="col">
                <input type="email" class="form-control" placeholder="Email Address*">
              </div>
            </div>
            <div class="mb-3">
              <select class="form-select">
                <option>General Inquiry</option>
                <option>Technical Support</option>
                <option>Billing</option>
                <option>Partnership</option>
              </select>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" placeholder="Subject*">
            </div>
            <div class="mb-3">
              <textarea class="form-control" rows="4" placeholder="Message*"></textarea>
            </div>
            <button type="submit" class="btn w-100" style="background: var(--color-primary); color: #fff;">Send Message</button>
          </form>
        </div>
      </div>
      <!-- Contact Info -->
      <div class="col-md-6">
        <div class="card p-4 shadow-sm" style="background: #fff;">
          <h5 class="mb-3" style="color: var(--color-text-dark); font-weight: 600;">Get in Touch</h5>
          <ul class="list-unstyled mb-4">
            <li class="mb-3"><i class="fas fa-phone-alt me-2" style="color: var(--color-primary);"></i> <strong>Phone Support:</strong> +1 (415) 555-0127</li>
            <li class="mb-3"><i class="fas fa-envelope me-2" style="color: var(--color-secondary);"></i> <strong>Email Support:</strong> support@callatutor.com</li>
            <li class="mb-3"><i class="fas fa-comments me-2" style="color: var(--color-accent-1);"></i> <strong>Live Chat:</strong> Available 24/7</li>
            <li><i class="fas fa-map-marker-alt me-2" style="color: var(--color-accent-2);"></i> <strong>Office Location:</strong> 123 Education St, San Francisco, CA 94066</li>
          </ul>
          <div>
            <strong>Business Hours:</strong><br>
            <span>Monday - Friday: 9:00 AM - 6:00 PM EST</span><br>
            <span>Saturday: 10:00 AM - 4:00 PM EST</span><br>
            <span>Sunday: Closed</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
