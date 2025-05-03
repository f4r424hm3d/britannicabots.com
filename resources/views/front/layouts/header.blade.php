<!doctype html>
<html lang="en">

<head>

  <!--Meta Tag Seo-->
  @stack('seo_meta_tag')

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
  <style>
    .hide-this {
      display: none;
    }
  </style>

  <!--Schemas Start-->
  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-N43TGPP4');
  </script>
  <!-- End Google Tag Manager -->
  <!--Schemas End-->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N43TGPP4" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
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
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ url('front/') }}/img/bots-transparent.png"
            alt="logo" class="brand-image" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="ti-menu"></span>
        </button>
        <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto menu main-navbar">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="javascript:void()" class="dropdown-toggle">About Bots</a>
              <ul class="sub-menu">
                <li><a href="{{ url('/about/') }}/">Who we are</a></li>
                <li><a href="{{ url('/team/') }}/">Our Team</a></li>
              </ul>
            </li>
            <li class="mega-dropdown"><a href="{{ url('/services/') }}/" class="dropdown-toggle">Services</a>
              <ul class="sub-menu mega-dropdown-menu">
                <div class="container">
                  <div class="row">
                    <!-- <li class="col-md-1 col-xs-2 hidden-xs"><span
                        class="ti-desktop icon-xl color-secondary d-block"></span></li> -->
                    <li class="col-md-3 col-sm-10 mb-4 ">
                      <h3 class="designings-headings" >Website Designing</h3>
                      <div class="mega-link update-llinks">
                        <a href="{{ url('/') }}/static-website-designing/"><i class="fa fa-circle" aria-hidden="true"></i>

                          Static Website Designing</a>
                        <a href="{{ url('/') }}/dynamic-website-designing/"><i class="fa fa-circle" aria-hidden="true"></i>

                          Dynamic Website Designing</a>
                        <a href="{{ url('/') }}/landing-page-website-designing/"><i class="fa fa-circle" aria-hidden="true"></i>
 Landing Page Website Designing</a>
                        <a href="{{ url('/') }}/website-re-designing/"><i class="fa fa-circle" aria-hidden="true"></i>
 Website
                          Re-Designing</a>
                        <a href="{{ url('/') }}/website-maintenance/"><i class="fa fa-circle" aria-hidden="true"></i>
 Website
                          Maintenance</a>
                      </div>
                    </li>
                    <!-- <li class="col-md-1 col-xs-2 hidden-xs"><span class="ti-cup icon-xl color-secondary d-block"></span>
                    </li> -->
                    <li class="col-md-3 col-sm-10 mb-4 ">
                      <h3 class="designings-headings" >Website Development</h3>
                      <div class="mega-link update-llinks">
                        <a href="{{ url('/') }}/cms-web-development/"><i class="fa fa-circle" aria-hidden="true"></i>
                        CMS Web
                          Development</a>
                        <a href="{{ url('/') }}/web-development/"><i class="fa fa-circle" aria-hidden="true"></i>

                          Web
                          Development</a>
                        <a href="{{ url('/') }}/ecommerce-web-development/"><i class="fa fa-circle" aria-hidden="true"></i>

                          Ecommerce Web Development</a>
                        <a href="{{ url('/') }}/shopify-website-development/"><i class="fa fa-circle" aria-hidden="true"></i>

                          Shopify Website Development</a>
                      </div>
                    </li>
                    <!-- <li class="col-md-1 col-xs-2 hidden-xs"><span
                        class="ti-brush icon-xl color-secondary d-block"></span></li> -->
                    <li class="col-md-3 col-sm-10 mb-4 ">
                      <h3 class="designings-headings" >Graphic Designing</h3>
                      <div class="mega-link update-llinks">
                        <a href="{{ url('/') }}/logo-design/"><i class="fa fa-circle" aria-hidden="true"></i>
                          Logo Design</a>
                        <a href="{{ url('/') }}/brochure-design/"><i class="fa fa-circle" aria-hidden="true"></i>

                          Brochure
                          Design</a>
                        <a href="{{ url('/') }}/social-creative/"><i class="fa fa-circle" aria-hidden="true"></i>

                          Social
                          Creative</a>
                      </div>
                    </li>
                    <!-- <li class="col-md-12 hidden-xs" style="height:30px"></li>
                    <li class="col-md-1 col-xs-2 hidden-xs"><span
                        class="ti-mobile icon-xl color-secondary d-block"></span></li> -->
                    <li class="col-md-3 col-sm-10 mb-4 ">
                      <h3 class="designings-headings" >App Development</h3>
                      <div class="mega-link update-llinks">
                        <a href="{{ url('/') }}/android-app-development/"><i class="fa fa-circle" aria-hidden="true"></i>

                          Android App development</a>
                        <a href="{{ url('/') }}/ios-app-development/"><i class="fa fa-circle" aria-hidden="true"></i>
 IOS App
                          development</a>
                      </div>
                    </li>
                    <!-- <li class="col-md-1 col-xs-2 hidden-xs"><span
                        class="ti-announcement icon-xl color-secondary d-block"></span></li> -->
                    <li class="col-md-3 col-sm-10 mb-4 ">
                      <h3 class="designings-headings" >Digital Marketing</h3>
                      <div class="mega-link update-llinks">
                        <a href="{{ url('/') }}/search-engine-optimization/"><i class="fa fa-circle" aria-hidden="true"></i>

                          Search Engine Optimization</a>
                        <a href="{{ url('/') }}/social-media-optimization/"><i class="fa fa-circle" aria-hidden="true"></i>

                          Social Media Optimization</a>
                      </div>
                    </li>

                    <!-- <li class="col-md-1 col-xs-2 hidden-xs"><span
                        class="ti-settings icon-xl color-secondary d-block"></span></li> -->
                    <li class="col-md-3 col-sm-10 mb-4 ">
                      <h3 class="designings-headings" >Other Services</h3>
                      <div class="mega-link update-llinks">
                        <a href="{{ url('/') }}/payment-gateway-integration/"><i class="fa fa-circle" aria-hidden="true"></i>

                          Payment Gateway Integration</a>
                        <a href="{{ url('/') }}/api-development/"><i class="fa fa-circle" aria-hidden="true"></i>

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
            <li><a href="{{ url('/blogs') }}/">Blog</a></li>
            <li><a href="{{ url('/contact') }}/">Contact</a></li>
            <li><a href="{{ url('/get-quote') }}/" class="btn secondary-solid-btn check-btn"><span
                  class="ti-pencil-alt mr-1"></span> Get Quote</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--header section end-->
