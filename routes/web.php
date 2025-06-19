<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectTutorController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BookingSessionController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReportController;

// Admin Routes
Route::get('admin/login', function() { return view('adminDashboard.login'); })->name('admin.login');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', function() { return view('adminDashboard.dashboard'); })->name('dashboard');
    Route::get('tutors', function() { return view('adminDashboard.tutors'); })->name('tutors');
    Route::get('subjects', function() { return view('adminDashboard.subjects'); })->name('subjects');
    Route::get('students', function() { return view('adminDashboard.students'); })->name('students');
    Route::get('bookings', function() { return view('adminDashboard.bookings'); })->name('bookings');
    Route::get('notifications', function() { return view('adminDashboard.notifications'); })->name('notifications');
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('index');
    Route::get('create', [App\Http\Controllers\AdminController::class, 'create'])->name('create');
    Route::post('/', [App\Http\Controllers\AdminController::class, 'store'])->name('store');
    Route::get('{id}', [App\Http\Controllers\AdminController::class, 'show'])->name('show');
    Route::get('{id}/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('edit');
    Route::put('{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('update');
    Route::delete('{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('destroy');
});

// Student Routes
Route::prefix('student')->name('student.')->group(function () {
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/', [StudentController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [StudentController::class, 'edit'])->name('edit');
    Route::put('/{id}', [StudentController::class, 'update'])->name('update');
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
    Route::get('/{id}', [StudentController::class, 'show'])->name('show');
});

// Tutor Routes
Route::prefix('tutor')->name('tutor.')->group(function () {
    Route::get('/', [TutorController::class, 'index'])->name('index');
    Route::get('/create', [TutorController::class, 'create'])->name('create');
    Route::post('/', [TutorController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [TutorController::class, 'edit'])->name('edit');
    Route::put('/{id}', [TutorController::class, 'update'])->name('update');
    Route::delete('/{id}', [TutorController::class, 'destroy'])->name('destroy');
    Route::get('/{id}', [TutorController::class, 'show'])->name('show');
});

// Subject Routes
Route::prefix('subject')->name('subject.')->group(function () {
    Route::get('/', [SubjectController::class, 'index'])->name('index');
    Route::get('/create', [SubjectController::class, 'create'])->name('create');
    Route::post('/', [SubjectController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [SubjectController::class, 'edit'])->name('edit');
    Route::put('/{id}', [SubjectController::class, 'update'])->name('update');
    Route::delete('/{id}', [SubjectController::class, 'destroy'])->name('destroy');
    Route::get('/{id}', [SubjectController::class, 'show'])->name('show');
});

// SubjectTutor Routes
Route::prefix('subjecttutor')->name('subjecttutor.')->group(function () {
    Route::get('/', [SubjectTutorController::class, 'index'])->name('index');
    Route::get('/create', [SubjectTutorController::class, 'create'])->name('create');
    Route::post('/', [SubjectTutorController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [SubjectTutorController::class, 'edit'])->name('edit');
    Route::put('/{id}', [SubjectTutorController::class, 'update'])->name('update');
    Route::delete('/{id}', [SubjectTutorController::class, 'destroy'])->name('destroy');
    Route::get('/{id}', [SubjectTutorController::class, 'show'])->name('show');
});

// ContactUs Routes
Route::prefix('contactus')->name('contactus.')->group(function () {
    Route::get('/', [ContactUsController::class, 'index'])->name('index');
    Route::get('/create', [ContactUsController::class, 'create'])->name('create');
    Route::post('/', [ContactUsController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [ContactUsController::class, 'edit'])->name('edit');
    Route::put('/{id}', [ContactUsController::class, 'update'])->name('update');
    Route::delete('/{id}', [ContactUsController::class, 'destroy'])->name('destroy');
    Route::get('/{id}', [ContactUsController::class, 'show'])->name('show');
});

// BookingSession Routes
Route::resource('BookingSession', BookingSessionController::class);

// Booking Routes
Route::prefix('booking')->name('booking.')->group(function () {
    Route::get('/', [BookingController::class, 'index'])->name('index');
    Route::get('/create', [BookingController::class, 'create'])->name('create');
    Route::post('/', [BookingController::class, 'store'])->name('store');
    Route::get('/{id}', [BookingController::class, 'show'])->name('show');
    Route::get('/{id}/edit', [BookingController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BookingController::class, 'update'])->name('update');
    Route::delete('/{id}', [BookingController::class, 'destroy'])->name('destroy');
    Route::post('/{id}/confirm', [BookingController::class, 'confirm'])->name('confirm');
    Route::post('/{id}/cancel', [BookingController::class, 'cancel'])->name('cancel');
});

// Browse Routes


Route::get('/', function () {
    return view('Home.index');
});

Route::get('/browse', function () {
    return view('Home.browse');
});

Route::get('/pricing', function () {
    return view('Home.pricing');
});


Route::get('/about', function () {
    return view('Home.about');
});

Route::get('/contact', function () {
    return view('Home.contact');
});

Route::get('/browse/tutors', function () {
    return view('Home.browse-tutors');
})->name('browse.tutors');

Route::get('/browse/subjects', function () {
    return view('Home.browse-subjects');
})->name('browse.subjects');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');