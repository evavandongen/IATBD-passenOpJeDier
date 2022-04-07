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

Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [App\Http\Controllers\UsersController::class,'dashboard']);
    Route::get('/account', [App\Http\Controllers\UsersController::class,'account']);
    Route::get('/pets/{id}', [App\Http\Controllers\PetsController::class,'detail']);
});

Route::get('/', function () { return view('index'); });

require __DIR__.'/auth.php';
