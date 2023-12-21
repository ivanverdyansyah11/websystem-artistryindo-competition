<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(HomepageController::class, function() {
    Route::get('/', 'index')->name('homepage');
});

Route::controller(AboutUsController::class, function() {
    Route::get('/about', 'index')->name('about');
});

Route::controller(CategoryController::class, function() {
    Route::get('/category', 'index')->name('category');
});

Route::controller(BlogController::class, function() {
    Route::get('/blog', 'index')->name('blog');
});