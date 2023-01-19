<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioImages;
use App\Models\Services;
use App\Models\StaticPageSeo;
use Illuminate\Http\Request;

class PortfolioFc extends Controller
{
  public function index(Request $request)
  {
    $page_title = "Portfolios";
    $data = compact('page_title');
    return view('front.portfolio')->with($data);
  }
  public function PortfolioList(Request $request)
  {
    $service_slug = $request->segment(1);
    $slug = str_replace('-portfolio', '', $service_slug);
    $service = Services::where(['slug' => $slug])->firstOrFail();
    $where = ['service_id' => $service->id, 'status' => 1];
    $rows = Portfolio::where($where)->get();
    $page_title = ucwords(str_replace('-', ' ', $service_slug));
    $data = compact('page_title', 'rows');
    return view('front.portfolio-list')->with($data);
  }
  public function PortfolioDetail(Request $request)
  {
    $company_slug = $request->segment(2);
    $pd = Portfolio::where(['company_slug' => $company_slug])->firstOrFail();
    $op = Portfolio::where(['service_id' => $pd->service_id])->where('id', '!=', $pd->id)->get();
    $rows = PortfolioImages::where(['portfolio_id' => $pd->id])->get();
    $page_title = $pd->company_name . ' Portfolio';

    $title = $pd->company_name;
    $page_name = 'portfolio-details';
    $seo = StaticPageSeo::where(['page_name' => $page_name])->first();
    $site = url('/');
    $tagArray = ['title' => $title,'currentmonth' => date('M'), 'currentyear' => date('Y'), 'site' => $site];

    $meta_title = $pd->meta_title??$seo->meta_title;
    $meta_title = replaceTag($meta_title, $tagArray);

    $meta_keyword = $pd->meta_keyword??$seo->meta_keyword;
    $meta_keyword = replaceTag($meta_keyword, $tagArray);

    $meta_description = $pd->meta_description??$seo->meta_description;
    $meta_description = replaceTag($meta_description, $tagArray);

    $page_content = $pd->page_content??$seo->page_content;
    $page_content = replaceTag($page_content, $tagArray);

    $seo_rating = $pd->seo_rating??$seo->seo_rating;
    $og_image_path = $pd->thumbnail_path??$seo->og_image_path;
    $page_url = url()->current();

    $data = compact('page_title', 'rows', 'pd', 'op','meta_title','meta_keyword','meta_description','page_content','seo_rating','og_image_path','page_url');
    return view('front.portfolio-details')->with($data);
  }
}
