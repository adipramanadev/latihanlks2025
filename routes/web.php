<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('category', CategoryController::class);
Route::get('category/delete/{id}', [CategoryController::class,'destroy'])->name('category.destroy');
Route::resource('product', ProductController::class);
Route::get('order',[OrderController::class,'index'])->name('order.index');
Route::get('order-create',[OrderController::class,'create'])->name('order.create');