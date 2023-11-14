<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.homepage.index');
});

Route::get('/aboutUs', function () {
    return view('pages.aboutUs.index');
});

Route::get('/contact', function () {
    return view('pages.contactUs.index');
});

Route::get('/teachers', function () {
    return view('pages.teachersAndStaff.index');
});

Route::get('/academics', function () {
    return view('pages.academics.index');
});
