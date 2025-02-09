<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuridController;

Route::resource('murid', MuridController::class);
Route::get('/', function () {
    return view('welcome');
});
