<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\PortfolioImages;
use App\Models\Services;
use Illuminate\Http\Request;

class PortfolioFc extends Controller
{
  public function index(Request $request)
  {
    return view('front.portfolio');
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
    $data = compact('page_title', 'rows', 'pd', 'op');
    return view('front.portfolio-details')->with($data);
  }
}
