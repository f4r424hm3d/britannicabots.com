<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogsC extends Controller
{
  public function index($id = null)
  {
    $blogCategory = BlogCategory::all();
    $rows = Blog::all();
    if ($id != null) {
      $sd = Blog::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/blogs/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/blogs');
      }
    } else {
      $ft = 'add';
      $url = url('admin/blogs/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = 'Blogs';
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title', 'blogCategory');
    return view('admin.blogs')->with($data);
  }
  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $chk = Blog::where(['title'=>$request['title']])->count();
    $request->validate(
      [
        'category_id' => 'required|numeric',
        'title' => 'required',
        'description' => 'required',
        'thumbnail' => 'nullable|max:50000|mimes:jpg,jpeg,png,gif',
      ]
    );
    $field = new Blog;
    if ($request->hasFile('thumbnail')) {
      $fileOriginalName = $request->file('thumbnail')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $file_name = $file_name_slug . '-' . time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
      $move = $request->file('thumbnail')->move('uploads/blog/', $file_name);
      if ($move) {
        $field->thumbnail_name = $file_name;
        $field->thumbnail_path = 'uploads/blog/' . $file_name;
      } else {
        session()->flash('emsg', 'Profile picture not uploaded.');
      }
    }
    $field->category_id = $request['category_id'];
    $field->title = $request['title'];
    $field->title_slug = slugify($request['title']);
    $field->shortnote = $request['shortnote'];
    $field->description = $request['description'];
    $field->meta_title = $request['meta_title'];
    $field->meta_keyword = $request['meta_keyword'];
    $field->meta_description = $request['meta_description'];
    $field->page_content = $request['page_content'];
    $field->seo_rating = $request['seo_rating'];
    if($chk==0){
      $field->save();
      session()->flash('smsg', 'New record has been added successfully.');
    }else{
      session()->flash('emsg', 'Record already exist.');
    }
    return redirect('admin/blogs');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = Blog::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    $chk = Blog::where('title',$request['title'])->where('id', '!=',$id)->count();
    $request->validate(
      [
        'category_id' => 'required|numeric',
        'title' => 'required',
        'description' => 'required',
        'thumbnail' => 'nullable|max:50000|mimes:jpg,jpeg,png,gif',
      ]
    );
    $field = Blog::find($id);
    if ($request->hasFile('thumbnail')) {
      $fileOriginalName = $request->file('thumbnail')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $file_name = $file_name_slug . '-' . time() . '.' . $request->file('thumbnail')->getClientOriginalExtension();
      $move = $request->file('thumbnail')->move('uploads/blog/', $file_name);
      if ($move) {
        $field->thumbnail_name = $file_name;
        $field->thumbnail_path = 'uploads/blog/' . $file_name;
      } else {
        session()->flash('emsg', 'Profile picture not uploaded.');
      }
    }
    $field->category_id = $request['category_id'];
    $field->title = $request['title'];
    $field->title_slug = slugify($request['title']);
    $field->shortnote = $request['shortnote'];
    $field->description = $request['description'];
    $field->meta_title = $request['meta_title'];
    $field->meta_keyword = $request['meta_keyword'];
    $field->meta_description = $request['meta_description'];
    $field->page_content = $request['page_content'];
    $field->seo_rating = $request['seo_rating'];
    if($chk==0){
      $field->save();
      session()->flash('smsg', 'Record has been updated successfully.');
    }else{
      session()->flash('emsg', 'Record already exist.');
    }
    return redirect('admin/blogs');
  }
}
