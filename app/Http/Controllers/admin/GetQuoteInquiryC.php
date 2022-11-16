<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class GetQuoteInquiryC extends Controller
{
  public function index()
  {
    $rows = ContactUs::where(['type' => 'get-quote'])->get();
    $page_title = 'Get Quote Inquiry';
    $data = compact('rows', 'page_title');
    return view('admin.get-quote')->with($data);
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = ContactUs::find($id)->delete();
  }
}
