<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamC extends Controller
{
  public function index($id = null)
  {
    $rows = Team::all();
    if ($id != null) {
      $sd = Team::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/team/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/team');
      }
    } else {
      $ft = 'add';
      $url = url('admin/team/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = 'Team';
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title');
    return view('admin.team')->with($data);
  }
  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'name' => 'required',
        'designation' => 'required',
        'profile_picture' => 'nullable|max:50000|mimes:jpg,jpeg,png,gif',
      ]
    );
    $field = new Team;
    if ($request->hasFile('profile_picture')) {
      $fileOriginalName = $request->file('profile_picture')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $file_name = $file_name_slug . '-' . time() . '.' . $request->file('profile_picture')->getClientOriginalExtension();
      $move = $request->file('profile_picture')->move('uploads/profilePicture/', $file_name);
      if ($move) {
        $field->profile_picture_name = $file_name;
        $field->profile_picture_path = 'uploads/profilePicture/' . $file_name;
      } else {
        session()->flash('emsg', 'Profile picture not uploaded.');
      }
    }
    $field->name = $request['name'];
    $field->email = $request['email'];
    $field->mobile = $request['mobile'];
    $field->designation = $request['designation'];
    $field->quote = $request['quote'];
    $field->linked_in = $request['linked_in'];
    $field->save();
    session()->flash('smsg', 'New record has been added successfully.');
    return redirect('admin/team');
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = Team::find($id)->delete();
  }
  public function update($id, Request $request)
  {
    $request->validate(
      [
        'name' => 'required',
        'designation' => 'required',
        'profile_picture' => 'nullable|max:50000|mimes:jpg,jpeg,png,gif',
      ]
    );
    $field = Team::find($id);
    if ($request->hasFile('profile_picture')) {
      $fileOriginalName = $request->file('profile_picture')->getClientOriginalName();
      $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
      $file_name_slug = slugify($fileNameWithoutExtention);
      $file_name = $file_name_slug . '-' . time() . '.' . $request->file('profile_picture')->getClientOriginalExtension();
      $move = $request->file('profile_picture')->move('uploads/profilePicture/', $file_name);
      if ($move) {
        $field->profile_picture_name = $file_name;
        $field->profile_picture_path = 'uploads/profilePicture/' . $file_name;
      } else {
        session()->flash('emsg', 'Profile picture not uploaded.');
      }
    }
    $field->name = $request['name'];
    $field->email = $request['email'];
    $field->mobile = $request['mobile'];
    $field->designation = $request['designation'];
    $field->quote = $request['quote'];
    $field->linked_in = $request['linked_in'];
    $field->save();
    session()->flash('smsg', 'Record has been updated successfully.');
    return redirect('admin/team');
  }
}
