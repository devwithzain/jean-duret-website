<?php

use Illuminate\Support\Facades\Route;

// Api Controllers
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\BookFormController;
use App\Http\Controllers\Api\ContactFormController;

// Client Controllers
use App\Http\Controllers\Client\HomePageController;
use App\Http\Controllers\Client\LoginPageController;
use App\Http\Controllers\Client\AboutPageController;
use App\Http\Controllers\Client\ContactPageController;
use App\Http\Controllers\Client\RegisterPageController;
use App\Http\Controllers\Client\ServicesPageController;
use App\Http\Controllers\Client\ServiceDetailPageController;

// Admin Controllers
use App\Http\Controllers\Admin\Setting\SettingController;
use App\Http\Controllers\Admin\Services\ServicesController;
use App\Http\Controllers\Admin\Dashboard\AdminHomePageController;

// Public routes accessible to all
Route::get('/', action: [HomePageController::class, 'index'])->name('home');
Route::get('/about', [AboutPageController::class, 'index'])->name('about');
Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');
Route::get('/services', [ServicesPageController::class, 'index'])->name('services');
Route::post('/book-service', [BookFormController::class, 'bookService'])->name('book-service');
Route::post('/contact', [ContactFormController::class, 'sendContactForm'])->name('send-contact-form');
Route::get('/services/service-detail', [ServiceDetailPageController::class, 'index'])->name('service-detail');
Route::get('/services/service-detail/{slug}', [ServiceDetailPageController::class, 'index'])->name('service-detail');

// Authentication routes (only for guests)
Route::middleware(['guest'])->group(function () {
   Route::post('/login', [AuthController::class, 'login']);
   Route::get('/login', [LoginPageController::class, 'index'])->name('login');

   Route::post('/register', [AuthController::class, 'register']);
   Route::get('/register', [RegisterPageController::class, 'index'])->name('register');
});

// Admin routes (only for authenticated admins)
Route::middleware(['auth', 'admin'])->group(function () {
   Route::get('/dashboard', [AdminHomePageController::class, 'index'])->name('admin.dashboard');

   Route::post('/dashboard/services', [ServicesController::class, 'store'])->name('store');
   Route::get('/dashboard/services/{id}', [ServicesController::class, 'show'])->name('show');
   Route::get('/dashboard/services/create', [ServicesController::class, 'create'])->name('create');
   Route::get('/dashboard/services', [ServicesController::class, 'index'])->name('admin.container.services.listings');
   Route::put('/dashboard/services/{id}', [ServicesController::class, 'update'])->name('admin.container.services.update');
   Route::get('/dashboard/services/{id}/edit', [ServicesController::class, 'edit'])->name('admin.container.services.edit');
   Route::delete('/dashboard/services/{id}', [ServicesController::class, 'destroy'])->name('admin.container.services.destroy');

   // Setting routes
   Route::get('/dashboard/setting', [SettingController::class, 'index'])->name('admin.container.setting.index');
   Route::put('/dashboard/setting/{id}', [SettingController::class, 'update'])->name('admin.container.setting.update');
});

// Authenticated user routes (for all authenticated users)
Route::middleware(['auth'])->group(function () {
   Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
});
