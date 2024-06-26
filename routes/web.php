<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoorraadController; 
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/voorraad', [VoorraadController::class, 'index'])->name('voorraad.index');
    Route::get('/voorraad/{id}', [VoorraadController::class, 'show'])->name('voorraad.show');
    Route::get('/voorraad/{id}/edit', [VoorraadController::class, 'edit'])->name('voorraad.edit');
    Route::post('/voorraad/{id}/update', [VoorraadController::class, 'update'])->name('voorraad.update');
});

require __DIR__.'/auth.php';
