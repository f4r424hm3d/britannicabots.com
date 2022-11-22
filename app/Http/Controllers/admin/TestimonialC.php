<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialC extends Controller
{
  public function index($id = null)
  {
    $rows = Testimonial::all();
    if ($id != null) {
      $sd = Testimonial::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/testimonial/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/testimonial');
      }
    } else {
      $ft = 'add';
      $url = url('admin/testimonial/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = 'Testimonial';
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title');
    return view('admin.testimonial')->with($data);
  }
  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'name' => 'required',
        'company' => 'required',
        'review' => 'required',
        'thumbnail' => 'nullable|max:50000|mimes:jpg,jpeg,png,gif',
      ]
    );
    $field = new Testimonial;
    if ($request->hasFile('thumbnail')) {
      $fileOriginalName = $request->file('thumbnail')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $file_name = $file_name_slug . '-' . time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
      $move = $request->file('thumbnail')->move('uploads/testimonial/', $file_name);
      if ($move) {
        $field->thumbnail_name = $file_name;
        $field->thumbnail_path = 'uploads/testimonial/' . $file_name;
      } else {
        session()->flash('emsg', 'Profile picture not uploaded.');
      }
    }
    $field->name = $request['name'];
    $field->company = $request['company'];
    $field->review = $request['review'];
    $field->save();
    session()->flash('smsg', 'New record has been added successfully.');
    return redirect('admin/testimonial');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = Testimonial::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'name' => 'required',
        'company' => 'required',
        'review' => 'required',
        'thumbnail' => 'nullable|max:50000|mimes:jpg,jpeg,png,gif',
      ]
    );
    $field = Testimonial::find($id);
    if ($request->hasFile('thumbnail')) {
      $fileOriginalName = $request->file('thumbnail')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $file_name = $file_name_slug . '-' . time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
      $move = $request->file('thumbnail')->move('uploads/testimonial/', $file_name);
      if ($move) {
        $field->thumbnail_name = $file_name;
        $field->thumbnail_path = 'uploads/testimonial/' . $file_name;
      } else {
        session()->flash('emsg', 'Profile picture not uploaded.');
      }
    }
    $field->name = $request['name'];
    $field->company = $request['company'];
    $field->review = $request['review'];
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/testimonial');
  }
}
