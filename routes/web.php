<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
//Route::get('/content', [App\Http\Controllers\AppController::class, 'index'])->name('content');

Route::get('/NeutralHome', [App\Http\Controllers\NeutralHomeController::class, 'index'])->name('neutralhome');
// Route::group(['prefix' => 'NeutralHome'], function () {
//   Route::get('/NeutralHome/SignUp', [App\Http\Controllers\SignUpController::class, 'add'])->name('add.user');
//   Route::post('/NeutralHome/SignUp/Post', [App\Http\Controllers\SignUpController::class, 'store'])->name('add.user.post');
// });


// Route::middleware(['guest'])->group(function () {
//   Route::get('login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
//   Route::post('login', [App\Http\Controllers\LoginController::class, 'logIn'])->name('post.login'); 
//   Route::get('register', [App\Http\Controllers\RegisterController::class, 'index'])->name('register');
//   Route::post('register', [App\Http\Controllers\RegisterController::class, 'register'])->name('post.register');
// });
// Route::post('logout', [App\Http\Controllers\LoginController::class, 'logOut'])->name('logout');

// // Athenticated Routes
// Route::middleware(['auth'])->group(function () {
//   Route::get('dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard'); 
//   Route::group(['prefix' => 'account'], function () {
//       Route::get('/', [App\Http\Controllers\AccountController::class, 'index'])->name('account');
//       Route::post('update', [App\Http\Controllers\AccountController::class, 'updateAccount'])->name('account.update'); 
//   });
// });

// Route::group(['prefix' => 'admin'], function (){
//     Route::get('test/{name}', [App\Http\Controllers\DashboardController::class, 'test'])->name('Lunod');
//     Route::get('/Hehe', function() {
//         dd('Stream Pebble House by Ben&Ben HEHE');
//     });
// });

// Carl Note
// if route changes not work try to run "php artisan optimize"