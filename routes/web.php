<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth','blocked'])->group(function() {
    
    Route::patch('/pet/home/{id}', [App\Http\Controllers\PetsController::class,'home']);
    Route::patch('/pet/request/reject/{id}', [App\Http\Controllers\PetsController::class,'reject']);
    Route::patch('/pet/request/accept/{id}', [App\Http\Controllers\PetsController::class,'accept']);
    Route::patch('/pet/request/{id}', [App\Http\Controllers\PetsController::class,'request']);
    Route::get('/pet/create', [App\Http\Controllers\PetsController::class,'create']);
    Route::get('/pet/delete/{id}',[App\Http\Controllers\PetsController::class,'delete']);
    Route::get('/pets/{id}', [App\Http\Controllers\PetsController::class,'detail']);
    Route::post('/pet', [App\Http\Controllers\PetsController::class,'store']);


    Route::get('/dashboard', [App\Http\Controllers\UsersController::class,'dashboard']);
    
    Route::get('/account', [App\Http\Controllers\UsersController::class,'account']);

    Route::get('/profile/{id}', [App\Http\Controllers\UsersController::class,'detail']);

    Route::post('/review', [App\Http\Controllers\ReviewsController::class,'store']);
});


Route::middleware(['auth','admin', 'blocked'])->group(function() {
    Route::patch('/admin/block/{id}', [App\Http\Controllers\AdminController::class,'block']);
    Route::patch('/admin/unblock/{id}', [App\Http\Controllers\AdminController::class,'unblock']);
    Route::get('/admin', [App\Http\Controllers\AdminController::class,'admin']);
});

Route::get('/blocked', [App\Http\Controllers\UsersController::class,'blocked']);

Route::get('/', function () { return view('index'); });

require __DIR__.'/auth.php';
