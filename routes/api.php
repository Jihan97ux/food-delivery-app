<?php

use App\Http\Controllers\FoodAppController;

Route::get('/foods', [FoodAppController::class, 'apiShowFoods']);
