<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\auth\WebsiteController;

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
    Route::get('/', [LoginController::class, 'index'])->name('login_form');
    Route::post('/admin/login', [LoginController::class, 'authenticate'])->name('authenticate');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [WebsiteController::class, 'index'])->name('dashboard');
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('category');
    Route::post('/admin/category', [CategoryController::class, 'store'])->name('store_category');
    Route::delete('/admin/category/{id}', [CategoryController::class, 'destroy'])->name('delete_category');
    Route::update('/admin/category/{id}', [CategoryController::class, 'update'])->name('update_category');
});


