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

  </div>
  <!--body content wrap end-->
@endsection
