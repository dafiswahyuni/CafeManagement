<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Route::get('/admin', [ProductController::class, 'index'])->name('admin.products.index');
// Route::get('/admin/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
// Route::get('/admin/products/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
// Route::resource('/admin/products', ProductController::class); d

Route::resource ('login', LoginController::class);
Route::resource ('form', FormsController::class);

// Route::prefix('admin')->name('admin.')->group(function () {
// Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('orders', OrderController::class);
// Grup route admin

// Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
//     Route::get('/admin', [ProductController::class, 'index'])->name('admin.products.index');
Route::resource('admin', AdminController::class);
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);
Route::resource('orders', OrderController::class);


// });
// Route::middleware(['auth', 'role:admin'])->group(function () {
//     Route::resource('admin/products', ProductController::class);
// });