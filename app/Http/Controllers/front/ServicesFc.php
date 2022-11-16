<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.services');
  }
  public function subServices(Request $request)
  {
    $pageName = $request->segment(1);
    $page_title = ucwords(str_replace('-', ' ', $pageName));
    $data = compact('page_title');
    return view('front.services.' . $pageName)->with($data);
  }
}
