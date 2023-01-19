<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\StaticPageSeo;
use Illuminate\Http\Request;

class BlogFc extends Controller
{
  public function index(Request $request)
  {
    $rows = Blog::with('getCategory')->where(['status' => 1])->orderBy('created_at', 'DESC')->paginate(6)->withQueryString();
    $page_title = 'Blogs';

    $title = 'Blogs';
    $page_name = 'blogs';
    $seo = StaticPageSeo::where(['page_name' => $page_name])->first();
    $site = url('/');
    $tagArray = ['title' => $title,'currentmonth' => date('M'), 'currentyear' => date('Y'), 'site' => $site];

    $meta_title = $seo->meta_title??'';
    $meta_title = replaceTag($meta_title, $tagArray);

    $meta_keyword = $seo->meta_keyword??'';
    $meta_keyword = replaceTag($meta_keyword, $tagArray);

    $meta_description = $seo->meta_description??'';
    $meta_description = replaceTag($meta_description, $tagArray);

    $page_content = $seo->page_content??'';
    $page_content = replaceTag($page_content, $tagArray);

    $seo_rating = $seo->seo_rating??'';
    $og_image_path = $seo->og_image_path??'';
    $page_url = url()->current();

    $data = compact('rows', 'page_title','meta_title','meta_keyword','meta_description','page_content','seo_rating','og_image_path','page_url');
    return view('front.blog')->with($data);
  }
  public function blogByCat(Request $request)
  {
    $slug = $request->segment(2);
    $cat = BlogCategory::where(['slug' => $slug])->first();
    $rows = Blog::with('getCategory')->where(['status' => 1, 'category_id' => $cat->id])->orderBy('created_at', 'DESC')->paginate(6)->withQueryString();
    $page_title = "$cat->name Blogs";

    $title = $cat->name;
    $page_name = 'blog-category';
    $seo = StaticPageSeo::where(['page_name' => $page_name])->first();
    $site = url('/');
    $tagArray = ['title' => $title,'category' => $cat->name,'currentmonth' => date('M'), 'currentyear' => date('Y'), 'site' => $site];

    $meta_title = $cat->meta_title??$seo->meta_title;
    $meta_title = replaceTag($meta_title, $tagArray);

    $meta_keyword = $cat->meta_keyword??$seo->meta_keyword;
    $meta_keyword = replaceTag($meta_keyword, $tagArray);

    $meta_description = $cat->meta_description??$seo->meta_description;
    $meta_description = replaceTag($meta_description, $tagArray);

    $page_content = $cat->page_content??$seo->page_content;
    $page_content = replaceTag($page_content, $tagArray);

    $seo_rating = $cat->seo_rating??$seo->seo_rating;
    $og_image_path = $seo->og_image_path;
    $page_url = url()->current();

    $data = compact('rows', 'page_title','meta_title','meta_keyword','meta_description','page_content','seo_rating','og_image_path','page_url');
    return view('front.blog')->with($data);
  }
  public function blogDetails(Request $request)
  {
    $slug = $request->segment(2);
    //$expData = explode('-', $slug);
    //$blog_id = end($expData);
    //$row = Blog::find($blog_id);
    $row = Blog::where(['title_slug'=>$slug])->first();
    $blogCat = Blog::with('getCategory')->where(['status' => 1])->select('category_id')->groupBy('category_id')->get();
    $rows = Blog::where(['status' => 1, 'category_id' => $row->category_id])->where('id', '!=', $row->id)->orderBy('created_at', 'DESC')->limit(3)->get();

    $title = $row->title;
    $page_name = 'blog-details';
    $seo = StaticPageSeo::where(['page_name' => $page_name])->first();
    $site = url('/');
    $tagArray = ['title' => $title,'category' => $row->getCategory->name,'currentmonth' => date('M'), 'currentyear' => date('Y'), 'site' => $site];

    $meta_title = $row->meta_title??$seo->meta_title;
    $meta_title = replaceTag($meta_title, $tagArray);

    $meta_keyword = $row->meta_keyword??$seo->meta_keyword;
    $meta_keyword = replaceTag($meta_keyword, $tagArray);

    $meta_description = $row->meta_description??$seo->meta_description;
    $meta_description = replaceTag($meta_description, $tagArray);

    $page_content = $row->page_content??$seo->page_content;
    $page_content = replaceTag($page_content, $tagArray);

    $seo_rating = $row->seo_rating??$seo->seo_rating;
    $og_image_path = $row->thumbnail_path??$seo->og_image_path;
    $page_url = url()->current();

    $data = compact('row', 'blogCat', 'rows','meta_title','meta_keyword','meta_description','page_content','seo_rating','og_image_path','page_url');
    return view('front.blog-details')->with($data);
  }
}
