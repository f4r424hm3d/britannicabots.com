@extends('front.layouts.main')
@push('title')
<title>About</title>
@endpush
@section('main-section')
<!--body content wrap start-->
<div class="main pt-80">

  <!--header section start-->

  <!--header section end-->

  <!--contact us section start-->
  <section class="contact-us-section ptb-100">
    <div class="container contact">
      <div class="col-12 pb-3 message-box d-none">
        <div class="alert alert-danger"></div>
      </div>

      <div class="row align-items-center">
        <div class="col-md-8">
          <p class="lead mb-0">REQUEST FOR A NO OBLIGATION QUOTATION</p>
          <h2 class="font-weight-bold">Please Complete This Form</h2>

          <div class="contact-us-form gray-light-bg rounded p-4">
            <form action="#" method="POST" class="login-signup-form">
              <div class="form-row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Your Name</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-user color-primary"></span></div>
                      <input type="text" class="form-control" placeholder="Enter your name" required>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Your Email</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-email color-primary"></span></div>
                      <input type="email" class="form-control" placeholder="Enter your email" required>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Your Mobile No.</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-mobile color-primary"></span></div>
                      <input type="number" class="form-control" placeholder="Enter your mobile no" required>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Your Website</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-link color-primary"></span></div>
                      <input type="url" class="form-control" placeholder="Enter your website">
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Select Services</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-link color-primary"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Select</option>
                      </select>
                    </div>
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
          <div class="contact-us-content mt-4 pl-3">
            <p class="lead">We’ve driven over <strong>10 Thousands leads</strong> for our clients. Ready to know how we
              can help you?</p>

            <hr class="my-4">

            <h2 class="font-weight-bolder"><a href="tel:+60104306704" class="color-black">+60-10-4306-704</a></h2>

            <hr class="my-4">

            <h5 class="mb-1">Address</h5>
            <p><span class="ti-location-pin color-secondary"></span> 100 Yellow House, Mn Factory, United State, 13420
            </p>

            <h5 class="mb-1">Email</h5>
            <p><span class="ti-email color-secondary mr-1"></span> <a
                href="mailto:info@britannicabots.com">info@britannicabots.com</a></p>

            <h5 class="mb-3">Follow us</h5>
            <div class="social-links">
              <a href=""><span class="ti-facebook"></span></a>
              <a href=""><span class="ti-pinterest"></span></a>
              <a href=""><span class="ti-instagram"></span></a>
              <a href=""><span class="ti-linkedin"></span></a>
            </div>

            <div class="mt-4"><a href="#" class="btn outline-btn align-items-center">Get Directions <span
                  class="ti-arrow-right pl-2"></span></a></div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--contact us section end-->

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
