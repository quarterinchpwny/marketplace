<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Public Routes
Route::get('/', [App\Http\Controllers\AppController::class, 'index'])->name('home');

Route::middleware(['guest'])->group(function () {
  Route::get('login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
  Route::post('login', [App\Http\Controllers\LoginController::class, 'logIn'])->name('post.login'); 
  Route::get('register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');
  Route::post('register', [App\Http\Controllers\RegisterController::class, 'register'])->name('post.register');
});
Route::post('logout', [App\Http\Controllers\LoginController::class, 'logOut'])->name('logout');

// Athenticated Routes
Route::middleware(['auth'])->group(function () {
  Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard'); 
  Route::group(['prefix' => 'account'], function () {
      Route::get('/', [App\Http\Controllers\AccountController::class, 'index'])->name('account');
      Route::post('update', [App\Http\Controllers\AccountController::class, 'updateAccount'])->name('account.update'); 
  });
});

//CMS Route

Route::get('cms', [App\Http\Controllers\cmscontroller::class, 'index'])->name('cms');
Route::get('addBanner', [App\Http\Controllers\cmscontroller::class, 'addBanner'])->name('addBanner');
Route::get('cmsRegistration', [App\Http\Controllers\cmscontroller::class, 'registration'])->name('cmsRegistration');
Route::get('cmsPrivacyPolicy', [App\Http\Controllers\cmscontroller::class, 'privacyPolicy'])->name('cmsPrivacyPolicy');
Route::get('cmsLawyersBlog', [App\Http\Controllers\cmscontroller::class, 'lawyersBlog'])->name('cmsLawyersBlog');




// Carl Note
// if route changes not work try to run "php artisan optimize"