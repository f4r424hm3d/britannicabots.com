<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioImages;
use Illuminate\Http\Request;

class PortfolioImagesC extends Controller
{
  public function index($portfolio_id, $id = null)
  {
    $portfolio = Portfolio::find($portfolio_id);
    $rows = PortfolioImages::where(['portfolio_id' => $portfolio_id])->get();
    if ($id != null) {
      $sd = Portfolio::find($id);
      if (!is_null($sd)) {
        $ft = 'edit';
        $url = url('admin/portfolio-images/' . $portfolio_id . '/update/' . $id);
        $title = 'Update';
      } else {
        return redirect('admin/portfolio-images/' . $portfolio_id);
      }
    } else {
      $ft = 'add';
      $url = url('admin/portfolio-images/store');
      $title = 'Add New';
      $sd = '';
    }
    $page_title = 'Portfolio Images [ ' . $portfolio->company_name . ' ]';
    $data = compact('rows', 'sd', 'ft', 'url', 'title', 'page_title', 'portfolio', 'portfolio_id');
    return view('admin.portfolio-images')->with($data);
  }
  public function store(Request $request)
  {
    // printArray($request->all());
    // die;
    $request->validate(
      [
        'image' => 'required',
        'image.*' => 'mimes:jpg,png,jpeg,gif,svg'
      ]
    );
    if ($request->hasFile('image')) {
      foreach ($request->file('image') as $key => $file) {
        $field = new PortfolioImages;
        $field->portfolio_id = $request->portfolio_id;
        $fileOriginalName = $file->getClientOriginalName();
        $fileNameWithoutExtention = pathinfo($fileOriginalName, PATHINFO_FILENAME);
        $file_name_slug = slugify($fileNameWithoutExtention);
        $file_name = $file_name_slug . '-' . time() . '.' . $file->getClientOriginalExtension();
        $move = $file->move('uploads/portfolio/', $file_name);
        if ($move) {
          $field->image_name = $file_name;
          $field->image_path = 'uploads/portfolio/' . $file_name;
        } else {
          session()->flash('emsg', 'Images not uploaded.');
        }

        $field->save();
      }
    }

    session()->flash('smsg', 'Images uploaded successfully.');
    return redirect('admin/portfolio-images/' . $request['portfolio_id']);
  }
  public function delete($id)
  {
    //echo $id;
    echo $result = PortfolioImages::find($id)->delete();
  }
}
