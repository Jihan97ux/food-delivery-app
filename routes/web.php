<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::get('/', [UserController::class, 'signIn']);
Route::post('/signin', [UserController::class, 'check'])->name('signin');
Route::get('/role', [UserController::class, 'show_selectRole'])->name('role');
Route::post('/select-role', [UserController::class, 'selectRole'])->name('select-role');
Route::get('/customer_signup', [UserController::class, 'signUp_cust'])->name('customer_signup');
Route::get('/restaurant_signup', [UserController::class, 'signUp_resto'])->name('restaurant_signup');
Route::post('/customer_store', [UserController::class, 'cust_store'])->name('customer_store');
Route::post('/restaurant_store', [UserController::class, 'resto_store'])->name('restaurant_store');
Route::get('/customer', [UserController::class, 'index'])->name('customer');
Route::get('/restaurant', [UserController::class, 'resto'])->name('restaurant');
Route::get('/product_by_resto', [ProductController::class, 'product_by_resto'])->name('product_by_resto');

// Route::middleware('auth')->group(function () {
//     Route::resource('customer', UserController::class)->only([
//         'index', 'show', 'resto'
//     ]);
// });
