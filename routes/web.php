<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoorraadController;
use App\Http\Controllers\ProductenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LeverancierController;

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

Route::middleware('auth')->group(function () {
    Route::get('/leverancieroverzicht', [LeverancierController::class, 'index'])->name('leverancier.overzicht');
    Route::get('/leveranciers', [LeverancierController::class, 'index'])->name('leveranciers.index');
    Route::get('/producten/overzicht/{leverancier_id}', 'ProductenController@index')->name('productenoverzicht');
    Route::get('/producten', [ProductenController::class, 'index'])->name('producten.overzicht');
    Route::get('/producten/overzicht', [ProductenController::class, 'showProductenOverzicht'])->name('producten.overzicht');
    Route::get('/product/edit/{id}', [ProductenController::class, 'edit'])->name('product.edit');
    Route::put('/product/{id}', [ProductenController::class, 'update'])->name('product.update');
});




Route::get('/voedselpakket', [VoedselpakketController::class, 'index'])->name('voedselpakket.index');
Route::post('/voedselpakket/filter', [VoedselpakketController::class, 'filter'])->name('voedselpakket.filter');
Route::get('/voedselpakket/{id}', [VoedselpakketController::class, 'show'])->name('voedselpakket.show');
Route::get('/voedselpakket/{id}/edit', [VoedselpakketController::class, 'edit'])->name('voedselpakket.edit');
Route::put('/voedselpakket/{id}', [VoedselpakketController::class, 'update'])->name('voedselpakket.update');


require __DIR__ . '/auth.php';
