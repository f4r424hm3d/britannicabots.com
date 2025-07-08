<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\HireResourcesCategory;
use App\Models\StaticPageSeo;
use Illuminate\Http\Request;

class HireResourcesFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.hire-resources');
  }
  public function category(Request $request, $category_slug)
  {
    $cat = HireResourcesCategory::where(['category_slug' => $category_slug])->firstOrFail();
    $page_title = $cat->banner_title;

    $title = $cat->banner_title;
    $page_name = 'hire-resources-category';
    $seo = StaticPageSeo::where(['page_name' => $page_name])->first();
    $site = url('/');
    $tagArray = ['title' => $title, 'category' => $cat->banner_title, 'currentmonth' => date('M'), 'currentyear' => date('Y'), 'site' => $site];

    $meta_title = $cat->meta_title ?? $seo->meta_title;
    $meta_title = replaceTag($meta_title, $tagArray);

    $meta_keyword = $cat->meta_keyword ?? $seo->meta_keyword;
    $meta_keyword = replaceTag($meta_keyword, $tagArray);

    $meta_description = $cat->meta_description ?? $seo->meta_description;
    $meta_description = replaceTag($meta_description, $tagArray);

    $page_content = $cat->page_content ?? $seo->page_content;
    $page_content = replaceTag($page_content, $tagArray);

    $seo_rating = $cat->seo_rating ?? $seo->seo_rating;
    $og_image_path = $seo->og_image_path;
    $page_url = url()->current();

    $data = compact('cat', 'page_title', 'meta_title', 'meta_keyword', 'meta_description', 'page_content', 'seo_rating', 'og_image_path', 'page_url');
    return view('front.hire-resources-category', $data);
  }
  public function subCategory(Request $request, $category_slug, $sub_category_slug)
  {
    return view('front.hire-resources-sub-category');
  }
}
