<?php

namespace App\Providers;

use App\Models\HireResourcesCategory;
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
