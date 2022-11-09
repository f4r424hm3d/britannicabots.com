@extends('front.layouts.main')
@push('title')
<title>About</title>
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

        <div class="col-md-4 col-lg-4">
          <div class="staff-member mb-4">
            <div class="pl-4 pr-4 pt-4 text-center">
              <div class="custom-port-col-image w-anuimation-image4"><img alt=""
                  src="{{ url('/front/') }}/img/team-2.jpg" class="img-fluid m-auto"></div>
              <div class="card-body">
                <h5 class="teacher mb-0">Aman Ahlawat</h5>
                <span>CEO & FOUNDER</span>
              </div>
            </div>
            <div class="overlay d-flex align-items-center justify-content-center z-index">
              <div class="overlay-inner">
                <p class="lead">"Dramatically leverage existing fully researched platforms vis-a-vis viral." </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4">
          <div class="staff-member mb-4 shadow">
            <div class="card pl-4 pr-4 pt-4 text-center">
              <div class="custom-port-col-image w-anuimation-image4"><img alt=""
                  src="{{ url('/front/') }}/img/team-1.jpg" class="img-fluid m-auto"></div>
              <div class="card-body">
                <h5 class="teacher mb-0">Mohd. Rafey</h5>
                <span>Designation type here</span>
              </div>
            </div>
            <div class="overlay d-flex align-items-center justify-content-center z-index">
              <div class="overlay-inner">
                <p class="lead">"Dramatically leverage existing fully researched platforms vis-a-vis viral." </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4">
          <div class="staff-member mb-4 shadow">
            <div class="card pl-4 pr-4 pt-4 text-center">
              <div class="custom-port-col-image w-anuimation-image4"><img alt=""
                  src="{{ url('/front/') }}/img/team-1.jpg" class="img-fluid m-auto"></div>
              <div class="card-body">
                <h5 class="teacher mb-0">Mohd. Faraz</h5>
                <span>Designation type here</span>
              </div>
            </div>
            <div class="overlay d-flex align-items-center justify-content-center z-index">
              <div class="overlay-inner">
                <p class="lead">"Dramatically leverage existing fully researched platforms vis-a-vis viral." </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4">
          <div class="staff-member mb-4 shadow">
            <div class="card pl-4 pr-4 pt-4 text-center">
              <div class="custom-port-col-image w-anuimation-image4"><img alt=""
                  src="{{ url('/front/') }}/img/team-1.jpg" class="img-fluid m-auto"></div>
              <div class="card-body">
                <h5 class="teacher mb-0">Saurabh</h5>
                <span>Designation type here</span>
              </div>
            </div>
            <div class="overlay d-flex align-items-center justify-content-center z-index">
              <div class="overlay-inner">
                <p class="lead">"Dramatically leverage existing fully researched platforms vis-a-vis viral." </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4">
          <div class="staff-member mb-4 shadow">
            <div class="card pl-4 pr-4 pt-4 text-center">
              <div class="custom-port-col-image w-anuimation-image4"><img alt=""
                  src="{{ url('/front/') }}/img/team-1.jpg" class="img-fluid m-auto"></div>
              <div class="card-body">
                <h5 class="teacher mb-0">Shahbuddin Aamir</h5>
                <span>Designation type here</span>
              </div>
            </div>
            <div class="overlay d-flex align-items-center justify-content-center z-index">
              <div class="overlay-inner">
                <p class="lead">"Dramatically leverage existing fully researched platforms vis-a-vis viral." </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

</div>
<!--body content wrap end-->
@endsection
