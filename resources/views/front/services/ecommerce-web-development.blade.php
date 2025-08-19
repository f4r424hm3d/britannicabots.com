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
        <div class="col-md-12 col-lg-7">
          <div class="hero-slider-content text-white">
            <h1 class="text-white">Do you want to create your own E-commerce Website?</h1>
            <p class="lead">An e-commerce website is a digital platform where you may offer your goods and services and
              accept payments online.</p>
          </div>
        </div>
        <div class="col-md-12 col-lg-5">
          <div class="image-wrap wow fadeInRight animated" data-wow-duration="2s">
            <img src="{{url('front')}}/img/ecommerce-web.svg" class="img-fluid float-ani" alt="hero">
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

  <!--services section start-->
  <section class="about-us-section ptb-100 gray-light-bg">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pr-4">
            <h2><span class="color-secondary">E-commerce Website</span> Designing Company in Gurugram</h2>
            <span class="animate-border mb-4"></span>
            <p>The best E-commerce website design is the ideal marketing tool for any online business. Having a powerful
              e-commerce website is the key to success for entrepreneurs, and we understand the value of leveraging
              modern technology to increase your revenue.</p>
            <p>Britannica Bots is one of the top e-commerce website building companies in Gurugram; we specialise in
              providing e-commerce solutions tailored to your needs and marketing and selling your product in a highly
              competitive market.</p>
            <p>We are one of the top e-commerce website design companies in India, with incomparable experience. Our
              developers are known for their unrivalled technological competence and domain knowledge, which provide
              extensive experience in establishing and operating your dream online business. We design customised
              e-commerce websites to successfully market your business.</p>
            <p>Our experts will review your bespoke feature requirements and tailor a cost-effective solution based on
              your company's size and e-commerce aspirations.</p>
            <a href="{{url('get-quote')}}" class="btn btn secondary-solid-btn"><span class="blink"></span> Lets talk
              with
              us</a>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="image-frame wow fadeInRight animated" data-wow-duration="2s"><img
              src="{{url('front')}}/img/ecommerce-web.jpg" alt="about us" class="img-fluid"></div>
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
            <h2>Features of an <strong class="color-secondary">E-commerce Website</strong></h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">Discover some of the cutting-edge features that can set your E-commerce Website apart and
              provide you with a high return on investment. Prepare to launch your own fantastic e-commerce store and
              build your business.</p>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-5 col-lg-5">
          <div class="why-choose-us-wrap">
            <aside class="widget widget-categories">

              <div id="accordion-1" class="accordion accordion-faq">

                <div class="card">
                  <div class="card-header py-3 collapsed" id="heading-1-1" data-toggle="collapse" role="button"
                    data-target="#collapse-1-1" aria-expanded="true" aria-controls="collapse-1-1">
                    <h5 class="mb-0">Website Design</h5>
                  </div>
                  <div id="collapse-1-1" class="collapse show" aria-labelledby="heading-1-1" data-parent="#accordion-1"
                    style="">
                    <div class="card-body">
                      <p>A dashboard with overall data and statistics to keep track of total sales, new orders,
                        cancelled orders, returned orders, and so on. This facilitates overall company choices and the
                        completion of any critical processes.</p>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header py-3" id="heading-1-2" data-toggle="collapse" role="button"
                    data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                    <h5 class="mb-0">Catalogue Management Made Simple</h5>
                  </div>
                  <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                    <div class="card-body">
                      <p>With our catalogue management system, you can effortlessly manage an unlimited number of
                        categories, sub-categories, brands, goods, and their qualities. It offers a basic editor for
                        changing product descriptions and specifications, as well as changing and offering prices.</p>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header py-3" id="heading-1-3" data-toggle="collapse" role="button"
                    data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                    <h5 class="mb-0">Effective Stock Manager</h5>
                  </div>
                  <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                    <div class="card-body">
                      <p>A completely functional and automatic stock management system, you only need to enter stock
                        quantities for each product and our system will handle the rest. It reduces stock when an item
                        is purchased and increases stock when an order is cancelled or returned.</p>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header py-3" id="heading-1-4" data-toggle="collapse" role="button"
                    data-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                    <h5 class="mb-0">Simple Content Management System</h5>
                  </div>
                  <div id="collapse-1-4" class="collapse" aria-labelledby="heading-1-4" data-parent="#accordion-1">
                    <div class="card-body">
                      <p>With our in-built content editor and image uploader, you can easily manage content for all
                        pages of your website. It enables you to handle material and images for custom-designed pages
                        and create an endless number of pages for simple text layouts for policy pages.</p>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header py-3" id="heading-1-5" data-toggle="collapse" role="button"
                    data-target="#collapse-1-5" aria-expanded="false" aria-controls="collapse-1-5">
                    <h5 class="mb-0">Cart functionality</h5>
                  </div>
                  <div id="collapse-1-5" class="collapse" aria-labelledby="heading-1-5" data-parent="#accordion-1">
                    <div class="card-body">
                      <p>An ecommerce site that does not have a smooth cart function is useless. Our ecommerce platform
                        has a robust cart with a wishlist option. Unlimited products can be added to the cart, and the
                        cart can be edited by changing the quantity of items added, deleting additional items, and
                        allowing for easy checkout.</p>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header py-3" id="heading-1-6" data-toggle="collapse" role="button"
                    data-target="#collapse-1-6" aria-expanded="false" aria-controls="collapse-1-6">
                    <h5 class="mb-0">Multiple payment methods</h5>
                  </div>
                  <div id="collapse-1-6" class="collapse" aria-labelledby="heading-1-6" data-parent="#accordion-1">
                    <div class="card-body">
                      <p>A variety of payment methods to receive payments from customers all around the world.
                        Instamojo, Payumoney, Razorpay for Indian payments and PayPal, Stripe for international payments
                        are examples of integrated payment solutions. This makes the payment process extremely simple
                        for the user.</p>
                    </div>
                  </div>
                </div>

              </div>
            </aside>
          </div>
        </div>
        <div class="col-md-7 col-lg-7">
          <div class="wow fadeInRight animated" data-wow-duration="2s"><img
              src="{{url('front')}}/img/ecommerce-dashboard.png" alt="shape"
              class="img-fluid rounded shadow-lg float-ani"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="outstanding-section ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
          <div class="section-heading text-center mb-1">
            <strong class="color-secondary">Our Expertise</strong>
            <h3>Establish an e-commerce website where you can sell anything, anywhere</h3>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">We create a very effective and successful e-commerce website with specific key ingredients
              that not only generate more sales but also help you build your brand image.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="feature-tabs-wrap">
            <ul class="nav nav-tabs border-bottom-0 feature-tabs feature-tabs-center d-flex justify-content-center"
              data-tabs="tabs">
              <li class="nav-item">
                <a class="nav-link text-center pl-5 pr-5 pt-4 pb-4" href="#feature-tab-1" data-toggle="tab">
                  <span class="ti-desktop icon-md"></span>
                  <h5 class="mt-2 mb-0">Completely<br>Functional Website</h5>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center pl-5 pr-5 pt-4 pb-4 active" href="#feature-tab-2" data-toggle="tab">
                  <span class="ti-mobile icon-md"></span>
                  <h5 class="mt-2 mb-0">Design for<br>Mobile Devices</h5>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-center pl-5 pr-5 pt-4 pb-4" href="#feature-tab-3" data-toggle="tab">
                  <span class="ti-settings icon-md"></span>
                  <h5 class="mt-2 mb-0">A powerful<br>administrative panel</h5>
                </a>
              </li>
            </ul>

            <div class="tab-content feature-tab-content">

              <div class="tab-pane mt-5" id="feature-tab-1">
                <div class="row align-items-center">
                  <div class="col-lg-6 col-md-6">
                    <div class="image-wrap"><img src="{{url('front')}}/img/functional.jpg" alt="shape"
                        class="img-fluid m-auto rounded shadow-lg float-ani"></div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="single-promo-2 h-100 shadow-none mb-5">
                          <div class="circle-icon"><span class="ti-search text-white"></span></div>
                          <h5 class="mb-2">Advance Search</h5>
                          <p>Let your users search product on your website hassle-free, a few words can give them the
                            available options.</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="single-promo-2 h-100 shadow-none mb-5">
                          <div class="circle-icon"><span class="ti-fullscreen text-white"></span></div>
                          <h5 class="mb-2">Product Navigation</h5>
                          <p>Explore an intuitive navigation system that makes browsing through different categories &
                            products simpler.</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="single-promo-2 h-100 shadow-none">
                          <div class="circle-icon"><span class="ti-shopping-cart-full text-white"></span></div>
                          <h5 class="mb-2">Hassle-free Shopping</h5>
                          <p>Features like login, wishlist, fully integrated cart & checkout pages, offer seamless
                            shopping experience.</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="single-promo-2 h-100 shadow-none">
                          <div class="circle-icon"><span class="ti-settings text-white"></span></div>
                          <h5 class="mb-2">Featured Products</h5>
                          <p>Highlight the products that are on sale/ clearance or the new items, to attract more
                            customers & sales.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane mt-5 active" id="feature-tab-2">
                <div class="row align-items-center">
                  <div class="col-lg-6 col-md-6">
                    <div class="image-wrap wow fadeInLeft animated" data-wow-duration="2s"><img
                        src="{{url('front')}}/img/mobile-view.png" alt="email" class="img-fluid m-auto float-ani"></div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="single-promo-2 h-100 shadow-none mb-5">
                          <div class="circle-icon"><span class="ti-mobile text-white"></span></div>
                          <h5 class="mb-2">Design for Mobile Devices</h5>
                          <p>With improved technology, we create mobile-friendly layouts, making it easier to use the
                            website on mobile devices.</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="single-promo-2 h-100 shadow-none mb-5">
                          <div class="circle-icon"><span class="ti-menu text-white"></span></div>
                          <h5 class="mb-2">Easy to Use Navigation</h5>
                          <p>Allow your users to effortlessly go to inner pages so they may spend more time on your
                            website and buy gladly.</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="single-promo-2 h-100 shadow-none">
                          <div class="circle-icon"><span class="ti-hand-point-up text-white"></span></div>
                          <h5 class="mb-2">Friendly User Interface</h5>
                          <p>Powerful features combined with basic usability to provide an easy-to-use and comprehend
                            platform for your users.</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="single-promo-2 h-100 shadow-none">
                          <div class="circle-icon"><span class="ti-world text-white"></span></div>
                          <h5 class="mb-2">SEO-Friendly Coding</h5>
                          <p>We understand the importance of SEO and online exposure, so we concentrate on developing
                            Optimized websites.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane mt-5" id="feature-tab-3">
                <div class="row align-items-center">
                  <div class="col-lg-6 col-md-6">
                    <div class="image-wrap"><img src="{{url('front')}}/img/powerful.jpg" alt="shape"
                        class="img-fluid m-auto rounded shadow-lg float-ani"></div>
                  </div>
                  <div class="col-lg-6 col-md-6">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="single-promo-2 h-100 shadow-none mb-5">
                          <div class="circle-icon"><span class="ti-check-box text-white"></span></div>
                          <h5 class="mb-2">Product Management</h5>
                          <p>Easy to manage unlimited catergories and products to sell on your website with product
                            detail information</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="single-promo-2 h-100 shadow-none mb-5">
                          <div class="circle-icon"><span class="ti-user text-white"></span></div>
                          <h5 class="mb-2">Order & User Management</h5>
                          <p>Manage customers, their orders, invoice generation, product stocks with most simplistic
                            modules of the panel</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="single-promo-2 h-100 shadow-none">
                          <div class="circle-icon"><span class="ti-bar-chart-alt text-white"></span></div>
                          <h5 class="mb-2">Reporting and Analytics</h5>
                          <p>Get instant details of customers, sales, transactions & return, on a daily, weekly and
                            monthly basis</p>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="single-promo-2 h-100 shadow-none">
                          <div class="circle-icon"><span class="ti-tag text-white"></span></div>
                          <h5 class="mb-2">Offers & Discounts</h5>
                          <p>Grab every opportunity to entice and hook your audience with time to time discounts &
                            offers</p>
                        </div>
                      </div>
                    </div>
                  </div>
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
            <h2>What services can we <strong class="color-secondary">provide to business owners?</strong></h2>
            <span class="animate-border mb-4"></span>
            <p class="lead">With our extensive resource pool, we assist businesses in achieving their objectives.</p>
            <p class="lead">Business analysts, QA experts, developers, and other specialists work together in web
              development businesses like ours to produce a website that meets the needs of your company.</p>
            <p class="lead">These web development experts improve user experiences by creating innovative and visually
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
