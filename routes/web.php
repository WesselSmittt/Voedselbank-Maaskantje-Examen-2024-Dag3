<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoorraadController; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
    Route::get('/customers/search', [CustomerController::class, 'searchByPostcode'])->name('customers.searchByPostcode');
    Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');
    Route::put('/customers/{family}/update-representative', [CustomerController::class, 'updateRepresentative'])->name('customers.updateRepresentative');
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

});

Route::middleware('auth')->group(function () {
    Route::get('/voorraad', [VoorraadController::class, 'index'])->name('voorraad.index');
    Route::get('/voorraad/{id}', [VoorraadController::class, 'show'])->name('voorraad.show');
    Route::get('/voorraad/{id}/edit', [VoorraadController::class, 'edit'])->name('voorraad.edit');
    Route::post('/voorraad/{id}/update', [VoorraadController::class, 'update'])->name('voorraad.update');
});

require __DIR__.'/auth.php';
