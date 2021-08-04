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

$excludedUrl = [
    '(?!api\/)',
];

Route::group(['middleware' => ['web']], function () use ($excludedUrl) {
    Route::get('/{path?}', [\App\Http\Controllers\AppController::class, 'index'])->where(['path' => '^('.implode('', $excludedUrl).'.)*$']);
});