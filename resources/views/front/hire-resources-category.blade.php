@extends('front.layouts.main')
@push('seo_meta_tag')
@include('front.layouts.dynamic_page_meta_tag')
@endpush
@section('main-section')
  <!--body content wrap start-->
  <div class="main pt-80">

    <section class="hire-resources">
      <div class="container">
        <div class="row align-items-center ">
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">
            <div class="all-resources">
              <h2>{{ $cat->banner_title }}</h2>
              <p>{{ $cat->banner_shortnote }}</p>
              <div class="row flex-wrap">
                <div class="col col-sm-6 col-md-4 ">
                  <div class="all-numbers">
                    <h2>{{ $cat->year_of_experience }}+</h2>
                    <p>Years of Experience</p>
                  </div>
                </div>
                <div class="col col-sm-6 col-md-4 ">
                  <div class="all-numbers">
                    <h2>{{ $cat->developers }}+</h2>
                    <p>Developers</p>
                  </div>
                </div>
                <div class="col col-sm-6 col-md-4 ">
                  <div class="all-numbers">
                    <h2>{{ $cat->clients }}+</h2>
                    <p>Clients</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-6 mb-4">

            <p class="work-talent">Get The Best Talent Work for you At,</p>
            <div class="row">
              <div class="col-12 col-sm-12 col-xl-12">
                <div class="card hourly-tax">
                  <div class="d-flex hourly-fx  justify-content-between align-items-center p-4">
                    <div class="d-flex align-items-centera set-hourly">
                      <img src="{{ url('/front/') }}/img/hourly-icon.svg" class="align-self-center" width="40px"
                        height="40px" alt="hourly">
                      <div class="">
                        <h2 class="title-h6">Hourly</h2>
                        <span class="">{{ $cat->hourly_price }}/<small class="">Hour</small></span>
                      </div>
                    </div>
                    <p class="hire-appsss">{{ $cat->category_name }}</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </section>
    <section class="partners-bots">
      <div class="container">
        <div class="row">
          @foreach ($cat->clientsLogo as $item)
            <div class="col col-sm-4 col-md-3 col-lg-3 mb-3">
              <div class="img-partners">
                <img src="{{ asset($item->logo) }}" alt="{{ $item->client_name }}" class>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>
    <section class="hire-expert">
      <div class="container">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4">
            <div class="expert-title">
              <h2 class="exper-hires">
                {{ $cat->title }}
              </h2>
              <!-- <button type="button" class="btn btn-outline-primary rounded-pill">{{ $cat->category_name }}</button> -->
            </div>
    
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-8 mb-4">
            <div class="total-skill">
              {!! $cat->description !!}
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="vision-steps">
      <div class="container">
        <div class="main-visionss">
          <div class="row flex-sm-column-reverse flex-md-row align-items-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-5  mb-3">
              <div class="hire-apps">
                <h2>{{ $cat->section2_title }}</h2>
                <p>{{ $cat->section2_description }}</p>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-7 mb-3">
              <div class="main-vision">
                <img src="{{ asset($cat->section2_image) }}" alt="{{ $cat->section2_title }}">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <section class="talent-steps">
      <div class="container">
        <div class="row ">
          <div class="col-12 col-sm-12 col-md-12  ">
            <div class="class-talent p-4 p-md-5 p-tb-80 h-100 text-center">
              <h2>
                Leverage World-Class Talent
              </h2>
              <p>We have a team of experts who have a pool of expertise in their respective fields. Their approach is
                out-of-box, dynamic, and unique in the market.</p>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 ">
            <div class="row  ">
              <div class="col-12 col-sm-6 col-md-6 col-xl-4  mb-4">
                <div class="text-developers">
                  <img src="{{ url('/front/') }}/img/junior-developers.svg" width="60" height="60"
                    alt="junior developers">
                  <h3 class="title-h6 font-w-600 mt-4 mb-3">Junior Developers</h3>
                  <p class="desc mb-0">Our Junior Developers with 1 to 2 years of experience understand the client's needs
                    and ensure that the entire process matches requirements. They have insightful knowledge and try their
                    best input to develop outstanding and unique development.</p>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-4  mb-4">
                <div class="text-developers">
                  <img src="{{ url('/front/') }}/img/senior-developers.svg" width="60" height="60"
                    alt="senior developers">
                  <h3 class="title-h6 font-w-600 mt-4 mb-3">Senior Developers</h3>
                  <p class="desc mb-0">Senior Developers having 2 to 8 years of experience are highly skilled and
                    proficient throughout the development process. They bring the best in the development and get
                    successful bug-free solutions.</p>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-4  mb-4">
                <div class="text-developers">
                  <img src="{{ url('/front/') }}/img/project-managers.svg" width="60" height="60"
                    alt="project managers">
                  <h3 class="title-h6 font-w-600 mt-4 mb-3">Project Managers</h3>
                  <p class="desc mb-0">Our project managers are well aware of how to handle and execute projects.
                    britannica bots has expertise in IT development, and our project managers keep an eye on every
                    minor detail in the development process with client satisfaction.</p>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-4  mb-4">
                <div class="text-developers">
                  <img src="{{ url('/front/') }}/img/ui-ux-designers.svg" width="60" height="60"
                    alt="ui and ux designers">
                  <h3 class="title-h6 font-w-600 mt-4 mb-3">UI/UX Designers</h3>
                  <p class="desc mb-0">Our web developers know the importance of a website for businesses in this
                    competitive era. They have expertise in all the latest web technologies and deliver exceptional web
                    design and development services as per client requirements.</p>
                </div>
              </div>

              <div class="col-12 col-sm-6 col-md-6 col-xl-4  mb-4">
                <div class="text-developers">
                  <img src="{{ url('/front/') }}/img/web-designers.svg" width="60" height="60"
                    alt="ui and ux designers">
                  <h3 class="title-h6 font-w-600 mt-4 mb-3">Web Designers</h3>
                  <p class="desc mb-0">The web designers of britannica bots are outstanding and dedicated. We have a
                    team of skilled web designers with several years of experience in the market. Web Designers have a
                    futuristic vision of web development.</p>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-6 col-xl-4  mb-4">
                <div class="text-developers">
                  <img src="{{ url('/front/') }}/img/testers.svg" width="60" height="60" alt="testers">
                  <h3 class="title-h6 font-w-600 mt-4 mb-3">Testers</h3>
                  <p class="desc mb-0">Quality Assurance is one of the top aspects of any successful solution. We believe
                    in delivering solutions with the best quality in the market, and our QA team checks every project we
                    work on and helps us deliver bug-free solutions to our clients.</p>
                </div>

              </div>
            </div>
          </div>
        </div>
    </section>
    <section class="android-userss">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 text-center">
            <div class="all-hire">
              <h2 class="title-h4 font-weight-bold position-relative">Hire Android Developers To Empower Your Business
                with our Development Proficiency</h2>
              <p class="desc mb-0">Hire dedicated Android developers to meet your business perks by leveraging our
                technical elegance.</p>
            </div>
          </div>
          <div class="col-12 col-xl-12 mt-4">
            <div class="table-responsive development-tbl">
              <table class="table table-bordered mb-0">
                <thead>
                  <tr>
                    <th class=" title-zones">Range of Developers</th>
                    <th class="title-zones">Junior Developers</th>
                    <th class="title-zones">Mid-Level Developers</th>
                    <th class="title-zones">Senior Developers</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="title-zones">Approx Cost</td>
                    <td>$18</td>
                    <td>$23</td>
                    <td>$30</td>
                  </tr>
                  <tr>
                    <td class="title-zones">Years of Experience</td>
                    <td>1-3 Years</td>
                    <td>3-5 Years</td>
                    <td>5+ Years</td>
                  </tr>
                  <tr>
                    <td class="title-zones">Methodology</td>
                    <td>Agile</td>
                    <td>Agile</td>
                    <td>Agile</td>
                  </tr>
                  <tr>
                    <td class="title-zones">Project Manager</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td class="title-zones">Time Zone Flexibility</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td class="title-zones">Quality Guarantee</td>
                    <td>Yes</td>
                    <td>Yes</td>
                    <td>Yes</td>
                  </tr>
                  <tr>
                    <td class="title-zones">Working Hours</td>
                    <td>40 hours/ Week</td>
                    <td>40 hours/ Week</td>
                    <td>40 hours/ Week</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="demand-teams">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 text-center mb-5">
            <div class="all-hire">
              <h2 class="title-h4 position-relative">Create Outstanding On-Demand Teams</h2>

              <p class="desc mb-0">Get the Team or Team Member you want for your project.</p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-6 col-lg-4  col-xl-4 mb-4">
            <div class="p-4 text-center position-relative align-items-center h-100 text-developers main-quick">
              <i class="fa fa-cogs oz" aria-hidden="true"></i>

              <h3 class="title-h6 font-w-600 my-3">Efficient Process</h3>
              <p class="desc mb-0">Our quick and efficient process, so our clients do not have to wait much before
                selecting their ideal team. The process is easy and offers flexible timing from hourly to yearly.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4  col-xl-4 mb-4">
            <div class="p-4 text-center position-relative align-items-center h-100 text-developers main-quick">
              <i class="fa fa-certificate oz" aria-hidden="true"></i>

              <h3 class="title-h6 font-w-600 my-3">Choose the Best</h3>
              <p class="desc mb-0">britannica bots believes in the best and delivers the best only. We offer a team
                or team of experts who provide quality and excellent work. Our success rate is high because of our work.
              </p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-4  col-xl-4 mb-4">
            <div class="p-4 text-center position-relative align-items-center h-100 text-developers main-quick">
              <i class="fa fa-cog oz" aria-hidden="true"></i>
              <h3 class="title-h6 font-w-600 my-3">Advanced Technology</h3>
              <p class="desc mb-0">Our experts are proficient with advanced technology and implement it in their
                profession. Therefore, we embrace a new and modern approach and adept job accordingly.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="skilled-developer">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-11 mb-3">
            <h2 class="title-h4 font-w-600 text-center">Our Highly Skilled Developer Team Leveraging Their Technical
              Proficiency to Unlock the Full Potential of Quality Services</h2>
          </div>
          <div class="col-12 col-md-12">
            <div class="all-developers">
              <div class="d-flex flex-column flex-lg-row mb-4">
                <div class="developer-blue">
                  <h3 class="title-deveops">Web Development</h3>
                </div>
                <ul class="tech-list">
                  <li>NodeJS</li>
                  <li>PHP</li>
                  <li>Codeigniter</li>
                  <li>Laravel</li>
                  <li>Java Spring Boot</li>
                  <li>Python</li>
                </ul>

              </div>
              <div class="d-flex flex-column flex-lg-row mb-4">
                <div class="developer-blue">
                  <h3 class="title-deveops">App Development</h3>
                </div>
                <ul class="tech-list">
                  <li>iOS</li>
                  <li>Android</li>
                  <li>Swift</li>
                  <li>Kotlin</li>
                  <li>Flutter</li>
                  <li>Xamarin</li>
                </ul>

              </div>
              <div class="d-flex flex-column flex-lg-row mb-4">
                <div class="developer-blue">
                  <h3 class="title-deveops">Front-End</h3>
                </div>
                <ul class="tech-list">
                  <li>Angular</li>
                  <li>React JS</li>
                  <li>Knockout JS</li>
                  <li>Express JS</li>
                </ul>

              </div>
              <div class="d-flex flex-column flex-lg-row mb-4">
                <div class="developer-blue">
                  <h3 class="title-deveops">Back-End</h3>
                </div>
                <ul class="tech-list">
                  <li>Node JS</li>
                  <li>Python</li>
                  <li>Express JS</li>
                  <li>Java</li>
                  <li>Spring</li>
                </ul>

              </div>
              <div class="d-flex flex-column flex-lg-row mb-4">
                <div class="developer-blue">
                  <h3 class="title-deveops">Microsoft</h3>
                </div>
                <ul class="tech-list">
                  <li>ASP.NET</li>
                  <li>C#</li>
                  <li>ASP.NET Core</li>
                </ul>
              </div>
              <div class="d-flex flex-column flex-lg-row mb-4">
                <div class="developer-blue">
                  <h3 class="title-deveops">Open Source</h3>
                </div>
                <ul class="tech-list ">
                  <li>WordPress</li>
                  <li>Shopify</li>
                  <li>Magento</li>
                </ul>
              </div>
              <div class="d-flex flex-column flex-lg-row mb-4">
                <div class="developer-blue">
                  <h3 class="title-deveops">Database</h3>
                </div>
                <ul class="tech-list">
                  <li>MySQL</li>
                  <li>Oracle</li>
                  <li>MongoDB</li>
                </ul>

              </div>
              <div class="d-flex flex-column flex-lg-row mb-4">
                <div class="developer-blue">
                  <h3 class="title-deveops">Servers</h3>
                </div>
                <ul class="tech-list ">
                  <li>Amazon Web Services</li>
                  <li>Google Cloud</li>
                  <li>Microsoft Azure</li>
                </ul>
              </div>
              <div class="d-flex flex-column flex-lg-row mb-0">
                <div class="developer-blue">
                  <h3 class="title-deveops">DevOps</h3>
                </div>
                <ul class="tech-list ">
                  <li>Kubernetes</li>
                  <li>Jenkins</li>
                  <li>Chef</li>
                  <li>Maven</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="business-idea">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-12 col-xl-11 mx-auto mb-4">

            <div class="bussiness text-center">
              <h2 class=" mb-3">Hire Android Developers Who Are Passionate to Turn Business Idea into A Reality With
                Excellence</h2>
              <p class="desc ">Hire Futuristic Android Developers to Access Our Technical Proficiency and Stay Ahead of
                the Curve of the Competition.</p>
            </div>
          </div>
          <div class="all-hired">
            <div class="row">
              <div class="col-12 col-sm-6 col-md-4  col-xl-4 mb-4 ">
                <div class="card startups">

                  <img src="{{ url('/front/') }}/img/business1.png" class="main-buss" alt="">
                  <div class="all-business">
                    <h3 class="mid-title mb-2">Startups</h3>
                    <p class="desc mb-0 c-white">Global startups can hire a dedicated development team from britannica bots to access the large pool of developers that can help them accelerate their project
                      development process while keeping their budget and timeframe in the center.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4  col-xl-4 mb-4 ">
                <div class="card startups">
                  <img src="{{ url('/front/') }}/img/web-development.jpg" class="main-buss" alt="">
                  <div class="all-business">
                    <h3 class="mid-title">Mid-Size Businesses</h3>
                    <p class="desc mb-0 c-white">Mid-size businesses can hire dedicated developers from britannica bots to build more scalable and robust digital solutions that can bring more innovation and
                      risk mitigation while helping businesses take a step forward toward excellence.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-sm-6 col-md-4  col-xl-4 mb-4 ">
                <div class="card startups">
                  <img src="{{ url('/front/') }}/img/bussiness-level.jpg" class="main-buss" alt="">
                  <div class="all-business">
                    <h3 class="mid-title">Enterprise Level Businesses</h3>
                    <p class="desc mb-0 c-white">Large-scale enterprises hire experienced developers from our theme who
                      can help them handle their large and complex development projects through our technical expertise
                      that can bring more value for strategic innovation.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endsection
