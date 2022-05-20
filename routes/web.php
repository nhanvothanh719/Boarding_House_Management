<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user_profile', function () {
    return view('user_profile');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/typography', function () {
    return view('typography');
});

Route::get('/login', function () {
    return view('auth.password.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
