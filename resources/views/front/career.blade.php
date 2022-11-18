@php
use App\Models\Vacancy;
@endphp
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
        <div class="col-md-12 col-lg-5">
          <div class="hero-slider-content text-white">
            <h1 class="text-white">Join the Team of #1 Website Company</h1>
            <p class="lead">Being No.1 Digital Marketing Service Providers, we assist you in boosting your business
              growth and Give your Brand a New Recognition.</p>
            <div class="action-btns mt-3"><a href="#openings" class="btn secondary-solid-btn"><span
                  class="blink"></span> VIEW OPENINGS</a></div>
          </div>
        </div>
        <div class="col-md-12 col-lg-7">
          <div class="wow fadeInRight animated" data-wow-duration="2s"><img src="{{ url('/front/') }}/img/career.svg"
              class="img-fluid float-ani" alt="hero"></div>
        </div>
      </div>
    </div>
  </section>
  <!--banner section end-->

  <!--contact us section start-->
  <section class="about-us-section ptb-100 gray-light-bg" id="openings">
    <div class="container">

      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Job Openings in <strong class="color-secondary">Britannica Boats</strong></h2>
            <span class="animate-border mr-auto mb-4"></span>
            <p class="lead">We believe in designing responsive, fast-loading, user-friendly websites that appear and
              feel the same across multiple web browsers.</p>
          </div>
        </div>
      </div>

      <div class="desktopView">
        <div class="row mt-5">

          <div class="tab col-md-4">
            @foreach ($designations as $des)
            <button class="tablinks" onClick="openCity(event, '{{ $des->designation_id }}')" id="defaultOpen">{{
              $des->getDesignation->designation }}</button>
            @endforeach
          </div>

          <div class="col-md-8">
            @foreach ($designations as $des)
            <div id="{{ $des->designation_id }}" class="tabcontent">
              @php
              $vacancy = Vacancy::where(['designation_id'=>$des->designation_id])->get();
              @endphp
              @foreach ($vacancy as $row)
              <div class="about-us-content-wrap white-bg border rounded p-4">
                <h3><span class="color-secondary">{{
                    $row->title }}</span></h3>
                <span class="heading-border mb-4"></span>

                <p class="mb-2"><strong>No. of Position :</strong> {{
                  $row->no_of_position }} &nbsp; &nbsp; &nbsp; <strong>Experience :</strong>
                  {{ $row->experience }}</p>
                <p class=""><strong>Location :</strong> {{ $row->location }}</p>

                <h4 class="mb-2">Roles & Responsibilities :</h4>
                {!! $row->roles !!}

                <h4 class="mb-2">Job Description:</h4>
                {!! $row->job_description !!}

                <a href="#apply" class="btn btn secondary-solid-btn mt-3">Apply Now</a>

              </div>
              @endforeach
            </div>
            @endforeach

          </div>
        </div>
      </div>

      <div class="mobileView">
        <div class="row mt-3">
          <div class="col-lg-12">
            <div id="accordion-1" class="accordion accordion-faq">
              @foreach ($designations as $des)
              <div class="card">
                <div class="card-header py-3 collapsed" id="heading-1-{{ $des->designation_id }}" data-toggle="collapse"
                  role="button" data-target="#collapse-1-{{ $des->designation_id }}" aria-expanded="false"
                  aria-controls="collapse-1-{{ $des->designation_id }}">
                  <h5 class="mb-0 color-secondary">
                    {{ $des->getDesignation->designation }}
                  </h5>
                </div>
                @php
                $vacancy = Vacancy::where(['designation_id'=>$des->designation_id])->get();
                @endphp
                @foreach ($vacancy as $row)
                <div id="collapse-1-{{ $des->designation_id }}" class="collapse"
                  aria-labelledby="heading-1-{{ $des->designation_id }}" data-parent="#accordion-1">
                  <div class="card-body">
                    <h5>{{ $row->title }}</h5>
                    <hr>
                    <p class="mb-2"><strong>No. of Position :</strong> {{
                      $row->no_of_position }} &nbsp; &nbsp; &nbsp; <strong>Experience :</strong>
                      {{ $row->experience }}</p>
                    <p class=""><strong>Location :</strong> {{ $row->location }}</p>

                    <h4 class="mb-2">Roles & Responsibilities :</h4>
                    {!! $row->roles !!}

                    <h4 class="mb-2">Job Description:</h4>
                    {!! $row->job_description !!}

                    <a href="#apply" class="btn btn secondary-solid-btn mt-3">Apply Now</a>
                  </div>
                </div>
                @endforeach
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="contact-us-section ptb-100" id="apply">
    <div class="container contact">
      <div class="col-12 pb-3 message-box d-none">
        <div class="alert alert-danger"></div>
      </div>
      @if (session()->has('smsg'))
      <div class="alert alert-success alert-dismissable">
        {{ session()->get('smsg') }}
      </div>
      @endif
      @if (session()->has('emsg'))
      <div class="alert alert-danger alert-dismissable">
        {{ session()->get('emsg') }}
      </div>
      @endif
      <div class="row align-items-center">
        <div class="col-md-8">
          <div class="contact-us-form gray-light-bg rounded p-4">
            <form action="{{ url('apply-job') }}" method="POST" class="login-signup-form" enctype="multipart/form-data">
              @csrf
              <div class="form-row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Your Name</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-user color-primary"></span></div>
                      <input name="name" id="name" type="text" class="form-control" placeholder="Enter your name"
                        value="{{ old('name') }}" required>
                    </div>
                    <span class="text-danger">
                      @error('name')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Your Email</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-email color-primary"></span></div>
                      <input name="email" type="email" class="form-control" placeholder="Enter Email Address"
                        value="{{ old('email') }}" required>
                    </div>
                    <span class="text-danger">
                      @error('email')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Your Mobile No.</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-mobile color-primary"></span></div>
                      <input name="mobile" type="number" class="form-control" placeholder="Phone No."
                        value="{{ old('mobile') }}" required>
                    </div>
                    <span class="text-danger">
                      @error('mobile')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Experience</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-briefcase color-primary"></span></div>
                      <select name="experience" id="experience" class="form-control">
                        <option value="">Select your experience</option>
                        @php
                        $exp = ['Less than 1 year','1-2 year','2-3 year','3-4 year','More than 5']
                        @endphp
                        @foreach ($exp as $exp)
                        <option value="{{ $exp }}" {{ $exp==old('experience')?'selected':'' }}>{{ $exp }}</option>
                        @endforeach
                      </select>
                    </div>
                    <span class="text-danger">
                      @error('experience')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Apply for position</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-vector color-primary"></span></div>
                      <select name="position" id="position" class="form-control">
                        <option value="">Select position</option>
                        @foreach ($designations as $des)
                        <option value="{{ $des->designation_id }}" {{ $des->
                          designation_id==old('position')?'selected':'' }}>{{
                          $des->getDesignation->designation }}</option>
                        @endforeach
                      </select>
                    </div>
                    <span class="text-danger">
                      @error('experience')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Upload your CV/Resume</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-upload color-primary"></span></div>
                      <input name="resume" id="resume" type="file" class="form-control"
                        placeholder="Upload you file max 2MB" required>
                    </div>
                    <span class="text-danger">
                      @error('resume')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class=" col-12 col-md-12">
                  <div class="form-group">
                    <label class="pb-1">Your Message</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon" style="height:100px;"><span class="ti-pencil-alt color-primary"
                          style="height:100px;"></span></div>
                      <textarea name="msg" id="msg" type="text" class="form-control"
                        placeholder="Enter your message here" style="height:100px; padding-top:17px"></textarea>
                    </div>
                    <span class="text-danger">
                      @error('msg')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>

              </div>

              <div class="my-2">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="check-terms">
                  <label class="custom-control-label" for="check-terms">I agree to the <a href="#">Terms &amp;
                      Conditions</a></label>
                </div>
              </div>

              <button type="submit" class="btn secondary-solid-btn border-radius mt-3 mb-3">Send Message</button>
            </form>
          </div>
        </div>

        <div class="col-md-4">
          <div class="contact-us-contentpl-3 pl-3">
            <h2 class="font-weight-bolder color-black">We are Hiring!</h2>
            <hr class="my-2">
            <p class="lead">Lead your professional career with BritannicaBoats.</p>
            <img src="{{ url('/front/') }}/img/contact-guy.svg" class="img-fluid float-ani" alt="contact">
            <p class="mb-2"><span class="ti-email color-secondary mr-1"></span> <a
                href="mailto:career@britannicabots.com">career@britannicabots.com</a></p>
            <p>BrandBurp renders all the world-class facilities to its employees by useful peerless infrastructure. So,
              what are you waiting for? Join our team now!</p>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--contact us section end-->

</div>
<!--body content wrap end-->
@endsection
