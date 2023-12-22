<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MainPageController;
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

Route::controller(MainPageController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
});

Route::controller(AboutUsController::class)->group(function () {
    Route::get('/about', 'index')->name('about');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category', 'index')->name('category');
    Route::get('/category/1', 'detail')->name('category.detail');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('/blog', 'index')->name('blog');
    Route::get('/blog/1', 'detail')->name('blog.detail');
});