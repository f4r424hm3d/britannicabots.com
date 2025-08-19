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
            <h1 class="text-white">Who are we?</h1>
            <p class="lead">Britannica Bots creates digital tools that enable businesses to operate in an original and
              creative manner. We create original software, design it, and offer top-notch product consulting. The
              end-user of our products is taken into consideration by our staff, which strives for perfection. Our
              values shape the way we provide for our customers and provide a memorable user experience.</p>
            <div class="action-btns mt-3"><a href="#explore" class="btn secondary-solid-btn"><span class="blink"></span>
                EXPLORE NOW</a></div>
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

  <!--contact us section start-->
  <section class="about-us-section ptb-100" id="explore">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-4 col-lg-4">
          <div class="wow fadeInLeft animated" data-wow-duration="2s">
            <div class="custom-port-col-image w-anuimation-image4"><img alt="Britannica Bots"
                src="{{ url('/front/') }}/img/web-development-2.svg"></div>
          </div>
        </div>
        <div class="col-md-8 col-lg-8">
          <div class="about-us-content-wrap pl-4">
            <h2 class="font-weight-bolder">What <span class="color-secondary">we do?</span></h2>
            <span class="animate-border mb-4"></span>
            <p class="lead">We brainstorm and create innovative, affordable web applications and mobile apps that aid
              business in streamlining their procedures. Our goal is to create software of unrivalled quality within
              deadlines that meet the needs of our clients. Following agile concepts in all facets of our working lives
              is a core value of Britannica Bots.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bgimg" style=" background-image:url({{ url('/front/') }}/img/portfolios/website-parallax.jpg)">
  </section>

  <section class="about-us-section ptb-100">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-8 col-lg-8">
          <div class="about-us-content-wrap pr-4">
            <h2 class="font-weight-bolder">Our <span class="color-secondary">Goal</span></h2>
            <span class="animate-border mb-4"></span>
            <p class="lead">Our goal is to apply a special approach that combines both established and cutting-edge
              techniques to create high-quality software. We want to be the industry leader in providing cutting-edge
              technology to our clients in order to support their exponential growth. In addition to creating top-notch
              items, our goal is to earn our customers' trust.</p>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
          <div class="wow fadeInRight animated" data-wow-duration="2s">
            <div class="custom-port-col-image w-anuimation-image4"><img alt="Britannica Bots"
                src="{{ url('/front/') }}/img/goal.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bgimg" style=" background-image:url({{ url('/front/') }}/img/portfolios/development-parallax.jpg)">
  </section>

  <section class="about-us-section ptb-100">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-4 col-lg-4">
          <div class="wow fadeInLeft animated" data-wow-duration="2s">
            <div class="custom-port-col-image w-anuimation-image4"><img alt="Britannica Bots"
                src="{{ url('/front/') }}/img/website-redesign.svg"></div>
          </div>
        </div>
        <div class="col-md-8 col-lg-8">
          <div class="about-us-content-wrap pl-4">
            <h2 class="font-weight-bolder">How do <span class="color-secondary">we operate?</span></h2>
            <span class="animate-border mb-4"></span>
            <p class="lead">At all times, our staff acts in our clients' best interests. Our team at Britannica Bots
              enjoys the greatest working atmosphere, which inspires them to develop innovative solutions for the
              companies we serve. Our workforce is our company's biggest asset, and we have faith in them.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bgimg" style=" background-image:url({{ url('/front/') }}/img/portfolios/app-parallax.jpg)"></section>

  <section class="about-us-section ptb-100">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-8 col-lg-8">
          <div class="about-us-content-wrap pr-4">
            <h2 class="font-weight-bolder">Our <span class="color-secondary">Priority</span></h2>
            <span class="animate-border mb-4"></span>
            <p class="lead">Our staff constantly aspires to excellence and works to strike a balance between optimism
              and grounded authenticity. So that we can continue to lead the industry, we strive to evolve continuously.
              We take responsibility for issues and see them through to a successful resolution. To ensure that we all
              succeed together, our team of specialists will go above and beyond to fulfil and meet the needs of our
              clients.</p>
          </div>
        </div>
        <div class="col-md-4 col-lg-4">
          <div class="wow fadeInRight animated" data-wow-duration="2s">
            <div class="custom-port-col-image w-anuimation-image4"><img alt="Britannica Bots"
                src="{{ url('/front/') }}/img/priority.jpg"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bgimg" style=" background-image:url({{ url('/front/') }}/img/portfolios/digital-parallax.jpg)">
  </section>


  <section class="about-us-section ptb-100">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pr-4">
            <h2 class="font-weight-bolder">Our <span class="color-secondary">Vision</span></h2>
            <span class="animate-border mb-4"></span>
            <p>Every firm must adjust adaptability and evolve consistently with software development upgrades in the
              current, technology-driven industry. Those who want to set up their organisation with greater power,
              adaptability, and top-notch functioning can use the current time as a secret weapon. Using digital access
              in your business can make the shift easier overall, make operations run more smoothly, and improve the
              final product. Employees are further put at ease, and the business grows faster thanks to the convenient
              processing.</p>
            <p>At Britannica Bots, we help our clients use the top applications and technologies that are convenient and
              hassle-free for their industry. Our main goal is to provide national and international clients with a
              platform to create the best developments with the least amount of time, money, and effort. For those
              looking to revolutionise the industry with effectiveness and cost-efficiency, Britannica Bots is a
              one-stop shop. Once you have trusted our methodology, we guarantee to deliver cutting-edge technologies,
              flexible techniques, and a superior user experience.</p>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="image-frame wow fadeInRight  animated" data-wow-duration="2s"><img
              src="{{ url('/front/') }}/img/static-web.jpg" alt="about us" class="img-fluid"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="bgimg" style=" background-image:url({{ url('/front/') }}/img/portfolios/graphic-parallax.jpg)">
  </section>

  <section class="why-choose-us ptb-100" id="start">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-9">
          <div class="section-heading text-center">
            <h2 class="font-weight-bolder"><strong class="color-secondary">We</strong> are unique?</h2>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-7">
          <div class="why-choose-us-wrap wow zoomInDown  animated" data-wow-duration="2s"
            style="visibility: visible; animation-duration: 2s; animation-name: zoomInDown;">
            <div class="row">
              <div class="col-md-6 col-sm-6 promo-col">
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Budget - friendly</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Innovative</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Passionate</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Experienced</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 promo-col">
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Powerful</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Worthy of Trust</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Understanding</h5>
                  <div class="promo-bottom-shape">
                    <img src="{{ url('/front/') }}/img/promo-box-shape-bottom.png" alt="shape">
                  </div>
                </div>
                <div class="promo-item pb-2">
                  <h5 class="mb-4">Reliable</h5>
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
              src="{{ url('/front/') }}/img/dynamik-web2.png" alt="shape" class="img-fluid float-ani"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="bgimg" style=" background-image:url({{ url('/front/') }}/img/portfolios/digital-parallax.jpg)">
  </section>

  <section class="why-choose-us ptb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-7">
          <div class="section-heading">
            <h2 class="font-weight-bolder">Concerning <strong class="color-secondary font-weight-bolder">Britannica
                Bots</strong></h2>
            <span class="animate-border mb-4"></span>
            <p>Without using progressive methods, transform proactive niches globally. Using accurate measurements,
              effectively distribute services across the entire organisation.</p>
            <ul class="list-unstyled tech-feature-list w-100">
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Designing</strong>
                Creative Websites</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Guidebook</strong>
                for Accounting Procedure</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>The
                  Fundamentals</strong> of Cost Accounting</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Business</strong>
                Cash Management</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Services</strong>
                for SEO optimization</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Company</strong>
                Branding Services</li>
              <li class="py-1"><span class="ti-control-forward mr-2 color-secondary"></span><strong>Guaranteed</strong>
                45-Day Money-Back</li>
            </ul>
          </div>
        </div>
        <div class="col-md-5 col-lg-5">
          <div class="wow fadeInRight  animated" data-wow-duration="2s">
            <div class="custom-port-col-image w-anuimation-image4"><img alt="Britannica Bots"
                src="{{ url('/front/') }}/img/about.png">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--contact us section end-->

</div>
<!--body content wrap end-->
@endsection
