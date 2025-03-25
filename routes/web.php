<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect()->route('products.index'));

Route::controller(ProductController::class)->prefix('products')->as('products.')->group( function () {
    Route::get('/', 'index')->name('index');
    Route::get('/admin', 'admin')->name('admin');
    Route::get('/delete/{id}', 'delete')->name('delete');
    Route::get('/fetch', 'fetchProducts')->name('fetch');
});
