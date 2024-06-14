<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::get('/home', fn () => view('homepage.index'));
