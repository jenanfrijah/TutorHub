<?php

use Illuminate\Support\Facades\Route;
use App\Models\Subject;
use App\Http\Controllers\SubjectController;

Route::get('/', function () {
    return view('admin.students');
});


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


Route::get('/tutor_profile',function(){
return view('tutor.tutor_profile');
})->name('profile');

Route::get('/my_requests',function(){
return view('tutor.my_requests');
})->name('my_requests');

Route::get('/subjects',function(){
return view('tutor.subjects');
})->name('subjects');


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
