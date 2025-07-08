<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ServiceController;

// Auth Routes
Route::post("/login", [AuthController::class, "login"]);
Route::post("/register", [AuthController::class, "register"]);

// Services
Route::get('/services', [ServiceController::class, 'index']);
Route::post('/service', [ServiceController::class, 'store']);
Route::get('/service/{slug}', [ServiceController::class, 'show']);
Route::put('/service/{id}', [ServiceController::class, 'update']);
Route::delete('/service/{id}', [ServiceController::class, 'destroy']);