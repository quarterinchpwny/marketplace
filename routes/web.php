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

  Route::get('cms', [App\Http\Controllers\DashboardController::class, 'index'])->name('cms');
  Route::get('cmsServices', [App\Http\Controllers\DashboardController::class, 'services'])->name('cmsServices');
  Route::get('cmsLawUpdate', [App\Http\Controllers\DashboardController::class, 'lawUpdates'])->name('cmsLawUpdate');
  Route::get('cmsLawyersProfile', [App\Http\Controllers\DashboardController::class, 'lawyersProfile'])->name('cmsLawyersProfile');
  Route::get('cmsEverydayLaw', [App\Http\Controllers\DashboardController::class, 'everyDayLaw'])->name('cmsEverydayLaw');
  Route::get('cmsLawFirmPractice', [App\Http\Controllers\DashboardController::class, 'lawFirmPractice'])->name('cmsLawFirmPractice');
  Route::get('addBanner', [App\Http\Controllers\DashboardController::class, 'addBanner'])->name('addBanner');
  Route::get('cmsRegistration', [App\Http\Controllers\DashboardController::class, 'registration'])->name('cmsRegistration');
  Route::get('cmsPrivacyPolicy', [App\Http\Controllers\DashboardController::class, 'privacyPolicy'])->name('cmsPrivacyPolicy');
  Route::get('cmsLawyersBlog', [App\Http\Controllers\DashboardController::class, 'lawyersBlog'])->name('cmsLawyersBlog');
  Route::get('addNewPost', [App\Http\Controllers\DashboardController::class, 'addPost'])->name('addNewPost');
  Route::get('addNewPostLawUpdate', [App\Http\Controllers\DashboardController::class, 'addPostLawUpdate'])->name('addNewPostLawUpdate');
  Route::get('cmsContactUs', [App\Http\Controllers\DashboardController::class, 'contactUs'])->name('cmsContactUs');
  Route::get('cmsDomainSettings', [App\Http\Controllers\DashboardController::class, 'domainSettings'])->name('cmsDomainSettings');

});

// Carl Note
// if route changes not work try to run "php artisan optimize"