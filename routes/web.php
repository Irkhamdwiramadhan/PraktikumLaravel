<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\AboutController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('Halaman Beranda');
});

Route::get('/salam', function () {
    return view('Selamat Datang Wahyu Di Laravel');
});

Route::get('/profile', function () {
    return view('Halaman Profile');
});


//praktikum laravel 2

Route::get('/dahsboard', [adminController::class, 'index']);
Route::get('/contact', [contactController::class, 'index']);
Route::get('/About', [AboutController::class, 'index']);

