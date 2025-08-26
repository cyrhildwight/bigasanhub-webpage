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
	Route::post('/admin/features', [AdminController::class, 'storeFeature'])->name('admin.features.store');
	Route::put('/admin/features/{feature}', [AdminController::class, 'updateFeature'])->name('admin.features.update');
	Route::delete('/admin/features/{feature}', [AdminController::class, 'deleteFeature'])->name('admin.features.delete');
	Route::post('/admin/varieties', [AdminController::class, 'storeVariety'])->name('admin.varieties.store');
	Route::put('/admin/varieties/{variety}', [AdminController::class, 'updateVariety'])->name('admin.varieties.update');
	Route::delete('/admin/varieties/{variety}', [AdminController::class, 'deleteVariety'])->name('admin.varieties.delete');
	Route::post('/admin/featured-varieties', [AdminController::class, 'storeFeaturedVariety'])->name('admin.featured-varieties.store');
	Route::put('/admin/featured-varieties/{featuredVariety}', [AdminController::class, 'updateFeaturedVariety'])->name('admin.featured-varieties.update');
	Route::delete('/admin/featured-varieties/{featuredVariety}', [AdminController::class, 'deleteFeaturedVariety'])->name('admin.featured-varieties.delete');
	Route::post('/admin/faqs', [AdminController::class, 'storeFAQ'])->name('admin.faqs.store');
	Route::put('/admin/faqs/{faq}', [AdminController::class, 'updateFAQ'])->name('admin.faqs.update');
	Route::delete('/admin/faqs/{faq}', [AdminController::class, 'deleteFAQ'])->name('admin.faqs.delete');
});