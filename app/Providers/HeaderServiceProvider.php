<?php

namespace App\Providers;

use App\Models\Country;
use App\Models\CourseCategory;
use App\Models\Exam;
use App\Models\HireResourcesCategory;
use App\Models\Level;
use App\Models\SitePage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HeaderServiceProvider extends ServiceProvider
{
  public function boot()
  {
    View::composer('front.layouts.header', function ($view) {
      $view->with([
        'categories' => HireResourcesCategory::orderBy('category_name', 'asc')->limit(6)->get(),
      ]);
    });
  }
}
