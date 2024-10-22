<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('category', CategoryController::class);
Route::get('category/delete/{id}', [CategoryController::class,'destroy'])->name('category.destroy');
Route::resource('product', ProductController::class);