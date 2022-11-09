<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller
{
  public function changeStatus(Request $request)
  {
    echo $result = DB::table($request->tbl)->where('id', $request->id)->update(['status' => $request->val]);
  }
  public function updateField(Request $request)
  {
    echo $result = DB::table($request->tbl)->whereIn('id', $request->ids)->update([$request->col => $request->val]);
  }
  public function updateFieldById(Request $request)
  {
    echo $result = DB::table($request->tbl)->where('id', $request->id)->update([$request->col => $request->val]);
  }
}
