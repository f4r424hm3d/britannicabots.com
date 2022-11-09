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
            <button class="tablinks" onClick="openCity(event, '1')" id="defaultOpen">Web Designer</button>
            <button class="tablinks" onClick="openCity(event, '2')">UI/UX Designer</button>
            <button class="tablinks" onClick="openCity(event, '3')">App Optimizers & Marketers</button>
            <button class="tablinks" onClick="openCity(event, '4')">PR & Outreach Influencers</button>
            <button class="tablinks" onClick="openCity(event, '5')">Content/Copywriter</button>
          </div>

          <div class="col-md-8">
            <div id="1" class="tabcontent">
              <div class="about-us-content-wrap white-bg border rounded p-4">
                <h3><span class="color-secondary">Website Designer</span></h3>
                <span class="heading-border mb-4"></span>

                <p class="mb-2"><strong>No. of Position :</strong> 2 &nbsp; &nbsp; &nbsp; <strong>Experience :</strong>
                  1 to 3 Years</p>
                <p class=""><strong>Location :</strong> Noida</p>

                <h4 class="mb-2">Roles & Responsibilities :</h4>
                <p><strong>Mandatory Skills :</strong> Expertise in Photoshop, Illustrator, or other visual design,
                  HTML, CSS, JavaScript, and wire-framing tools.</p>

                <h4 class="mb-2">Job Description:</h4>
                <ul class="list-unstyled tech-feature-list w-100">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Perform all visual
                    design phases from idea to finishing hand-off to engineering</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Present and protect
                    designs & core deliverables to peers and administrative level stakeholders</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Conceptualize original
                    site design concepts that bring ease and user friendliness to difficult roadblocks</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Make user flows,
                    wireframes, process flows, site maps, and storyboards to converse communication and design notions
                  </li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Set up and endorse
                    design guidelines, standards, and best practices.</li>
                </ul>

                <a href="#apply" class="btn btn secondary-solid-btn mt-3">Apply Now</a>

              </div>
            </div>

            <div id="2" class="tabcontent">
              <div class="about-us-content-wrap white-bg border rounded p-4">
                <h3><span class="color-secondary">UI/UX Designer</span></h3>
                <span class="heading-border mb-4"></span>

                <p class="mb-2"><strong>No. of Position :</strong> 2 &nbsp; &nbsp; &nbsp; <strong>Experience :</strong>
                  1 to 3 Years</p>
                <p class=""><strong>Location :</strong> Noida</p>

                <h4 class="mb-2">Roles & Responsibilities :</h4>
                <p><strong>Mandatory Skills :</strong> Expertise in Photoshop, Illustrator, or other visual design,
                  HTML, CSS, JavaScript, and wire-framing tools.</p>

                <h4 class="mb-2">Job Description:</h4>
                <ul class="list-unstyled tech-feature-list w-100">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Perform all visual
                    design phases from idea to finishing hand-off to engineering</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Present and protect
                    designs & core deliverables to peers and administrative level stakeholders</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Conceptualize original
                    site design concepts that bring ease and user friendliness to difficult roadblocks</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Make user flows,
                    wireframes, process flows, site maps, and storyboards to converse communication and design notions
                  </li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Set up and endorse
                    design guidelines, standards, and best practices.</li>
                </ul>

                <a href="#apply" class="btn btn secondary-solid-btn mt-3">Apply Now</a>

              </div>
            </div>

            <div id="3" class="tabcontent">
              <div class="about-us-content-wrap white-bg border rounded p-4">
                <h3><span class="color-secondary">App Optimizers & Marketers</span></h3>
                <span class="heading-border mb-4"></span>

                <p class="mb-2"><strong>No. of Position :</strong> 2 &nbsp; &nbsp; &nbsp; <strong>Experience :</strong>
                  1 to 3 Years</p>
                <p class=""><strong>Location :</strong> Noida</p>

                <h4 class="mb-2">Roles & Responsibilities :</h4>
                <p><strong>Mandatory Skills :</strong> Expertise in Photoshop, Illustrator, or other visual design,
                  HTML, CSS, JavaScript, and wire-framing tools.</p>

                <h4 class="mb-2">Job Description:</h4>
                <ul class="list-unstyled tech-feature-list w-100">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Perform all visual
                    design phases from idea to finishing hand-off to engineering</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Present and protect
                    designs & core deliverables to peers and administrative level stakeholders</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Conceptualize original
                    site design concepts that bring ease and user friendliness to difficult roadblocks</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Make user flows,
                    wireframes, process flows, site maps, and storyboards to converse communication and design notions
                  </li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Set up and endorse
                    design guidelines, standards, and best practices.</li>
                </ul>

                <a href="#apply" class="btn btn secondary-solid-btn mt-3">Apply Now</a>

              </div>
            </div>

            <div id="4" class="tabcontent">
              <div class="about-us-content-wrap white-bg border rounded p-4">
                <h3><span class="color-secondary">PR & Outreach Influencers</span></h3>
                <span class="heading-border mb-4"></span>

                <p class="mb-2"><strong>No. of Position :</strong> 2 &nbsp; &nbsp; &nbsp; <strong>Experience :</strong>
                  1 to 3 Years</p>
                <p class=""><strong>Location :</strong> Noida</p>

                <h4 class="mb-2">Roles & Responsibilities :</h4>
                <p><strong>Mandatory Skills :</strong> Expertise in Photoshop, Illustrator, or other visual design,
                  HTML, CSS, JavaScript, and wire-framing tools.</p>

                <h4 class="mb-2">Job Description:</h4>
                <ul class="list-unstyled tech-feature-list w-100">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Perform all visual
                    design phases from idea to finishing hand-off to engineering</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Present and protect
                    designs & core deliverables to peers and administrative level stakeholders</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Conceptualize original
                    site design concepts that bring ease and user friendliness to difficult roadblocks</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Make user flows,
                    wireframes, process flows, site maps, and storyboards to converse communication and design notions
                  </li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Set up and endorse
                    design guidelines, standards, and best practices.</li>
                </ul>

                <a href="#apply" class="btn btn secondary-solid-btn mt-3">Apply Now</a>

              </div>
            </div>

            <div id="5" class="tabcontent">
              <div class="about-us-content-wrap white-bg border rounded p-4">
                <h3><span class="color-secondary">Content/Copywriter</span></h3>
                <span class="heading-border mb-4"></span>

                <p class="mb-2"><strong>No. of Position :</strong> 2 &nbsp; &nbsp; &nbsp; <strong>Experience :</strong>
                  1 to 3 Years</p>
                <p class=""><strong>Location :</strong> Noida</p>

                <h4 class="mb-2">Roles & Responsibilities :</h4>
                <p><strong>Mandatory Skills :</strong> Expertise in Photoshop, Illustrator, or other visual design,
                  HTML, CSS, JavaScript, and wire-framing tools.</p>

                <h4 class="mb-2">Job Description:</h4>
                <ul class="list-unstyled tech-feature-list w-100">
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Perform all visual
                    design phases from idea to finishing hand-off to engineering</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Present and protect
                    designs & core deliverables to peers and administrative level stakeholders</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Conceptualize original
                    site design concepts that bring ease and user friendliness to difficult roadblocks</li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Make user flows,
                    wireframes, process flows, site maps, and storyboards to converse communication and design notions
                  </li>
                  <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Set up and endorse
                    design guidelines, standards, and best practices.</li>
                </ul>

                <a href="#apply" class="btn btn secondary-solid-btn mt-3">Apply Now</a>

              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="mobileView">
        <div class="row mt-3">
          <div class="col-lg-12">
            <div id="accordion-1" class="accordion accordion-faq">

              <div class="card">
                <div class="card-header py-3 collapsed" id="heading-1-1" data-toggle="collapse" role="button"
                  data-target="#collapse-1-1" aria-expanded="true" aria-controls="collapse-1-1">
                  <h5 class="mb-0 color-secondary">Website Designer</h5>
                </div>
                <div id="collapse-1-1" class="collapse show" aria-labelledby="heading-1-1" data-parent="#accordion-1">
                  <div class="card-body">
                    <p class="mb-2"><strong>No. of Position :</strong> 2 &nbsp; &nbsp; &nbsp; <strong>Experience
                        :</strong> 1 to 3 Years</p>
                    <p class=""><strong>Location :</strong> Noida</p>

                    <h4 class="mb-2">Roles & Responsibilities :</h4>
                    <p><strong>Mandatory Skills :</strong> Expertise in Photoshop, Illustrator, or other visual design,
                      HTML, CSS, JavaScript, and wire-framing tools.</p>

                    <h4 class="mb-2">Job Description:</h4>
                    <ul class="list-unstyled tech-feature-list w-100">
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Perform all visual
                        design phases from idea to finishing hand-off to engineering</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Present and protect
                        designs & core deliverables to peers and administrative level stakeholders</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Conceptualize
                        original site design concepts that bring ease and user friendliness to difficult roadblocks</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Make user flows,
                        wireframes, process flows, site maps, and storyboards to converse communication and design
                        notions</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Set up and endorse
                        design guidelines, standards, and best practices.</li>
                    </ul>

                    <a href="#apply" class="btn btn secondary-solid-btn mt-3">Apply Now</a>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header py-3" id="heading-1-2" data-toggle="collapse" role="button"
                  data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                  <h5 class="mb-0 color-secondary">UI/UX Designer</h5>
                </div>
                <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2" data-parent="#accordion-1">
                  <div class="card-body">
                    <p class="mb-2"><strong>No. of Position :</strong> 2 &nbsp; &nbsp; &nbsp; <strong>Experience
                        :</strong> 1 to 3 Years</p>
                    <p class=""><strong>Location :</strong> Noida</p>

                    <h4 class="mb-2">Roles & Responsibilities :</h4>
                    <p><strong>Mandatory Skills :</strong> Expertise in Photoshop, Illustrator, or other visual design,
                      HTML, CSS, JavaScript, and wire-framing tools.</p>

                    <h4 class="mb-2">Job Description:</h4>
                    <ul class="list-unstyled tech-feature-list w-100">
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Perform all visual
                        design phases from idea to finishing hand-off to engineering</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Present and protect
                        designs & core deliverables to peers and administrative level stakeholders</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Conceptualize
                        original site design concepts that bring ease and user friendliness to difficult roadblocks</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Make user flows,
                        wireframes, process flows, site maps, and storyboards to converse communication and design
                        notions</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Set up and endorse
                        design guidelines, standards, and best practices.</li>
                    </ul>

                    <a href="#apply" class="btn btn secondary-solid-btn mt-3">Apply Now</a>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header py-3" id="heading-1-3" data-toggle="collapse" role="button"
                  data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                  <h5 class="mb-0 color-secondary">App Optimizers & Marketers</h5>
                </div>
                <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3" data-parent="#accordion-1">
                  <div class="card-body">
                    <p class="mb-2"><strong>No. of Position :</strong> 2 &nbsp; &nbsp; &nbsp; <strong>Experience
                        :</strong> 1 to 3 Years</p>
                    <p class=""><strong>Location :</strong> Noida</p>

                    <h4 class="mb-2">Roles & Responsibilities :</h4>
                    <p><strong>Mandatory Skills :</strong> Expertise in Photoshop, Illustrator, or other visual design,
                      HTML, CSS, JavaScript, and wire-framing tools.</p>

                    <h4 class="mb-2">Job Description:</h4>
                    <ul class="list-unstyled tech-feature-list w-100">
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Perform all visual
                        design phases from idea to finishing hand-off to engineering</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Present and protect
                        designs & core deliverables to peers and administrative level stakeholders</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Conceptualize
                        original site design concepts that bring ease and user friendliness to difficult roadblocks</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Make user flows,
                        wireframes, process flows, site maps, and storyboards to converse communication and design
                        notions</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Set up and endorse
                        design guidelines, standards, and best practices.</li>
                    </ul>

                    <a href="#apply" class="btn btn secondary-solid-btn mt-3">Apply Now</a>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header py-3" id="heading-1-4" data-toggle="collapse" role="button"
                  data-target="#collapse-1-4" aria-expanded="false" aria-controls="collapse-1-4">
                  <h5 class="mb-0 color-secondary">PR & Outreach Influencers</h5>
                </div>
                <div id="collapse-1-4" class="collapse" aria-labelledby="heading-1-4" data-parent="#accordion-1">
                  <div class="card-body">
                    <p class="mb-2"><strong>No. of Position :</strong> 2 &nbsp; &nbsp; &nbsp; <strong>Experience
                        :</strong> 1 to 3 Years</p>
                    <p class=""><strong>Location :</strong> Noida</p>

                    <h4 class="mb-2">Roles & Responsibilities :</h4>
                    <p><strong>Mandatory Skills :</strong> Expertise in Photoshop, Illustrator, or other visual design,
                      HTML, CSS, JavaScript, and wire-framing tools.</p>

                    <h4 class="mb-2">Job Description:</h4>
                    <ul class="list-unstyled tech-feature-list w-100">
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Perform all visual
                        design phases from idea to finishing hand-off to engineering</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Present and protect
                        designs & core deliverables to peers and administrative level stakeholders</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Conceptualize
                        original site design concepts that bring ease and user friendliness to difficult roadblocks</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Make user flows,
                        wireframes, process flows, site maps, and storyboards to converse communication and design
                        notions</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Set up and endorse
                        design guidelines, standards, and best practices.</li>
                    </ul>

                    <a href="#apply" class="btn btn secondary-solid-btn mt-3">Apply Now</a>
                  </div>
                </div>
              </div>

              <div class="card">
                <div class="card-header py-3" id="heading-1-5" data-toggle="collapse" role="button"
                  data-target="#collapse-1-5" aria-expanded="false" aria-controls="collapse-1-5">
                  <h5 class="mb-0 color-secondary">Content/Copywriter</h5>
                </div>
                <div id="collapse-1-5" class="collapse" aria-labelledby="heading-1-5" data-parent="#accordion-1">
                  <div class="card-body">
                    <p class="mb-2"><strong>No. of Position :</strong> 2 &nbsp; &nbsp; &nbsp; <strong>Experience
                        :</strong> 1 to 3 Years</p>
                    <p class=""><strong>Location :</strong> Noida</p>

                    <h4 class="mb-2">Roles & Responsibilities :</h4>
                    <p><strong>Mandatory Skills :</strong> Expertise in Photoshop, Illustrator, or other visual design,
                      HTML, CSS, JavaScript, and wire-framing tools.</p>

                    <h4 class="mb-2">Job Description:</h4>
                    <ul class="list-unstyled tech-feature-list w-100">
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Perform all visual
                        design phases from idea to finishing hand-off to engineering</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Present and protect
                        designs & core deliverables to peers and administrative level stakeholders</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Conceptualize
                        original site design concepts that bring ease and user friendliness to difficult roadblocks</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Make user flows,
                        wireframes, process flows, site maps, and storyboards to converse communication and design
                        notions</li>
                      <li class="py-1"><span class="ti-control-forward mr-1 color-secondary"></span> Set up and endorse
                        design guidelines, standards, and best practices.</li>
                    </ul>

                    <a href="#apply" class="btn btn secondary-solid-btn mt-3">Apply Now</a>
                  </div>
                </div>
              </div>

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

      <div class="row align-items-center">
        <div class="col-md-8">
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
                      <div class="input-icon"><span class="ti-email"></span></div>
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
                    <label class="pb-1">Experience</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-briefcase color-primary"></span></div>
                      <select class="form-control">
                        <option value="">Select your experience</option>
                        <option value="">Less than 1 year</option>
                        <option value="">1-2 year</option>
                        <option value="">2-3 year</option>
                        <option value="">3-4 year</option>
                        <option value="">More than 5</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Apply for position</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-vector color-primary"></span></div>
                      <select class="form-control">
                        <option value="">Select position</option>
                        <option value="">Web Designer</option>
                        <option value="">UI/UX Designer</option>
                        <option value="">App Optimizers & Marketers</option>
                        <option value="">PR & Outreach Influencers</option>
                        <option value="">Content/Copywriter</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label class="pb-1">Upload your CV/Resume</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon"><span class="ti-upload color-primary"></span></div>
                      <input type="file" class="form-control" placeholder="Upload you file max 10mb" required>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-md-12">
                  <div class="form-group">
                    <label class="pb-1">Your Message</label>
                    <div class="input-group input-group-merge">
                      <div class="input-icon" style="height:100px;"><span class="ti-pencil-alt color-primary"
                          style="height:100px;"></span></div>
                      <textarea type="text" class="form-control" placeholder="Enter your message here"
                        style="height:100px; padding-top:17px" required></textarea>
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

              <button class="btn secondary-solid-btn border-radius mt-3 mb-3">Send Message</button>
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
