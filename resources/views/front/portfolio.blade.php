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
        <div class="col-md-12 col-lg-6">
          <div class="hero-slider-content text-white">
            <h1 class="text-white">Explore #1 Website Company Portfolio</h1>
            <p class="lead">See for yourself why we’re the preferred vendor for many pharma and healthcare companies,
              retail businesses, professional service firms, backyard living dealerships, and home builders. Our
              portfolio will provide you with an inside look at how we create successful campaigns, exceptional
              websites, and memorable digital experiences.</p>
            <div class="action-btns mt-3"><a href="#designing" class="btn secondary-solid-btn"><span
                  class="blink"></span> EXPLORE NOW</a></div>
          </div>
        </div>
        <div class="col-md-12 col-lg-6">
          <div class="wow fadeInRight animated" data-wow-duration="2s"><img src="{{ url('/front/') }}/img/work2.svg"
              class="img-fluid float-ani" alt="hero"></div>
        </div>
      </div>
    </div>
  </section>
  <!--banner section end-->

  <!--btn 1 section start-->
  <section class="bg-light pt-4 pb-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-6"><a href="#designing"
            class="btn btn secondary-solid-btn pt-4 pb-3 w-100"><span class="ti-desktop icon-sm d-block mb-2"></span>
            WEBSITE<br>DESIGNING</a></div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6"><a href="#development"
            class="btn btn secondary-solid-btn pt-4 pb-3 w-100"><span class="ti-cup icon-sm d-block mb-2"></span>
            WEBSITE<br>DEVELOPMENT</a></div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6"><a href="#app"
            class="btn btn secondary-solid-btn pt-4 pb-3 w-100"><span class="ti-mobile icon-sm d-block mb-2"></span>
            APP<br>DEVELOPMENT</a></div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6"><a href="#digital"
            class="btn btn secondary-solid-btn pt-4 pb-3 w-100"><span
              class="ti-announcement icon-sm d-block mb-2"></span> DIGITAL<br>MARKETING</a></div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6"><a href="#graphic"
            class="btn btn secondary-solid-btn pt-4 pb-3 w-100"><span class="ti-brush icon-sm d-block mb-2"></span>
            GRAPHIC<br>DESIGN</a></div>
        <div class="col-lg-2 col-md-2 col-sm-4 col-6"><a href="#other"
            class="btn btn secondary-solid-btn pt-4 pb-3 w-100"><span class="ti-settings icon-sm d-block mb-2"></span>
            OTHER<br>SERVICES</a></div>
      </div>
    </div>
  </section>
  <!--btn 1 section end-->



  <!--contact us section start-->
  <section class="about-us-section ptb-100" id="designing">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-5 col-lg-5">
          <div class="wow fadeInLeft animated" data-wow-duration="2s">
            <div class="custom-port-col-image w-anuimation-image4"><img alt=""
                src="{{ url('/front/') }}/img/portfolios/website.jpg"></div>
          </div>
        </div>
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pl-4">
            <h2 class="font-weight-bolder">Website <span class="color-secondary">Designing</span></h2>
            <p>The best website design company in Gurugram, Britannica Bots, is known for offering cutting-edge web
              design services to clients throughout the world while keeping in mind the most important characteristics
              of a website, such as its responsive design, quick loading time, and intuitive navigation.</p>
            <p>Get a website created that will assist you in increasing leads and sales for your company with an
              appealing and user-friendly design and powerful call-to-action tactics. To compete in the market, our
              primary goal is to offer strategic planning and the greatest product in the sector.</p>
            <a href="{{ url('website-designing-portfolio') }}" class="btn btn secondary-solid-btn"><span
                class="blink"></span> EXPLORE WORK</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bgimg" style=" background-image:url({{ url('/front/') }}/img/portfolios/website-parallax.jpg)">
  </section>

  <section class="about-us-section ptb-100" id="development">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pr-4">
            <h2 class="font-weight-bolder">Website <span class="color-secondary">Development</span></h2>
            <p>With experience in the agile development process and a user-friendly admin panel, Britannica Bots can
              help you maintain your website in the most straightforward way possible. For any of your web-related
              projects, use the best website development company in Gurugram. In order to give you a great return on
              investment from the system, we design websites and online portals using safe and cutting-edge
              technologies. Our professionals talk about and comprehend your business needs and provide you with the
              greatest website development option.</p>
            <a href="{{ url('website-development-portfolio') }}" class="btn btn secondary-solid-btn"><span
                class="blink"></span> EXPLORE
              WORK</a>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="wow fadeInRight animated" data-wow-duration="2s">
            <div class="custom-port-col-image w-anuimation-image4"><img alt=""
                src="{{ url('/front/') }}/img/portfolios/development.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bgimg" style=" background-image:url({{ url('/front/') }}/img/portfolios/development-parallax.jpg)">
  </section>

  <section class="about-us-section ptb-100" id="app">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-5 col-lg-5">
          <div class="wow fadeInLeft animated" data-wow-duration="2s">
            <div class="custom-port-col-image w-anuimation-image4"><img alt=""
                src="{{ url('/front/') }}/img/portfolios/app.jpg"></div>
          </div>
        </div>
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pl-4">
            <h2 class="font-weight-bolder">App <span class="color-secondary">Development</span></h2>
            <p>Britannica Bots is a leading Android and iOS app development firm that creates native, cross-platform,
              hybrid, and progressive applications. Your company deserves a well-performing and user-friendly mobile
              application because consumers are becoming more digitised and mobile-friendly. Every person now relies
              heavily on smartphone applications for a variety of tasks, including shopping, cab or taxi booking,
              magazine and newspaper subscriptions, food delivery, making healthcare appointments, engaging with friends
              on social media, and performing bank transactions.</p>
            <a href="{{ url('app-development-portfolio') }}" class="btn btn secondary-solid-btn"><span
                class="blink"></span> EXPLORE
              WORK</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bgimg" style=" background-image:url({{ url('/front/') }}/img/portfolios/app-parallax.jpg)"></section>

  <section class="about-us-section ptb-100" id="digital">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pr-4">
            <h2 class="font-weight-bolder">Digital <span class="color-secondary">Marketing</span></h2>
            <p>The best website design company in Gurugram, Britannica Bots, is known for offering cutting-edge web
              design services to clients throughout the world while keeping in mind the most important characteristics
              of a website, such as its responsive design, quick loading time, and intuitive navigation.</p>
            <p>Get a website created that will assist you in increasing leads and sales for your company with an
              appealing and user-friendly design and powerful call-to-action tactics. To compete in the market, our
              primary goal is to offer strategic planning and the greatest product in the sector.</p>
            <a href="{{ url('digital-marketing-portfolio') }}" class="btn btn secondary-solid-btn"><span
                class="blink"></span> EXPLORE
              WORK</a>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="wow fadeInRight animated" data-wow-duration="2s">
            <div class="custom-port-col-image w-anuimation-image4"><img alt=""
                src="{{ url('/front/') }}/img/portfolios/digital.jpg"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bgimg" style=" background-image:url({{ url('/front/') }}/img/portfolios/digital-parallax.jpg)">
  </section>

  <section class="about-us-section ptb-100" id="graphic">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pr-4">
            <h2 class="font-weight-bolder">Graphic <span class="color-secondary">Designing</span></h2>
            <p>Britannica Bots creates amazing, ever-changing images that effectively communicate your company's
              identity and goal. Your visual must convey everything about your business, and our team of graphic design
              professionals is committed to providing services for branding. We conduct in-depth research on each design
              element to ensure that your company's graphics are seen favourably both locally and internationally.</p>
            <a href="{{ url('graphic-designing-portfolio') }}" class="btn btn secondary-solid-btn"><span
                class="blink"></span> EXPLORE
              WORK</a>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="wow fadeInRight animated" data-wow-duration="2s">
            <div class="custom-port-col-image w-anuimation-image4"><img alt=""
                src="{{ url('/front/') }}/img/portfolios/graphic.jpg"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bgimg" style=" background-image:url({{ url('/front/') }}/img/portfolios/graphic-parallax.jpg)">
  </section>

  <section class="about-us-section ptb-100" id="other">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-5 col-lg-5">
          <div class="wow fadeInLeft animated" data-wow-duration="2s">
            <div class="custom-port-col-image w-anuimation-image4"><img alt=""
                src="{{ url('/front/') }}/img/portfolios/other.jpg"></div>
          </div>
        </div>
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pl-4">
            <h2 class="font-weight-bolder">Other <span class="color-secondary">Work</span></h2>
            <p>We are top Android & iOS App development company, designing and developing native applications,
              cross-platform applications, Hybrid applications and progressive applications. With consumers being more
              digitized & mobile friendly, your business deserves a excellent performimg & user friendly mobile
              applications. The mobile app has becomes one of the crucial part for every individual, whether it is
              shopping, booking cab or taxi, subscribe newspaper & magazines, order food, schedule an appointment with
              doctors, interacting with friends on social media or perform bank transactions, mobile apps have made
              everything easy.</p>
            <a href="{{ url('other-services-portfolio') }}" class="btn btn secondary-solid-btn"><span
                class="blink"></span>
              EXPLORE
              WORK</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--contact us section end-->

</div>
<!--body content wrap end-->
@endsection
