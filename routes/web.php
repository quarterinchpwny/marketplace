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


Route::get('content', [App\Http\Controllers\ContentController::class, 'index'])->name('content');
Route::get('step1', [App\Http\Controllers\ContentController::class, 'step1'])->name('step1');
Route::get('step2', [App\Http\Controllers\ContentController::class, 'step2'])->name('step2');
Route::get('step3', [App\Http\Controllers\ContentController::class, 'step3'])->name('step3');
Route::get('step4', [App\Http\Controllers\ContentController::class, 'step4'])->name('step4');
Route::get('step5', [App\Http\Controllers\ContentController::class, 'step5'])->name('step5');
Route::get('step6', [App\Http\Controllers\ContentController::class, 'step6'])->name('step6');
Route::get('step7', [App\Http\Controllers\ContentController::class, 'step7'])->name('step7');
Route::get('step8', [App\Http\Controllers\ContentController::class, 'step8'])->name('step8');




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

// New
Route::get('/feminine', [App\Http\Controllers\FeminineHomepageController::class, 'index'])->name('feminine');
/*
Route::get('/feminine-homepage', [App\Http\Controllers\FeminineHomepageController::class, 'index'])->name('feminine-homepage');
*/
Route::get('/navigation', [App\Http\Controllers\NavController::class, 'index'])->name('navigation');

Route::get('/banner-area', [App\Http\Controllers\BannerController::class, 'index'])->name('banner-area');

Route::get('/sample', [App\Http\Controllers\SampleController::class, 'index'])->name('sample');

Route::get('/testing-area', [App\Http\Controllers\TestingController::class, 'index'])->name('testing-area');

// Carl Note
// if route changes not work try to run "php artisan optimize"
