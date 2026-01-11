<?php

use Illuminate\Support\Facades\Route;

Route::get('/students', function () {
    return view('students');
});

Route::get('/subjects', function () {
    return view('subjects');
});

Route::get('/grades', function () {
    return view('grades');
});

Route::get('/tutors', function () {
    return view('tutors');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

