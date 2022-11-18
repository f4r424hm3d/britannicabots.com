<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\JobApplication;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;

class CareerFc extends Controller
{
  public function index(Request $request)
  {
    $designations = Vacancy::with('getDesignation')->select('designation_id')->groupBy('designation_id')->get();
    $page_title = "Career";
    $data = compact('designations', 'page_title');
    return view('front.career')->with($data);
  }
  public function applyJob(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'name' => 'required|regex:/^[a-zA-Z ]*$/',
        'email' => 'required|email',
        'mobile' => 'required|numeric',
        'experience' => 'required',
        'position' => 'required|numeric',
        'resume' => 'max:2048|mimes:pdf,doc,docx',
      ],
      [
        'resume.max' => 'The file may not be greater than 2 MB'
      ]
    );
    $field = new JobApplication;
    if ($request->hasFile('resume')) {
      $fileOriginalName = $request->file('resume')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $file_name = $file_name_slug . '-' . time() . '.' . $request->file('resume')->getClientOriginalExtension();
      $move = $request->file('resume')->move('uploads/resume/', $file_name);
      if ($move) {
        $field->resume_name = $file_name;
        $field->resume_path = 'uploads/resume/' . $file_name;
      } else {
        session()->flash('emsg', 'File not uploaded.');
      }
    }
    $field->name = $request['name'];
    $field->email = $request['email'];
    $field->mobile = $request['mobile'];
    $field->msg = $request['msg'];
    $field->experience = $request['experience'];
    $field->designation_id = $request['position'];
    $field->token = Str::random(10);
    $field->save();

    $designation = Designation::find($request['position']);
    session()->flash('smsg', ' Your inquiry has been submitted. we will contact you soon..');

    $emaildata = ['name' => $request['name']];
    $dd = ['to' => $request['email'], 'to_name' => $request['name'], 'subject' => 'Job Application'];

    Mail::send(
      'mails.inquiry-submitted',
      $emaildata,
      function ($message) use ($dd) {
        $message->to($dd['to'], $dd['to_name']);
        $message->subject($dd['subject']);
        $message->priority(1);
      }
    );

    $emaildata2 = ['name' => $request['name'], 'email' => $request['email'], 'mobile' => $request['mobile'], 'position' => $designation->designation, 'experience' => $request['experience'], 'msg' => $request['msg']];
    $dd2 = ['to' => TO_EMAIL, 'cc' => CC_EMAIL, 'to_name' => TO_NAME, 'cc_name' => CC_NAME, 'subject' => 'Job Application'];

    Mail::send(
      'mails.job-application-mail-to-admin',
      $emaildata2,
      function ($message) use ($dd2) {
        $message->to($dd2['to'], $dd2['to_name']);
        $message->cc($dd2['cc'], $dd2['cc_name']);
        $message->subject($dd2['subject']);
        $message->priority(1);
      }
    );

    return redirect('career');
  }
}
