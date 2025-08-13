<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/products', [LandingController::class, 'products'])->name('products');
Route::get('/branches', [LandingController::class, 'branches'])->name('branches');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
