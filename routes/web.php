<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TripController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\IsAdmin;

Route::get('/', [TripController::class, 'index'])->name('index'); 
Route::get('/trip/{id}', [TripController::class, 'show'])->name('trip.show'); 
Route::post('/search', [SearchController::class, 'search'])->name('search'); 

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); 
Route::post('/login', [AuthController::class, 'login']); 
Route::get('/logout', [AuthController::class, 'logout'])->name('logout'); 

Route::middleware(IsAdmin::class)->group(function () {
    Route::get('admin', [AdminController::class, 'index'])->name('admin.index'); 
    Route::get('admin/login', [AdminController::class, 'loginForm'])->name('admin.login'); 
    Route::post('admin/login', [AdminController::class, 'login'])->name('admin.login.post'); 
    Route::post('admin/logout', [AdminController::class, 'logout'])->name('admin.logout'); 

    Route::get('admin/trips', [AdminController::class, 'index'])->name('admin.trips.index'); 
    Route::get('admin/trips/create', [AdminController::class, 'create'])->name('admin.trips.create'); 
    Route::post('admin/trips', [AdminController::class, 'store'])->name('admin.trips.store'); 
    Route::get('admin/trips/{id}/edit', [AdminController::class, 'edit'])->name('admin.trips.edit'); 
    Route::put('admin/trips/{id}', [AdminController::class, 'update'])->name('admin.trips.update'); 
    Route::delete('admin/trips/{id}', [AdminController::class, 'destroy'])->name('admin.trips.destroy');
});