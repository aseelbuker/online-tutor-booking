<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EventPostController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectTutorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// <-----------------------------Admin Routes----------------------------->
Route::apiResource('admin', AdminController::class);

// <-----------------------------Subject Tutor Routes----------------------------->
Route::apiResource('subject-tutors', SubjectTutorController::class);

// <-----------------------------Booking Routes----------------------------->
Route::apiResource('bookings', BookingController::class);
Route::post('bookings/{id}/confirm', [BookingController::class, 'confirm']);
Route::post('bookings/{id}/cancel', [BookingController::class, 'cancel']);
Route::get('bookings/status/{status}', [BookingController::class, 'filterByStatus']);

// <-----------------------------Event Routes----------------------------->
Route::apiResource('events', EventPostController::class);
Route::post('events/{id}/toggle', [EventPostController::class, 'toggleVisibility']);

// <-----------------------------Report Routes----------------------------->
Route::apiResource('reports', ReportController::class);
Route::post('reports/{id}/resolve', [ReportController::class, 'resolve']);
Route::get('reports/unresolved', [ReportController::class, 'unresolved']);

// <-----------------------------Student Routes----------------------------->
Route::apiResource('students', StudentController::class);

// <-----------------------------Subject Routes----------------------------->
Route::apiResource('subjects', SubjectController::class);

// <-----------------------------Subject Tutor Routes----------------------------->
Route::apiResource('subject-tutors', SubjectTutorController::class);
Route::post('subjects/{subject}/assign-tutor', [SubjectController::class, 'assignTutor']);
Route::get('subjects/{subject}/tutors', [SubjectController::class, 'subjectTutors']);

// <-----------------------------Session Routes----------------------------->
Route::apiResource('sessions', SessionController::class);

//<-----------------------------Review Routes----------------------------->
Route::apiResource('reviews', ReviewController::class);
Route::patch('reviews/{id}/toggle-visibility', [ReviewController::class, 'toggleVisibility']);
Route::get('tutors/{tutorId}/reviews', [ReviewController::class, 'tutorReviews']);
Route::get('students/{studentId}/reviews', [ReviewController::class, 'studentReviews']);