<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', [PostController::class, 'welcome'])->name('welcome');

Route::get('/post', [PostController::class, 'index'])->name('blog.index');
Route::get('/post/{slug}', [PostController::class, 'show'])->name('blog.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
