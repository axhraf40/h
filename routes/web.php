<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\OwnerController;


Route::resource('properties', PropertyController::class);
Route::resource('owners', OwnerController::class);
