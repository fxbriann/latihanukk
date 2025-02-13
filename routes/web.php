<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuridController;



Route::put('/murid/{id}', [MuridController::class, 'update'])->name('murid.update');
Route::delete('/murid/{id}', [MuridController::class, 'destroy'])->name('murid.destroy');
Route::resource('murid', MuridController::class);
Route::get('/', function () {
    return view('welcome');
});
