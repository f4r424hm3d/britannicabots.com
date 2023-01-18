@php
  use App\Models\StaticPageSeo;
  $page_name = Request::segment(1)??'home';
  $seo = StaticPageSeo::where(['page_name' => $page_name])->first();
  $meta_title = $seo->meta_title??'';
  $meta_keyword = $seo->meta_keyword??'';
  $meta_description = $seo->meta_description??'';
  $page_content = $seo->page_content??'';
  $seo_rating = $seo->seo_rating??'';
  $og_image_path = $seo->og_image_path??'';
  $page_url = url()->current();
@endphp

  <title>{{ $meta_title }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta name="description" content="{{ $meta_description }}">
  <meta name="keywords" content="{{ $meta_keyword }}">
  <link rel="canonical" href="{{ $page_url }}" />
  <meta name="copyright" content="Britannica Bots" />
  <meta name="author" content="Britannica Bots" />
  <meta name="email" content="info@britannicabots.com" />
  <meta name="Distribution" content="Global" />
  <meta name="page-topic" content="{{ $page_content }}" />
  <meta name="language" content="EN" />
  <meta name="robots" content="index, follow" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="{{ $meta_description }}" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="{{ $meta_title }}" />
  <meta property="og:url" content="{{ $page_url }}" />
  <meta property="og:image" content="{{ asset($og_image_path) }}" />
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
