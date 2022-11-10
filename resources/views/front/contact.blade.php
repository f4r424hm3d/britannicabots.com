@extends('front.layouts.main')
@push('title')
<title>About</title>
@endpush
@section('main-section')
<!--body content wrap start-->
<div class="main pt-80">

  <!--header section start-->
  <section class="hero-section ptb-100 gradient-overlay"
    style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-10">
          <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
            <h1 class="text-white mb-0">Contact us</h1>
            <div class="custom-breadcrumb text-white">
              <p class="lead mb-2">You are close to transforming your concept into a flawlessly attractive and
                operational company strategy that will enable you to reach a larger customer. One forward step is the
                first step in anything!</p>
              <p class="lead mb-0">If you have any additional questions, get in touch with us, and we'll be pleased to
                assist you.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--header section end-->

  <!--contact us promo start-->
  <section class="contact-us-promo ptb-70">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="card single-promo-card single-promo-hover text-center shadow-sm">
            <div class="card-body py-5">
              <div class="pb-2">
                <span class="ti-mobile icon-sm color-secondary"></span>
              </div>
              <div>
                <h5 class="mb-2">Call Us</h5>
                <p class="text-muted mb-0"><a href="tel+919818560331">(+91) 9818560331</a><br><a
                    href="tel+919342914452">(+91) 9342914452</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card single-promo-card single-promo-hover text-center shadow-sm">
            <div class="card-body py-5">
              <div class="pb-2">
                <span class="ti-location-pin icon-sm color-secondary"></span>
              </div>
              <div>
                <h5 class="mb-2">Visit Us</h5>
                <p class="text-muted mb-0">B-16 Ground Floor, Mayfield Garden, Sector 50, Gurugram, Haryana - 122002</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="card single-promo-card single-promo-hover text-center shadow-sm">
            <div class="card-body py-5">
              <div class="pb-2">
                <span class="ti-email icon-sm color-secondary"></span>
              </div>
              <div>
                <h5 class="mb-2">Mail Us</h5>
                <p class="text-muted mb-0">info@britannicabots.com<br>sales@britannicabots.com</p>
              </div>
            </div>
          </div>
        </div>
        <!--div class="col-lg-3 col-md-6 col-sm-6">
<div class="card single-promo-card single-promo-hover text-center shadow-sm">
<div class="card-body py-5">
<div class="pb-2">
<span class="ti-headphone-alt icon-sm color-secondary"></span>
</div>
<div><h5 class="mb-2">Live Chat 24/7</h5>
<p class="text-muted mb-0">Skype<br>Google Meet</p></div>
</div>
</div>
</div-->
      </div>
    </div>
  </section>
  <!--contact us promo end-->

  <section class="contact-us-promo ptb-70 gray-light-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <h1>Don’t Hesitate to <span class="font-weight-light">Follow us on</span></h1>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="social-links-big">
            <a href=""><span class="ti-facebook"></span></a>
            <a href=""><span class="ti-pinterest"></span></a>
            <a href=""><span class="ti-instagram"></span></a>
            <a href=""><span class="ti-linkedin"></span></a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!--contact us section start-->
  <section class="contact-us-section ptb-70">
    <div class="container contact">

      <div class="row align-items-center">
        <div class="col-md-7">
          <h3 class="font-weight-bold">Schedule Meeting</h3>
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
          <div class="contact-us-form gray-light-bg rounded p-4">
            <form action="{{ url('contact') }}" method="POST" class="login-signup-form">
              @csrf
              <div class="form-row">
                <div class="col-12 col-md-12">
                  <div class="form-group">
                    <label class="pb-1">Your Name</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-user color-primary"></span></div>
                      <input name="name" type="text" class="form-control" placeholder="Enter full name"
                        value="{{ old('name') }}" required>
                    </div>
                    <span class="text-danger">
                      @error('name')
                      {{ $message }}
                      @enderror
                    </span>
                  </div>
                </div>

                <div class="col-12 col-md-12">
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

                <div class="col-12 col-md-12">
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

                <div class="col-12 col-md-12">
                  <div class="form-group">
                    <label class="pb-1">Your Message</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon" style="height:100px;"><span class="ti-pencil-alt color-primary"
                          style="height:100px;"></span></div>
                      <textarea id="message" name="message" class="form-control" style="height:100px; padding-top:17px"
                        placeholder="Enter your message here">{{ old('message') }}</textarea>
                    </div>
                  </div>
                </div>

              </div>

              <button type="submit" class="btn secondary-solid-btn border-radius mt-3 mb-3">Send Message</button>
            </form>
          </div>
        </div>

        <div class="col-md-5">
          <div class="contact-us-content mt-4">
            <p class="lead">We’ve driven over <strong>10 Thousands leads</strong> for our clients. Ready to know how we
              can help you?</p>
            <hr class="my-4">
            <img src="{{ url('/front/') }}/img/contact.svg" class="img-fluid float-ani" alt="contact">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--contact us section end-->

  <!--google map block start-->
  <div class="google-map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15550.789820225382!2d80.2567652!3d12.9911925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6db67726a085fa14!2sBritannica%20Overseas%20Education!5e0!3m2!1sen!2sin!4v1644667080349!5m2!1sen!2sin"
      height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <!--google map block end-->


</div>
<!--body content wrap end-->
<script>
  $(document).ready(function(){
    $('.contBtn').click(function() {
      $(this).toggleClass('actBtn');
    });
  });
</script>
@endsection
