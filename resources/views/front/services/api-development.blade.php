@extends('front.layouts.main')
@push('seo_meta_tag')
@include('front.layouts.static_page_meta_tag')
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
            <h1 class="text-white">API Development company in Gurugram</h1>
            <p class="lead">Britannica Bots is a custom API development services and integration solutions. From simple
              API integration services to complex or multiple end-points custom API development, we can create a
              solution that is easy to consume, well documented, and truly dependable.<br>
              We have a professional team of API developers in India who can construct web APIs that are completely
              scalable, secure, and match your business requirements. Our custom API development services will enrich
              and enhance your services in new and creative ways.</p>
          </div>
        </div>

        <div class="col-md-12 col-lg-6 wow fadeInRight animated" data-wow-duration="2s">
          <div class="image-wrap"><img src="{{url('front')}}/img/api-development.png" alt="hero"
              class="img-fluid float-ani"></div>
        </div>
      </div>
    </div>
  </section>
  <!--banner section end-->

  <!--services box start-->
  <section class="why-choose-us ptb-70">
    <div class="container">
      <div class="row wow fadeInUp animated" data-wow-duration="1.5s">
        <div class="col-md-3 col-sm-6 col-12 mb-4">
          <div class="promo-item main-promo single-promo-hover">
            <div class="promo-img">
              <span class="ti-bar-chart-alt icon-lg color-secondary d-flex float-left mb-3"></span>
              <span class="icon-md d-block font-weight-bold">50%</span>
            </div>
            <p>Britannica Bots helps you save up to 50% off your annual budget.</p>
            <div class="promo-bottom-shape">
              <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 mb-4">
          <div class="promo-item main-promo single-promo-hover">
            <div class="promo-img">
              <span class="ti-shield icon-lg color-secondary d-flex float-left mb-3"></span>
              <span class="icon-md d-block font-weight-bold">100%</span>
            </div>
            <p>You can have complete faith in us. We work with genuine intentions to improve.</p>
            <div class="promo-bottom-shape">
              <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 mb-4">
          <div class="promo-item main-promo single-promo-hover">
            <div class="promo-img">
              <span class="ti-check-box icon-lg color-secondary d-flex float-left mb-3"></span>
              <span class="icon-md d-block font-weight-bold">100%</span>
            </div>
            <p>If you don't see results, you can get your money back.</p>
            <div class="promo-bottom-shape">
              <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 mb-4">
          <div class="promo-item main-promo single-promo-hover">
            <div class="promo-img">
              <span class="ti-headphone-alt icon-lg color-secondary d-flex float-left mb-3"></span>
              <span class="icon-md d-block font-weight-bold">FREE</span>
            </div>
            <p>Lifetime Website Support and Digital Marketing Suggestions.</p>
            <div class="promo-bottom-shape">
              <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--services box end-->

  <!--about section start-->
  <section class="about-us-section ptb-100 gray-light-bg">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pr-4">
            <h2><span class="color-secondary">Services for API</span> Development and Integration</h2>
            <span class="animate-border mb-4"></span>
            <p class="lead">Our API development and integration team is well-versed in the technologies behind APIs and
              has a firm grasp of the end-to-end procedure (managing, monitoring, and monetizing). We have also
              developed third-party APIs, open-source APIs, custom APIs, and REST APIs for WordPress.</p>
            <p class="lead">We have assisted clients in the USA, UK, Canada, Singapore, and other countries by
              conceptualising, administering, and operating high-performance API programmes to accomplish their business
              objectives. We are a well regarded API development firm.</p>
            <a href="{{url('get-quote')}}" class="btn btn secondary-solid-btn"><span class="blink"></span> Lets talk
              with
              us</a>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="image-frame wow fadeInRight animated" data-wow-duration="2s"><img
              src="{{url('front')}}/img/api-development.jpg" alt="about us" class="img-fluid"></div>
        </div>
      </div>
    </div>
  </section>
  <!--services section end-->

  <section class="why-choose-us ptb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
          <div class="section-heading text-center">
            <h2>Service Offerings</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p>Our Custom API Development Service Offerings</p>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="why-choose-us-wrap wow zoomInDown animated" data-wow-duration="2s">
            <div class="row">
              <div class="col-md-6 col-sm-6 promo-col">
                <div class="promo-item pb-2">
                  <h5 class="mb-4">API Integration & Development Services</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Source Code Repository Integration</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">API as a Service</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 promo-col">
                <div class="promo-item pb-2">
                  <h5 class="mb-4">API Development Platform</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Marketing Software API Integration</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Custom Web API Solutions</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="image-wrap wow fadeInRight  animated" data-wow-duration="2s"><img
              src="{{url('front')}}/img/api-development.svg" alt="shape" class="img-fluid float-ani"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="why-choose-us ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
          <div class="section-heading text-center">
            <h3>Your Systems Will Be Simplified by Our API Services,<br>Cutting Down on Operating and Maintenance Costs.
            </h3>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
          </div>

          <div class="timeline">
            <div class="timeline__event animated fadeInDown timeline__event--type2">
              <div class="timeline__event__icon">1</div>
              <div class="timeline__event__date"><span class="ti-light-bulb icon-xl d-block"></span></div>
              <div class="timeline__event__content">
                <div class="timeline__event__title">Years of experience and work with reputable clients</div>
                <div class="timeline__event__description">
                  <p>Since 2012, we have been building amazing websites and apps and assisting hundreds of companies
                    with their online marketing initiatives. We design websites that are appealing, easy to use, and
                    produce results for your business. With results-driven e-marketing solutions, we help our clients
                    grow their businesses by leveraging our knowledge and experience.</p>
                </div>
              </div>
            </div>
            <div class="timeline__event animated fadeInDown delay-1s timeline__event--type2">
              <div class="timeline__event__icon">2</div>
              <div class="timeline__event__date"><span class="ti-brush icon-xl d-block"></span></div>
              <div class="timeline__event__content">
                <div class="timeline__event__title">We ask, listen, understand and then work</div>
                <div class="timeline__event__description">
                  <p>Each website project is taken care at utmost level. We first develop strong understanding of your
                    requirement which help us to create the best outcome which solves your business purpose. We keep our
                    work process transparent and involve our clients for all important steps, incorporating feedback
                    finalizing the website. It's a collaborative process of discovery that takes patience, experience,
                    and communication.</p>
                </div>
              </div>
            </div>
            <div class="timeline__event animated fadeInDown delay-2s timeline__event--type3">
              <div class="timeline__event__icon">3</div>
              <div class="timeline__event__date"><span class="ti-vector icon-xl d-block"></span></div>
              <div class="timeline__event__content">
                <div class="timeline__event__title">We are goal-oriented, ROI-driven, and ROI-focused</div>
                <div class="timeline__event__description">
                  <p>All of your marketing initiatives can be streamlined, monitored, and assessed with a great website.
                    We understand that your website is important to your business and that you want it to deliver the
                    outcomes you are hoping for. We build SEO-friendly, mobile-responsive websites that include all the
                    essential tools for tracking and analysing website performance.</p>
                </div>
              </div>
            </div>
            <div class="timeline__event animated fadeInDown delay-3s timeline__event--type1">
              <div class="timeline__event__icon">4</div>
              <div class="timeline__event__date"><span class="ti-mobile icon-xl d-block"></span></div>
              <div class="timeline__event__content">
                <div class="timeline__event__title">UTILIZE QUALITY CHECKS FOR STANDARD CODINGS</div>
                <div class="timeline__event__description">
                  <p>Our web design and development team uses clean HTML5 and CSS3 and the most recent coding
                    techniques. Every one of our websites is designed to look and function beautifully on whatever
                    device your users are using to view it. We are aware that happy customers are a direct result of
                    fast load times. Google has been very clear that they favour websites with quick responses.</p>
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
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/autoh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Automobile Engineering</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/b2bh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>B2B & B2C Portal</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/bankh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Banking & Finance</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/consth.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Construction & Interiors</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/eduh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Education & Learning</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/eventh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Events & Banking</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/insuranceh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Healthcare & Fitness</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/logih.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Transportation & Logistics</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/ecomh.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Ecommerce Solution</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/plantah.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Agriculture</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/mediah.png"
              height="60"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Entertainment Media</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class="services-single p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/taxih.png"
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
              the attention of visitors and user-friendly navigation around the website to keep visitors on the website
              for a longer period of time.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div
            class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown animated"
            data-wow-duration="2.5s">
            <span class="ti-shield icon-lg color-secondary d-block mb-4"></span>
            <h5>Information is easily accessible</h5>
            <p>Because our system is CRM-enabled, you can simply check task status, directly communicate with task
              assignees, assign tasks for the project, conduct task discussions, and receive specialised assistance even
              after the project is over.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div
            class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown animated"
            data-wow-duration="3s">
            <span class="ti-settings icon-lg color-secondary d-block mb-4"></span>
            <h5>Maintenance and Ongoing Support</h5>
            <p>We offer three maintenance packages – Basic, Standard, and Premium – covering regular updates, bug fixes, security checks, performance optimization, and priority support based on your needs.</p>
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
            <h2>What services can we provide to <strong class="color-secondary">business owners?</strong></h2>
            <span class="animate-border mb-4"></span>
            <p class="lead">With our extensive resource pool, we assist businesses in achieving their objectives.</p>
            <p class="lead">Business analysts, QA experts, developers, and other specialists work together in web
              development businesses like ours to produce a website that meets the needs of your company.</p>
            <p class="lead">web development experts improve user experiences by creating innovative and visually
              appealing user interfaces.</p>
            <p class="lead">In reality, they handle all of the essential aspects of the web design process. Considering
              that the design of a website is one of the most crucial parts, business owners prefer to work with skilled
              web developers.</p>
            <p class="lead"><strong>Let's take a closer look at the advantages of visiting these experts:</strong></p>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown animated"
            data-wow-duration="2s">
            <h5 class="mb-2">They Provide a Seamless Experience</h5>
            <p>Your visitors should have an easy time surfing your website. If your visitors have trouble getting to the
              pages they want to see, it may distract from their overall experience. As a result, good professional web
              designers ensure that visitors can easily navigate your website.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown animated"
            data-wow-duration="2.5s">
            <h5 class="mb-2">Aesthetic Website Layouts</h5>
            <p>It is essential for businesses to have their websites developed with appealing layouts and exciting
              features. Web designers are no exception. They incorporate attractive visual elements and other functions
              into their websites.<br><span class="hidden-xs">&nbsp;</span></p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown animated"
            data-wow-duration="3s">
            <h5 class="mb-2">A Responsive Website</h5>
            <p>In today's competitive environment, the simplicity of use of a website determines its success. As a
              result, a website must be mobile-friendly or responsive. Nowadays, more people choose to browse any
              website using mobile devices. As a result, it is critical that you have a mobile-friendly website as a
              business. An adaptable and quick-loading website might help you expand your customer base.</p>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown animated"
            data-wow-duration="3.5s">
            <h5 class="mb-2">You Can Effectively Target Your Audience</h5>
            <p>Everything starts with a fantastic design since a visitor who is comfortable with the look and navigation
              of your website is more likely to stick with your brand. However, in order to gain more customers, you
              must successfully target your audience. Moreover, when creating and constructing a website, web designers
              consider the psychological traits of the intended audience.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!--six box end-->


  <!--testimonial section start-->
  <section class="testimonial-section ptb-100 gray-light-bg hide-this">
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
                  <img src="{{url('front')}}/img/client-1.jpg" alt="client" width="60"
                    class="img-fluid rounded-circle shadow-sm" />
                </div>
                <div class="client-info">
                  <h5 class="mb-0">Aarav Sharma</h5>
                  <p class="mb-0">Sahyadri Industries</p>
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
                  <img src="{{url('front')}}/img/client-2.jpg" alt="client" width="60"
                    class="img-fluid rounded-circle shadow-sm" />
                </div>
                <div class="client-info">
                  <h5 class="mb-0">Neha Deshmukh</h5>
                  <p class="mb-0">Sunrise AgroTech Pvt. Ltd.</p>
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
                  <img src="{{url('front')}}/img/client-3.jpg" alt="client" width="60"
                    class="img-fluid rounded-circle shadow-sm" />
                </div>
                <div class="client-info">
                  <h5 class="mb-0">Arjun Nair</h5>
                  <p class="mb-0">Sunrise AgroTech Pvt. Ltd.</p>
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
                  <img src="{{url('front')}}/img/client-4.jpg" alt="client" width="60"
                    class="img-fluid rounded-circle shadow-sm" />
                </div>
                 <div class="client-info">
                  <h5 class="mb-0">Rahul Sharma</h5>
                  <p class="mb-0">Bright Future Solutions</p>
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
            <a href="{{url('contact')}}" class="btn secondary-solid-btn">Get in touch with us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--call to action section end-->

</div>
<!--body content wrap end-->
@endsection
