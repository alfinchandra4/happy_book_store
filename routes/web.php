<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// For default route
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function() {
    Route::get('/fiction', [CategoryController::class, 'fiction'])->name('category-fiction');
    Route::get('/science', [CategoryController::class, 'science'])->name('category-science');
    Route::get('/computer', [CategoryController::class, 'computer'])->name('category-computer');
});

Route::get('/contact', [ContactController::class, 'index'])->name('contact');


