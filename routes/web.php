<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;




Route::get('/trust-wallet/{slug}', [PageController::class, 'show'])->name('page.show');
Route::get('/', [PostController::class, 'welcome'])->name('welcome');

Route::get('/post', [PostController::class, 'index'])->name('blog.index');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('blog.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
