<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Subject;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\TutorProfileController;
use App\Http\Controllers\RequestController;

Route::get('/', function () {
    return view('home.index');
})->name('home.index');


Route::prefix('/admin')->name('admin.')->group(function(){

Route::get('/students', function () {
return view('admin.students');
})->name('students');

Route::get('/subjects', function () {
return view('admin.subjects');
})->name('subjects');

Route::get('/grades', function () {
return view('admin.grades');
})->name('grades');

Route::get('/tutors', function () {
return view('admin.tutors');
})->name('tutors');

Route::get('/dashboard', function () {
return view('admin.dashboard');
})->name('dashboard');

});


Route::prefix('/tutor')->name('tutor.')->group(function(){
  Route::get('/tutor_profile', [TutorController::class, 'edit'])
         ->middleware('auth')
         ->name('tutor_profile');

    Route::put('/tutor_profile', [TutorController::class, 'update'])
         ->middleware('auth') 
         ->name('profile.update');

Route::get('/my_requests',function(){
return view('tutor.my_requests');
})->name('my_requests');

Route::get('/{id}/subjects', [TutorProfileController::class, 'index'])->name('subjects');
Route::post('/subjects/add', [TutorProfileController::class, 'create'])->name('subject_add');
Route::delete('/{tutor}/subjects/{subject}', [TutorProfileController::class, 'destroy'])->name('subject_delete');
Route::put('/subjects/update', [TutorProfileController::class, 'update'])->name('subject_update');




});

Route::prefix('/crud')->name('crud.')->group(function(){
Route::get('/',[SubjectController::class,'index'])->name('index');// view subject table page
Route::get('/create',[SubjectController::class,'create'])->name('create');// form to add subject 
Route::post('/store',[SubjectController::class,'store'])->name('store'); // store the new subject on the database
Route::get('/{id}/edit',[SubjectController::class,'edit'])->name('edit');
Route::put('/{id}',[SubjectController::class,'update'])->name('update');
Route::delete('/{id}',[SubjectController::class,'destroy'])->name('destroy');
Route::get('/trashed',[SubjectController::class,'trashedSubjects'])->name('trashed');
Route::put('/{id}/restore', [SubjectController::class,'restore'])->name('restore');
});

Route::prefix('/home')->name('home.')->group(function(){
Route::get('/', function () {return view('home.index');})->name('index');
Route::get('/about', function () {return view('home.about');})->name('about');
Route::get('/subjects',[SubjectController::class,'index'])->name('subjects');
Route::get('/contact', function () {return view('home.contact');})->name('contact');
Route::get('/tutor_profile/{tutor}',[TutorProfileController::class,'show'])->name('tutor_profile');
Route::get('/course_details/{subject}',[TutorProfileController::class,'showSubject'])->name('course_details');
Route::post('/course_details/{subject}', [RequestController::class, 'store'])->name('book');
});

Route::get('/home/tutors', function () { 
    return view('home.tutors'); 
})->name('home.tutors');


Route::prefix('/user')->name('user.')->middleware('guest')->group(function(){
    Route::get('/register/student', [RegisteredUserController::class, 'createStudent'])->name('register_student');
    Route::post('/register/student', [RegisteredUserController::class, 'storeStudent'])->name('register_student.store');

    Route::get('/register/tutor', [RegisteredUserController::class, 'createTutor'])->name('register_tutor');
    Route::post('/register/tutor', [RegisteredUserController::class, 'storeTutor'])->name('register_tutor.store');
});


Route::prefix('/user')->name('user.')->middleware('auth')->group(function(){

Route::get('/student_requests', function () {return view('user.student_requests');})->name('student_requests');
Route::get('/student_profile', function () {return view('user.student_profile', ['user' => auth()->user()]);})->name('student_profile');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
