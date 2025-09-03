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
            <h1 class="text-white">CUSTOM WEBSITE DEVELOPMENT FOR BETTER IMPACT</h1>
            <p class="lead">Getting in touch with Britannica Bots CMS Web Development Agency in Gurugram means getting
              in touch with the best web Development service providers in the business. CMS has grown to be one of the
              most respected platforms for distinctive and creative website building components. Our approach is the primary reason
              reason why global investors, company executives, start-up founders, and advertising firms are flocking to
              this platform without hesitation.
            </p>
          </div>
        </div>
        <div class="col-md-12 col-lg-6">
          <div class="image-wrap wow fadeInRight animated" data-wow-duration="2s">
            <img src="{{url('front')}}/img/cms-web2.png" class="img-fluid float-ani" alt="hero">
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
            <h2><span class="color-secondary">Britannica Bots Can Help You Get</span> Highly Innovative CMS Web
              Development!</h2>
            <span class="animate-border mb-4"></span>
            <p>The content management system, or CMS, is a framework for managing website content. The substance may be
              added, changed, or distributed by the clients. The CMS setups include a back-end, known as the
              Administrator end, that contains numerous operations that allow the composition to be altered. With the
              help of the CMS, the client may examine a responsive plan that can fit into any screen size with little to
              no effort.</p>
            <p>One of the numerous advantages of using a material management solution is having control over your
              content (CMS). Users with varying levels of access can administer or use our fantastic CMS Web Development
              Company's data, assets, and content. Because of novel features such as SEO friendliness, simple
              programming, intuitive user interface, speedy technical implementation, and so on, the process of CMS web
              building is simple and secure. It is critical that you completely understand your organization's and its
              users' demands in order for us to handle them in an agile manner. Britannica Bots is certain that it can
              optimise your system for maximum efficiency, regardless of the CMS and web development services you
              require.</p>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="image-frame wow fadeInRight animated" data-wow-duration="2s"><img
              src="{{url('front')}}/img/cms-web.jpg" alt="about us" class="img-fluid"></div>
        </div>
        <div class="col-md-12 col-lg-12">
          <div class="about-us-content-wrap">
            <p>We are the top CMS web development agency in India. We use the most advanced approaches in the industry
              to provide long-term and durable content management solutions for a variety of important businesses. Our
              CMS experts use cutting-edge technologies to create feature-rich content management solutions for a
              variety of platforms. Our team is not only is informed and skilled, but it also thoroughly reviews all of the
              systems. Our CMS design service includes high-end solutions to all content management concerns. Our
              services are intended to assist your company in growing. Since we have been a recognised CMS service
              provider in India for a long time, the market holds us in high regard.</p>
            <a href="{{url('get-quote')}}" class="btn btn secondary-solid-btn"><span class="blink"></span> Lets talk
              with
              us</a>
          </div>
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
            <h2>What makes our <strong class="color-secondary">Services Unique?</strong></h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
            <p class="lead">We believe in designing responsive, fast-loading, user-friendly websites that appear and
              feel the same across multiple web browsers.</p>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="why-choose-us-wrap wow zoomInDown animated" data-wow-duration="2s">
            <div class="row">
              <div class="col-md-6 col-sm-6 promo-col-col">
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Secure</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Responsive</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">SEO-Optimized</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Fast</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 promo-col-col">
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Flexible</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Scalable</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Maintainable</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Highly Usable</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{url('front')}}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="wow fadeInRight animated" data-wow-duration="2s"><img src="{{url('front')}}/img/cms-web.svg"
              alt="shape" class="img-fluid float-ani"></div>
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

  <section class="why-choose-us ptb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-9">
          <div class="section-heading text-center">
            <h2><strong class="color-secondary">Amazing Benefits of Britannica Bots</strong><br>CMS Web Development</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
          <div
            class=" signlessz services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown  animated"
            data-wow-duration="2s">
            <span class="ti-check-box icon-lg color-secondary d-block mb-4"></span>
            <h5>Less time and effort required</h5>
            <p>CMS web development is the most user-friendly. Anyone with a basic understanding of marketing and
              development may complete this assignment flawlessly. Our amazing developers, on the other hand, believe in
              always providing the best for you.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
          <div
            class="signlessz services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown  animated"
            data-wow-duration="2.5s">
            <span class="ti-shield icon-lg color-secondary d-block mb-4"></span>
            <h5>Customization</h5>
            <p>Long-term aims include a popular brand name and a positive market reputation. CMS website creation
              facilitates this by providing significant flexibility in website design and customizable features.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
          <div
            class=" signlessz services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded wow zoomInDown  animated"
            data-wow-duration="3s">
            <span class="ti-settings icon-lg color-secondary d-block mb-4"></span>
            <h5>Analytics for the Web</h5>
            <p>Even if you are unfamiliar with development and digitalization, our web analytics can provide you with all
              of the information you seek. From monitoring website traffic to learning about social media sites.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="why-choose-us ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
          <div class="section-heading text-center">
            <h2>Our CMS Web<br><strong class="color-secondary">Development Methodology</strong></h2>
            <span class="animate-border mr-auto ml-auto mb-2"></span>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="mb-4 col-lg-6 col-md-6 col-sm-6">
          <div class=" services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown  animated"
            data-wow-duration="2s">
            <h5 class="mb-2">Analysis and research</h5>
            <p>Everything, whether custom development or CMS development, demands thorough study and
              investigation.<br><span class="hidden-xs">&nbsp;</span></p>
          </div>
        </div>

        <div class="mb-4 col-lg-6 col-md-6 col-sm-6">
          <div class=" services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown  animated"
            data-wow-duration="2.5s">
            <h5 class="mb-2">Understanding of the Project</h5>
            <p>When you connect and contract with us for your company transaction, the first thing our experts plan to
              perform is improve your business understanding.</p>
          </div>
        </div>

        <div class="mb-4 col-lg-6 col-md-6 col-sm-6">
          <div class=" services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown  animated"
            data-wow-duration="3s">
            <h5 class="mb-2">Implementation</h5>
            <p>Regardless of the nature, size, or density of the business, execution and reporting are essential. In our
              business arrangements, we ensure utmost transparency.</p>
          </div>
        </div>

        <div class="mb-4 col-lg-6 col-md-6 col-sm-6">
          <div class=" services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown  animated"
            data-wow-duration="3.5s">
            <h5 class="mb-2">Excellent Outcomes</h5>
            <p>Last but not least, great results are the ultimate goal for your company and us. Our agile and
              tried-and-true approaches serve as a foundation.</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="about-us-section ptb-100">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-12 col-lg-12">
          <div class="section-heading text-center">
            <h2>We specialise in</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
          </div>
        </div>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
          <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
            <img src="{{url('front')}}/img/wp-logo.png">
            <p>Bloggers and businesses alike frequently utilise WordPress blogs. You can construct a self-hosted blog
              with a customised domain name using the WordPress platform; it is not only used for building blogs, but
              you can also develop an awesome website by using the available themes and plugins.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
          <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
            <img src="{{url('front')}}/img/joomla-logo.png">
            <p>Joomla is an open-source software that may be used to create websites in any industry. It allows for
              easier transfer to any preferred server and access to any database; Joomla aids in the development of a
              user-friendly interface and gives a large range of themes and templates for development.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
          <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
            <img src="{{url('front')}}/img/drupal-logo.png">
            <p>Drupal provides a variety of common features required for creating an exceptional website; it simplifies
              RSS feeds, website administration, user registration, and customization for users. Drupal enhances website
              performance and versatility by providing extensive controls for website administration.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
          <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
            <img src="{{url('front')}}/img/concrete5-logo.png">
            <p>Concrete5 is a basic CMS that allows you to change content directly from the web page. Search engine
              optimization, server caching, version tracking, and a developer API are among its features. It is based on
              the model view container architecture, sometimes known as MVC, and object oriented programming.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
          <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
            <img src="{{url('front')}}/img/modx-logo.png">
            <p>MODX encourages the creation of a customised website with powerful controls; it delivers the finest
              end-user experience and allows users to manage any type of material without limitations. MODX enables the
              user to fully utilise the website design; it provides numerous developer options.</p>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
          <div class="services-single text-center p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-bg rounded">
            <img src="{{url('front')}}/img/duke-logo.png">
            <p>DotNetNuke is a robust CMS platform that has comprehensive tools for managing email, advertisements,
              documents, blogs, and integrating multilingual functionality. It provides the best platform versatility,
              website speed optimization, and community support.</p>
          </div>
        </div>

      

      </div>
    </div>
  </section>

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
            <h2>What we can help the <strong class="color-secondary">Business Owners with?</strong></h2>
            <span class="animate-border mb-4"></span>
            <p class="lead">We help the businesses achieve their goals with their good collection of resources.In the
              web development companies like us - there are business analysts, QA experts, developers and all the other
              specialists who come together to create a website as per your business’ requirements.</p>
            <p class="lead">These web development experts who enhance the user experiences while building some amazing &
              visually appealing UI's.</p>
            <p class="lead">In fact, they take care of all the necessary aspects of web designing process. As we have
              discussed earlier that a website’s design is one of the most important aspects, the business owners prefer
              to get in touch with adept web developers.</p>
            <p class="lead"><strong>Let’s have a close look at the benefits of getting in touch with these
                professionals:</strong></p>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="mb-4 col-lg-6 col-md-6 col-sm-6">
          <div class=" services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown animated"
            data-wow-duration="2s">
            <h5 class="mb-2">They Create Seamless Experience</h5>
            <p>The experience of navigating on your website should be seamless for your visitors. If your visitors find
              it difficult to land at the pages they want to be on, might hurt their experience. Hence, good the
              professional web designers ensure that the visitors browse your website without facing difficulty.</p>
          </div>
        </div>

        <div class="mb-4 col-lg-6 col-md-6 col-sm-6">
          <div class=" services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown animated"
            data-wow-duration="2.5s">
            <h5 class="mb-2">Your Website Will Have Aesthetic Layouts</h5>
            <p>It is important for businesses to get their website designed with aesthetic layouts and amazing features.
              And, web designers do the same. They integrate the appealing visual graphics and additional features in
              the websites.<br><span class="hidden-xs">&nbsp;</span></p>
          </div>
        </div>

        <div class="mb-4 col-lg-6 col-md-6 col-sm-6">
          <div class=" services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown animated"
            data-wow-duration="3s">
            <h5 class="mb-2">You Will Get A Responsive Website</h5>
            <p>In this competitive world, the ease of use decides the success of a website. Hence, a website should be
              mobile-friendly, or responsive. Today, more people like to get access to any website through mobile
              devices. So, it is imperative that you being a business have a mobile-friendly website. A responsive and
              faster loading website can broaden your customer base.<br><span class="hidden-xs">&nbsp;</span></p>
          </div>
        </div>

        <div class="mb-4 col-lg-6 col-md-6 col-sm-6">
          <div class=" services-single p-5 my-md-3 my-lg-3 my-sm-0 shadow-lg white-bg rounded wow zoomInDown animated"
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
  <section class="call-to-action pb-5">
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
