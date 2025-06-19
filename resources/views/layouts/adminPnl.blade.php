<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Admin Panel')</title>

    <!-- Bootstrap & Font Awesome via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/adminPanel.css') }}">
    <!-- Bootstrap CSS -->
 

</head>
<body>
    <div class="d-flex" style="min-height: 100vh;">
        <!-- Sidebar -->
        <nav class="bg-white border-end p-3" style="width: 240px;">
            <h4 class="fw-bold mb-4 text-primary">Admin Panel</h4>
            <ul class="nav flex-column mb-auto">
                <li class="nav-item mb-2"><a href="{{ route('admin.dashboard') }}" class="nav-link @if(Route::is('admin.dashboard')) active fw-bold text-primary @else text-dark @endif"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a></li>
                <li class="nav-item mb-2"><a href="{{ route('admin.tutors') }}" class="nav-link @if(Route::is('admin.tutors')) active fw-bold text-primary @else text-dark @endif"><i class="fas fa-chalkboard-teacher me-2"></i> Tutors</a></li>
                <li class="nav-item mb-2"><a href="{{ route('admin.students') }}" class="nav-link @if(Route::is('admin.students')) active fw-bold text-primary @else text-dark @endif"><i class="fas fa-user-graduate me-2"></i> Students</a></li>
                <li class="nav-item mb-2"><a href="{{ route('admin.subjects') }}" class="nav-link @if(Route::is('admin.subjects')) active fw-bold text-primary @else text-dark @endif"><i class="fas fa-book me-2"></i> Subjects</a></li>
                <li class="nav-item mb-2"><a href="{{ route('admin.bookings') }}" class="nav-link @if(Route::is('admin.bookings')) active fw-bold text-primary @else text-dark @endif"><i class="fas fa-calendar-alt me-2"></i> Bookings</a></li>
                <li class="nav-item mb-2"><a href="{{ route('admin.notifications') }}" class="nav-link @if(Route::is('admin.notifications')) active fw-bold text-primary @else text-dark @endif"><i class="fas fa-bell me-2"></i> Notifications</a></li>
            </ul>
            <div class="mt-auto pt-4">
                <a href="#" class="nav-link text-danger"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
            </div>
        </nav>
        <!-- Main Content -->
        <div class="flex-grow-1 bg-light">
            @yield('content')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>