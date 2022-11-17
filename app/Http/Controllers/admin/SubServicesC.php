<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Models\SubServices;
use Illuminate\Http\Request;

class SubServicesC extends Controller
{
  public function index($id = null)
  {
    $services = Services::all();
    $rows = SubServices::all();
    if ($id != null) {
      $sd = SubServices::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/sub-services/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/sub-services');
      }
    } else {
      $ft = 'add';
      $url = url('admin/sub-services/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = 'Sub Services';
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title', 'services');
    return view('admin.sub-services')->with($data);
  }
  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'service' => 'required|numeric',
        'sub_service_name' => 'required',
      ]
    );
    $field = new SubServices;
    $field->service_id = $request['service'];
    $field->sub_service_name = $request['sub_service_name'];
    $field->sub_service_slug = slugify($request['sub_service_name']);
    $field->save();
    session()->flash('smsg', 'New record has been added successfully.');
    return redirect('admin/sub-services');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = SubServices::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'service' => 'required|numeric',
        'sub_service_name' => 'required',
      ]
    );
    $field = SubServices::find($id);
    $field->service_id = $request['service'];
    $field->sub_service_name = $request['sub_service_name'];
    $field->sub_service_slug = slugify($request['sub_service_name']);
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/sub-services');
  }
}
