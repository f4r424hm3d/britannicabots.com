<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamFc extends Controller
{
  public function index(Request $request)
  {
    $rows = Team::where(['status' => 1])->get();
    $data = compact('rows');
    return view('front.team')->with($data);
  }
}
