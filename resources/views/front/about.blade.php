@extends('front.layouts.main')
@push('title')
<title>About</title>
@endpush
@section('main-section')
<!--body content wrap start-->
<div class="main pt-80">

  <!--header section start-->
  <section class="hero-section ptb-100 gradient-overlay"
    style="background: url('{{ url('front/') }}/img/header-bg-5.jpg')no-repeat center center / cover">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
          <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
            <h1 class="text-white mb-0">About Us</h1>
            <div class="custom-breadcrumb">
              <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                <li class="list-inline-item breadcrumb-item active">About Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--header section end-->

  <!--three box start-->
  <section class="promo-section  ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
          <div class="promo-single-wrap p-5 text-center border rounded white-bg">
            <div class="promo-icon mb-4">
              <img src="{{ url('front/') }}/img/search-engine.svg" alt="promo" width="65">
              <span class="number-bg">01</span>
            </div>
            <div class="promo-info">
              <strong class="color-secondary">Lorem Ipsum</strong>
              <h4>Our Vision</h4>
              <p>Progressively empower business "outside the box" thinking with resource-leveling partnerships.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="promo-single-wrap p-5 text-center border rounded white-bg">
            <div class="promo-icon mb-4">
              <img src="{{ url('front/') }}/img/increase.svg" alt="promo" width="65">
              <span class="number-bg">02</span>
            </div>
            <div class="promo-info">
              <strong class="color-secondary">Lorem Ipsum</strong>
              <h4>Our Mission</h4>
              <p>Progressively empower business "outside the box" thinking with resource-leveling partnerships.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="promo-single-wrap p-5 text-center border rounded white-bg">
            <div class="promo-icon mb-4">
              <img src="{{ url('front/') }}/img/bullhorn.svg" alt="promo" width="65">
              <span class="number-bg">03</span>
            </div>
            <div class="promo-info">
              <strong class="color-secondary">Lorem Ipsum</strong>
              <h4>Strategy</h4>
              <p>Progressively empower business "outside the box" thinking with resource-leveling partnerships.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="services-section pb-100 gray-light-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
            <span class="ti-eye icon-lg color-secondary d-block mb-4"></span>
            <h5>Vision</h5>
            <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
              partnerships.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
            <span class="ti-cup icon-lg color-secondary d-block mb-4"></span>
            <h5>Mission</h5>
            <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
              partnerships.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
            <span class="ti-light-bulb icon-lg color-secondary d-block mb-4"></span>
            <h5>Strategy</h5>
            <p class="mb-0">Progressively empower business "outside the box" thinking with resource-leveling
              partnerships.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--three box end-->

  <!--about us section start-->
  <section class="about-us-section ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-6">
          <div class="about-us-img">
            <img src="{{ url('front/') }}/img/about-us-img.svg" alt="about us" class="img-fluid about-single-img">
            <img src="{{ url('front/') }}/img/about-us-img-bg.svg" alt="about bg" class="about-us-bg">
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="about-us-content-wrap">
            <strong class="color-secondary">Who we are</strong>
            <h3>About Britannica Bots</h3>
            <span class="animate-border mb-4"></span>
            <p>Globally transition proactive niches without progressive processes. Objectively syndicate
              enterprise-wide services through timely metrics.</p>
            <ul class="list-unstyled tech-feature-list w-100 mb-3">
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Creative</strong>
                Websites Design</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Accounting</strong>
                Procedures
                Guidebook</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Cost</strong>
                Accounting Fundamentals</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Corporate</strong>
                Cash Management</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>SEO</strong>
                Optimization Services</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong>
                Brand Solutions</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>45-Day</strong>
                Money-Back Guarantee</li>
            </ul>

            <div class="action-btns mt-4">
              <a href="#" class="btn secondary-solid-btn mr-3">Case Study</a>
              <a href="#" class="btn secondary-outline-btn">Get in touch</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--about us section end-->

  <section class="call-to-action ptb-100" style="background: url('img/ctg-bg-2.jpg')no-repeat center center / cover">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="circle-box">
            <div class="chart easyPieChart" data-percent="70" style="width: 180px; height: 180px; line-height: 180px;">
              <span>70%</span><canvas width="180" height="180"></canvas>
            </div>
          </div>
          <div class="progress-info text-center mt-3">
            <strong class="color-secondary">Our Services</strong>
            <h5 class="text-white">Website Design</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="circle-box">
            <div class="chart easyPieChart" data-percent="75" style="width: 180px; height: 180px; line-height: 180px;">
              <span>75%</span><canvas width="180" height="180"></canvas>
            </div>
          </div>
          <div class="progress-info text-center mt-3">
            <strong class="color-secondary">Our Services</strong>
            <h5 class="text-white">Website Development</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="circle-box">
            <div class="chart easyPieChart" data-percent="80" style="width: 180px; height: 180px; line-height: 180px;">
              <span>80%</span><canvas width="180" height="180"></canvas>
            </div>
          </div>
          <div class="progress-info text-center mt-3">
            <strong class="color-secondary">Our Services</strong>
            <h5 class="text-white">Graphic Design</h5>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="circle-box">
            <div class="chart easyPieChart" data-percent="90" style="width: 180px; height: 180px; line-height: 180px;">
              <span>90%</span><canvas width="180" height="180"></canvas>
            </div>
          </div>
          <div class="progress-info text-center mt-3">
            <strong class="color-secondary">Our Services</strong>
            <h5 class="text-white">Digital Marketing</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--clientle two section start-->
  <section class="team-two-section ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8">
          <div class="section-heading text-center mb-5">
            <strong class="color-secondary">Who are Happy With Services and Work</strong>
            <h2>Our Clientele</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">Distinctively grow go forward manufactured products and optimal networks. Enthusiastically
              disseminate user-centric outsourcing.</p>
          </div>
        </div>
      </div>

      <div class="row">

        <div id="clientale" class="owl-carousel owl-theme custom-dot">
          <div class="item">
            <div class="staff-member my-md-3 my-lg-3 my-sm-0">
              <div class="card text-center">
                <img src="{{ url('front/') }}/img/c1.png" alt="team image" class="m-auto pt-4" style="width:120px">
                <div class="card-body">
                  <h5 class="teacher mb-0">Company Name</h5>
                  <span>Country / Location</span>
                  <p class="teacher-quote pt-3">Dramatically leverage existing fully researched platforms.</p>
                </div>
              </div>
              <div class="overlay d-flex align-items-center justify-content-center">
                <div class="overlay-inner">
                  <p class="teacher-quote">"Dramatically leverage existing fully researched platforms vis-a-vis
                    viral."</p>
                  <a href="#" class="teacher-name">
                    <h5 class="mb-0 teacher text-white">Company Name</h5>
                  </a>
                  <span class="teacher-field text-white mb-3">Country / Location</span>
                  <p class="teacher-see-profile"><a href="#" class="btn outline-white-btn">Case Studies</a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="staff-member my-md-3 my-lg-3 my-sm-0">
              <div class="card text-center">
                <img src="{{ url('front/') }}/img/c1.png" alt="team image" class="m-auto pt-4" style="width:120px">
                <div class="card-body">
                  <h5 class="teacher mb-0">Company Name</h5>
                  <span>Country / Location</span>
                  <p class="teacher-quote pt-3">Dramatically leverage existing fully researched platforms.</p>
                </div>
              </div>
              <div class="overlay d-flex align-items-center justify-content-center">
                <div class="overlay-inner">
                  <p class="teacher-quote">"Dramatically leverage existing fully researched platforms vis-a-vis
                    viral."</p>
                  <a href="#" class="teacher-name">
                    <h5 class="mb-0 teacher text-white">Company Name</h5>
                  </a>
                  <span class="teacher-field text-white mb-3">Country / Location</span>
                  <p class="teacher-see-profile"><a href="#" class="btn outline-white-btn">Case Studies</a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="staff-member my-md-3 my-lg-3 my-sm-0">
              <div class="card text-center">
                <img src="{{ url('front/') }}/img/c1.png" alt="team image" class="m-auto pt-4" style="width:120px">
                <div class="card-body">
                  <h5 class="teacher mb-0">Company Name</h5>
                  <span>Country / Location</span>
                  <p class="teacher-quote pt-3">Dramatically leverage existing fully researched platforms.</p>
                </div>
              </div>
              <div class="overlay d-flex align-items-center justify-content-center">
                <div class="overlay-inner">
                  <p class="teacher-quote">"Dramatically leverage existing fully researched platforms vis-a-vis
                    viral."</p>
                  <a href="#" class="teacher-name">
                    <h5 class="mb-0 teacher text-white">Company Name</h5>
                  </a>
                  <span class="teacher-field text-white mb-3">Country / Location</span>
                  <p class="teacher-see-profile"><a href="#" class="btn outline-white-btn">Case Studies</a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="staff-member my-md-3 my-lg-3 my-sm-0">
              <div class="card text-center">
                <img src="{{ url('front/') }}/img/c1.png" alt="team image" class="m-auto pt-4" style="width:120px">
                <div class="card-body">
                  <h5 class="teacher mb-0">Company Name</h5>
                  <span>Country / Location</span>
                  <p class="teacher-quote pt-3">Dramatically leverage existing fully researched platforms.</p>
                </div>
              </div>
              <div class="overlay d-flex align-items-center justify-content-center">
                <div class="overlay-inner">
                  <p class="teacher-quote">"Dramatically leverage existing fully researched platforms vis-a-vis
                    viral."</p>
                  <a href="#" class="teacher-name">
                    <h5 class="mb-0 teacher text-white">Company Name</h5>
                  </a>
                  <span class="teacher-field text-white mb-3">Country / Location</span>
                  <p class="teacher-see-profile"><a href="#" class="btn outline-white-btn">Case Studies</a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="staff-member my-md-3 my-lg-3 my-sm-0">
              <div class="card text-center">
                <img src="{{ url('front/') }}/img/c1.png" alt="team image" class="m-auto pt-4" style="width:120px">
                <div class="card-body">
                  <h5 class="teacher mb-0">Company Name</h5>
                  <span>Country / Location</span>
                  <p class="teacher-quote pt-3">Dramatically leverage existing fully researched platforms.</p>
                </div>
              </div>
              <div class="overlay d-flex align-items-center justify-content-center">
                <div class="overlay-inner">
                  <p class="teacher-quote">"Dramatically leverage existing fully researched platforms vis-a-vis
                    viral."</p>
                  <a href="#" class="teacher-name">
                    <h5 class="mb-0 teacher text-white">Company Name</h5>
                  </a>
                  <span class="teacher-field text-white mb-3">Country / Location</span>
                  <p class="teacher-see-profile"><a href="#" class="btn outline-white-btn">Case Studies</a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="staff-member my-md-3 my-lg-3 my-sm-0">
              <div class="card text-center">
                <img src="{{ url('front/') }}/img/c1.png" alt="team image" class="m-auto pt-4" style="width:120px">
                <div class="card-body">
                  <h5 class="teacher mb-0">Company Name</h5>
                  <span>Country / Location</span>
                  <p class="teacher-quote pt-3">Dramatically leverage existing fully researched platforms.</p>
                </div>
              </div>
              <div class="overlay d-flex align-items-center justify-content-center">
                <div class="overlay-inner">
                  <p class="teacher-quote">"Dramatically leverage existing fully researched platforms vis-a-vis
                    viral."</p>
                  <a href="#" class="teacher-name">
                    <h5 class="mb-0 teacher text-white">Company Name</h5>
                  </a>
                  <span class="teacher-field text-white mb-3">Country / Location</span>
                  <p class="teacher-see-profile"><a href="#" class="btn outline-white-btn">Case Studies</a></p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--clientle two section end-->

  <!--call to action section start-->
  <section class="call-to-action py-5">
    <div class="container">
      <div class="row justify-content-around align-items-center">
        <div class="col-md-7">
          <div class="subscribe-content">
            <h3 class="mb-1">Best Agency For Grow Your Business</h3>
            <p>Rapidiously engage fully tested e-commerce with progressive architectures.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="action-btn text-lg-right text-sm-left">
            <a href="#" class="btn secondary-solid-btn">Get in touch with us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--call to action section end-->

</div>
<!--body content wrap end-->
@endsection
