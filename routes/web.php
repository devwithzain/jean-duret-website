<?php

use App\Http\Controllers\Admin\Services\ServicesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Client\HomePageController;
use App\Http\Controllers\Client\LoginPageController;
use App\Http\Controllers\Client\AboutPageController;
use App\Http\Controllers\Client\ContactPageController;
use App\Http\Controllers\Client\RegisterPageController;
use App\Http\Controllers\Client\ServicesPageController;
use App\Http\Controllers\Client\ServiceDetailPageController;
use App\Http\Controllers\Admin\Dashboard\AdminHomePageController;
use App\Http\Controllers\Admin\Services\ServicesCreateController;
use App\Http\Controllers\Admin\Services\ServicesListingController;

// Public routes accessible to all
Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/about', [AboutPageController::class, 'index'])->name('about');
Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');
Route::get('/services', [ServicesPageController::class, 'index'])->name('services');
Route::get('/services/service-detail', [ServiceDetailPageController::class, 'index'])->name('service-detail');

// Authentication routes (only for guests)
Route::middleware(['guest'])->group(function () {
   // Login routes
   Route::post('/login', [AuthController::class, 'login']);
   Route::get('/login', [LoginPageController::class, 'index'])->name('login');

   // Registration routes
   Route::post('/register', [AuthController::class, 'register']);
   Route::get('/register', [RegisterPageController::class, 'index'])->name('register');
});

// Admin routes (only for authenticated admins)
Route::middleware(['auth'])->group(function () {
   Route::get('/dashboard', [AdminHomePageController::class, 'index'])->name('admin.dashboard');

   Route::get('/dashboard/services', [ServicesController::class, 'index'])->name('index');
   Route::get('/dashboard/services/create', [ServicesController::class, 'create'])->name('create');
   Route::post('/dashboard/services', [ServicesController::class, 'store'])->name('store');
   Route::get('/dashboard/services/{id}', [ServicesController::class, 'show'])->name('show');
   Route::get('/dashboard/services/{id}/edit', [ServicesController::class, 'edit'])->name('edit');
   Route::put('/dashboard/services/{id}', [ServicesController::class, 'update'])->name('update');
   Route::delete('/dashboard/services/{id}', [ServicesController::class, 'delete'])->name('delete');
});

// Authenticated user routes (for all authenticated users)
Route::middleware(['auth'])->group(function () {
   Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
});