<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationC extends Controller
{
  public function index()
  {
    $rows = JobApplication::all();
    $page_title = 'Job Application';
    $data = compact('rows', 'page_title');
    return view('admin.job-application')->with($data);
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = JobApplication::find($id)->delete();
  }
}
