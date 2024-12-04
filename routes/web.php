<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

// Show all products - GET route for the product list
Route::get('/admin/products', [ProductController::class, 'index'])->name('admin.products.index');
Route::post('/admin/products', [ProductController::class, 'store'])->name('admin.products.store');
Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');

Route::get('/admin/categories', [CategoryController::class, 'index'])->name('admin.categories.index');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('admin.categories.store');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homepage', [HomeController::class, 'index']);
// In routes/web.php
Route::get('/homepage/product/{id}', [ProductController::class, 'show'])->name('product.show');

