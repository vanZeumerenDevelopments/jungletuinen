<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('home'));
Route::get('/eigen-jungletuin', fn() => view('eigen'));
Route::get('/contact', fn() => view('contact'));
