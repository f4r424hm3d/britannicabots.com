<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactInquiryC extends Controller
{
  public function index()
  {
    $rows = ContactUs::all();
    $page_title = 'Contact Us Inquiry';
    $data = compact('rows', 'page_title');
    return view('admin.contact-us')->with($data);
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = ContactUs::find($id)->delete();
  }
}
