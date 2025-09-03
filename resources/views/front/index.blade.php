@extends('front.layouts.main')
@push('seo_meta_tag')
@include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
  <style>
   
    .owl-nav i {
      font-size: 30px;
      color: #333;
    }
  </style>
<!--body content wrap start-->
<div class="main">

  <!--hero section start-->
  <section class="ptb-70 gradient-bg">
    <div class="container pt-5">
       
      <div id="latest-info" class="owl-carousel owl-theme custom-dot">
        <div class="item">
         <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
              <div class="hero-slider-content text-white pt-5">
                <h1 class="text-white"> <span>Brand Promise</span> Innovative IT & Digital Marketing Solutions That Drive Real Results</h1>
                <p class="lead">We help brands grow faster with data-driven strategies and future-ready digital solutions.</p>
                <div class="action-btns mt-3"><a href="{{ url('/get-quote') }}/" class="btn secondary-solid-btn">Start Now</a></div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="image-wrap pt-5"><img src="{{ url('front/') }}/img/slider-one.png"
                  class="img-fluid custom-width" alt="hero" />
              </div>
            </div>
          </div>
        </div>
         <div class="item">
         <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
              <div class="hero-slider-content text-white pt-5">
                <h1 class="text-white"><span>Credibility & Reach</span> Years of Excellence | 150+ Clients | Global Presence</h1>
                <p class="lead"> Trusted by businesses worldwide to deliver technology and marketing that scales.</p>
                <div class="action-btns mt-3"><a href="{{ url('/get-quote') }}/" class="btn secondary-solid-btn">Start Now</a></div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="image-wrap pt-5"><img src="{{ url('front/') }}/img/slider-two.png"
                  class="img-fluid custom-width" alt="hero" />
              </div>
            </div>
          </div>
        </div>

         <div class="item">
         <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
              <div class="hero-slider-content text-white pt-5">
                <h1 class="text-white"><span>Core Value Proposition </span>From Code to Conversions — We Build Growth Engines, Not Just Campaigns</h1>
                <p class="lead">Custom IT and marketing solutions designed to attract, engage, and convert customers.</p>
                <div class="action-btns mt-3"><a href="{{ url('/get-quote') }}/" class="btn secondary-solid-btn">Start Now</a></div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="image-wrap pt-5"><img src="{{ url('front/') }}/img/slider-three.png"
                  class="img-fluid custom-width" alt="hero" />
              </div>
            </div>
          </div>
        </div>

         <div class="item">
         <div class="row align-items-center">
            <div class="col-md-6 col-lg-6">
              <div class="hero-slider-content text-white pt-5">
                <h1 class="text-white"><span>Unique Initiative</span>  Empowering Rural & B-town Talent Through Technical Training</h1>
                <p class="lead">Stay ahead with creative and customized digital marketing. We blend innovation with technology to bring you powerful campaigns that increase engagement, sales, and brand loyalty across multiple platforms.</p>
                <div class="action-btns mt-3"><a href="{{ url('/get-quote') }}/" class="btn secondary-solid-btn">Start Now</a></div>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="image-wrap pt-5"><img src="{{ url('front/') }}/img/slider-four.png"
                  class="img-fluid custom-width" alt="hero" />
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--hero section end-->

  <!--promo section start-->
  <section class="promo-block ptb-100"> 
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="promo-item main-promo">
            <div class="promo-img"><img src="{{ url('front/') }}/img/increase.svg" alt="prevention" width="75"></div>
            <h5>Increased Traffic</h5>
            <p>Increase visitors to your site while improving visibility, engagement, and conversions.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="promo-item main-promo">
            <div class="promo-img"><img src="{{ url('front/') }}/img/interface.svg" alt="prevention" width="75"></div>
            <h5>Page Rankings</h5>
            <p>Measure your website’s SEO performance and track search engine rankings for better visibility.
</p>    
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="promo-item main-promo">
            <div class="promo-img"><img src="{{ url('front/') }}/img/search-engine.svg" alt="prevention" width="75">
            </div>
            <h5>Site Optimisation</h5>
            <p>Boost website speed, performance, and SEO for better user experience and higher rankings.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
          <div class="promo-item main-promo">
            <div class="promo-img"><img src="{{ url('front/') }}/img/consult.svg" alt="prevention" width="75"></div>
            <h5>Need Help? Call Now</h5>
            <a href="tel:+919818560331" class="emergency-btn">+91 98185 60331</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--promo section end-->

  <!--about us section start-->
  <section class="about-us-section ptb-100 gray-light-bg">
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
            <strong class="color-secondary">About Us</strong>
            <h3>Grow Your Business With Experts</h3>
            <span class="animate-border mb-4"></span>
            <p>Marketing your brand without an internet marketing strategy or using an inappropriate online marketing
              plan is a
              surefire way to lose money, waste time and get nowhere.</p>

            <ul class="list-unstyled tech-feature-list w-100 mb-3">
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span>Determine marketing gaps
              </li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Expand your reach</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Improve audience targeting
              </li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Save time, money and
                resources</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Increase traffic,
                leads and conversions</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Generate better, faster
                revenue</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Discover more opportunities
                to build brand awareness</li>

              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Take appropriate actions
              </li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Measure campaign
                performance and
                brand success</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Build a brand reputation
              </li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Scale business</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Compete with industry
                giants
              </li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Accomplish business goals
              </li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Manage your financial
                resources</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Rank better with us</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Our search engine</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Optimization (SEO) service
              </li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span> Get organic traffic from
                the best
                SEO agency in India</li>
            </ul>

            <div class="row hide-this">
              <div class="col-4">
                <div class="counter-single">
                  <h2 class="mb-0 color-secondary">4566</h2>
                  <strong>Total Project</strong>
                </div>
              </div>
              <div class="col-4">
                <div class="counter-single">
                  <h2 class="mb-0 color-secondary">25002</h2>
                  <strong>Total Customer</strong>
                </div>
              </div>
              <div class="col-4">
                <div class="counter-single">
                  <h2 class="mb-0 color-secondary">4566</h2>
                  <strong>Total Project</strong>
                </div>
              </div>
            </div>
            <div class="action-btns mt-4 hide-this">
              <a href="#" class="btn secondary-solid-btn mr-3">Start Now</a>
              <a href="#" class="btn secondary-outline-btn">Learn More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--about us section end-->

  <!--services section start-->
  <section class="services-section ptb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-9">
          <div class="section-heading text-center mb-5">
            <strong class="color-secondary">Services</strong>
            <h2>What We Do</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">We help businesses grow online through result-driven digital marketing, SEO, and custom website development solutions tailored to boost visibility, engagement, and conversions.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
          <a class="h-100" href="{{ url('static-website-designing') }}">
            <div class="services-single single-serv  text-center">
            <span class="ti-desktop icon-lg color-secondary d-block mb-4"></span>
            <h5>Website Designing</h5>
            <p class="mb-0">The best website design company in Gurugram, Britannica Bots, is known for offering
              cutting-edge web...</p>
            <span class="detail-link mt-4">Read more <span
                class="ti-arrow-right"></span></span>
          </div>
          </a>
          
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
          <a class="h-100" href="web-development" >
               <div class="services-single single-serv  text-center">
            <span class="ti-files icon-lg color-secondary d-block mb-4"></span>
            <h5>Website Development</h5>
            <p class="mb-0">With experience in the agile development process and a user-friendly admin panel,
              Britannica...</p>
            <p class="detail-link mt-4 font-weight-bold d-flex align-items-center justify-content-center">Read more <span class="ti-arrow-right ml-1"></span></p>
          </div>
          </a>
          
       
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
          <a class="h-100" href="{{ url('logo-design') }}">
              <div class="services-single single-serv  text-center">
            <span class="ti-brush icon-lg color-secondary d-block mb-4"></span>
            <h5>Graphic Designing</h5>
            <p class="mb-0">Britannica Bots creates amazing, ever-changing images that effectively communicate your
              company's...</p>
            <p class="detail-link mt-4 font-weight-bold d-flex align-items-center justify-content-center">Read more <span class="ti-arrow-right ml-1"></span></p>
          </div>
          </a>
        
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
          
          <a class="h-100" href="android-app-development">
              <div class="services-single single-serv  text-center">
            <span class="ti-mobile icon-lg color-secondary d-block mb-4"></span>
            <h5>App Development</h5>
            <p class="mb-0">Britannica Bots is a leading Android and iOS app development firm that creates native,
              cross-platform...</p>
            <p class="detail-link mt-4 font-weight-bold d-flex align-items-center justify-content-center">Read more <span class="ti-arrow-right ml-1"></span></p>
          </div>
          </a>
        
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
          <a class="h-100" href="{{ url('social-media-optimization') }}">
             <div class="services-single single-serv  text-center">
            <span class="ti-announcement icon-lg color-secondary d-block mb-4"></span>
            <h5>Digital Marketing</h5>
            <p class="mb-0">Boost audience, reach & traffic with SMO on Facebook, Instagram & more. Britannica Bots builds strong brands....</p>
            <p class="detail-link mt-4 font-weight-bold d-flex align-items-center justify-content-center">Read more <span class="ti-arrow-right ml-1"></span></p>
          </div>
          </a>
         
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
          <a class="h-100" href="{{ url('payment-gateway-integration') }}">
             <div class="services-single single-serv  text-center">
            <span class="ti-settings icon-lg color-secondary d-block mb-4"></span>
            <h5>Other Services</h5>
            <p class="mb-0">Integrate multiple payment gateways to process online orders securely. Trusted services in Gurugram...</p>
            <p class="detail-link mt-4 font-weight-bold d-flex align-items-center justify-content-center">Read more <span class="ti-arrow-right ml-1"></span></p>
          </div>
          </a>
         
        </div>
      </div>
    </div>
  </section>
  <!--services section end-->

  <!--work process section start-->
  <section class="work-process-section ptb-100 gray-light-bg hide-this">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-9">
          <div class="section-heading text-center">
            <strong class="color-secondary">Work Process</strong>
            <h2>Follow Few Steps</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">Globally reinvent cross-unit human capital whereas virtual catalysts for change.
              Assertively
              network accurate methods of empowerment rather than client-centered improvements.</p>
          </div>
        </div>
      </div>

      <div class="timeline">
        <div class="timeline__event animated fadeInDown timeline__event--type2">
          <div class="timeline__event__icon">1</div>
          <div class="timeline__event__date"><span class="ti-light-bulb icon-xl d-block"></span></div>
          <div class="timeline__event__content">
            <div class="timeline__event__title">Step 1 Heading Here</div>
            <div class="timeline__event__description">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab
                asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum
                quidem dolorem in!</p>
            </div>
          </div>
        </div>
        <div class="timeline__event animated fadeInDown delay-1s timeline__event--type2">
          <div class="timeline__event__icon">2</div>
          <div class="timeline__event__date"><span class="ti-brush icon-xl d-block"></span></div>
          <div class="timeline__event__content">
            <div class="timeline__event__title">Step 2 Heading Here</div>
            <div class="timeline__event__description">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab
                asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum
                quidem dolorem in!</p>
            </div>
          </div>
        </div>
        <div class="timeline__event animated fadeInDown delay-2s timeline__event--type3">
          <div class="timeline__event__icon">3</div>
          <div class="timeline__event__date"><span class="ti-vector icon-xl d-block"></span></div>
          <div class="timeline__event__content">
            <div class="timeline__event__title">Step 3 Heading Here</div>
            <div class="timeline__event__description">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab
                asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum
                quidem dolorem in!</p>
            </div>
          </div>
        </div>
        <div class="timeline__event animated fadeInDown delay-3s timeline__event--type1">
          <div class="timeline__event__icon">4</div>
          <div class="timeline__event__date"><span class="ti-desktop icon-xl d-block"></span></div>
          <div class="timeline__event__content">
            <div class="timeline__event__title">Step 4 Heading Here</div>
            <div class="timeline__event__description">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vel, nam! Nam eveniet ut aliquam ab
                asperiores, accusamus iure veniam corporis incidunt reprehenderit accusantium id aut architecto harum
                quidem dolorem in!</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!--work process section end-->

  <!--why choose us section start-->
  <section class="why-choose-us ptb-100">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-6 col-lg-5">
          <div class="why-choose-us-wrap">
            <strong class="color-secondary">Why Choose Us</strong>
            <h3>Best agency to grow your Business</h3>
            <span class="animate-border mb-4"></span>
            <p>Choose us for data-driven digital marketing that delivers real results. From SEO to paid ads and social media, we craft strategies that grow your brand, generate leads, and boost ROI. Transparent reporting, creative excellence, and performance-first mindset set us apart.</p>

            <div class="skill-content-wrap">
              <div class="progress-item">
                <div class="progress-title">
                  <h6>Technical skills<span class="float-right"><span class="progress-number">100</span>%</span>
                  </h6>
                </div>
                <div class="progress">
                  <span style="width:100%;"><span class="progress-line"></span></span>
                </div>
              </div>
              <div class="progress-item">
                <div class="progress-title">
                  <h6>Web Consulting<span class="float-right"><span class="progress-number">100</span>%</span>
                  </h6>
                </div>   
                <div class="progress">
                  <span style="width:100%;"><span class="progress-line"></span></span>
                </div>
              </div>
              <!-- <div class="progress-item">
                <div class="progress-title">
                  <h6>Web Consulting<span class="float-right"><span class="progress-number">85</span>%</span>
                  </h6>
                </div>
                <div class="progress">
                  <span style="width:85%;"><span class="progress-line"></span></span>
                </div>
              </div>
              <div class="progress-item">
                <div class="progress-title">
                  <h6>Technical skills<span class="float-right"><span class="progress-number">80</span>%</span>
                  </h6>
                </div>
                <div class="progress">
                  <span style="width:80%;"><span class="progress-line"></span></span>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="image-wrap">
            <img src="{{ url('front/') }}/img/why-choose-us.png" alt="why choose us" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--why choose us section end-->

  <!--call to action section start-->
  <section class="call-to-action-video hide-this">
    <div class="row m-0">
      <div class="col-lg-6 col-md-12 p-0">
        <div class="free-trial-image text-center">
          <img src="{{ url('front/') }}/img/cta-2-girl-img.jpg" alt="image" class="img-fluid">
          <a href="https://www.youtube.com/watch?v=9No-FiEInLA"
            class="popup-youtube video-play-icon white-bip shadow"><span class="ti-control-play"></span> </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 p-0">
        <div class="free-trial-content text-white">
          <h2 class="text-white">Best Consulting Every Business</h2>
          <p>Interactively evisculate performance based ROI whereas premier mindshare. Dramatically matrix
            real-time convergence rather than empowered manufactured products.</p>
          <a href="#" class="btn primary-solid-btn mt-3">Start Now</a>
        </div>
      </div>
    </div>
  </section>
  <!--call to action section end-->

  <!--portfolio section start-->
  <section class="our-portfolio-section ptb-100 hide-this">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-heading text-center mb-4">
            <strong class="color-secondary">Our Portfolio</strong>
            <h2>Case Studies</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process improvements. Intrinsicly
              develop end-to-end customer service without extensive data.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="text-center pb-2">
            <button type="button" class="filter-btn" data-mixitup-control data-filter="all">Digital Marketing</button>
            <button type="button" class="filter-btn" data-mixitup-control data-filter=".branding">Marketing
              Strategy</button>
            <button type="button" class="filter-btn" data-mixitup-control data-filter=".animation">Content
              Marketing</button>
            <button type="button" class="filter-btn" data-mixitup-control data-filter=".other">SEO Services</button>
          </div>
          <div class="portfolio-container" id="MixItUp">
            <div class="mix portfolio-item branding" data-ref="mixitup-target">
              <div class="portfolio-wrapper">
                <a href="project-details" target="_blank">
                  <div class="content-overlay"></div>
                  <img class="img-fluid" src="{{ url('front/') }}/img/portfolios/3.jpg" alt="portfolio" />
                  <div class="content-details fadeIn-bottom text-white">
                    <h5 class="text-white mb-1">Creative Design</h5>
                    <p>Design</p>
                  </div>
                </a>
                <div class="text-center p-4">
                  <h5 class="mb-1">Market Research Analysis</h5>
                  <span>Sales, SEO, Marketing</span>
                </div>
              </div>
            </div>
            <div class="mix portfolio-item other animation" data-ref="mixitup-target">
              <div class="portfolio-wrapper">
                <a href="project-details" target="_blank">
                  <div class="content-overlay"></div>
                  <img class="img-fluid" src="{{ url('front/') }}/img/portfolios/2.jpg" alt="portfolio" />
                  <div class="content-details fadeIn-bottom text-white">
                    <h5 class="text-white mb-1">Web UI/UX Design</h5>
                    <p>Web, Design</p>
                  </div>
                </a>
                <div class="text-center p-4">
                  <h5 class="mb-1">Market Research Analysis</h5>
                  <span>Sales, SEO, Marketing</span>
                </div>
              </div>
            </div>
            <div class="mix portfolio-item animation" data-ref="mixitup-target">
              <div class="portfolio-wrapper">
                <a href="project-details" target="_blank">
                  <div class="content-overlay"></div>
                  <img class="img-fluid" src="{{ url('front/') }}/img/portfolios/4.jpg" alt="portfolio" />
                  <div class="content-details fadeIn-bottom text-white">
                    <h5 class="text-white mb-1">Corporate Flyer Design</h5>
                    <p>Flyer Design</p>
                  </div>
                </a>
                <div class="text-center p-4">
                  <h5 class="mb-1">Market Research Analysis</h5>
                  <span>Sales, SEO, Marketing</span>
                </div>
              </div>
            </div>
            <div class="mix portfolio-item branding" data-ref="mixitup-target">
              <div class="portfolio-wrapper">
                <a href="project-details" target="_blank">
                  <div class="content-overlay"></div>
                  <img class="img-fluid" src="{{ url('front/') }}/img/portfolios/1.jpg" alt="portfolio" />
                  <div class="content-details fadeIn-bottom text-white">
                    <h5 class="text-white mb-1">Web UI/UX Design</h5>
                    <p>Web, Design</p>
                  </div>
                </a>
                <div class="text-center p-4">
                  <h5 class="mb-1">Market Research Analysis</h5>
                  <span>Sales, SEO, Marketing</span>
                </div>
              </div>
            </div>
            <div class="mix portfolio-item animation other" data-ref="mixitup-target">
              <div class="portfolio-wrapper">
                <a href="project-details" target="_blank">
                  <div class="content-overlay"></div>
                  <img class="img-fluid" src="{{ url('front/') }}/img/portfolios/5.jpg" alt="portfolio" />
                  <div class="content-details fadeIn-bottom text-white">
                    <h5 class="text-white mb-1">Wall Painting Design</h5>
                    <p>Painting Design</p>
                  </div>
                </a>
                <div class="text-center p-4">
                  <h5 class="mb-1">Market Research Analysis</h5>
                  <span>Sales, SEO, Marketing</span>
                </div>
              </div>
            </div>
            <div class="mix portfolio-item branding " data-ref="mixitup-target">
              <div class="portfolio-wrapper">
                <a href="project-details" target="_blank">
                  <div class="content-overlay"></div>
                  <img class="img-fluid" src="{{ url('front/') }}/img/portfolios/6.jpg" alt="portfolio" />
                  <div class="content-details fadeIn-bottom text-white">
                    <h5 class="text-white mb-1">Corporate Identity Design</h5>
                    <p>Corporate Design</p>
                  </div>
                </a>
                <div class="text-center p-4">
                  <h5 class="mb-1">Market Research Analysis</h5>
                  <span>Sales, SEO, Marketing</span>
                </div>
              </div>
            </div>
            <div class="gap"></div>
            <div class="gap"></div>
            <div class="gap"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--portfolio section end-->

  <!--testimonial section start-->
  <section class="testimonial-section ptb-100 hide-thi"
    style="background: url('{{ url('/front/') }}/img/testimonial-bg.png')no-repeat center center / cover">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-lg-5">
          <div class="testimonial-heading text-white">
            <h2 class="text-white">What Our Client Say About Us</h2>
            <span class="animate-border mb-4"></span>
            <p>Collaboratively actualize excellent schemas without effective models. Synergistically
              engineer functionalized applications rather than backend e-commerce.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="testimonial-content-wrap">
            <!-- <img src="{{ url('front/') }}/img/client-1.jpg"
              class="img-fluid testimonial-tb-shape shape-top" alt="testimonial shape"> -->
            <div class="owl-carousel owl-theme client-testimonial-1 custom-dot testimonial-shape">
              @foreach ($testimonial as $tes)
              <div class="item">
                <div class="testimonial-quote-wrap">
                  <div class="media author-info mb-3">
                    <!-- <div class="author-img mr-3">
                      <img src="{{ $tes->thumbnail_path==null?'uploads/default.png':asset($tes->thumbnail_path) }}"
                        alt="client" class="img-fluid">
                    </div> -->
                    <div class="media-body text-white">
                      <h5 class="mb-0 text-white">{{ $tes->name }}</h5>
                      <span>{{ $tes->company }}</span>
                    </div>
                    <span class="fas fa-quote-right icon-md text-white"></span>
                  </div>
                  <div class="client-say text-white">
                    <p>
                      {!! $tes->review !!}
                    </p>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <img src="{{ url('front/') }}/img/testimonial-arrow-bottom.png"
              class="img-fluid testimonial-tb-shape shape-bottom" alt="testimonial shape">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--testimonial section end-->

  <!--blog section start-->
  <section class="our-blog-section ptb-100 hide-this">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-9">
          <div class="section-heading text-center mb-5">
            <strong class="color-secondary">Latest News and Blog</strong>
            <h2>Latest Blog</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">Enthusiastically drive revolutionary opportunities before emerging leadership.
              Distinctively transform tactical methods of empowerment via resource.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div id="blog" class="owl-carousel owl-theme custom-dot">

          <div class="item">
            <div class="single-blog-card card border-0 shadow-sm">
              <div class="blog-img position-relative">
                <img src="{{ url('front/') }}/img/blog/1.jpg" class="card-img-top" alt="blog">
                <div class="meta-date"><strong>24</strong><small>Apr</small></div>
              </div>
              <div class="card-body">
                <div class="post-meta mb-2">
                  <ul class="list-inline meta-list">
                    <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span> Comments</li>
                    <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span> Share</li>
                  </ul>
                </div>
                <h3 class="h5 mb-2 card-title"><a href="#">Appropriately productize fully</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk.</p>
                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-blog-card card border-0 shadow-sm">
              <div class="blog-img position-relative">
                <img src="{{ url('front/') }}/img/blog/2.jpg" class="card-img-top" alt="blog">
                <div class="meta-date"><strong>24</strong><small>Apr</small></div>
              </div>
              <div class="card-body">
                <div class="post-meta mb-2">
                  <ul class="list-inline meta-list">
                    <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span> Comments</li>
                    <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span> Share</li>
                  </ul>
                </div>
                <h3 class="h5 mb-2 card-title"><a href="#">Quickly formulate backend</a></h3>
                <p class="card-text">Synergistically engage effective ROI after customer directed partnerships.</p>
                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-blog-card card border-0 shadow-sm">
              <div class="blog-img position-relative">
                <img src="{{ url('front/') }}/img/blog/3.jpg" class="card-img-top" alt="blog">
                <div class="meta-date"><strong>24</strong><small>Apr</small></div>
              </div>
              <div class="card-body">
                <div class="post-meta mb-2">
                  <ul class="list-inline meta-list">
                    <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span> Comments</li>
                    <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span> Share</li>
                  </ul>
                </div>
                <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>
                <p class="card-text">Holisticly mesh open-source leadership rather than proactive users.</p>
                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-blog-card card border-0 shadow-sm">
              <div class="blog-img position-relative">
                <img src="{{ url('front/') }}/img/blog/1.jpg" class="card-img-top" alt="blog">
                <div class="meta-date"><strong>24</strong><small>Apr</small></div>
              </div>
              <div class="card-body">
                <div class="post-meta mb-2">
                  <ul class="list-inline meta-list">
                    <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span> Comments</li>
                    <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span> Share</li>
                  </ul>
                </div>
                <h3 class="h5 mb-2 card-title"><a href="#">Appropriately productize fully</a></h3>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk.</p>
                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-blog-card card border-0 shadow-sm">
              <div class="blog-img position-relative">
                <img src="{{ url('front/') }}/img/blog/2.jpg" class="card-img-top" alt="blog">
                <div class="meta-date"><strong>24</strong><small>Apr</small></div>
              </div>
              <div class="card-body">
                <div class="post-meta mb-2">
                  <ul class="list-inline meta-list">
                    <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span> Comments</li>
                    <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span> Share</li>
                  </ul>
                </div>
                <h3 class="h5 mb-2 card-title"><a href="#">Quickly formulate backend</a></h3>
                <p class="card-text">Synergistically engage effective ROI after customer directed partnerships.</p>
                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="single-blog-card card border-0 shadow-sm">
              <div class="blog-img position-relative">
                <img src="{{ url('front/') }}/img/blog/3.jpg" class="card-img-top" alt="blog">
                <div class="meta-date"><strong>24</strong><small>Apr</small></div>
              </div>
              <div class="card-body">
                <div class="post-meta mb-2">
                  <ul class="list-inline meta-list">
                    <li class="list-inline-item"><i class="fas fa-heart mr-2"></i><span>45</span> Comments</li>
                    <li class="list-inline-item"><i class="fas fa-share-alt mr-2"></i><span>10</span> Share</li>
                  </ul>
                </div>
                <h3 class="h5 mb-2 card-title"><a href="#">Objectively extend extensive</a></h3>
                <p class="card-text">Holisticly mesh open-source leadership rather than proactive users.</p>
                <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--blog section end-->

  <!--clientle two section start-->
  <section class="team-two-section ptb-100 gray-light-bg hide-this">
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
            <h3 class="mb-1">Best Agency to Grow Your Business</h3>
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
