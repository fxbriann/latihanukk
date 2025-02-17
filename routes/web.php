<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MuridController;
use Illuminate\Support\Facades\Auth;

//Route::get('/', function () {
//    return view('welcome');
//})->name('welcome'); //  Tambahkan name route welcome

Route::get('/', function () {
    return redirect()->route('murid.index');
});

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect()->route('murid.index'); // Redirect ke murid.index setelah logout
})->name('logout')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ✅ Menggunakan controller untuk murid
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/murid', [MuridController::class, 'index'])->name('murid.index'); 
    Route::get('/murid/create', [MuridController::class, 'create'])->name('murid.create');
    Route::post('/murid', [MuridController::class, 'store'])->name('murid.store');
    Route::get('/murid/{murid}', [MuridController::class, 'show'])->name('murid.show');
    Route::delete('/murid/{murid}', [MuridController::class, 'destroy'])->name('murid.destroy');
    Route::get('/murid/{murid}/edit', [MuridController::class, 'edit'])->name('murid.edit');
    Route::patch('/murid/{murid}', [MuridController::class, 'update'])->name('murid.update');
});

require __DIR__.'/auth.php';


/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    Route::get('/murid', function () {
        return view('murid.index');
    })->middleware(['auth', 'verified'])->name('murid.index');

    Route::get('/murid/create', function () {
        return view('murid.create');
    })->middleware(['auth', 'verified'])->name('murid.create');

    Route::post('/murid', function () {
        // Handle form submission logic here
    })->middleware(['auth', 'verified'])->name('murid.store');

    Route::get('/murid/{murid}', function () {
        return view('murid.show');
    })->middleware(['auth', 'verified'])->name('murid.show');

require __DIR__.'/auth.php';
8
*/