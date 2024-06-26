<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoedselpakketController;

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


Route::get('/voedselpakket', [VoedselpakketController::class, 'index'])->name('voedselpakket.index');
Route::post('/voedselpakket/filter', [VoedselpakketController::class, 'filter'])->name('voedselpakket.filter');
Route::get('/voedselpakket/{id}', [VoedselpakketController::class, 'show'])->name('voedselpakket.show');
Route::get('/voedselpakket/{id}/edit', [VoedselpakketController::class, 'edit'])->name('voedselpakket.edit');
Route::put('/voedselpakket/{id}', [VoedselpakketController::class, 'update'])->name('voedselpakket.update');


require __DIR__ . '/auth.php';
