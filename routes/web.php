<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodAppController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [FoodAppController::class, 'signUp']);
Route::get('/signin', [FoodAppController::class, 'signIn']);
Route::post('/signin', [FoodAppController::class, 'check']);
Route::resource('beranda', FoodAppController::class);
