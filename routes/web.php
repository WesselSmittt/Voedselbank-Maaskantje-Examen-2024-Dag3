<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeverancierController;


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
    Route::get('/leverancieroverzicht', [LeverancierController::class, 'index'])->name('leverancier.overzicht');
    Route::get('/leveranciers', [LeverancierController::class, 'index'])->name('leveranciers.index');
    Route::get('/producten/overzicht/{leverancier_id}', 'ProductenController@index')->name('productenoverzicht');
    Route::get('/producten', [ProductenController::class, 'index'])->name('producten.overzicht');
    Route::get('/producten/overzicht', [ProductenController::class, 'showProductenOverzicht'])->name('producten.overzicht');
    Route::get('/product/edit/{id}', [ProductenController::class, 'edit'])->name('product.edit');
    Route::put('/product/{id}', [ProductenController::class, 'update'])->name('product.update');
}); 



require __DIR__.'/auth.php';
