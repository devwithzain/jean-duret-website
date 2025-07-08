<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\LoginPageController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\RegisterPageController;
use App\Http\Controllers\ServicesPageController;
use App\Http\Controllers\ServiceDetailPageController;
use App\Http\Controllers\Admin\AdminHomePageController;

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
});

// Authenticated user routes (for all authenticated users)
Route::middleware(['auth'])->group(function () {
   Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
});