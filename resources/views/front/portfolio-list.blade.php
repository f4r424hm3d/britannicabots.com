@extends('front.layouts.main')
@push('title')
<title>{{ $page_title }}</title>
@endpush
@section('main-section')
<!--body content wrap start-->
<div class="main pt-80">

  <!--banner section start-->
  <section class="ptb-70 gradient-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-12">
          <div class="hero-slider-content text-white">
            <h1 class="text-white mb-2">{{ $page_title }}</h1>
            <p class="lead">We strive to deliver the best work for every single project. Here's a few of them we'd like
              you to see.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--banner section end-->

  <!--btn 1 section start-->
  <section class="bg-light pt-4 pb-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-6">
          <a href="{{ url('website-designing-portfolio') }}" class="btn btn secondary-solid-btn pt-4 pb-3 w-100">
            <span class="ti-desktop icon-sm d-block mb-2"></span>WEBSITE<br>DESIGNING
          </a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6"><a href="{{ url('website-development-portfolio') }}"
            class="btn btn secondary-solid-btn pt-4 pb-3 w-100"><span class="ti-cup icon-sm d-block mb-2"></span>
            WEBSITE<br>DEVELOPMENT</a></div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6"><a href="{{ url('app-development-portfolio') }}"
            class="btn btn secondary-solid-btn pt-4 pb-3 w-100"><span class="ti-mobile icon-sm d-block mb-2"></span>
            APP<br>DEVELOPMENT</a></div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6">
          <a href="{{ url('digital-marketing-portfolio') }}" class="btn btn secondary-solid-btn pt-4 pb-3 w-100"><span
              class="ti-announcement icon-sm d-block mb-2"></span> DIGITAL<br>MARKETING</a>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6"><a href="{{ url('graphic-designing-portfolio') }}"
            class="btn btn secondary-solid-btn pt-4 pb-3 w-100"><span class="ti-brush icon-sm d-block mb-2"></span>
            GRAPHIC<br>DESIGN</a></div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6"><a href="{{ url('other-services-portfolio') }}"
            class="btn btn secondary-solid-btn pt-4 pb-3 w-100"><span class="ti-settings icon-sm d-block mb-2"></span>
            OTHER<br>SERVICES</a></div>
      </div>
    </div>
  </section>
  <!--btn 1 section end-->

  <!--contact us section start-->
  <section class="our-portfolio-section ptb-70">
    <div class="container">

      <div class="row">

        @foreach ($rows as $row)
        <div class="col-md-4">
          <div class="portfolio-wrapper mb-4 shadow-lg">
            <a href="{{ url('portfolio/'.$row->company_slug) }}">
              <div class="content-overlay"></div>
              <img class="img-fluid" src="{{ asset($row->thumbnail_path) }}" alt="{{ $row->company_name }}" />
              <div class="content-details fadeIn-bottom text-white">
                <span class=" ti-plus icon-xl"></span>
              </div>
            </a>
            <div class="text-center p-4 gradient-bg text-white">
              <h5 class="mb-0 text-white">{{ $row->company_name }}</h5>
              <p>{{ $row->company_category }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>
  <!--contact us section end-->

</div>
<!--body content wrap end-->
@endsection
