<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HireResourcesCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Validator;

class HireResourcesCategoryC extends Controller
{
  protected $page_route;
  public function __construct()
  {
    $this->page_route = 'hire-resources-categories';
  }
  public function index($id = null)
  {
    $rows = HireResourcesCategory::orderBy('id', 'desc')->paginate(10);
    if ($id != null) {
      $sd = HireResourcesCategory::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/' . $this->page_route . '/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/' . $this->page_route);
      }
    } else {
      $ft = 'add';
      $url = url('admin/' . $this->page_route . '/store');
      $title = 'Add New';
      $sd = '';
    }

    $page_title = "Hire Resources Categories";
    $page_route = $this->page_route;
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title', 'page_route');
    return view('admin.hire-resources-categories')->with($data);
  }
  public function store(Request $request)
  {
    // Slugify the input before validation
    $request->merge([
      'category_slug' => slugify($request->category_slug)
    ]);
    $request->validate([
      'category_name' => 'required|unique:hire_resources_categories,category_name',
      'category_slug' => 'required|unique:hire_resources_categories,category_slug',
      'banner_title' => 'nullable|string',
      'banner_shortnote' => 'nullable|string',
      'hourly_price' => 'nullable|string',
      'year_of_experience' => 'nullable|string|max:50',
      'developers' => 'nullable|string|max:50',
      'clients' => 'nullable|string|max:50',
      'banner_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
      'title' => 'nullable|string',
      'description' => 'nullable|string',
      'section2_title' => 'nullable|string',
      'section2_description' => 'nullable|string',
      'section2_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $field = new HireResourcesCategory;
    $field->category_name = $request->category_name;
    $field->category_slug = slugify($request->category_slug);
    $field->banner_title = $request->banner_title;
    $field->banner_shortnote = $request->banner_shortnote;
    $field->hourly_price = $request->hourly_price;
    $field->year_of_experience = $request->year_of_experience;
    $field->developers = $request->developers;
    $field->clients = $request->clients;
    $field->title = $request->title;
    $field->description = $request->description;
    $field->section2_title = $request->section2_title;
    $field->section2_description = $request->section2_description;
    $field->status = $request->status ?? 1;
    $field->created_by = auth()->id();
    $field->left_note = $request->left_note;
    $field->right_note = $request->right_note;

    // Handle banner image upload
    if ($request->hasFile('banner_image')) {
      $fileOriginalName = $request->file('banner_image')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('banner_image')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('banner_image')->move('uploads/resources/', $file_name);
      if ($move) {
        $field->banner_image = 'uploads/resources/' . $file_name;
      }
    }


    // Handle section2 image upload
    if ($request->hasFile('section2_image')) {
      $fileOriginalName = $request->file('section2_image')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('section2_image')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('section2_image')->move('uploads/resources/', $file_name);
      if ($move) {
        $field->section2_image = 'uploads/resources/' . $file_name;
      }
    }

    $field->meta_title = $request->meta_title;
    $field->meta_description = $request->meta_description;
    $field->meta_keyword = $request->meta_keyword;
    $field->seo_rating = $request->seo_rating;
    $field->review_number = $request->review_number;
    $field->best_rating = $request->best_rating;
    if ($request->hasFile('og_image')) {
      $fileOriginalName = $request->file('og_image')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('og_image')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('og_image')->move('uploads/og/', $file_name);
      if ($move) {
        $field->og_image_path = 'uploads/og/' . $file_name;
      }
    }

    $field->save();
    session()->flash('smsg', 'Record has been inserted successfully.');
    return redirect('admin/' . $this->page_route);
  }

  public function update($id, Request $request)
  {
    // Slugify the input before validation
    $request->merge([
      'category_slug' => slugify($request->category_slug)
    ]);
    $request->validate([
      'category_name' => 'required|unique:hire_resources_categories,category_name,' . $id,
      'category_slug' => 'required|unique:hire_resources_categories,category_slug,' . $id,
      'banner_title' => 'nullable|string',
      'banner_shortnote' => 'nullable|string',
      'hourly_price' => 'nullable|string',
      'year_of_experience' => 'nullable|string|max:50',
      'developers' => 'nullable|string|max:50',
      'clients' => 'nullable|string|max:50',
      'banner_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
      'title' => 'nullable|string',
      'description' => 'nullable|string',
      'section2_title' => 'nullable|string',
      'section2_description' => 'nullable|string',
      'section2_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $field = HireResourcesCategory::find($id);
    $field->category_name = $request->category_name;
    $field->category_slug = slugify($request->category_slug);
    $field->banner_title = $request->banner_title;
    $field->banner_shortnote = $request->banner_shortnote;
    $field->hourly_price = $request->hourly_price;
    $field->year_of_experience = $request->year_of_experience;
    $field->developers = $request->developers;
    $field->clients = $request->clients;
    $field->title = $request->title;
    $field->description = $request->description;
    $field->section2_title = $request->section2_title;
    $field->section2_description = $request->section2_description;
    $field->status = $request->status ?? 1;
    $field->created_by = auth()->id();
    $field->left_note = $request->left_note;
    $field->right_note = $request->right_note;

    // Handle banner image upload
    if ($request->hasFile('banner_image')) {
      $fileOriginalName = $request->file('banner_image')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('banner_image')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('banner_image')->move('uploads/resources/', $file_name);
      if ($move) {
        $field->banner_image = 'uploads/resources/' . $file_name;
      }
    }


    // Handle section2 image upload
    if ($request->hasFile('section2_image')) {
      $fileOriginalName = $request->file('section2_image')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('section2_image')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('section2_image')->move('uploads/resources/', $file_name);
      if ($move) {
        $field->section2_image = 'uploads/resources/' . $file_name;
      }
    }

    $field->meta_title = $request->meta_title;
    $field->meta_description = $request->meta_description;
    $field->meta_keyword = $request->meta_keyword;
    $field->seo_rating = $request->seo_rating;
    $field->review_number = $request->review_number;
    $field->best_rating = $request->best_rating;
    if ($request->hasFile('og_image')) {
      $fileOriginalName = $request->file('og_image')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('og_image')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('og_image')->move('uploads/og/', $file_name);
      if ($move) {
        $field->og_image_path = 'uploads/og/' . $file_name;
      }
    }

    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/' . $this->page_route);
  }
  public function delete($id)
  {
    if ($id) {
      $row = HireResourcesCategory::findOrFail($id);
      if ($row->banner_image != null && file_exists($row->banner_image)) {
        unlink($row->banner_image);
      }
      if ($row->section2_image != null && file_exists($row->section2_image)) {
        unlink($row->section2_image);
      }
      if ($row->og_image_path != null && file_exists($row->og_image_path)) {
        unlink($row->og_image_path);
      }
      $result = $row->delete();
      return response()->json(['success' => true]);
    }
  }
}
