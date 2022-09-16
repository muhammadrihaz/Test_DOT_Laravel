<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\auth\WebsiteController;
use App\Http\Controllers\auth\CategoryController;
use App\Http\Controllers\auth\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('authenticate');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/admin/dashboard', [WebsiteController::class, 'index'])->name('dashboard');
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/admin/category', [CategoryController::class, 'store'])->name('store_category');
    Route::delete('/admin/category/{id}', [CategoryController::class, 'destroy'])->name('delete_category');
    Route::patch('/admin/category/{id}', [CategoryController::class, 'update'])->name('update_category');
    Route::get('/admin/create-category', [CategoryController::class, 'create'])->name('create_category');
    Route::get('/admin/edit-category/{id}', [CategoryController::class, 'edit'])->name('edit_category');

    Route::post('/admin/search-product', [ProductController::class, 'search'])->name('search');

    Route::get('/admin/product', [ProductController::class, 'index'])->name('product');
    Route::post('/admin/product', [ProductController::class, 'store'])->name('store_product');
    Route::delete('/admin/product/{id}', [ProductController::class, 'destroy'])->name('delete_product');
    Route::patch('/admin/product/{id}', [ProductController::class, 'update'])->name('update_product');
    Route::get('/admin/create-product', [ProductController::class, 'create'])->name('create_product');
    Route::get('/admin/edit-product/{id}', [ProductController::class, 'edit'])->name('edit_product');
});


