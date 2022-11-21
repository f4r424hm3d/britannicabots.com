<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogFc extends Controller
{
  public function index(Request $request)
  {
    $rows = Blog::with('getCategory')->where(['status' => 1])->orderBy('created_at', 'DESC')->paginate(6)->withQueryString();
    $page_title = 'Blogs';
    $data = compact('rows', 'page_title');
    return view('front.blog')->with($data);
  }
  public function blogByCat(Request $request)
  {
    $slug = $request->segment(2);
    $cat = BlogCategory::where(['slug' => $slug])->first();
    $rows = Blog::with('getCategory')->where(['status' => 1, 'category_id' => $cat->id])->orderBy('created_at', 'DESC')->paginate(6)->withQueryString();
    $page_title = "$cat->name Blogs";
    $data = compact('rows', 'page_title');
    return view('front.blog')->with($data);
  }
  public function blogDetails(Request $request)
  {
    $slug = $request->segment(2);
    $expData = explode('-', $slug);
    $blog_id = end($expData);

    $row = Blog::find($blog_id);

    $blogCat = Blog::with('getCategory')->where(['status' => 1])->select('category_id')->groupBy('category_id')->get();

    $rows = Blog::where(['status' => 1, 'category_id' => $row->category_id])->where('id', '!=', $row->id)->orderBy('created_at', 'DESC')->limit(3)->get();

    $data = compact('row', 'blogCat', 'rows');
    return view('front.blog-details')->with($data);
  }
}
