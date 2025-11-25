<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitsController;

Route::get('/', function () {
    return view('index');
});
Route::get('/produits', function () {
    return view('produits');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/contacte', function () {
    return view('contacte');
});
Route::get('/produits', [ProduitsController::class, 'index'])->name('produits.index');
Route::post('/produits/ajouter', [ProduitsController::class, 'ajouterProduit'])->name('produits.ajouter');
