@extends('front.layouts.main')
@push('seo_meta_tag')
@include('front.layouts.dynamic_page_meta_tag')
@endpush
@section('main-section')
<!--body content wrap start-->
<div class="main pt-80">

  <!--banner section start-->
  <section class="ptb-70 gradient-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-12">
          <div class="hero-slider-content text-white">
            <h1 class="text-white mb-2">Portfolio Detail</h1>
            <p class="lead">We strive to deliver the best work for every single project. Here's a few of them we'd like
              you to see.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--banner section end-->

  <!--contact us section start-->
  <section class="our-portfolio-section ptb-70">
    <div class="container">

      <div class="row">

        <div class="col-md-5 col-lg-5">
          <div id="gallery" class="owl-carousel owl-theme custom-dot">

            @foreach ($rows as $row)
            <div class="item">
              <div class="portfolio-wrapper mb-2">
                <a href="javascript:void()" class="fancybox" data-fancybox="gallery"
                  data-caption="{{ $pd->company_name }}">
                  <div class="content-overlay"></div>
                  <img class="img-fluid" src="{{ asset($row->image_path) }}" alt="portfolio" />
                  <div class="content-details fadeIn-bottom text-white">
                    <span class="ti-plus icon-xl"></span>
                  </div>
                </a>
              </div>
            </div>
            @endforeach

          </div>
        </div>

        <div class="col-md-7 col-lg-7">
          <div class="about-us-content-wrap pl-3">
            <strong class="color-secondary">{{ $pd->company_name }}</strong>
            <h3 class="mb-1"><span class="font-weight-light">Project Description</span> </h3>

            {!! $pd->description !!}

            <div class="row mt-2">
              <div class="col-12">
                <h4 class="mb-2"><span class="font-weight-light">Technologies</span> We Use</h4>
              </div>
              <div class="col-12 mt-2">
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/html5.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/css3.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/js.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/bootstrap.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/jquery.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/php.png" /></div>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>


  <section class="outstanding-section ptb-70 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
          <div class="section-heading text-center mb-1">
            <h3>Technologies <strong class="color-secondary">That Are Key</strong> To Success</h3>
            <span class="animate-border mr-auto ml-auto mb-4"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="feature-tabs-wrap">
            <ul class="nav nav-tabs border-bottom-0 feature-tabs feature-tabs-center d-flex justify-content-center"
              data-tabs="tabs">
              <li class="nav-item"><a class="nav-link text-center pt-2 pb-2 active" href="#feature-tab-1"
                  data-toggle="tab">
                  <p class="mb-0"><b>DATABASE</b></p>
                </a></li>
              <li class="nav-item"><a class="nav-link text-center pt-2 pb-2" href="#feature-tab-2" data-toggle="tab">
                  <p class="mb-0"><b>UI/UX</b></p>
                </a></li>
              <li class="nav-item"><a class="nav-link text-center pt-2 pb-2" href="#feature-tab-3" data-toggle="tab">
                  <p class="mb-0"><b>MOBILE TECHNOLOGIES</b></p>
                </a></li>
              <li class="nav-item"><a class="nav-link text-center pt-2 pb-2" href="#feature-tab-4" data-toggle="tab">
                  <p class="mb-0"><b>WEB TECHNOLOGIES</b></p>
                </a></li>
            </ul>

            <div class="tab-content feature-tab-content d-flex justify-content-center">

              <div class="tab-pane active" id="feature-tab-1">
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/mysql.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/mongodb.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/postgresql.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/oracle.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/sql.png" /></div>
              </div>

              <div class="tab-pane" id="feature-tab-2">
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/ps.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/ai.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/id.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/figma.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/invision.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/html5.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/css3.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/js.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/bootstrap.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/jquery.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/php.png" /></div>
              </div>

              <div class="tab-pane" id="feature-tab-3">
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/android.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/angular.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/angular2.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/objectivec.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/java.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/react.png" /></div>
              </div>

              <div class="tab-pane" id="feature-tab-4">
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/python.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/java.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/dotnet.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/php.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/react.png" /></div>
                <div class="image-circle shadow"><img src="{{ url('/front/') }}/img/icons/nodejs.png" /></div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="our-blog-section ptb-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-9">
          <div class="section-heading text-center mb-5">
            <h2>RELATED PROJECTS</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div id="blog" class="owl-carousel owl-theme custom-dot">

          @foreach ($op as $op)
          <div class="item">
            <div class="portfolio-wrapper mb-4">
              <a href="{{ url('/portfolio/'.$op->company_slug) }}">
                <div class="content-overlay"></div>
                <img class="img-fluid" src="{{ asset($op->thumbnail_path) }}" alt="{{ $op->company_name }}" />
                <div class="content-details fadeIn-bottom text-white">
                  <span class=" ti-plus icon-xl"></span>
                </div>
              </a>
              <div class="text-center p-4 gradient-bg text-white">
                <h5 class="mb-0 text-white">{{ $op->company_name }}</h5>
                <p>{{ $op->company_category }}</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </section>
  <!--contact us section end-->

</div>
<!--body content wrap end-->
@endsection
