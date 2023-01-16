<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Mail;

class ContactFc extends Controller
{
  public function __construct()
  {
    $this->mail_to = Config::get('constants.mail.to');
    $this->mail_cc = Config::get('constants.mail.cc');
  }
  public function index(Request $request)
  {
    return view('front.contact');
  }
  public function submitInquiry(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'name' => 'required|regex:/^[a-zA-Z ]*$/',
        'email' => 'required|email|valid_email',
        'mobile' => 'required|numeric',
      ]
    );
    $field = new ContactUs();
    $field->name = $request['name'];
    $field->email = $request['email'];
    $field->mobile = $request['mobile'];
    $field->message = strip_tags($request['message']);
    $field->status = 0;
    $field->save();

    session()->flash('smsg', ' Your inquiry has been submitted. we will contact you soon..');

    $emaildata = ['name' => $request['name']];
    $dd = ['to' => $request['email'], 'to_name' => $request['name'], 'subject' => 'Inquiry'];

    Mail::send(
      'mails.inquiry-submitted',
      $emaildata,
      function ($message) use ($dd) {
        $message->to($dd['to'], $dd['to_name']);
        $message->subject($dd['subject']);
        $message->priority(1);
      }
    );

    $emaildata2 = ['name' => $request['name'], 'email' => $request['email'], 'mobile' => $request['mobile'], 'msg' => $request['message']];
    $dd2 = ['to' => TO_EMAIL, 'cc' => CC_EMAIL, 'to_name' => TO_NAME, 'cc_name' => CC_NAME, 'subject' => 'New Inquiry'];

    Mail::send(
      'mails.contact-us-mail-to-admin',
      $emaildata2,
      function ($message) use ($dd2) {
        $message->to($dd2['to'], $dd2['to_name']);
        $message->cc($dd2['cc'], $dd2['cc_name']);
        $message->subject($dd2['subject']);
        $message->priority(1);
      }
    );

    return redirect('contact');
  }
}