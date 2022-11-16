<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Mail;

class GetQuoteFc extends Controller
{
  public function __construct()
  {
    $this->mail_to = Config::get('constants.mail.to');
    $this->mail_cc = Config::get('constants.mail.cc');
  }
  public function index(Request $request)
  {
    $services = Services::all();
    $data = compact('services');
    return view('front.get-quote')->with($data);
  }
  public function submitInquiry(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'name' => 'required|regex:/^[a-zA-Z ]*$/',
        'email' => 'required|email',
        'mobile' => 'required|numeric',
        'website' => 'nullable|url',
        'services' => 'required|array|min:1'
      ]
    );
    $ser = implode(',', $request['services']);
    $field = new ContactUs();
    $field->name = $request['name'];
    $field->email = $request['email'];
    $field->mobile = $request['mobile'];
    $field->website = $request['website'];
    $field->services = $ser;
    $field->type = 'get-quote';
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

    $emaildata2 = ['name' => $request['name'], 'email' => $request['email'], 'mobile' => $request['mobile'], 'website' => $request['website'], 'services' => $ser];
    $dd2 = ['to' => TO_EMAIL, 'cc' => CC_EMAIL, 'to_name' => TO_NAME, 'cc_name' => CC_NAME, 'subject' => 'New Inquiry'];

    Mail::send(
      'mails.get-quote-mail-to-admin',
      $emaildata2,
      function ($message) use ($dd2) {
        $message->to($dd2['to'], $dd2['to_name']);
        $message->cc($dd2['cc'], $dd2['cc_name']);
        $message->subject($dd2['subject']);
        $message->priority(1);
      }
    );

    return redirect('get-quote');
  }
}
