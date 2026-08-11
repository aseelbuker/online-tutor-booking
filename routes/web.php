<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectTutorController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\BookingSessionController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\EventPostController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SessionController;


// =============================
// Home
// =============================

Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');


// =============================
// Authentication
// =============================

Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegistrationForm'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


// =============================
// About
// =============================

Route::get('/about', [AboutusController::class, 'index'])
    ->name('Home.about');


// =============================
// Browse
// =============================

Route::get('/browse', [BrowseController::class, 'index'])
    ->name('browse');

Route::get('/browse/tutors', [BrowseController::class, 'tutors'])
    ->name('browse.tutors');

Route::get('/browse/subjects', [BrowseController::class, 'subjects'])
    ->name('browse.subjects');

Route::get('/subjects', [SubjectController::class, 'index'])
    ->name('Home.browse-subjects');


// =============================
// Pricing & Contact
// =============================

Route::get('/pricing', function () {
    return view('Home.pricing');
});

Route::get('/contact', function () {
    return view('Home.contact');
});


// =============================
// Admin Routes
// =============================

Route::get('/admin/login', function () {
    return view('adminDashboard.login');
})->name('admin.login');

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])
        ->name('dashboard');

    // Tutors
    Route::get('/tutors', [AdminController::class, 'tutors'])
        ->name('tutors');

    Route::get('/tutors/create', [AdminController::class, 'createTutor'])
        ->name('tutors.create');

    Route::post('/tutors', [AdminController::class, 'storeTutor'])
        ->name('tutors.store');

    Route::get('/tutors/{tutor}/edit', [AdminController::class, 'editTutor'])
        ->name('tutors.edit');

    Route::put('/tutors/{tutor}', [AdminController::class, 'updateTutor'])
        ->name('tutors.update');

    Route::delete('/tutors/{tutor}', [AdminController::class, 'destroyTutor'])
        ->name('tutors.destroy');


    // Subjects
    Route::get('/subjects', [AdminController::class, 'subjects'])
        ->name('subjects');

    Route::get('/subjects/create', [AdminController::class, 'createSubject'])
        ->name('subjects.create');

    Route::post('/subjects', [AdminController::class, 'storeSubject'])
        ->name('subjects.store');

    Route::get('/subjects/{subject}/edit', [AdminController::class, 'editSubject'])
        ->name('subjects.edit');

    Route::put('/subjects/{subject}', [AdminController::class, 'updateSubject'])
        ->name('subjects.update');

    Route::delete('/subjects/{subject}', [AdminController::class, 'destroySubject'])
        ->name('subjects.destroy');


    // Students
    Route::get('/students', [AdminController::class, 'students'])
        ->name('students');

    Route::get('/students/create', [AdminController::class, 'createStudent'])
        ->name('students.create');

    Route::post('/students', [AdminController::class, 'storeStudent'])
        ->name('students.store');

    Route::get('/students/{student}/edit', [AdminController::class, 'editStudent'])
        ->name('students.edit');

    Route::put('/students/{student}', [AdminController::class, 'updateStudent'])
        ->name('students.update');

    Route::delete('/students/{student}', [AdminController::class, 'destroyStudent'])
        ->name('students.destroy');


    // Bookings
    Route::get('/bookings', [AdminController::class, 'bookings'])
        ->name('bookings');

    Route::get('/bookings/{booking}/edit', [AdminController::class, 'editBooking'])
        ->name('bookings.edit');

    Route::put('/bookings/{booking}', [AdminController::class, 'updateBooking'])
        ->name('bookings.update');

    Route::delete('/bookings/{booking}', [AdminController::class, 'destroyBooking'])
        ->name('bookings.destroy');


    // Notifications
    Route::get('/notifications', function () {
        return view('adminDashboard.notifications');
    })->name('notifications');


    // Admin CRUD
    Route::get('/', [AdminController::class, 'index'])
        ->name('index');

    Route::get('/create', [AdminController::class, 'create'])
        ->name('create');

    Route::post('/', [AdminController::class, 'store'])
        ->name('store');

    Route::get('/{id}', [AdminController::class, 'show'])
        ->name('show');

    Route::get('/{id}/edit', [AdminController::class, 'edit'])
        ->name('edit');

    Route::put('/{id}', [AdminController::class, 'update'])
        ->name('update');

    Route::delete('/{id}', [AdminController::class, 'destroy'])
        ->name('destroy');
});


// =============================
// Student Routes
// =============================

Route::prefix('student')->name('student.')->group(function () {

    Route::get('/', [StudentController::class, 'index'])
        ->name('index');

    Route::get('/create', [StudentController::class, 'create'])
        ->name('create');

    Route::post('/', [StudentController::class, 'store'])
        ->name('store');

    Route::get('/{id}/edit', [StudentController::class, 'edit'])
        ->name('edit');

    Route::put('/{id}', [StudentController::class, 'update'])
        ->name('update');

    Route::delete('/{id}', [StudentController::class, 'destroy'])
        ->name('destroy');

    Route::get('/{id}', [StudentController::class, 'show'])
        ->name('show');
});


// =============================
// Tutor Routes
// =============================

Route::prefix('tutor')->name('tutor.')->group(function () {

    Route::get('/', [TutorController::class, 'index'])
        ->name('index');

    Route::get('/create', [TutorController::class, 'create'])
        ->name('create');

    Route::post('/', [TutorController::class, 'store'])
        ->name('store');

    Route::get('/{id}/edit', [TutorController::class, 'edit'])
        ->name('edit');

    Route::put('/{id}', [TutorController::class, 'update'])
        ->name('update');

    Route::delete('/{id}', [TutorController::class, 'destroy'])
        ->name('destroy');

    Route::get('/{id}', [TutorController::class, 'show'])
        ->name('show');
});


// =============================
// Subject Routes
// =============================

Route::prefix('subject')->name('subject.')->group(function () {

    Route::get('/', [SubjectController::class, 'index'])
        ->name('index');

    Route::get('/create', [SubjectController::class, 'create'])
        ->name('create');

    Route::post('/', [SubjectController::class, 'store'])
        ->name('store');

    Route::get('/{id}/edit', [SubjectController::class, 'edit'])
        ->name('edit');

    Route::put('/{id}', [SubjectController::class, 'update'])
        ->name('update');

    Route::delete('/{id}', [SubjectController::class, 'destroy'])
        ->name('destroy');

    Route::get('/{id}', [SubjectController::class, 'show'])
        ->name('show');

    Route::post('/{subject}/assign-tutor', [SubjectController::class, 'assignTutor']);

    Route::get('/{subject}/tutors', [SubjectController::class, 'subjectTutors']);
});


// =============================
// Subject Tutor Routes
// =============================

Route::prefix('subjecttutor')->name('subjecttutor.')->group(function () {

    Route::get('/', [SubjectTutorController::class, 'index'])
        ->name('index');

    Route::get('/create', [SubjectTutorController::class, 'create'])
        ->name('create');

    Route::post('/', [SubjectTutorController::class, 'store'])
        ->name('store');

    Route::get('/{id}/edit', [SubjectTutorController::class, 'edit'])
        ->name('edit');

    Route::put('/{id}', [SubjectTutorController::class, 'update'])
        ->name('update');

    Route::delete('/{id}', [SubjectTutorController::class, 'destroy'])
        ->name('destroy');

    Route::get('/{id}', [SubjectTutorController::class, 'show'])
        ->name('show');
});


// =============================
// Contact Us Routes
// =============================

Route::prefix('contactus')->name('contactus.')->group(function () {

    Route::get('/', [ContactUsController::class, 'index'])
        ->name('index');

    Route::get('/create', [ContactUsController::class, 'create'])
        ->name('create');

    Route::post('/', [ContactUsController::class, 'store'])
        ->name('store');

    Route::get('/{id}/edit', [ContactUsController::class, 'edit'])
        ->name('edit');

    Route::put('/{id}', [ContactUsController::class, 'update'])
        ->name('update');

    Route::delete('/{id}', [ContactUsController::class, 'destroy'])
        ->name('destroy');

    Route::get('/{id}', [ContactUsController::class, 'show'])
        ->name('show');
});


// =============================
// Booking Session Routes
// =============================

Route::resource('BookingSession', BookingSessionController::class);


// =============================
// Booking Routes
// =============================

Route::prefix('booking')->name('booking.')->group(function () {

    Route::get('/', [BookingController::class, 'index'])
        ->name('index');

    Route::get('/create', [BookingController::class, 'create'])
        ->name('create');

    Route::post('/', [BookingController::class, 'store'])
        ->name('store');

    Route::get('/{id}', [BookingController::class, 'show'])
        ->name('show');

    Route::get('/{id}/edit', [BookingController::class, 'edit'])
        ->name('edit');

    Route::put('/{id}', [BookingController::class, 'update'])
        ->name('update');

    Route::delete('/{id}', [BookingController::class, 'destroy'])
        ->name('destroy');

    Route::post('/{id}/confirm', [BookingController::class, 'confirm'])
        ->name('confirm');

    Route::post('/{id}/cancel', [BookingController::class, 'cancel'])
        ->name('cancel');
});


// =============================
// Event Routes
// =============================

Route::apiResource('events', EventPostController::class);

Route::post('events/{id}/toggle', [EventPostController::class, 'toggleVisibility']);


// =============================
// Report Routes
// =============================

Route::apiResource('reports', ReportController::class);

Route::post('reports/{id}/resolve', [ReportController::class, 'resolve']);

Route::get('reports/unresolved', [ReportController::class, 'unresolved']);


// =============================
// Review Routes
// =============================

Route::apiResource('reviews', ReviewController::class);

Route::patch(
    'reviews/{id}/toggle-visibility',
    [ReviewController::class, 'toggleVisibility']
);

Route::get(
    'tutors/{tutorId}/reviews',
    [ReviewController::class, 'tutorReviews']
);

Route::get(
    'students/{studentId}/reviews',
    [ReviewController::class, 'studentReviews']
);


// =============================
// Session Routes
// =============================

Route::apiResource('sessions', BookingSessionController::class);


// =============================
// User
// =============================

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// =============================
// Testing / Session Status
// =============================

Route::get('/admin/run-session-status-update', function () {
    Artisan::call('app:update-booking-session-status');

    return 'Booking session statuses updated.';
});