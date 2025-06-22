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
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\BrowseController;

// Admin Routes
Route::get('admin/login', function() { return view('adminDashboard.login'); })->name('admin.login');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('tutors', [AdminController::class, 'tutors'])->name('tutors');
    Route::get('tutors/create', [AdminController::class, 'createTutor'])->name('tutors.create');
    Route::post('tutors', [AdminController::class, 'storeTutor'])->name('tutors.store');
    Route::get('tutors/{tutor}/edit', [AdminController::class, 'editTutor'])->name('tutors.edit');
    Route::put('tutors/{tutor}', [AdminController::class, 'updateTutor'])->name('tutors.update');
    Route::delete('tutors/{tutor}', [AdminController::class, 'destroyTutor'])->name('tutors.destroy');

    Route::get('subjects', [AdminController::class, 'subjects'])->name('subjects');
    Route::get('subjects/create', [AdminController::class, 'createSubject'])->name('subjects.create');
    Route::post('subjects', [AdminController::class, 'storeSubject'])->name('subjects.store');
    Route::get('subjects/{subject}/edit', [AdminController::class, 'editSubject'])->name('subjects.edit');
    Route::put('subjects/{subject}', [AdminController::class, 'updateSubject'])->name('subjects.update');
    Route::delete('subjects/{subject}', [AdminController::class, 'destroySubject'])->name('subjects.destroy');

    Route::get('students', [AdminController::class, 'students'])->name('students');
    Route::get('students/create', [AdminController::class, 'createStudent'])->name('students.create');
    Route::post('students', [AdminController::class, 'storeStudent'])->name('students.store');
    Route::get('students/{student}/edit', [AdminController::class, 'editStudent'])->name('students.edit');
    Route::put('students/{student}', [AdminController::class, 'updateStudent'])->name('students.update');
    Route::delete('students/{student}', [AdminController::class, 'destroyStudent'])->name('students.destroy');

    Route::get('bookings', [AdminController::class, 'bookings'])->name('bookings');
    Route::get('bookings/{booking}/edit', [AdminController::class, 'editBooking'])->name('bookings.edit');
    Route::put('bookings/{booking}', [AdminController::class, 'updateBooking'])->name('bookings.update');
    Route::delete('bookings/{booking}', [AdminController::class, 'destroyBooking'])->name('bookings.destroy');

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
Route::get('/browse', [BrowseController::class, 'index'])->name('browse');

Route::get('/', function () {
    return view('Home.index');
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

Route::get('/browse/tutors', [BrowseController::class, 'tutors'])->name('browse.tutors');
Route::get('/browse/subjects', [BrowseController::class, 'subjects'])->name('browse.subjects');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Route to manually trigger the session status update command (for testing)
Route::get('/admin/run-session-status-update', function () {
    Artisan::call('app:update-booking-session-status');
    return 'Booking session statuses updated.';
});