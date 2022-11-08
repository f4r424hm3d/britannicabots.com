<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--title-->
  <title>Britannica Bots</title>

  <!--favicon icon-->
  <link rel="icon" href="{{ url('front/') }}/img/favicon.png" type="image/png" sizes="16x16">

  <!--google fonts-->
  <link
    href="{{ url('front/') }}/https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap"
    rel="stylesheet">

  <!--Bootstrap css-->
  <link rel="stylesheet" href="{{ url('front/') }}/css/bootstrap.min.css">
  <!--Magnific popup css-->
  <link rel="stylesheet" href="{{ url('front/') }}/css/magnific-popup.css">
  <!--Themify icon css-->
  <link rel="stylesheet" href="{{ url('front/') }}/css/themify-icons.css">
  <!--Fontawesome icon css-->
  <link rel="stylesheet" href="{{ url('front/') }}/css/all.min.css">
  <!--animated css-->
  <link rel="stylesheet" href="{{ url('front/') }}/css/animate.min.css">
  <!--ytplayer css-->
  <link rel="stylesheet" href="{{ url('front/') }}/css/jquery.mb.YTPlayer.min.css">
  <!--Owl carousel css-->
  <link rel="stylesheet" href="{{ url('front/') }}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ url('front/') }}/css/owl.theme.default.min.css">
  <!--custom css-->
  <link rel="stylesheet" href="{{ url('front/') }}/css/style.css">
  <!--responsive css-->
  <link rel="stylesheet" href="{{ url('front/') }}/css/responsive.css">
</head>

<body>

  <!--loader start-->
  <div id="preloader">
    <div class="loader1">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!--loader end-->

  <!--header section start-->
  <header class="header">
    <nav class="navbar navbar-expand-lg fixed-top white-bg shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('front/') }}/img/logo-color.png" alt="logo"
            class="img-fluid" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto menu">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="javascript:void()" class="dropdown-toggle">About Bots</a>
              <ul class="sub-menu">
                <li><a href="{{ url('/about') }}">Who we are</a></li>
                <li><a href="{{ url('/team') }}">Our Team</a></li>
              </ul>
            </li>
            <li class="mega-dropdown"><a href="{{ url('/services') }}" class="dropdown-toggle">Services</a>
              <ul class="sub-menu mega-dropdown-menu">
                <div class="container">
                  <div class="row">
                    <li class="col-md-1 col-xs-2 hidden-xs"><span
                        class="ti-desktop icon-xl color-secondary d-block"></span></li>
                    <li class="col-md-3 col-sm-10">
                      <h3>Website Designing</h3>
                      <div class="mega-link">
                        <a href="{{ url('/') }}/static-website-designing"><span
                            class="ti-arrow-right color-secondary"></span>
                          Static Website Designing</a>
                        <a href="{{ url('/') }}/dynamik-website-designing"><span
                            class="ti-arrow-right color-secondary"></span>
                          Dynamic Website Designing</a>
                        <a href="{{ url('/') }}/landing-page-website-designing"><span
                            class="ti-arrow-right color-secondary"></span> Landing Page Website Designing</a>
                        <a href="{{ url('/') }}/website-re-designing"><span
                            class="ti-arrow-right color-secondary"></span> Website
                          Re-Designing</a>
                        <a href="{{ url('/') }}/website-maintenance"><span
                            class="ti-arrow-right color-secondary"></span> Website
                          Maintenance</a>
                      </div>
                    </li>
                    <li class="col-md-1 col-xs-2 hidden-xs"><span class="ti-cup icon-xl color-secondary d-block"></span>
                    </li>
                    <li class="col-md-3 col-sm-10">
                      <h3>Website Development</h3>
                      <div class="mega-link">
                        <a href="{{ url('/') }}/cms-web-development"><span
                            class="ti-arrow-right color-secondary"></span> CMS Web
                          Development</a>
                        <a href="{{ url('/') }}/web-development"><span class="ti-arrow-right color-secondary"></span>
                          Web
                          Development</a>
                        <a href="{{ url('/') }}/ecommerce-web-development"><span
                            class="ti-arrow-right color-secondary"></span>
                          Ecommerce Web Development</a>
                        <a href="{{ url('/') }}/shopiefy-website-development"><span
                            class="ti-arrow-right color-secondary"></span>
                          Shopify Website Development</a>
                      </div>
                    </li>
                    <li class="col-md-1 col-xs-2 hidden-xs"><span
                        class="ti-brush icon-xl color-secondary d-block"></span></li>
                    <li class="col-md-3 col-sm-10">
                      <h3>Graphic Designing</h3>
                      <div class="mega-link">
                        <a href="{{ url('/') }}/logo-design"><span class="ti-arrow-right color-secondary"></span>
                          Logo Design</a>
                        <a href="{{ url('/') }}/brochure-design"><span class="ti-arrow-right color-secondary"></span>
                          Brochure
                          Design</a>
                        <a href="{{ url('/') }}/social-creative"><span class="ti-arrow-right color-secondary"></span>
                          Social
                          Creative</a>
                      </div>
                    </li>
                    <li class="col-md-12 hidden-xs" style="height:30px"></li>
                    <li class="col-md-1 col-xs-2 hidden-xs"><span
                        class="ti-mobile icon-xl color-secondary d-block"></span></li>
                    <li class="col-md-3 col-sm-10">
                      <h3>App Development</h3>
                      <div class="mega-link">
                        <a href="{{ url('/') }}/android-app-development"><span
                            class="ti-arrow-right color-secondary"></span>
                          Android App development</a>
                        <a href="{{ url('/') }}/ios-app-development"><span
                            class="ti-arrow-right color-secondary"></span> IOS App
                          development</a>
                      </div>
                    </li>
                    <li class="col-md-1 col-xs-2 hidden-xs"><span
                        class="ti-announcement icon-xl color-secondary d-block"></span></li>
                    <li class="col-md-3 col-sm-10">
                      <h3>Digital Marketing</h3>
                      <div class="mega-link">
                        <a href="{{ url('/') }}/search-engine-optimization"><span
                            class="ti-arrow-right color-secondary"></span>
                          Search Engine Optimization</a>
                        <a href="{{ url('/') }}/social-media-optimization"><span
                            class="ti-arrow-right color-secondary"></span>
                          Social Media Optimization</a>
                      </div>
                    </li>

                    <li class="col-md-1 col-xs-2 hidden-xs"><span
                        class="ti-settings icon-xl color-secondary d-block"></span></li>
                    <li class="col-md-3 col-sm-10">
                      <h3>Other Services</h3>
                      <div class="mega-link">
                        <a href="{{ url('/') }}/payment-gateway-integration"><span
                            class="ti-arrow-right color-secondary"></span>
                          Payment Gateway Integration</a>
                        <a href="{{ url('/') }}/api-development"><span class="ti-arrow-right color-secondary"></span>
                          API
                          Development</a>
                      </div>
                    </li>
                  </div>
                </div>
              </ul>
            </li>
            <li><a href="{{ url('/portfolio') }}/">Our Work</a></li>
            <li><a href="{{ url('/career') }}/">Career</a></li>
            <li><a href="{{ url('/blog') }}/">Blog</a></li>
            <li><a href="{{ url('/contact') }}/">Contact</a></li>
            <li><a href="{{ url('/get-quote') }}" class="btn secondary-solid-btn check-btn"><span
                  class="ti-pencil-alt mr-1"></span> Get Quote</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--header section end-->
