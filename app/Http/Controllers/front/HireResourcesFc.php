<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HireResourcesFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.hire-resources');
  }
  public function category(Request $request, $category_slug)
  {
    return view('front.hire-resources-category');
  }
  public function subCategory(Request $request, $category_slug, $sub_category_slug)
  {
    return view('front.hire-resources-sub-category');
  }
}
