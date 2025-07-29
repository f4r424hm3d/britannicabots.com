<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\StaticPageSeo;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeFc extends Controller
{
  public function index2(Request $request)
  {
    return view('front.under-construction');
  }
  public function index(Request $request)
  {
    $testimonial = Testimonial::where(['status' => 1])->limit(10)->get();
    $data = compact('testimonial');
    return view('front.index')->with($data);
  }
  public function privacyPolicy(Request $request)
  {
    return view('front.privacy-policy');
  }
  public function termsConditions(Request $request)
  {
    return view('front.terms-conditions');
  }
}
