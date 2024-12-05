<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

