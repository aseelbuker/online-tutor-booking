<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorCrudController;


Route::resource('Tutors', TutorCrudController::class)->names([
    'index' => 'Tutors.index',
    'show' => 'Tutors.show',
    'create' => 'Tutors.create',
    'store' => 'Tutors.store',
    'edit' => 'Tutors.edit',
    'update' => 'Tutors.update',
    'destroy' => 'Tutors.destroy',
]);


Route::get('/', function () {
return view('Tutor.index');
});




//Route::get('/', function () {
 //   $tutor = \App\Models\Tutor::first();
 //   return view('Tutor.edit', compact('tutor'));
//});




///Route::get('/', function () {
 ///return view('Home.index');
///});

//Route::get('/', function () {
 // return view('admin.index');
//});



//Route::get('/', function () {
//$tutor = Tutor::first();
//return view('Tutor.edit', compact('tutor'));
//});


//Route::get('/', function () {
//return view('subject.index');
//});