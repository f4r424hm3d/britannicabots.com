<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesC extends Controller
{
  public function index($id = null)
  {
    $rows = Services::all();
    if ($id != null) {
      $sd = Services::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/services/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/services');
      }
    } else {
      $ft = 'add';
      $url = url('admin/services/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = 'Services';
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title');
    return view('admin.services')->with($data);
  }
  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'name' => 'required',
      ]
    );
    $field = new Services;
    $field->name = $request['name'];
    $field->slug = slugify($request['name']);
    $field->save();
    session()->flash('smsg', 'New record has been added successfully.');
    return redirect('admin/services');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = Services::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'name' => 'required',
      ]
    );
    $field = Services::find($id);
    $field->name = $request['name'];
    $field->slug = slugify($request['name']);
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/services');
  }
}
