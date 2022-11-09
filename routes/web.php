<?php

use App\Http\Controllers\admin\AdminDashboard;
use App\Http\Controllers\admin\AdminLogin;
use App\Http\Controllers\admin\TeamC;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\front\AboutFc;
use App\Http\Controllers\front\BlogFc;
use App\Http\Controllers\front\CareerFc;
use App\Http\Controllers\front\ContactFc;
use App\Http\Controllers\front\GetQuoteFc;
use App\Http\Controllers\front\HomeFc;
use App\Http\Controllers\front\PortfolioFc;
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
Route::get('/blog', [BlogFc::class, 'index']);
Route::get('/contact', [ContactFc::class, 'index']);
Route::post('/contact', [ContactFc::class, 'submitInquiry']);
Route::get('/get-quote', [GetQuoteFc::class, 'index']);
Route::post('/get-quote', [GetQuoteFc::class, 'submitInquiry']);
Route::get('/testimonials', [TestimonialFc::class, 'index']);
Route::get('/portfolio', [PortfolioFc::class, 'index']);
Route::get('/career', [CareerFc::class, 'index']);
Route::get('/services', [ServicesFc::class, 'index']);
Route::get('/team', [TeamFc::class, 'index']);
Route::get('/terms-of-use', [HomeFc::class, 'termsConditions']);
Route::get('/privacy-disclaimer', [HomeFc::class, 'privacyPolicy']);

/* ADMIN ROUTES BEFORE LOGIN */
Route::middleware(['adminLoggedOut'])->group(function () {
  Route::get('/admin/login/', [AdminLogin::class, 'index']);
  Route::post('/admin/login/', [AdminLogin::class, 'login']);
});
/* ADMIN ROUTES AFTER LOGIN */
Route::middleware(['adminLoggedIn'])->group(function () {
  Route::get('/admin/logout/', function () {
    session()->forget('adminLoggedIn');
    return redirect('admin/login');
  });
  Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminDashboard::class, 'index']);
    Route::get('/dashboard', [AdminDashboard::class, 'index']);
    Route::get('/profile', [AdminDashboard::class, 'profile']);
    Route::post('/update-profile', [AdminDashboard::class, 'updateProfile']);

    Route::prefix('/team')->group(function () {
      Route::get('', [TeamC::class, 'index']);
      Route::post('/store', [TeamC::class, 'store']);
      Route::get('/delete/{id}', [TeamC::class, 'delete']);
      Route::get('/update/{id}', [TeamC::class, 'index']);
      Route::post('/update/{id}', [TeamC::class, 'update']);
    });
  });
});

Route::prefix('common')->group(function () {
  Route::get('/change-status', [CommonController::class, 'changeStatus']);
});
