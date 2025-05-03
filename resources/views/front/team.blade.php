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
        <div class="col-md-12 col-lg-12">
          <div class="hero-slider-content text-white">
            <h1 class="text-white mb-2">Our Team</h1>
            <p class="lead">We are full Skilled IT Development Team</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--banner section end-->

  <section class="about-us-section ptb-100 gray-light-bg">
    <div class="container">
      <div class="row d-flex align-items-center">

        @foreach ($rows as $row)
        <div class="col-md-4 col-lg-4">
          <div class="staff-member mb-4 shadow">
            <div class="card p-4 text-center">
              <div class="custom-port-col-image w-anuimation-image4">
                <div class="team-images">
                <img alt="{{ $row->name }}" src="{{ asset($row->profile_picture_path??'uploads/default.png') }}"
                class="img-fluid">
                </div>
              </div>
              <div class="card-body pb-0">
                <h5 class="teacher mb-0">{{ $row->name }}</h5>
                <span>{{ $row->designation }}</span>
              </div>
            </div>
            <div class="overlay d-flex align-items-center justify-content-center z-index">
              <div class="overlay-inner">
                <p class="lead">"{{ $row->quote }}" </p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

</div>
<!--body content wrap end-->
@endsection
