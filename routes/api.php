<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::post('/service', [ServiceController::class, 'store'])->name('services.store');
Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('services.show');
Route::put('/service/{id}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/service/{id}', [ServiceController::class, 'destroy'])->name('services.destroy');


Route::get('/test', function () {
   return response()->json(['message' => 'API is working']);
});