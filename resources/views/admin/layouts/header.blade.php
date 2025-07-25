<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  @stack('title')
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
  <meta content="Themesbrand" name="author" />
  <!-- choices css -->
  <link href="{{ url('backend/') }}/assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet"
    type="text/css" />

  <!-- DataTables -->
  <link href="{{ url('backend/') }}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet"
    type="text/css" />
  <link href="{{ url('backend/') }}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
    rel="stylesheet" type="text/css" />

  <!-- Responsive datatable examples -->
  <link href="{{ url('backend/') }}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
    rel="stylesheet" type="text/css" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="{{ url('backend/') }}/assets/images/favicon.ico" />

  <!-- plugin css -->
  <link href="{{ url('backend/') }}/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css"
    rel="stylesheet" type="text/css" />

  <!-- Bootstrap Css -->
  <link href="{{ url('backend/') }}/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet"
    type="text/css" />
  <!-- Icons Css -->
  <link href="{{ url('backend/') }}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
  <!-- App Css-->
  <link href="{{ url('backend/') }}/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
  <script src="{{ url('/') }}/ckeditor/ckeditor.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    .hide-this {
      display: none;
    }

    .f-rgt {
      float: right;
    }

    .btn-xs,
    .btn-group-xs>.btn {
      padding: 1px 5px;
      font-size: 0.8571rem;
      line-height: 1.5;
      border-radius: 3px;
    }

    .float-right {
      float: right;
    }

    .chr {
      margin-top: 3px;
      margin-bottom: 3px
    }

    .just {
      text-align: justify;
      text-justify: inter-word;
    }
  </style>
</head>

<body data-layout="horizontal" data-layout-size="boxed" data-layout-mode="light" data-topbar="dark"
  data-sidebar="light">
  <!-- Begin page -->
  <div id="layout-wrapper">
    <header id="page-topbar">
      <div class="navbar-header">
        <div class="d-flex">
          <!-- LOGO -->
          <div class="navbar-brand-box">
            <a href="{{ url('admin') }}" class="logo logo-dark">
              <span class="logo-sm">
                <img src="{{ url('backend/') }}/assets/images/logo-sm.svg" alt="" height="24" />
              </span>
              <span class="logo-lg">
                <img src="{{ url('backend/') }}/assets/images/logo-sm.svg" alt="" height="24" />
                <span class="logo-txt">IELTS Practice</span>
              </span>
            </a>

            <a href="{{ url('admin') }}" class="logo logo-light">
              <span class="logo-sm">
                <img src="{{ url('backend/') }}/assets/images/logo-sm.svg" alt="" height="24" />
              </span>
              <span class="logo-lg">
                <img src="{{ url('backend/') }}/assets/images/logo-sm.svg" alt="" height="24" />
                <span class="logo-txt">IELTS Practice</span>
              </span>
            </a>
          </div>

          <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
            data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
            <i class="fa fa-fw fa-bars"></i>
          </button>
        </div>

        <div class="d-flex">

          <div class="dropdown d-none d-sm-inline-block">
            <button type="button" class="btn header-item" id="mode-setting-btn">
              <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
              <i data-feather="sun" class="icon-lg layout-mode-light"></i>
            </button>
          </div>

          <div class="dropdown d-none d-lg-inline-block ms-1">
            <button type="button" class="btn header-item" data-bs-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i data-feather="grid" class="icon-lg"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
              <div class="p-2">
                <div class="row g-0">
                  <div class="col">
                    <a class="dropdown-icon-item" href="#">
                      <img src="{{ url('backend/') }}/assets/images/brands/github.png" alt="Github" />
                      <span>GitHub</span>
                    </a>
                  </div>
                  <div class="col">
                    <a class="dropdown-icon-item" href="#">
                      <img src="{{ url('backend/') }}/assets/images/brands/bitbucket.png" alt="bitbucket" />
                      <span>Bitbucket</span>
                    </a>
                  </div>
                  <div class="col">
                    <a class="dropdown-icon-item" href="#">
                      <img src="{{ url('backend/') }}/assets/images/brands/dribbble.png" alt="dribbble" />
                      <span>Dribbble</span>
                    </a>
                  </div>
                </div>

                <div class="row g-0">
                  <div class="col">
                    <a class="dropdown-icon-item" href="#">
                      <img src="{{ url('backend/') }}/assets/images/brands/dropbox.png" alt="dropbox" />
                      <span>Dropbox</span>
                    </a>
                  </div>
                  <div class="col">
                    <a class="dropdown-icon-item" href="#">
                      <img src="{{ url('backend/') }}/assets/images/brands/mail_chimp.png" alt="mail_chimp" />
                      <span>Mail Chimp</span>
                    </a>
                  </div>
                  <div class="col">
                    <a class="dropdown-icon-item" href="#">
                      <img src="{{ url('backend/') }}/assets/images/brands/slack.png" alt="slack" />
                      <span>Slack</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="dropdown d-inline-block">
            <button type="button" class="btn header-item bg-soft-light border-start border-end"
              id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="rounded-circle header-profile-user"
                src="{{ url('backend/') }}/assets/images/users/avatar-1.jpg" alt="Header Avatar" />
              <span class="d-none d-xl-inline-block ms-1 fw-medium">Admin</span>
              <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
              <!-- item-->
              <a class="dropdown-item" href="{{ url('admin/profile') }}">
                <i class="mdi mdi-face-profile font-size-16 align-middle me-1"></i>
                Profile
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('admin/logout') }}">
                <i class="mdi mdi-logout font-size-16 align-middle me-1"></i>
                Logout
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="topnav">
      <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
          <div class="collapse navbar-collapse" id="topnav-menu-content">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void()" id="topnav-more"
                  role="button">
                  <span data-key="t-extra-pages">
                    Portfolios
                  </span>
                  <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-more">
                  <div class="dropdown">
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('portfolio') }}"
                      id="topnav-auth" role="button">
                      <span data-key="t-authentication">Portfolio</span>
                    </a>
                    <a class="dropdown-item dropdown-toggle arrow-none"
                      href="{{ aurl('digital-marketing-portfolio') }}" id="topnav-auth" role="button">
                      <span data-key="t-authentication">Digital Marketing Portfolio</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void()" id="topnav-more"
                  role="button">
                  <span data-key="t-extra-pages">
                    Services
                  </span>
                  <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-more">
                  <div class="dropdown">
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('services') }}"
                      id="topnav-auth" role="button">
                      <span data-key="t-authentication">Services</span>
                    </a>
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('sub-services') }}"
                      id="topnav-auth" role="button">
                      <span data-key="t-authentication">Sub Services</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void()" id="topnav-more"
                  role="button">
                  <span data-key="t-extra-pages">
                    Inquiry
                  </span>
                  <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-more">
                  <div class="dropdown">
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('contact-us') }}"
                      id="topnav-auth" role="button">
                      <span data-key="t-authentication">Contact Us</span>
                    </a>
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('get-quote') }}"
                      id="topnav-auth" role="button">
                      <span data-key="t-authentication">Get Quote</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void()" id="topnav-more"
                  role="button">
                  <span data-key="t-extra-pages">
                    Career
                  </span>
                  <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-more">
                  <div class="dropdown">
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('designations') }}"
                      id="topnav-auth" role="button">
                      <span data-key="t-authentication">Designation</span>
                    </a>
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('vacancy') }}"
                      id="topnav-auth" role="button">
                      <span data-key="t-authentication">Vacancy</span>
                    </a>
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('job-application') }}"
                      id="topnav-auth" role="button">
                      <span data-key="t-authentication">Job Application</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void()" id="topnav-more"
                  role="button">
                  <span data-key="t-extra-pages">
                    Blogs
                  </span>
                  <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-more">
                  <div class="dropdown">
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('blog-category') }}"
                      id="topnav-auth" role="button">
                      <span data-key="t-authentication">Category</span>
                    </a>
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('blogs') }}" id="topnav-auth"
                      role="button">
                      <span data-key="t-authentication">Blogs</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void()" id="topnav-more"
                  role="button">
                  <span data-key="t-extra-pages">
                    SEO
                  </span>
                  <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-more">
                  <div class="dropdown">
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('static-page-seo') }}"
                      id="topnav-auth" role="button">
                      <span data-key="t-authentication">Static Page</span>
                    </a>
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('dynamic-page-seo') }}"
                      id="topnav-auth" role="button">
                      <span data-key="t-authentication">Dynamic Page</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void()" id="topnav-more"
                  role="button">
                  <span data-key="t-extra-pages">
                    Hire Resources
                  </span>
                  <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-more">
                  <div class="dropdown">
                    <a class="dropdown-item dropdown-toggle arrow-none"
                      href="{{ aurl('hire-resources-categories') }}" id="topnav-auth" role="button">
                      <span data-key="t-authentication">Categories</span>
                    </a>
                    <a class="dropdown-item dropdown-toggle arrow-none"
                      href="{{ aurl('hire-resources-sub-categories') }}" id="topnav-auth" role="button">
                      <span data-key="t-authentication">Sub Categories</span>
                    </a>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle arrow-none" href="javascript:void()" id="topnav-more"
                  role="button">
                  <span data-key="t-extra-pages">
                    More
                  </span>
                  <div class="arrow-down"></div>
                </a>
                <div class="dropdown-menu" aria-labelledby="topnav-more">
                  <div class="dropdown">
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('testimonial') }}"
                      id="topnav-auth" role="button">
                      <span data-key="t-authentication">Testimonials</span>
                    </a>
                    <a class="dropdown-item dropdown-toggle arrow-none" href="{{ aurl('team') }}" id="topnav-auth"
                      role="button">
                      <span data-key="t-authentication">Team</span>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
