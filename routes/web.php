<?php

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

Route::get('/', \App\Http\Controllers\MainController::class);

//
// Category route
//
Route::group(['prefix' => 'categories'], function () {
   Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('category.index');
   Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('category.create');
   Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('category.store');
   Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('category.edit');
   Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('category.show');
   Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('category.update');
   Route::delete('/{category}', \App\Http\Controllers\Category\DestroyController::class)->name('category.destroy');
});

//
// Product route
//
