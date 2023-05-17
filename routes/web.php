<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('/profile/{id}', [AuthController::class, 'Profile']);

Route::get('/', function () {
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
