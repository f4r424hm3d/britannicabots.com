<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryC extends Controller
{
  public function index($id = null)
  {
    $rows = BlogCategory::all();
    if ($id != null) {
      $sd = BlogCategory::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/blog-category/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/blog-category');
      }
    } else {
      $ft = 'add';
      $url = url('admin/blog-category/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = 'Blog Category';
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title');
    return view('admin.blog-category')->with($data);
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
    $field = new BlogCategory;
    $field->name = $request['name'];
    $field->slug = slugify($request['name']);
    $field->save();
    session()->flash('smsg', 'New record has been added successfully.');
    return redirect('admin/blog-category');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = BlogCategory::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'name' => 'required',
      ]
    );
    $field = BlogCategory::find($id);
    $field->name = $request['name'];
    $field->slug = slugify($request['name']);
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/blog-category');
  }
}
