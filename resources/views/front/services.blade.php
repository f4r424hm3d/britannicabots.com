@extends('front.layouts.main')
@push('seo_meta_tag')
@include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
<!--body content wrap start-->
<div class="main pt-80">

  <!--banner section start-->
  <section class="hero-equal-height"
    style="background: url('{{ url('/front/') }}/img/hero-bg-1.jpg')no-repeat center center / cover">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-5">
          <div class="hero-slider-content text-white pt-4">
            {{-- <span>Loream Ipsum Loream Ipsum</span> --}}
            <h1 class="text-white">TOP-NOTCH DIGITAL SERVICES ENSURING THE GROWTH OF YOUR BUSINESS</h1>
            <p class="lead">Ensuring The Growth Of Your Business!</p>
            <div class="action-btns mt-3"><a href="#start" class="btn secondary-solid-btn">Get Start Now</a></div>
          </div>
        </div>
        <div class="col-md-12 col-lg-7">
          <div class="image-wrap wow fadeInRight animated" data-wow-duration="2s"><img
              src="{{ url('/front/') }}/img/t2-hero-img.svg" alt="hero" class="img-fluid float-ani"></div>
        </div>
      </div>
    </div>
  </section>
  <!--banner section end-->

  <!--services box start-->
  <section class="why-choose-us ptb-100" id="start">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-9">
          <div class="section-heading text-center">
            <h2><strong class="color-secondary">Services</strong> To Grow Business Faster</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">We provide complete suit of Web-Services, from Readymade Solutions to Customized Development
            </p>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-6 col-lg-5">
          <div class="image-wrap wow fadeInLeft animated" data-wow-duration="2s"><img
              src="{{ url('/front/') }}/img/tab-img.png" alt="why choose us" class="img-fluid m-auto float-ani"></div>
        </div>
        <div class="col-md-6 col-lg-7">
          <div class="why-choose-us-wrap wow zoomInDown animated" data-wow-duration="2s">
            <div class="row">
              <div class="col-md-4 col-sm-4 promo-col">
                <a href="#app">
                  <div class="promo-item pb-3">
                    <div class="promo-img">
                      <span class="ti-mobile icon-lg color-secondary d-block mb-4"></span>
                    </div>
                    <h5 class="mb-2">App<br>Development</h5>
                    <p>Wash your hands frequently more</p>
                    <span class="ti-arrow-right ani-arrow"></span>
                    <div class="promo-bottom-shape">
                      <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                    </div>
                  </div>
                </a>
                <a href="#digital">
                  <div class="promo-item pb-3">
                    <div class="promo-img">
                      <span class="ti-announcement icon-lg color-secondary d-block mb-4"></span>
                    </div>
                    <h5 class="mb-2">Digital<br>Marketing</h5>
                    <p>Progressively leverage existing</p>
                    <span class="ti-arrow-right ani-arrow"></span>
                    <div class="promo-bottom-shape">
                      <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 col-sm-4 promo-col">
                <a href="#design">
                  <div class="promo-item pb-3">
                    <div class="promo-img">
                      <span class="ti-desktop icon-lg color-secondary d-block mb-4"></span>
                    </div>
                    <h5 class="mb-2">Website<br>Designing</h5>
                    <p>Progressively leverage existing</p>
                    <span class="ti-arrow-right ani-arrow"></span>
                    <div class="promo-bottom-shape">
                      <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                    </div>
                  </div>
                </a>
                <a href="#graphic">
                  <div class="promo-item pb-3">
                    <div class="promo-img">
                      <span class="ti-brush icon-lg color-secondary d-block mb-4"></span>
                    </div>
                    <h5 class="mb-2">Graphic<br>Designing</h5>
                    <p>Progressively leverage existing</p>
                    <span class="ti-arrow-right ani-arrow"></span>
                    <div class="promo-bottom-shape">
                      <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 col-sm-4 promo-col">
                <a href="#development">
                  <div class="promo-item pb-3">
                    <div class="promo-img">
                      <span class="ti-cup icon-lg color-secondary d-block mb-4"></span>
                    </div>
                    <h5 class="mb-2">Web<br>Development</h5>
                    <p>Wash your hands frequently more</p>
                    <span class="ti-arrow-right ani-arrow"></span>
                    <div class="promo-bottom-shape">
                      <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                    </div>
                  </div>
                </a>
                <a href="#other">
                  <div class="promo-item pb-3">
                    <div class="promo-img">
                      <span class="ti-settings icon-lg color-secondary d-block mb-4"></span>
                    </div>
                    <h5 class="mb-2">Other<br>Services</h5>
                    <p>Progressively leverage existing</p>
                    <span class="ti-arrow-right ani-arrow"></span>
                    <div class="promo-bottom-shape">
                      <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--services box end-->

  <!--services section start-->
  <section class="about-us-section ptb-100 gray-light-bg" id="design">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pr-4">
            <h2>WEBSITE <span class="color-secondary">DESIGNING</span></h2>
            <span class="animate-border mb-4"></span>
            <p>Britannica Bots being one of the best website designing company offerings include various web design
              services ranging from one page parallax website, simple static web design, animated webs designing,
              dynamic website to corporate website packages. Each of our website is designed with upgraded technology
              keeping in mind all aspects of SEO optimization, mobile responsiveness and effective call-to-actions.</p>

            <div class="row mt-4">
              <div class="col-12">
                <ul class="list-unstyled tech-feature-list">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="static-website-designing.html"><strong>Static Website Designing</strong></a></li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="dynamik-website-designing.html"><strong>Dynamic Website Designing</strong></a></li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="landing-page-website-designing.html"><strong>Landing Page Website Designing</strong></a>
                  </li>
                </ul>
                <ul class="list-unstyled tech-feature-list">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="website-re-designing.html"><strong>Website Re-Designing</strong></a></li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="website-maintenance.html"><strong>Website Maintenance</strong></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-5 wow fadeInRight animated" data-wow-duration="2s">
          <div class="image-frame"><img src="{{ url('/front/') }}/img/services/web-designing.jpg" alt="about us"
              class="img-fluid"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-us-section ptb-100" id="development">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-5 col-lg-5 wow fadeInLeft animated" data-wow-duration="2s">
          <div class="image-frame-left"><img src="{{ url('/front/') }}/img/services/web-development.jpg" alt="about us"
              class="img-fluid">
          </div>
        </div>
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pl-5">
            <h2>WEBSITE <span class="color-secondary">DEVELOPMENT</span></h2>
            <span class="animate-border mb-4"></span>
            <p>Britannica Bots Expertise in robust & dynamic development starting from website CMS, web portal,
              ecommerce websites, Web Applications to Custom build website development. We use latest technologies,
              powerful frameworks with winning approach to ensure that our developed end-results are effective, scalable
              and result-driven with our core expertise is in PHP, Laravel, Codeigniter, .NET, and Node.js. We are bunch
              of tech savvy experts who endeavour in R&D, upgrading and experimenting round the clock to implement
              innovative ideas into a real world digital product for your business.</p>

            <div class="row mt-4">
              <div class="col-12">
                <ul class="list-unstyled tech-feature-list">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="cms-web-development.html"><strong>CMS Web Development</strong></a></li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="web-development.html"><strong>Web Development</strong></a></li>
                </ul>
                <ul class="list-unstyled tech-feature-list">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="ecommerce-web-development.html"><strong>Ecommerce Web Development</strong></a></li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="shopiefy-website-development.html"><strong>Shopify Website Development</strong></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-us-section ptb-100 gray-light-bg" id="app">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pr-4">
            <h2>APP <span class="color-secondary">DEVELOPMENT</span></h2>
            <span class="animate-border mb-4"></span>
            <p>We are top Android & iOS App development company, designing and developing native applications,
              cross-platform applications, Hybrid applications and progressive applications. With consumers being more
              digitized & mobile friendly, your business deserves a excellent performimg & user friendly mobile
              applications. The mobile app has becomes one of the crucial part for every individual, whether it is
              shopping, booking cab or taxi, subscribe newspaper & magazines, order food, schedule an appointment with
              doctors, interacting with friends on social media or perform bank transactions, mobile apps have made
              everything easy.</p>

            <div class="row mt-4">
              <div class="col-12">
                <ul class="list-unstyled tech-feature-list">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="android-app-development.html"><strong>Android App development</strong></a></li>
                </ul>
                <ul class="list-unstyled tech-feature-list">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="ios-app-development.html"><strong>IOS App development</strong></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-5 wow fadeInRight animated" data-wow-duration="2s">
          <div class="image-frame"><img src="{{ url('/front/') }}/img/services/app.jpg" alt="about us"
              class="img-fluid"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-us-section ptb-100" id="digital">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-5 col-lg-5 wow fadeInLeft animated" data-wow-duration="2s">
          <div class="image-frame-left"><img src="{{ url('/front/') }}/img/services/digital.jpg" alt="about us"
              class="img-fluid"></div>
        </div>
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pl-5">
            <h2>DIGITAL <span class="color-secondary">MARKETING</span></h2>
            <span class="animate-border mb-4"></span>
            <p>We offer SEO Services for all websites including corporate websites, e-commerce websites, and blogs. Do
              you want to improve your visibility on search engines like Google? Our team will develop strategies to
              optimize your website and online presence. We help you in showcasing your best content to your customers
              so that the content and websites generates traffic from relevant search results.</p>
            <p>We offer SEO Services for all websites including corporate websites, e-commerce websites, and blogs. Do
              you want to improve your visibility on search engines like Google? Our team will develop strategies to
              optimize your website and online presence. We help you in showcasing your best content to your customers
              so that the content and websites generates traffic from relevant search results.</p>

            <div class="row mt-4">
              <div class="col-12">
                <ul class="list-unstyled tech-feature-list">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="search-engine-optimization.html"><strong>Search Engine Optimization</strong></a></li>
                </ul>
                <ul class="list-unstyled tech-feature-list">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="social-media-optimization.html"><strong>Social Media Optimization</strong></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-us-section ptb-100 gray-light-bg" id="graphic">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pr-4">
            <h2>GRAPHIC <span class="color-secondary">DESIGN</span></h2>
            <span class="animate-border mb-4"></span>
            <p>We are top Android & iOS App development company, designing and developing native applications,
              cross-platform applications, Hybrid applications and progressive applications. With consumers being more
              digitized & mobile friendly, your business deserves a excellent performimg & user friendly mobile
              applications. The mobile app has becomes one of the crucial part for every individual, whether it is
              shopping, booking cab or taxi, subscribe newspaper & magazines, order food, schedule an appointment with
              doctors, interacting with friends on social media or perform bank transactions, mobile apps have made
              everything easy.</p>

            <div class="row mt-4">
              <div class="col-12">
                <ul class="list-unstyled tech-feature-list">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="logo-design.html"><strong>Logo Design</strong></a></li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="brochure-design.html"><strong>Brochure Design</strong></a></li>
                </ul>
                <ul class="list-unstyled tech-feature-list">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="social-creative.html"><strong>Social Creative</strong></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-5 wow fadeInRight animated" data-wow-duration="2s">
          <div class="image-frame"><img src="{{ url('/front/') }}/img/services/graphic.jpg" alt="about us"
              class="img-fluid"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-us-section ptb-100" id="other">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-5 col-lg-5 wow fadeInLeft animated" data-wow-duration="2s">
          <div class="image-frame-left"><img src="{{ url('/front/') }}/img/services/other.jpg" alt="about us"
              class="img-fluid"></div>
        </div>
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pl-5">
            <h2>OTHER <span class="color-secondary">SERVICES</span></h2>
            <span class="animate-border mb-4"></span>
            <p>We are the top Payment Gateway Services Company in Delhi,Delhi Ncr,Bihar,India. A payment gateway is an
              e-commerce application that authorizes payments for e-businesses, online retailers, bricks and clicks, or
              traditional brick and mortar businesses. It is the virtual equivalent of a physical point of sale terminal
              located in most retail outlets. Payment gateways encrypt sensitive information, such as credit card
              numbers, to ensure that information passes securely between the customer and the merchant.</p>
            <p>We are the top Payment Gateway Services Company in Delhi,Delhi Ncr,Bihar,India. A payment gateway is an
              e-commerce application that authorizes payments for e-businesses, online retailers, bricks and clicks, or
              traditional brick and mortar businesses. It is the virtual equivalent of a physical point of sale terminal
              located in most retail outlets. Payment gateways encrypt sensitive information, such as credit card
              numbers, to ensure that information passes securely between the customer and the merchant.</p>

            <div class="row mt-4">
              <div class="col-12">
                <ul class="list-unstyled tech-feature-list">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="payment-gateway-integration.html"><strong>Payment Gateway Integration</strong></a></li>
                </ul>
                <ul class="list-unstyled tech-feature-list">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> <a
                      href="api-development.html"><strong>API Development</strong></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--services section end-->

  <!--three box start-->
  <section class="why-choose-us ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-9">
          <div class="section-heading text-center">
            <h2><strong class="color-secondary">Why Are we Right Choice for</strong><br>Web Design & Development
              Services</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">There are many providing web services, but very few are loved for there work by customers.
            </p>
          </div>
        </div>
      </div>


      <div class="row mt-5">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div
            class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown animated"
            data-wow-duration="2s">
            <span class="ti-check-box icon-lg color-secondary d-block mb-4"></span>
            <h5>Effective Layout & Navigation</h5>
            <p>Our designers are experienced in UX/UI design and hence create sleek & attractive desing layout to grab
              the visitors attention and user-friendly navigation across the website to keep the visitors on the website
              for more time.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div
            class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown animated"
            data-wow-duration="2.5s">
            <span class="ti-shield icon-lg color-secondary d-block mb-4"></span>
            <h5>Easy to Access Information</h5>
            <p>Our system is automated with CRM, you can easily monitor the tasks status, directly chat with the task
              asignee, assign task for the project, have discussion on the task and get dedicated support even after the
              project is completed.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div
            class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown animated"
            data-wow-duration="3s">
            <span class="ti-settings icon-lg color-secondary d-block mb-4"></span>
            <h5>Maintenance & Lifetime Gurantee</h5>
            <p>Make your website maintenance hassle-free with our 1 year Free maintenance service & yearly dedicated
              maintenance service with Lifetime code guarantee. Make your website maintenance hassle-free with our 1
              year Free.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--three box end-->

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
            <a href="{{ url('contact') }}" class="btn secondary-solid-btn">Get in touch with us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--call to action section end-->

</div>
<!--body content wrap end-->
@endsection
