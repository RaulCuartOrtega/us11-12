<?php

use App\Http\Controllers\DamController1;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('dams',DamController::class);