<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/products', [LandingController::class, 'products'])->name('products');
Route::get('/branches', [LandingController::class, 'branches'])->name('branches');
Route::post('/contact', [LandingController::class, 'submitContact'])->name('contact.submit');
Route::post('/franchise', [LandingController::class, 'submitFranchise'])->name('franchise.submit');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
	Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});