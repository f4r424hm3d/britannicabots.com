<?php

use App\Http\Controllers\front\AboutFc;
use App\Http\Controllers\front\BlogFc;
use App\Http\Controllers\front\CareerFc;
use App\Http\Controllers\front\ContactFc;
use App\Http\Controllers\front\GetQuoteFc;
use App\Http\Controllers\front\HomeFc;
use App\Http\Controllers\front\ServicesFc;
use App\Http\Controllers\front\TeamFc;
use App\Http\Controllers\front\TestimonialFc;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', function () {
  return view('welcome');
});
//Clear Cache facade value:
Route::get('/clear-cache', function () {
  $exitCode = Artisan::call('cache:clear');
  return '<h1>Cache facade value cleared</h1>';
});

//Reoptimized class loader:
Route::get('/optimize', function () {
  $exitCode = Artisan::call('optimize');
  return '<h1>Reoptimized class loader</h1>';
});

//Route cache:
Route::get('/route-cache', function () {
  $exitCode = Artisan::call('route:cache');
  return '<h1>Routes cached</h1>';
});

//Clear Route cache:
Route::get('/route-clear', function () {
  $exitCode = Artisan::call('route:clear');
  return '<h1>Route cache cleared</h1>';
});

//Clear View cache:
Route::get('/view-clear', function () {
  $exitCode = Artisan::call('view:clear');
  return '<h1>View cache cleared</h1>';
});

//Clear Config cache:
Route::get('/config-cache', function () {
  $exitCode = Artisan::call('config:cache');
  return '<h1>Clear Config cleared</h1>';
});

//For MIgrate:
Route::get('/migrate', function () {
  $exitCode = Artisan::call('migrate');
  return '<h1>Migrated</h1>';
});

Route::get('/db-seed', function () {
  $exitCode = Artisan::call('db:seed');
  return $exitCode . '<br><h1>Database seeding completed successfully.</h1>';
});

/* FRONT ROUTES */
Route::get('/', [HomeFc::class, 'index']);
Route::get('/home', [HomeFc::class, 'index']);
Route::get('/about', [AboutFc::class, 'index']);
Route::get('/blogs', [BlogFc::class, 'index']);
Route::get('/contact-us', [ContactFc::class, 'index']);
Route::post('/contact-us', [ContactFc::class, 'submitInquiry']);
Route::get('/get-quote', [GetQuoteFc::class, 'index']);
Route::post('/get-quote', [GetQuoteFc::class, 'submitInquiry']);
Route::get('/testimonials', [TestimonialFc::class, 'index']);
Route::get('/career', [CareerFc::class, 'index']);
Route::get('/services', [ServicesFc::class, 'index']);
Route::get('/team', [TeamFc::class, 'index']);
Route::get('/terms-conditions', [HomeFc::class, 'termsConditions']);
Route::get('/privacy-policy', [HomeFc::class, 'privacyPolicy']);
Route::get('/disclaimer', [HomeFc::class, 'disclaimer']);
Route::get('/copyright-policy', [HomeFc::class, 'copyrightPolicy']);
