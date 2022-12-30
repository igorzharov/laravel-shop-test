<?php

use Illuminate\Support\Facades\Route;

Route::get('/category', \App\Http\Controllers\Category\IndexController::class)->name('category.index');
