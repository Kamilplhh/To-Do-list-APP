<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\AddController;

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

    Route::get('/important', [PlanController::class, 'GetByImportant']);
    Route::get('/date', [PlanController::class, 'GetByDate']);
    Route::get('/tag/{id}', [PlanController::class, 'GetByTag']);
    
    Route::get('/notes', [NoteController::class, 'GetData']);
    Route::get('/deletenote/{id}', [NoteController::class, 'DeleteNote'])->name('DeleteNote');
   
    Route::get('/done', [PlanController::class, 'GetDataDone']);
    Route::get('/plandone/{id}', [PlanController::class, 'MarkDone']);
    
    Route::get('/add', [AddController::class, 'GetTags']);
    Route::post('AddPlan', [AddController::class, 'AddPlan'])->name('Plan'); 
    Route::post('AddNote', [AddController::class, 'AddNote'])->name('Note'); 

    Route::get('/profile/{id}', [AuthController::class, 'Profile']);
});