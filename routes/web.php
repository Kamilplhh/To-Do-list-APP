<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\NoteController;

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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', [PlanController::class, 'GetData']);
    Route::get('/remove', [PlanController::class, 'GetDataR']);
    Route::get('/deleteplan/{id}', [PlanController::class, 'DeletePlan'])->name('DeletePlan');


    Route::get('/tag/{id}', function () {
        return view('home');
    });
    
    Route::get('/notes', [NoteController::class, 'GetData']);
    Route::get('/deletenote/{id}', [NoteController::class, 'DeleteNote'])->name('DeleteNote');
    
    
    Route::get('/add', function () {
        return view('add');
    });

    Route::get('/profile/{id}', [AuthController::class, 'Profile']);
});