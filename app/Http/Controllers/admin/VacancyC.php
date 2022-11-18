<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyC extends Controller
{
  public function index($id = null)
  {
    $designation = Designation::all();
    $rows = Vacancy::all();
    if ($id != null) {
      $sd = Vacancy::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/vacancy/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/vacancy');
      }
    } else {
      $ft = 'add';
      $url = url('admin/vacancy/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = 'Vacancy';
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title', 'designation');
    return view('admin.vacancy')->with($data);
  }
  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'designation' => 'required|numeric',
        'title' => 'required',
        'no_of_position' => 'required',
        'experience' => 'required',
        'location' => 'required',
        'roles' => 'required',
        'job_description' => 'required',
      ]
    );
    $field = new Vacancy;
    $field->designation_id = $request['designation'];
    $field->title = $request['title'];
    $field->no_of_position = $request['no_of_position'];
    $field->experience = $request['experience'];
    $field->location = $request['location'];
    $field->roles = $request['roles'];
    $field->job_description = $request['job_description'];
    $field->save();
    session()->flash('smsg', 'New record has been added successfully.');
    return redirect('admin/vacancy');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = Vacancy::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'designation' => 'required|numeric',
        'title' => 'required',
        'no_of_position' => 'required',
        'experience' => 'required',
        'location' => 'required',
        'roles' => 'required',
        'job_description' => 'required',
      ]
    );
    $field = Vacancy::find($id);
    $field->designation_id = $request['designation'];
    $field->title = $request['title'];
    $field->no_of_position = $request['no_of_position'];
    $field->experience = $request['experience'];
    $field->location = $request['location'];
    $field->roles = $request['roles'];
    $field->job_description = $request['job_description'];
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/vacancy');
  }
}
