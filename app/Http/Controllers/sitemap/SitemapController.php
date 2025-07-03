<?php

namespace App\Http\Controllers\sitemap;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\CourseCategory;
use App\Models\CourseSpecialization;
use App\Models\Destination;
use App\Models\Exam;
use App\Models\ExamTab;
use App\Models\JobPage;
use App\Models\Service;
use App\Models\SitePage;
use App\Models\University;
use App\Models\UniversityProgram;
use App\Models\UniversityScholarship;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
  public function sitemap(Request $request)
  {
    $utf = '<?xml version="1.0" encoding="UTF-8"?>';
    $data = compact('utf');
    return response()->view('sm.sitemap', $data)->header('Content-Type', 'application/xml; charset=utf-8');
  }
  public function home(Request $request)
  {
    $utf = '<?xml version="1.0" encoding="UTF-8"?>';
    $data = compact('utf');
    return response()->view('sm.home', $data)->header('Content-Type', 'text/xml');
  }
}
