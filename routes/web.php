<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\LoginController;

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

Route::get('/', [App\Http\Controllers\MarketplaceContentController::class, 'index'])->name('home');  

Route::middleware(['guest'])->group(function () {
  Route::group(['prefix'=>'marketplace'],function () {
    Route::get('step1', [App\Http\Controllers\MarketplaceContentController::class, 'step1'])->name('step1');
    Route::get('step2', [App\Http\Controllers\MarketplaceContentController::class, 'step2'])->name('step2');
    Route::get('step3', [App\Http\Controllers\MarketplaceContentController::class, 'step3'])->name('step3');
    Route::get('step4', [App\Http\Controllers\MarketplaceContentController::class, 'step4'])->name('step4');
    Route::get('step5', [App\Http\Controllers\MarketplaceContentController::class, 'step5'])->name('step5');
    Route::get('step6', [App\Http\Controllers\MarketplaceContentController::class, 'step6'])->name('step6');
    Route::get('step7', [App\Http\Controllers\MarketplaceContentController::class, 'step7'])->name('step7');
    Route::get('step8', [App\Http\Controllers\MarketplaceContentController::class, 'step8'])->name('step8');
  });
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

 
  Route::get('addNewPostLawUpdate', [App\Http\Controllers\DashboardController::class, 'addPostLawUpdate'])->name('addNewPostLawUpdate');
  Route::get('cmsContactUs', [App\Http\Controllers\DashboardController::class, 'contactUs'])->name('cmsContactUs');
  Route::get('addAddress', [App\Http\Controllers\DashboardController::class, 'addNewAddress'])->name('addAddress');
  Route::post('addAddress/post', [App\Http\Controllers\DashboardController::class, 'storeAddress'])->name('addAddress.post');
  Route::get('cmsDomainSettings', [App\Http\Controllers\DashboardController::class, 'domainSettings'])->name('cmsDomainSettings');


  //blog
  Route::group(['prefix' => 'blog'], function () {
    Route::get('cmsLawyersBlog', [App\Http\Controllers\BlogController::class, 'lawyersBlog'])->name('cmsLawyersBlog');
    Route::get('addNewPost', [App\Http\Controllers\BlogController::class, 'addPost'])->name('addNewPost');
    Route::post('store', [App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
    Route::get('editBlog/{blog_id}', [App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
    Route::post('update/{blog_id}', [App\Http\Controllers\BlogController::class, 'update'])->name('blog.update');
    Route::get('delete/{blog_id}', [App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.delete');
    Route::get('view/{blog_id}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.view');
  });
  
  //privacy policy
  Route::group(['prefix' => 'privacypolicy'], function () {
    Route::get('cmsPrivacyPolicy', [App\Http\Controllers\PrivacyPolicyController::class, 'privacyPolicy'])->name('cmsPrivacyPolicy');
    Route::get('addNewPrivacyPolicy', [App\Http\Controllers\PrivacyPolicyController::class, 'addPrivacyPolicy'])->name('addNewPrivacyPolicy');
    Route::post('store', [App\Http\Controllers\PrivacyPolicyController::class, 'store'])->name('privacypolicy.store');
    Route::get('editPrivacyPolicy/{policy_id}', [App\Http\Controllers\PrivacyPolicyController::class, 'edit'])->name('privacypolicy.edit');
    Route::post('update/{policy_id}', [App\Http\Controllers\PrivacyPolicyController::class, 'update'])->name('privacypolicy.update');
    Route::get('delete/{policy_id}', [App\Http\Controllers\PrivacyPolicyController::class, 'destroy'])->name('privacypolicy.delete');
    Route::get('view/{policy_id}', [App\Http\Controllers\PrivacyPolicyController::class, 'show'])->name('privacypolicy.view');

    //Terms of Use
    Route::get('createTerms', [App\Http\Controllers\PrivacyPolicyController::class, 'createTermsofUse'])->name('createTerms');
    Route::post('storeTerms', [App\Http\Controllers\PrivacyPolicyController::class, 'storeTerms'])->name('termsofuse.storeterms');
    Route::get('editTermsofUse/{term_id}', [App\Http\Controllers\PrivacyPolicyController::class, 'editTerms'])->name('termsofuse.edit');
    Route::post('updateTermsofUse/{term_id}', [App\Http\Controllers\PrivacyPolicyController::class, 'updateTerms'])->name('termsofuse.update');
    Route::get('deleteTerms/{term_id}', [App\Http\Controllers\PrivacyPolicyController::class, 'destroyTerms'])->name('termsofuse.delete');
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

Route::get('/neutral', [App\Http\Controllers\NeutralHomeController::class, 'index'])->name('neutral-homepage');


Route::get('/masculine', function(){
  return view('masculine-layouts.masculineTemplate');
}); 

// Carl Note
// if route changes not work try to run "php artisan optimize"
