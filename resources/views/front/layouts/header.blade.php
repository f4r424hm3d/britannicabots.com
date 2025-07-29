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
          <ul class="navbar-nav ml-auto main-navbar new-added">

            <li class="nav-item dropdown main-shows  ">
              <a class="nav-link libox dropdown-toggle" id="one" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                About Bots
              </a>
              <ul class="dropdown-menu" aria-labelledby="one">
                <li><a class="px-2" href="{{ url('/about/') }}/">Who we are</a></li>
                <li><a class="px-2" href="{{ url('/team/') }}/">Our Team</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown  main-bots">
              <a class="nav-link libox dropdown-toggle" id="two" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Services
              </a>

              <ul class="dropdown-menu" aria-labelledby="two">
                <li class="main-servicess">
                  <div class="container">
                    <div class="row ">

                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 ">
                        <h3 class="designings-headings">Website Designing</h3>
                        <div class="mega-link update-llinks">
                          <a href="{{ url('/') }}/static-website-designing/"><i class="fa fa-circle"
                              aria-hidden="true"></i>

                            Static Website Designing</a>
                          <a href="{{ url('/') }}/dynamic-website-designing/"><i class="fa fa-circle"
                              aria-hidden="true"></i>

                            Dynamic Website Designing</a>
                          <a href="{{ url('/') }}/landing-page-website-designing/"><i class="fa fa-circle"
                              aria-hidden="true"></i>
                            Landing Page Website Designing</a>
                          <a href="{{ url('/') }}/website-re-designing/"><i class="fa fa-circle"
                              aria-hidden="true"></i>
                            Website
                            Re-Designing</a>
                          <a href="{{ url('/') }}/website-maintenance/"><i class="fa fa-circle"
                              aria-hidden="true"></i>
                            Website
                            Maintenance</a>
                        </div>
                      </div>

                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 ">
                        <h3 class="designings-headings">Website Development</h3>
                        <div class="mega-link update-llinks">
                          <a href="{{ url('/') }}/cms-web-development/"><i class="fa fa-circle"
                              aria-hidden="true"></i>
                            CMS Web
                            Development</a>
                          <a href="{{ url('/') }}/web-development/"><i class="fa fa-circle"
                              aria-hidden="true"></i>

                            Web
                            Development</a>
                          <a href="{{ url('/') }}/ecommerce-web-development/"><i class="fa fa-circle"
                              aria-hidden="true"></i>

                            Ecommerce Web Development</a>
                          <a href="{{ url('/') }}/shopify-website-development/"><i class="fa fa-circle"
                              aria-hidden="true"></i>

                            Shopify Website Development</a>
                        </div>
                      </div>

                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 ">
                        <h3 class="designings-headings">Graphic Designing</h3>
                        <div class="mega-link update-llinks">
                          <a href="{{ url('/') }}/logo-design/"><i class="fa fa-circle" aria-hidden="true"></i>
                            Logo Design</a>
                          <a href="{{ url('/') }}/brochure-design/"><i class="fa fa-circle"
                              aria-hidden="true"></i>

                            Brochure
                            Design</a>
                          <a href="{{ url('/') }}/social-creative/"><i class="fa fa-circle"
                              aria-hidden="true"></i>

                            Social
                            Creative</a>
                        </div>
                      </div>

                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 ">
                        <h3 class="designings-headings">App Development</h3>
                        <div class="mega-link update-llinks">
                          <a href="{{ url('/') }}/android-app-development/"><i class="fa fa-circle"
                              aria-hidden="true"></i>

                            Android App development</a>
                          <a href="{{ url('/') }}/ios-app-development/"><i class="fa fa-circle"
                              aria-hidden="true"></i>
                            IOS App
                            development</a>
                        </div>
                      </div>

                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 ">
                        <h3 class="designings-headings">Digital Marketing</h3>
                        <div class="mega-link update-llinks">
                          <a href="{{ url('/') }}/search-engine-optimization/"><i class="fa fa-circle"
                              aria-hidden="true"></i>

                            Search Engine Optimization</a>
                          <a href="{{ url('/') }}/social-media-optimization/"><i class="fa fa-circle"
                              aria-hidden="true"></i>

                            Social Media Optimization</a>
                        </div>
                      </div>

                      <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-3 ">
                        <h3 class="designings-headings">Other Services</h3>
                        <div class="mega-link update-llinks">
                          <a href="{{ url('/') }}/payment-gateway-integration/"><i class="fa fa-circle"
                              aria-hidden="true"></i>

                            Payment Gateway Integration</a>
                          <a href="{{ url('/') }}/api-development/"><i class="fa fa-circle"
                              aria-hidden="true"></i>

                            API
                            Development</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>

            <li class="nav-item dropdown  main-botsone">
              <a class="nav-link libox dropdown-toggle" id="three" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                HIRE RESOURCES
              </a>

              <ul class="dropdown-menu" aria-labelledby="three">
                <li class="main-servicess p-0">
                  <div class="container-fluid">
                    <div class="deskotp-services">
                      <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4">

                          <div class="mobile-show-resources">
                            <div class="nav flex-column mains-pills nav-pills" id="main-hired" role="tablist"
                              aria-orientation="vertical">
                              @foreach ($categories as $row)
                                <a class="nav-link mainlinks" id="hiring-user-tab{{ $row->id }}"
                                  href="#hiring-user{{ $row->id }}" role="tab"
                                  aria-controls="hiring-user{{ $row->id }}" aria-selected="false">
                                  <span>{{ $row->category_name }} <i class="fa fa-arrow-right"
                                      aria-hidden="true"></i>
                                  </span>
                                  <p>{{ $row->left_note }}</p>
                                </a>
                              @endforeach
                            </div>
                          </div>

                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                          <div class="tab-content" id="main-hiredContent">
                            @php
                              $i = 1;
                            @endphp
                            @foreach ($categories as $row)
                              <div class="tab-pane fade {{ $i === 1 ? 'active show' : '' }}"
                                id="hiring-user{{ $row->id }}" role="tabpanel"
                                aria-labelledby="hiring-user-tab{{ $row->id }}">
                                <div class="mainehired">
                                  <h4>
                                    <a
                                      href="{{ route('hire.resources.category', ['category_slug' => $row->category_slug]) }}">
                                      {{ $row->category_name }}
                                    </a>
                                  </h4>
                                  <p>{{ $row->right_note }}</p>
                                  <hr>
                                  <div class="row">
                                    @foreach ($row->subCategories as $item)
                                      <div class="col-lg-6">
                                        <a href="{{ route('hire.resources.subcategory', ['category_slug' => $row->category_slug, 'sub_category_slug' => $item->sub_category_slug]) }}"
                                          class="developers">{{ $item->sub_category_name }}</a>
                                      </div>
                                    @endforeach
                                  </div>
                                </div>
                              </div>
                              @php
                                $i++;
                              @endphp
                            @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mobile-services">
                      <div class="main-mobiles">
                        <div class="accordion" id="show-cardss">
                          @foreach ($categories as $row)
                            <div class="card">
                              <div class="card-header p-0" id="onecard">
                                <h2 class="mb-0">
                                  <button class="btn btn-link ">
                                    {{ $row->category_name }} <i class="fa fa-chevron-down" aria-hidden="true"></i>

                                  </button>
                                </h2>
                              </div>
                              <div>
                                <div class="card-body">
                                  <div class="mainehired">
                                    <h4>{{ $row->category_name }}</h4>
                                    <p>{{ $row->right_note }}</p>
                                    <hr>
                                    <div class="row">
                                      @foreach ($row->subCategories as $item)
                                        <div class="col-lg-12">
                                          <a class="developers"
                                            href="{{ route('hire.resources.subcategory', ['category_slug' => $row->category_slug, 'sub_category_slug' => $item->sub_category_slug]) }}">{{ $item->sub_category_name }}</a>
                                        </div>
                                      @endforeach
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown  main-botstwo">

              <a class="nav-link libox dropdown-toggle" id="four" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                RESOURCES
              </a>

              <ul class="dropdown-menu" aria-labelledby="four">
                <li class="main-servicess">
                  <div class="container">
                    <div class="row">

                      <div class="col-12 col-sm-12">
                        <div class="mainehireds">
                          <h4>Explore More</h4>
                          <p>We are so much more than your run-of-the-mill tech company, check out the latest &
                            exclusive trends, discoveries, and success stories.

                          </p>
                        </div>
                        <div class="main-resources">
                          <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
                              <a class=" mainlinks" href="{{ url('/blogs') }}/">
                                <span> Blogs <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                                <p>Discover brief insights and articles.

                                </p>
                              </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
                              <a class=" mainlinks" href="{{ url('/career') }}/">
                                <span> Career <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                                <p>Discover brief insights and articles.

                                </p>
                              </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
                              <a class=" mainlinks" href="{{ url('/portfolio') }}/">
                                <span>Portfolio <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                                <p>Discover brief insights and articles.

                                </p>
                              </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
                              <a class=" mainlinks" href="{{ url('/blogs') }}/">
                                <span>Tech news <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                                <p>Stay alert on latest tech happenings.

                                </p>
                              </a>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-3">
                              <a class=" mainlinks" href="{{ url('/blogs') }}/">
                                <span>Download brochure <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                                <p>Everything You Need to Know – Just a Click Away

                                </p>
                              </a>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4">
                              <a class=" mainlinks" href="{{ url('/blogs') }}/">
                                <span>Latest Blogs <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                                <p>Discover brief insights and articles.

                                </p>
                              </a>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4">
                              <a class=" mainlinks" href="{{ url('/blogs') }}/">
                                <span>Latest Blogs <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                                <p>Discover brief insights and articles.

                                </p>
                              </a>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4">
                              <a class=" mainlinks" href="{{ url('/blogs') }}/">
                                <span>Latest Blogs <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                                <p>Discover brief insights and articles.

                                </p>
                              </a>
                            </div>
                            <div class="col-12 col-sm-4 col-md-4">
                              <a class=" mainlinks" href="{{ url('/blogs') }}/" href="{{ url('/blogs') }}/">
                                <span>Latest Blogs <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                                <p>Discover brief insights and articles.

                                </p>
                              </a>
                            </div>

                          </div>
                        </div>

                      </div>
                    </div>
                  </div>

                </li>

              </ul>
            </li>
            <li class="nav-item dropdown">
              <a href="{{ url('/get-quote') }}/" class="btn secondary-solid-btn check-btn"><span
                  class="ti-pencil-alt mr-1"></span> Get Quote</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!--header section end-->
