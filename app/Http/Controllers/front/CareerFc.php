<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class CareerFc extends Controller
{
  public function index(Request $request)
  {
    $designations = Vacancy::with('getDesignation')->select('designation_id')->groupBy('designation_id')->get();
    //printArray($designations->toArray());
    $data = compact('designations');
    return view('front.career')->with($data);
  }
}
