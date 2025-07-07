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

Route::get('/', [HomePageController::class, 'index'])->name('home');
Route::get('/about', [AboutPageController::class, 'index'])->name('about');
Route::get('/services', [ServicesPageController::class, 'index'])->name('services');
Route::get('/services/service-detail', [ServiceDetailPageController::class, 'index'])->name('service-detail');
Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');
Route::get('/login', [LoginPageController::class, 'index'])->name('login');
Route::get('/register', [RegisterPageController::class, 'index'])->name('register');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');