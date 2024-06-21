<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::get('/home', fn () => view('homepage.index'));

Route::resource('courses', CourseController::class);
