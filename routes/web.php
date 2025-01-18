<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [UserController::class, 'signUp']);
Route::get('/signin', [UserController::class, 'signIn']);
Route::post('/signin', [UserController::class, 'check']);
Route::resource('customer', UserController::class);
Route::get('/resto', [UserController::class, 'resto']);
