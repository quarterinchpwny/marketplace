<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('login', [App\Http\Controllers\Auth\AdminAuthController::class, 'login'])->name('admin.login');
Route::post('login', [App\Http\Controllers\Auth\AdminAuthController::class, 'loginPost'])->name('admin.login.post');
Route::get('logout', [App\Http\Controllers\Auth\AdminAuthController::class, 'logout'])->name('admin.logout');

// Athenticated Routes
Route::middleware(['adminauth'])->group(function () {
    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard'); 
    Route::get('lawyers', [App\Http\Controllers\AdminController::class, 'lawyers'])->name('admin.lawyers'); 
    Route::get('templates', [App\Http\Controllers\AdminController::class, 'templates'])->name('admin.templates'); 
});