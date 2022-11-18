<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationC extends Controller
{
  public function index($id = null)
  {
    $rows = Designation::all();
    if ($id != null) {
      $sd = Designation::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/designations/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/designations');
      }
    } else {
      $ft = 'add';
      $url = url('admin/designations/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = 'Designation';
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title');
    return view('admin.designations')->with($data);
  }
  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'designation' => 'required',
      ]
    );
    $field = new Designation;
    $field->designation = $request['designation'];
    $field->slug = slugify($request['designation']);
    $field->save();
    session()->flash('smsg', 'New record has been added successfully.');
    return redirect('admin/designations');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = Designation::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'designation' => 'required',
      ]
    );
    $field = Designation::find($id);
    $field->designation = $request['designation'];
    $field->slug = slugify($request['designation']);
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/designations');
  }
}
