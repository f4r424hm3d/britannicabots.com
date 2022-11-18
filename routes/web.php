<?php

use App\Http\Controllers\admin\AdminDashboard;
use App\Http\Controllers\admin\AdminLogin;
use App\Http\Controllers\admin\ContactInquiryC;
use App\Http\Controllers\admin\DesignationC;
use App\Http\Controllers\admin\GetQuoteInquiryC;
use App\Http\Controllers\admin\JobApplicationC;
use App\Http\Controllers\admin\PortfolioC;
use App\Http\Controllers\admin\PortfolioImagesC;
use App\Http\Controllers\admin\ServicesC;
use App\Http\Controllers\admin\SubServicesC;
use App\Http\Controllers\admin\TeamC;
use App\Http\Controllers\admin\VacancyC;
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
use App\Models\Portfolio;
use App\Models\Services;
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
Route::post('/apply-job', [CareerFc::class, 'applyJob']);
Route::get('/services', [ServicesFc::class, 'index']);
Route::get('/team', [TeamFc::class, 'index']);
Route::get('/terms-of-use', [HomeFc::class, 'termsConditions']);
Route::get('/privacy-disclaimer', [HomeFc::class, 'privacyPolicy']);

/* ADMIN ROUTES BEFORE LOGIN */
$serv = ['android-app-development', 'static-website-designing', 'dynamic-website-designing', 'landing-page-website-designing', 'website-re-designing', 'website-maintenance', 'ios-app-development', 'cms-web-development', 'web-development', 'ecommerce-web-development', 'shopify-website-development', 'search-engine-optimization', 'social-media-optimization', 'logo-design', 'brochure-design', 'social-creative', 'payment-gateway-integration', 'api-development'];
foreach ($serv as $ser) {
  Route::get('/' . $ser, [ServicesFc::class, 'subServices']);
}

$allServ = Services::all();
foreach ($allServ as $ser) {
  Route::get('/' . $ser->slug . '-portfolio', [PortfolioFc::class, 'PortfolioList']);
}
$allComp = Portfolio::all();
foreach ($allComp as $com) {
  Route::get('portfolio/' . $com->company_slug, [PortfolioFc::class, 'PortfolioDetail']);
}


/* ADMIN ROUTES BEFORE LOGIN */

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

    Route::prefix('/designations')->group(function () {
      Route::get('', [DesignationC::class, 'index']);
      Route::post('/store', [DesignationC::class, 'store']);
      Route::get('/delete/{id}', [DesignationC::class, 'delete']);
      Route::get('/update/{id}', [DesignationC::class, 'index']);
      Route::post('/update/{id}', [DesignationC::class, 'update']);
    });
    Route::prefix('/vacancy')->group(function () {
      Route::get('', [VacancyC::class, 'index']);
      Route::post('/store', [VacancyC::class, 'store']);
      Route::get('/delete/{id}', [VacancyC::class, 'delete']);
      Route::get('/update/{id}', [VacancyC::class, 'index']);
      Route::post('/update/{id}', [VacancyC::class, 'update']);
    });
    Route::prefix('/team')->group(function () {
      Route::get('', [TeamC::class, 'index']);
      Route::post('/store', [TeamC::class, 'store']);
      Route::get('/delete/{id}', [TeamC::class, 'delete']);
      Route::get('/update/{id}', [TeamC::class, 'index']);
      Route::post('/update/{id}', [TeamC::class, 'update']);
    });
    Route::prefix('/services')->group(function () {
      Route::get('', [ServicesC::class, 'index']);
      Route::post('/store', [ServicesC::class, 'store']);
      Route::get('/delete/{id}', [ServicesC::class, 'delete']);
      Route::get('/update/{id}', [ServicesC::class, 'index']);
      Route::post('/update/{id}', [ServicesC::class, 'update']);
    });
    Route::prefix('/sub-services')->group(function () {
      Route::get('', [SubServicesC::class, 'index']);
      Route::post('/store', [SubServicesC::class, 'store']);
      Route::get('/delete/{id}', [SubServicesC::class, 'delete']);
      Route::get('/update/{id}', [SubServicesC::class, 'index']);
      Route::post('/update/{id}', [SubServicesC::class, 'update']);
    });
    Route::prefix('/portfolio')->group(function () {
      Route::get('', [PortfolioC::class, 'index']);
      Route::post('/store', [PortfolioC::class, 'store']);
      Route::get('/delete/{id}', [PortfolioC::class, 'delete']);
      Route::get('/update/{id}', [PortfolioC::class, 'index']);
      Route::post('/update/{id}', [PortfolioC::class, 'update']);
    });
    Route::prefix('/digital-marketing-portfolio')->group(function () {
      Route::get('', [PortfolioC::class, 'index']);
      Route::post('/store', [PortfolioC::class, 'store']);
      Route::get('/delete/{id}', [PortfolioC::class, 'delete']);
      Route::get('/update/{id}', [PortfolioC::class, 'index']);
      Route::post('/update/{id}', [PortfolioC::class, 'update']);
    });
    Route::prefix('/portfolio-images')->group(function () {
      Route::get('/{portfolio_id}', [PortfolioImagesC::class, 'index']);
      Route::post('/store', [PortfolioImagesC::class, 'store']);
      Route::get('/delete/{id}', [PortfolioImagesC::class, 'delete']);
      Route::get('/{portfolio_id}/update/{id}', [PortfolioImagesC::class, 'index']);
      Route::post('/update/{id}', [PortfolioImagesC::class, 'update']);
    });

    Route::prefix('/contact-us')->group(function () {
      Route::get('', [ContactInquiryC::class, 'index']);
      Route::get('/delete/{id}', [ContactInquiryC::class, 'delete']);
    });
    Route::prefix('/get-quote')->group(function () {
      Route::get('', [GetQuoteInquiryC::class, 'index']);
      Route::get('/delete/{id}', [GetQuoteInquiryC::class, 'delete']);
    });
    Route::prefix('/job-application')->group(function () {
      Route::get('', [JobApplicationC::class, 'index']);
      Route::get('/delete/{id}', [JobApplicationC::class, 'delete']);
    });
  });
});

Route::prefix('common')->group(function () {
  Route::get('/change-status', [CommonController::class, 'changeStatus']);
});
