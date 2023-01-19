<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Services;
use Illuminate\Http\Request;

class PortfolioC extends Controller
{
  public function index($id = null)
  {
    $services = Services::all();
    $rows = Portfolio::all();
    if ($id != null) {
      $sd = Portfolio::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/portfolio/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/portfolio');
      }
    } else {
      $ft = 'add';
      $url = url('admin/portfolio/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = 'Portfolio';
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title', 'services');
    return view('admin.portfolio')->with($data);
  }
  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'service' => 'required|numeric',
        'company_name' => 'required',
        'company_category' => 'required',
        //'description' => 'required',
        'thumbnail' => 'nullable|max:50000|mimes:jpg,jpeg,png,gif',
      ]
    );
    $field = new Portfolio;
    if ($request->hasFile('thumbnail')) {
      $fileOriginalName = $request->file('thumbnail')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $file_name = $file_name_slug . '-' . time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
      $move = $request->file('thumbnail')->move('uploads/portfolio/', $file_name);
      if ($move) {
        $field->thumbnail_name = $file_name;
        $field->thumbnail_path = 'uploads/portfolio/' . $file_name;
      } else {
        session()->flash('emsg', 'Profile picture not uploaded.');
      }
    }
    $field->service_id = $request['service'];
    $field->company_name = $request['company_name'];
    $field->company_slug = slugify($request['company_name']);
    $field->company_category = $request['company_category'];
    $field->description = $request['description'];
    $field->meta_title = $request['meta_title'];
    $field->meta_keyword = $request['meta_keyword'];
    $field->meta_description = $request['meta_description'];
    $field->page_content = $request['page_content'];
    $field->seo_rating = $request['seo_rating'];
    $field->save();
    session()->flash('smsg', 'New record has been added successfully.');
    return redirect('admin/portfolio');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = Portfolio::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'service' => 'required|numeric',
        'company_name' => 'required',
        'company_category' => 'required',
        'description' => 'required',
        'thumbnail' => 'nullable|max:50000|mimes:jpg,jpeg,png,gif',
      ]
    );
    $field = Portfolio::find($id);
    if ($request->hasFile('thumbnail')) {
      $fileOriginalName = $request->file('thumbnail')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $file_name = $file_name_slug . '-' . time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
      $move = $request->file('thumbnail')->move('uploads/portfolio/', $file_name);
      if ($move) {
        $field->thumbnail_name = $file_name;
        $field->thumbnail_path = 'uploads/portfolio/' . $file_name;
      } else {
        session()->flash('emsg', 'Profile picture not uploaded.');
      }
    }
    $field->service_id = $request['service'];
    $field->company_name = $request['company_name'];
    $field->company_slug = slugify($request['company_name']);
    $field->company_category = $request['company_category'];
    $field->description = $request['description'];
    $field->meta_title = $request['meta_title'];
    $field->meta_keyword = $request['meta_keyword'];
    $field->meta_description = $request['meta_description'];
    $field->page_content = $request['page_content'];
    $field->seo_rating = $request['seo_rating'];
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/portfolio');
  }
}
