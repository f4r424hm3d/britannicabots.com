@extends('front.layouts.main')
@push('seo_meta_tag')
@include('front.layouts.static_page_meta_tag')
@endpush
@section('main-section')
@section('main-section')
<!--body content wrap start-->
<div class="main pt-80">

  <!--header section start-->
  <section class="hero-section ptb-100 gradient-overlay"
    style="background: url('{{ url('/front/') }}/img/header-bg-5.jpg')no-repeat center center / cover">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
          <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
            <h1 class="text-white mb-0">{{ $page_title }}</h1>
            <div class="custom-breadcrumb">
              <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                <li class="list-inline-item breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="list-inline-item breadcrumb-item active">{{ $page_title }}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--header section end-->

  <!--blog section start-->
  <section class="our-blog-section ptb-100 gray-light-bg">
    <div class="container">
      <div class="row">
        @foreach ($rows as $row)
        <div class="col-md-4">
          <div class="single-blog-card card border-0 shadow-sm">
            <div class="blog-img position-relative">
              <img src="{{ asset($row->thumbnail_path) }}" class="card-img-top" alt="blog">
              <div class="meta-date">
                <strong>{{ getFormattedDate($row->created_at,'d') }}</strong>
                <small>{{ getFormattedDate($row->created_at,'M') }}</small>
              </div>
            </div>
            <div class="card-body">
              <div class="post-meta mb-2">
              </div>
              <h3 class="h5 mb-2 card-title"><a href="{{ url('blog/'.$row->title_slug) }}/">{{ $row->title }}</a></h3>
              <p class="card-text">{{ $row->shortnote }}</p>
              <a href="{{ url('blog/'.$row->title_slug) }}/" class="detail-link">Read more <span
                  class="ti-arrow-right"></span></a>
            </div>
          </div>
        </div>
        @endforeach

      </div>

      <div class="row">
        <div class="col-md-12">

          <nav class="custom-pagination-nav mt-4">
            <ul class="pagination justify-content-center">
              {!! $rows->links('pagination::bootstrap-5') !!}
            </ul>
          </nav>
          {{-- <nav class="custom-pagination-nav mt-4">
            <ul class="pagination justify-content-center">
              <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-left"></span></a></li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#"><span class="ti-angle-right"></span></a></li>
            </ul>
          </nav> --}}
        </div>
      </div>

    </div>
  </section>
  <!--blog section end-->


  <!--call to action section start-->
  <section class="call-to-action py-5">
    <div class="container">
      <div class="row justify-content-around align-items-center">
        <div class="col-md-7">
          <div class="subscribe-content">
            <h3 class="mb-1">Best Agency For Grow Your Business</h3>
            <p>Rapidiously engage fully tested e-commerce with progressive architectures.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="action-btn text-lg-right text-sm-left">
            <a href="{{ url('contact') }}" class="btn secondary-solid-btn">Get in touch with us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--call to action section end-->

</div>
<!--body content wrap end-->
@endsection
