<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\StaticPageSeo;
use Illuminate\Http\Request;

class StaticPageSeoC extends Controller
{
  public function index($id = null)
  {
    $rows = StaticPageSeo::all();
    if ($id != null) {
      $sd = StaticPageSeo::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/static-page-seo/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/static-page-seo');
      }
    } else {
      $ft = 'add';
      $url = url('admin/static-page-seo/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = 'StaticPageSeo';
    $page_path = 'static-page-seo';
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title','page_path');
    return view('admin.static-page-seo')->with($data);
  }
  public function store(Request $request)
  {
    printArray($request->all());
    die;
    $chk = StaticPageSeo::where(['page_name'=>$request['page_name']])->count();
    $request->validate(
      [
        'page_name' => 'required',
        'meta_title' => 'required',
        'meta_keyword' => 'required',
        'meta_description' => 'required',
        'page_content' => 'required',
        'og_image' => 'nullable|max:50000|mimes:jpg,jpeg,png,gif,svg',
      ]
    );
    $field = new StaticPageSeo;
    if ($request->hasFile('og_image')) {
      $fileOriginalName = $request->file('og_image')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $file_name = $file_name_slug . '-' . time() . '.' . $request->file('og_image')->getClientOriginalExtension();
      $move = $request->file('og_image')->move('uploads/seo/', $file_name);
      if ($move) {
        $field->og_image_name = $file_name;
        $field->og_image_path = 'uploads/seo/' . $file_name;
      } else {
        session()->flash('emsg', 'Profile picture not uploaded.');
      }
    }else{
      $field->og_image_name = $request['og_image2'];
      $field->og_image_path = $request['og_image2'];
    }
    $field->page_name = $request['page_name'];
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
    return redirect('admin/static-page-seo');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = StaticPageSeo::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    //$chk = StaticPageSeo::where(['page_name'=>$request['page_name'],'id !='=>$id])->count();
    $chk = StaticPageSeo::where('page_name',$request['page_name'])->where('id', '!=',$id)->count();
    $request->validate(
      [
        'page_name' => 'required',
        'meta_title' => 'required',
        'meta_keyword' => 'required',
        'meta_description' => 'required',
        'page_content' => 'required',
        'og_image' => 'nullable|max:50000|mimes:jpg,jpeg,png,gif,svg',
      ]
    );
    $field = StaticPageSeo::find($id);
    if ($request->hasFile('og_image')) {
      $fileOriginalName = $request->file('og_image')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $file_name = $file_name_slug . '-' . time() . '.' . $request->file('og_image')->getClientOriginalExtension();
      $move = $request->file('og_image')->move('uploads/seo/', $file_name);
      if ($move) {
        $field->og_image_name = $file_name;
        $field->og_image_path = 'uploads/seo/' . $file_name;
      } else {
        session()->flash('emsg', 'Profile picture not uploaded.');
      }
    }else{
      $field->og_image_name = $request['og_image2'];
      $field->og_image_path = $request['og_image2'];
    }
    $field->page_name = $request['page_name'];
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
    return redirect('admin/static-page-seo');
  }
}
