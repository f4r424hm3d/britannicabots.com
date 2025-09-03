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
            <h1 class="text-white">Best Android App Development Company in Gurugram</h1>
            <p class="lead">Britannica Bots is widely recognised as the best Android App Development Company in Gurugram
              since, and we have worked with over 100 firms globally. We prioritise customer relationships above
              high-ticket proposals.</p>
          </div>
        </div>
        <div class="col-md-12 col-lg-6">
          <div class="image-wrap wow fadeInRight animated" data-wow-duration="2s">
            <img src="{{url('front')}}/img/android-app2.svg" class="img-fluid m-auto float-ani" alt="hero">
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
        <div class="col-md-3 col-sm-6 col-12 mb-4">
          <div class="promo-item main-promo single-promo-hover">
            <div class="promo-img">
              <span class="ti-bar-chart-alt icon-lg color-secondary d-flex float-left mb-3"></span>
              <span class="icon-md d-block font-weight-bold"></span>
            </div>
            <h4>Save up to 50%</h4> 
            <p>Britannica Bots helps you cut marketing costs by saving up to 50% of your annual budget.</p>
            <div class="promo-bottom-shape">
              <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 mb-4">
          <div class="promo-item main-promo single-promo-hover">
            <div class="promo-img">
              <span class="ti-shield icon-lg color-secondary d-flex float-left mb-3"></span>
              <span class="icon-md d-block font-weight-bold"></span>
            </div>
            <h4>Trusted & Reliable</h4>
            <p>Count on us for genuine, transparent strategies designed to grow your business.</p>
            <div class="promo-bottom-shape">
              <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 mb-4">
          <div class="promo-item main-promo single-promo-hover">
            <div class="promo-img">
              <span class="ti-check-box icon-lg color-secondary d-flex float-left mb-3"></span>
              <span class="icon-md d-block font-weight-bold"></span>
            </div>
            <h4>Results Guaranteed</h4>
            <p>We’re confident in our work—if you don’t see improvement, we’ll make it right.</p>
            <div class="promo-bottom-shape">
              <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-12 mb-4">
          <div class="promo-item main-promo single-promo-hover">
            <div class="promo-img">
              <span class="ti-headphone-alt icon-lg color-secondary d-flex float-left mb-3"></span>
              <span class="icon-md d-block font-weight-bold"></span>
            </div>
            <h4>Ongoing Support</h4>
            <p>Enjoy lifetime website assistance along with expert digital marketing guidance.</p>
            <div class="promo-bottom-shape">
              <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
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
            <h2><span class="color-secondary">Android App Development</span> Company in Gurugram</h2>
            <span class="animate-border mb-4"></span>
            <p>Britannica Bots is a top-tier mobile app development company in Gurugram with a diverse portfolio of
              talents and diversifications. Our professional android app developers have successfully delivered various
              scalable mobile applications in areas such as Healthcare, Ed-Tech, Social Media & Entertainment, Mobility
              & Travel, E-commerce, Fintech, and many others.</p>
            <p>Our skilled partners can help you with all application services, including mobile app creation,
              maintenance support, cloud migration, update connections, modernization, API and third-party integrations,
              security management, and much more.</p>
            <p>Britannica Bots is backed by an experienced staff of development prodigies eager to take on all types of
              app development projects, from native Android applications and hybrid apps to complex Progressive Web Apps
              (PWAs). You may be confident in the proficiency and dependability of the programmes with which we are
              affiliated since we are more than just vendors; instead, we are ready to work with your organisation and
              have your back in all difficult times!</p>
            <a href="{{url('get-quote')}}" class="btn btn secondary-solid-btn"><span class="blink"></span> Lets talk
              with
              us</a>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="image-frame wow fadeInRight animated" data-wow-duration="2s"><img
              src="{{url('front')}}/img/android-app.jpg" alt="about us" class="img-fluid"></div>
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
            <h2>We provide App Development Services</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">Britannica Bots is the top mobile app development company in Gurugram, providing a premium
              variety of app development services such as the ones listed below.</p>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-7">
         <div class="mb-4">
           <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown  animated"
            data-wow-duration="2s">
            <h5 class="mb-2">Native Applications</h5>
            <p>Our skilled app developers will work with you to offer the best mobile user experiences in order to scale
              your business's growth and reach. We create competent apps that are linked with your business aims and
              seek for greater possibilities.</p>
          </div>
         </div>
         <div class="mb-4">
           <div class="services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown  animated"
            data-wow-duration="3s">
            <h5 class="mb-2">Apps for Android</h5>
            <p>Britannica Bots provides technical expertise in Android applications ranging from basic to complex
              features like as API integrations, third-party integrations, payment unification, and much more.</p>
          </div>
         </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="image-wrap wow fadeInRight  animated" data-wow-duration="2s"><img
              src="{{url('front')}}/img/android-app3.svg" alt="shape" class="img-fluid float-ani"></div>
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
            <h2>Our Easy-to-Use Mobile App Development Method</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
          </div>

          <div class="timeline">
            <div class="timeline__event animated fadeInDown timeline__event--type2">
              <div class="timeline__event__icon">1</div>
              <div class="timeline__event__date"><span class="ti-light-bulb icon-xl d-block"></span></div>
              <div class="timeline__event__content">
                <div class="timeline__event__title">Planning</div>
                <div class="timeline__event__description">
                  <p>Our team puts in the most effort throughout the planning process to avoid or lessen resource
                    exhaustion and to stay on track when executing a project. An acceptable plan of action is produced,
                    as well as a basic summary of the project defining who gets to do what and with what resources.</p>
                </div>
              </div>
            </div>
            <div class="timeline__event animated fadeInDown delay-1s timeline__event--type2">
              <div class="timeline__event__icon">2</div>
              <div class="timeline__event__date"><span class="ti-brush icon-xl d-block"></span></div>
              <div class="timeline__event__content">
                <div class="timeline__event__title">App Development</div>
                <div class="timeline__event__description">
                  <p>Our design team will begin by designing the project in accordance with the objectives and available
                    resources. Our staff strives for competency by putting themselves in the shoes of end customers and
                    learning what will work in real time.</p>
                </div>
              </div>
            </div>
            <div class="timeline__event animated fadeInDown delay-2s timeline__event--type3">
              <div class="timeline__event__icon">3</div>
              <div class="timeline__event__date"><span class="ti-vector icon-xl d-block"></span></div>
              <div class="timeline__event__content">
                <div class="timeline__event__title">Testing</div>
                <div class="timeline__event__description">
                  <p>Following the development and design phases, a pre-final version of the project is generated and
                    tested to ensure adequate input and integration. Client comments, as well as user surveys, are
                    sought at this point to assure the best from our end!</p>
                </div>
              </div>
            </div>
            <div class="timeline__event animated fadeInDown delay-3s timeline__event--type1">
              <div class="timeline__event__icon">4</div>
              <div class="timeline__event__date"><span class="ti-mobile icon-xl d-block"></span></div>
              <div class="timeline__event__content">
                <div class="timeline__event__title">Deployment</div>
                <div class="timeline__event__description">
                  <p>The app has finally been released following successful testing and adjustments. At this point, the
                    project will be live and ready to attract potential customers.</p>
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
          
          <div class=" p-4 gradient-bg roundedUp">
            <img src="{{url('front')}}/img/icons/autoh.png"
          
              class="main-roundlap"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Automobile Engineering</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class=" p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/b2bh.png"
              class="main-roundlap"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>B2B & B2C Portal</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class=" p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/bankh.png"
              class="main-roundlap"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Banking & Finance</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class=" p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/consth.png"
              class="main-roundlap"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Construction & Interiors</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class=" p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/eduh.png"
              class="main-roundlap"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Education & Learning</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class=" p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/eventh.png"
              class="main-roundlap"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Events & Banking</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class=" p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/insuranceh.png"
              class="main-roundlap"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Healthcare & Fitness</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class=" p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/logih.png"
              class="main-roundlap"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Transportation & Logistics</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class=" p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/ecomh.png"
              class="main-roundlap"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Ecommerce Solution</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class=" p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/plantah.png"
              class="main-roundlap"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Agriculture</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class=" p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/mediah.png"
              class="main-roundlap"></div>
          <div class="p-3 white-bg roundedDown shadow-lg">
            <b>Entertainment Media</b>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 text-center mb-4">
          <div class=" p-4 gradient-bg roundedUp"><img src="{{url('front')}}/img/icons/taxih.png"
              class="main-roundlap"></div>
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
            <h2><strong class="color-secondary">After Deployment</strong> and Maintenance</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">In our scenario, the project does not finish with the deployment. Of course, we will
              continue to be available to you following the launch. We ensure that the app is kept up to date and that
              its interaction rate with prospects grows. We've got your back at every turn.</p>
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
            <h2>Our expertise in mobile apps is <strong class="color-secondary">our greatest asset</strong></h2>
            <span class="animate-border mb-4"></span>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div
            class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown animated"
            data-wow-duration="2s">
            <span class="ti-check-box icon-lg color-secondary d-block mb-4"></span>
            <h5>UI</h5>
            <p>We have a strong focus on current UI and attempt to create practical, usable, and useful Android
              applications for your company.<br><span class="hidden-xs">&nbsp;</span></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div
            class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown animated"
            data-wow-duration="2.5s">
            <span class="ti-shield icon-lg color-secondary d-block mb-4"></span>
            <h5>Navigation</h5>
            <p>We implement several UI elements that allow visitors to travel through different pages inside the apps
              for effective UI navigation.<br><span class="hidden-xs">&nbsp;</span></p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
          <div
            class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown animated"
            data-wow-duration="3s">
            <span class="ti-settings icon-lg color-secondary d-block mb-4"></span>
            <h5>Testing</h5>
            <p>We understand how people rely on various functions within apps. As a result, we conduct extensive testing
              to guarantee that each use case functions properly.</p>
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
                  <p class="mb-0">CEO</p>
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
                  <p class="mb-0">Vice President</p>
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
                  <p class="mb-0">Manager</p>
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
            <h3 class="mb-1">Best Agency to Grow Your Business</h3>
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
