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

Route::get('/home', function () {
    return view('home');
});

Route::get('/notes', function () {
    return view('notes');
});

Route::get('/remove', function () {
    return view('remove');
});

Route::get('/add', function () {
    return view('add');
});
