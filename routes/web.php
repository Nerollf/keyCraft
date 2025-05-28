<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AccountController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/produits', [ProductController::class, 'index'])->name('products.index');
Route::get('/produits/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/panier', [CartController::class, 'index'])->name('cart.index');
Route::post('/panier/ajouter/{id}', [CartController::class, 'add'])->name('cart.add');
Route::post('/panier/supprimer/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('/commande', [OrderController::class, 'checkout'])->name('order.checkout');
Route::post('/commande', [OrderController::class, 'placeOrder'])->name('order.place');

Route::middleware('auth')->group(function () {
    Route::get('/mon-compte', [AccountController::class, 'dashboard'])->name('account.dashboard');
});

require __DIR__.'/auth.php';
