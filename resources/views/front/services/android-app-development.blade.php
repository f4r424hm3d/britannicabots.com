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
            <h1 class="text-white">Best Android App Development Company</h1>
            <p class="lead">OGEN Infosystem is Ranked as Best Website Designing Company in Delhi, We have 1000 +
              Customer All across the world, We believe in customer relationship not on High Ticket Proposals.</p>
            <p class="lead">" Awarded as Best Website Designing Company in Delhi "</p>
          </div>
        </div>
        <div class="col-md-12 col-lg-6">
          <div class="image-wrap wow fadeInRight animated" data-wow-duration="2s">
            <img src="{{ url('/front/') }}/img/android-app2.svg" class="img-fluid m-auto float-ani" alt="hero">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--banner section end-->

  <!--services box start-->
  <section class="why-choose-us ptb-70">
    <div class="container">
      <div class="row wow fadeInUp animated" data-wow-duration="1.5s">
        <div class="col-md-3 col-sm-6 col-12">
          <div class="promo-item pb-3 mt-0 single-promo-hover">
            <div class="promo-img">
              <span class="ti-bar-chart-alt icon-lg color-secondary d-flex float-left mr-2"></span>
              <span class="icon-md d-block font-weight-bold">50%</span>
            </div>
            <p>Britannica Bots can help you save up to 50% off your annual budget.</p>
            <div class="promo-bottom-shape">
              <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="promo-item pb-3 mt-0 single-promo-hover">
            <div class="promo-img">
              <span class="ti-shield icon-lg color-secondary d-flex float-left mr-2"></span>
              <span class="icon-md d-block font-weight-bold">100%</span>
            </div>
            <p>ou can have complete faith in us. We work with genuine intentions to improve.</p>
            <div class="promo-bottom-shape">
              <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="promo-item pb-3 mt-0 single-promo-hover">
            <div class="promo-img">
              <span class="ti-check-box icon-lg color-secondary d-flex float-left mr-2"></span>
              <span class="icon-md d-block font-weight-bold">100%</span>
            </div>
            <p>If you don't see results, you can get your money back.</p>
            <div class="promo-bottom-shape">
              <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12">
          <div class="promo-item pb-3 mt-0 single-promo-hover">
            <div class="promo-img">
              <span class="ti-headphone-alt icon-lg color-secondary d-flex float-left mr-2"></span>
              <span class="icon-md d-block font-weight-bold">FREE</span>
            </div>
            <p>Lifetime Website Support and Digital Marketing Suggestions.</p>
            <div class="promo-bottom-shape">
              <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--services box end-->

  <!--services section start-->
  <section class="about-us-section ptb-100 gray-light-bg">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pr-4">
            <h2><span class="color-secondary">Android App Development to</span> ease your Business</h2>
            <span class="animate-border mb-4"></span>
            <p class="lead">Get a website designed which helps you generating more leads and sales for your business
              with attractive & user-friendly design and effective call-to-action strategies. OGEN Infosystem is known
              as a best Website Designing Company in Delhi providing cutting-edge web design services globally,
              keeping in mind the most crucial features for a website such as it's responsive design, faster loading
              speed and user-friendly navigation. Our main focus, as a Website Designing Company is to provide
              strategic planning & industry’s best product to compete in the market.</p>
            <a href="get-quote.html" class="btn btn secondary-solid-btn"><span class="blink"></span> Lets talk with
              us</a>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="image-frame wow fadeInRight animated" data-wow-duration="2s"><img
              src="{{ url('/front/') }}/img/android-app.jpg" alt="about us" class="img-fluid"></div>
        </div>
      </div>
    </div>
  </section>
  <!--services section end-->

  <section class="why-choose-us ptb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-9">
          <div class="section-heading text-center">
            <strong class="color-secondary">Providing Services</strong>
            <h2>Android Application Development Services</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">Next-Gen Android App DevelopmentProfessional Excellence</p>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="why-choose-us-wrap wow zoomInDown animated" data-wow-duration="2s">
            <div class="row">
              <div class="col-md-6 col-sm-6 promo-col">
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Content Strategy</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Content Development</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Content Promotion</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">SEO Content Writing Services</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 promo-col">
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Management And Scheduling</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Performance Tracking</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Content Optimization</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Email Marketing</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="image-wrap wow fadeInRight  animated" data-wow-duration="2s"><img
              src="{{ url('/front/') }}/img/android-app3.svg" alt="shape" class="img-fluid float-ani"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="why-choose-us ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
          <div class="section-heading text-center">
            <strong class="color-secondary">Win & Wow With</strong>
            <h2>Our Core Services</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
          </div>

          <div class="timeline">
            <div class="timeline__event animated fadeInDown timeline__event--type2">
              <div class="timeline__event__icon">1</div>
              <div class="timeline__event__date"><span class="ti-light-bulb icon-xl d-block"></span></div>
              <div class="timeline__event__content">
                <div class="timeline__event__title">Strategy</div>
                <div class="timeline__event__description">
                  <p>We craft MVP's development strategy that allows a team of professional developers to validate or
                    invalidate a product's functionality and assumptions. It also helps gain data about the reaction
                    and experience of target users to improve functionality.</p>
                </div>
              </div>
            </div>
            <div class="timeline__event animated fadeInDown delay-1s timeline__event--type2">
              <div class="timeline__event__icon">2</div>
              <div class="timeline__event__date"><span class="ti-brush icon-xl d-block"></span></div>
              <div class="timeline__event__content">
                <div class="timeline__event__title">Design</div>
                <div class="timeline__event__description">
                  <p>MVP design is a comparatively effortless process that provides an efficient MVP and the end-user
                    real value. Methodologies like Agile, Scrumban, DevOps, CI-CD are used to design and develop MVPs
                    for different development projects.</p>
                </div>
              </div>
            </div>
            <div class="timeline__event animated fadeInDown delay-2s timeline__event--type3">
              <div class="timeline__event__icon">3</div>
              <div class="timeline__event__date"><span class="ti-vector icon-xl d-block"></span></div>
              <div class="timeline__event__content">
                <div class="timeline__event__title">Development</div>
                <div class="timeline__event__description">
                  <p>Our MVP development services enables businesses to bank on design, development, and growth of the
                    Minimum Value Product (MVP) with experienced developers. Result-oriented consultancy, including
                    guidance on how to pivot depending on product response, is part of MVP development services.</p>
                </div>
              </div>
            </div>
            <div class="timeline__event animated fadeInDown delay-3s timeline__event--type1">
              <div class="timeline__event__icon">4</div>
              <div class="timeline__event__date"><span class="ti-mobile icon-xl d-block"></span></div>
              <div class="timeline__event__content">
                <div class="timeline__event__title">Testing</div>
                <div class="timeline__event__description">
                  <p>The primary use of MVP is to build a prototype of future applications and test in real-time to
                    understand the errors and validate or invalidate the test idea. The fact that MVP is purely for
                    testing provides many tools for all-purpose, some of the tools are, Macaw, Canva, and Crello.</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>

  <!--12 box start-->
  <section class="why-choose-us ptb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12 text-center">
          <strong class="color-secondary">Web Designing Services Industry</strong>
          <div class="section-heading text-center">
            <h2>Industry We Serve</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead mb-4">We offer Next-Generation Web Services to the Professional Industry.</p>
          </div>
        </div>
      </div>

      <div class="row mt-2 wow fadeInUp animated" data-wow-duration="1.5s">
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{ url('/front/') }}/img/icons/autoh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Automobile Engineering</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{ url('/front/') }}/img/icons/b2bh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>B2B & B2C Portal</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{ url('/front/') }}/img/icons/bankh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Banking & Finance</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{ url('/front/') }}/img/icons/consth.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Construction & Interiors</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{ url('/front/') }}/img/icons/eduh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Education & Learning</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{ url('/front/') }}/img/icons/eventh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Events & Banking</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img
              src="{{ url('/front/') }}/img/icons/insuranceh.png" height="60">
          </div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Healthcare & Fitness</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{ url('/front/') }}/img/icons/logih.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Transportation & Logistics</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{ url('/front/') }}/img/icons/ecomh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Ecommerce Solution</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{ url('/front/') }}/img/icons/plantah.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Agriculture</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{ url('/front/') }}/img/icons/mediah.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Entertainment Media</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{ url('/front/') }}/img/icons/taxih.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Cab Aggregation</b>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--12 box end-->

  <!--three box start-->
  <section class="why-choose-us ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-9">
          <div class="section-heading text-center">
            <h2><strong class="color-secondary">Why Are We the Best Choice for</strong><br>Website Design?</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">There are various companies that offer web services, but only a few are well-liked by
              customers.</p>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div
            class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown animated"
            data-wow-duration="2s">
            <span class="ti-check-box icon-lg color-secondary d-block mb-4"></span>
            <h5>Effective Layout and Navigation</h5>
            <p>Our designers are experts in UX/UI design and thus build sleek and appealing design layouts to capture
              the attention of visitors and user-friendly navigation around the website to keep visitors on the
              website for a longer period of time.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div
            class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown animated"
            data-wow-duration="2.5s">
            <span class="ti-shield icon-lg color-secondary d-block mb-4"></span>
            <h5>Information is easily accessible</h5>
            <p>Because our system is CRM-enabled, you can simply check task status, directly communicate with task
              assignees, assign tasks for the project, conduct task discussions, and receive specialised assistance
              even after the project is over.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div
            class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown animated"
            data-wow-duration="3s">
            <span class="ti-settings icon-lg color-secondary d-block mb-4"></span>
            <h5>Maintenance and Lifetime Warranty</h5>
            <p>Our one-year free maintenance service and yearly dedicated maintenance service with lifetime code
              guarantee make website maintenance hassle-free. With our free one-year hosting, you can forget about
              website maintenance.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--three box end-->


  <!--six box start-->
  <section class="why-choose-us ptb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
          <div class="section-heading">
            <h2>What we can help the <strong class="color-secondary">Business Owners with?</strong></h2>
            <span class="animate-border mb-4"></span>
            <p class="lead">We help the businesses achieve their goals with their good collection of resources.In the
              web development companies like us - there are business analysts, QA experts, developers and all the
              other specialists who come together to create a website as per your business’ requirements.</p>
            <p class="lead">These web development experts who enhance the user experiences while building some amazing
              & visually appealing UI's.</p>
            <p class="lead">In fact, they take care of all the necessary aspects of web designing process. As we have
              discussed earlier that a website’s design is one of the most important aspects, the business owners
              prefer to get in touch with adept web developers.</p>
            <p class="lead"><strong>Let’s have a close look at the benefits of getting in touch with these
                professionals:</strong></p>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown animated"
            data-wow-duration="2s">
            <h5 class="mb-2">They Create Seamless Experience</h5>
            <p>The experience of navigating on your website should be seamless for your visitors. If your visitors
              find it difficult to land at the pages they want to be on, might hurt their experience. Hence, good the
              professional web designers ensure that the visitors browse your website without facing difficulty.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown animated"
            data-wow-duration="2.5s">
            <h5 class="mb-2">Your Website Will Have Aesthetic Layouts</h5>
            <p>It is important for businesses to get their website designed with aesthetic layouts and amazing
              features. And, web designers do the same. They integrate the appealing visual graphics and additional
              features in the websites.<br><span class="hidden-xs">&nbsp;</span></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown animated"
            data-wow-duration="3s">
            <h5 class="mb-2">You Will Get A Responsive Website</h5>
            <p>In this competitive world, the ease of use decides the success of a website. Hence, a website should be
              mobile-friendly, or responsive. Today, more people like to get access to any website through mobile
              devices. So, it is imperative that you being a business have a mobile-friendly website. A responsive and
              faster loading website can broaden your customer base.<br><span class="hidden-xs">&nbsp;</span></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown animated"
            data-wow-duration="3.5s">
            <h5 class="mb-2">You Can Target Your Audience Effectively</h5>
            <p>Everything starts with a great design because the visitor, who is comfortable with the design of your
              website and its navigation, will more probably retain with your brand. However, you need to target your
              audience effectively for getting more customers. However, the web designers consider the psychological
              aspects of the target audience while designing and developing the website.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--six box end-->


  <!--testimonial section start-->
  <section class="testimonial-section ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
          <div class="section-heading mb-5 text-center">
            <h2>Why <strong class=" color-secondary">1000+ brands trust us</strong> with their Website Designing Needs
            </h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">
              Rapidiously morph transparent internal or "organic" sources whereas resource sucking
              e-business. Conveniently innovate compelling internal.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div id="blog" class="owl-carousel owl-theme custom-dot mb-5">
            <div class="item">
              <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                <blockquote>
                  Assertively procrastinate distributed relationships whereas equity invested intellectual capital
                  everything energistically underwhelm proactive.
                </blockquote>
                <div class="client-ratting mt-2">
                  <ul class="list-inline client-ratting-list">
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item rating"> (5.0)</li>
                  </ul>
                  <h6 class="font-weight-bold"><small class="font-weight-lighter">BizBite</small></h6>
                </div>
              </div>
              <div class="client-info-wrap d-flex align-items-center mt-5">
                <div class="client-img mr-3">
                  <img src="{{ url('/front/') }}/img/client-1.jpg" alt="client" width="60"
                    class="img-fluid rounded-circle shadow-sm" />
                </div>
                <div class="client-info">
                  <h5 class="mb-0">Austin Cesar</h5>
                  <p class="mb-0">ThemeTags</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                <blockquote>
                  Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly
                  revolutionize worldwide users vis-a-vis enterprise best practices.
                </blockquote>
                <div class="client-ratting mt-2">
                  <ul class="list-inline client-ratting-list">
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item rating"> (5.0)</li>
                  </ul>
                  <h6 class="font-weight-bold"><small class="font-weight-lighter">Prolex</small></h6>
                </div>
              </div>
              <div class="client-info-wrap d-flex align-items-center mt-5">
                <div class="client-img mr-3">
                  <img src="{{ url('/front/') }}/img/client-2.jpg" alt="client" width="60"
                    class="img-fluid rounded-circle shadow-sm" />
                </div>
                <div class="client-info">
                  <h5 class="mb-0">Pirtle Karol</h5>
                  <p class="mb-0">ThemeTags</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                <blockquote>
                  Interactively grow backend scenarios through one paradigms. Distinctively and communicate efficient
                  information without effective meta-services.
                </blockquote>
                <div class="client-ratting mt-2">
                  <ul class="list-inline client-ratting-list">
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item rating"> (5.0)</li>
                  </ul>
                  <h6 class="font-weight-bold"><small class="font-weight-lighter">AppCo</small></h6>
                </div>
              </div>
              <div class="client-info-wrap d-flex align-items-center mt-5">
                <div class="client-img mr-3">
                  <img src="{{ url('/front/') }}/img/client-3.jpg" alt="client" width="60"
                    class="img-fluid rounded-circle shadow-sm" />
                </div>
                <div class="client-info">
                  <h5 class="mb-0">Aminul Islam</h5>
                  <p class="mb-0">ThemeTags</p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-single shadow-sm gray-light-bg rounded p-4">
                <blockquote>
                  Intrinsicly facilitate functional imperatives without next-generation meta-services. Compellingly
                  revolutionize worldwide users vis-a-vis enterprise best practices.
                </blockquote>
                <div class="client-ratting mt-2">
                  <ul class="list-inline client-ratting-list">
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item"><span class="fas fa-star ratting-color"></span></li>
                    <li class="list-inline-item rating"> (5.0)</li>
                  </ul>
                  <h6 class="font-weight-bold"><small class="font-weight-lighter">Datrics</small></h6>
                </div>
              </div>
              <div class="client-info-wrap d-flex align-items-center mt-5">
                <div class="client-img mr-3">
                  <img src="{{ url('/front/') }}/img/client-4.jpg" alt="client" width="60"
                    class="img-fluid rounded-circle shadow-sm" />
                </div>
                <div class="client-info">
                  <h5 class="mb-0">Pirtle Karol</h5>
                  <p class="mb-0">ThemeTags</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--testimonial section end-->


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
