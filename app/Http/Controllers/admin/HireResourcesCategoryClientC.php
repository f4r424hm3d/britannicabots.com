<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\HireResourcesCategory;
use App\Models\HireResourcesCategoryClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Validator;

class HireResourcesCategoryClientC extends Controller
{
  protected $page_route;
  public function __construct()
  {
    $this->page_route = 'hire-resources-category-clients';
  }
  public function index(Request $request, $category_id, $id = null)
  {
    $category = HireResourcesCategory::find($category_id);
    $page_no = $_GET['page'] ?? 1;
    $rows = HireResourcesCategoryClient::where('category_id', $category_id)->get();

    if ($id != null) {
      $sd = HireResourcesCategoryClient::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/' . $this->page_route . '/' . $category_id . '/update/' . $id . '/');
        $title = 'Update';
      } else {
        return redirect('admin/' . $this->page_route . '/' . $category_id);
      }
    } else {
      $ft = 'add';
      $url = url('admin/' . $this->page_route . '/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = "Hire Resources Content";
    $page_route = $this->page_route;
    $data = compact('rows', 'sd', 'ft', 'title', 'page_title', 'page_route', 'page_no', 'url', 'category_id', 'category');
    return view('admin.hire-resources-category-clients')->with($data);
  }
  public function store(Request $request)
  {
    $validator = Validator::make($request->all(), [
      'category_id' => 'required',
      'client_name' => 'required',
      'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
    ]);

    if ($validator->fails()) {
      return response()->json([
        'error' => $validator->errors(),
      ]);
    }

    $field = new HireResourcesCategoryClient();
    $field->category_id = $request['category_id'];
    $field->client_name = $request['client_name'];
    // Handle banner image upload
    if ($request->hasFile('logo')) {
      $fileOriginalName = $request->file('logo')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('logo')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('logo')->move('uploads/clients/', $file_name);
      if ($move) {
        $field->logo = 'uploads/clients/' . $file_name;
      }
    }
    $field->save();
    return response()->json(['success' => 'Records inserted succesfully.']);
  }
  public function update($category_id, $id, Request $request)
  {
    $request->validate(
      [
        'category_id' => 'required',
        'client_name' => 'required',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
      ]
    );
    $field = HireResourcesCategoryClient::find($id);
    $field->category_id = $request['category_id'];
    $field->client_name = $request['client_name'];
    // Handle banner image upload
    if ($request->hasFile('logo')) {
      $fileOriginalName = $request->file('logo')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $fileExtention = $request->file('logo')->getClientOriginalExtension();
      $file_name = $file_name_slug . '_' . time() . '.' . $fileExtention;
      $move = $request->file('logo')->move('uploads/clients/', $file_name);
      if ($move) {
        $field->logo = 'uploads/clients/' . $file_name;
      }
    }
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/' . $this->page_route . '/' . $category_id);
  }
  public function getData(Request $request)
  {
    // return $request;
    // die;
    $rows = HireResourcesCategoryClient::orderBy('created_at', 'desc')->where('category_id', $request->category_id)->paginate(10)->withPath('/admin/' . $this->page_route . '/' . $request->category_id);
    $i = 1;
    $output = '<table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Client Name</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>';
    foreach ($rows as $row) {
      $output .= '<tr id="row'
        . $row->id . '">
            <td>' . $i . '</td>
            <td>' . $row->client_name . '</td>
            <td><img src="' . asset($row->logo) . '" alt="' . $row->client_name . '" width="100"></td>
            <td>
             ' . Blade::render('<x-delete-button :id="$id" />', ['id' => $row->id]) . '
              ' . Blade::render('<x-edit-button :url="$url" />', ['url' => url('admin/' . $this->page_route . '/' . $request->category_id . '/update/' . $row->id)]) . '
            </td>
          </tr>';
      $i++;
    }
    $output .= '</tbody></table>';
    $output .= '<div>' . $rows->links('pagination::bootstrap-5') . '</div>';
    return $output;
  }
  public function delete($id)
  {
    if ($id) {
      $row = HireResourcesCategoryClient::findOrFail($id);
      if ($row->logo != null) {
        unlink($row->logo);
      }
      $row->delete();
      return response()->json(['success' => true]);
    } else {
      return response()->json(['success' => false]);
    }
  }
}
