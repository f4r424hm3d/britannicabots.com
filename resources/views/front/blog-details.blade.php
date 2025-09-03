@extends('front.layouts.main')
@push('seo_meta_tag')
@include('front.layouts.dynamic_page_meta_tag')
@endpush
@section('main-section')
<div class="main pt-80">

  <!--header section start-->
  <section class="hero-section ptb-100 gradient-overlay"
    style="background: url('{{ url('front') }}/img/header-bg-5.jpg')no-repeat center center / cover">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-10">
          <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
            <h1 class="text-white mb-0">{{ $row->title }}</h1>
            <div class="custom-breadcrumb">
              <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                <li class="list-inline-item breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="list-inline-item breadcrumb-item"><a href="{{ url('/blogs') }}/">Blogs</a></li>
                <li class="list-inline-item breadcrumb-item active">{{ $row->title }}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--header section end-->

  <!--blog section start-->
  <div class="module ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <!-- Post-->
          <article class="post border-bx">
            @if ($row->thumbnail_path!=null)
            <div class="post-preview">
              <img src="{{ asset($row->thumbnail_path) }}" alt="article" class="img-fluid" />
            </div>
            @endif
            <div class="post-wrapper">
              <div class="post-header">
                <h1 class="post-title">{{ $row->title }}</h1>
                <ul class="post-meta">
                  <li>{{ getFormattedDate($row->created_at,'M d,Y') }}</li>
                  <li><a href="{{ url('blogs/'.$row->getCategory->slug) }}">{{ $row->getCategory->name }}</a></li>
                </ul>
              </div>
              <div class="post-content">
                {!! $row->description !!}
              </div>
              {{-- <div class="post-footer">
                <div class="post-tags"><a href="#">Lifestyle</a><a href="#">Music</a><a href="#">News</a><a
                    href="#">Travel</a></div>
              </div> --}}
            </div>
          </article>
          <!-- Post end-->


        </div>
        <div class="col-lg-4 col-md-4">
          <div class="sidebar-right  border-bx">

            <!-- Search widget-->
            <aside class="widget widget-search mb-4">
              <form>
                <input class="form-control pr-5" type="search" placeholder="Type Search Words">
                <button class="search-button" type="submit"><span class="ti-search"></span></button>
              </form>
            </aside>


            <!-- Categories widget-->
            <aside class="widget widget-categories main-categoriess mb-4">
              <div class="widget-title">
                <h6>Categories</h6>
              </div>
              <ul>
                @foreach ($blogCat as $bc)
                <li><a href="{{ url('blogs/'.$bc->getCategory->slug) }}">{{ $bc->getCategory->name }} <span
                      class="float-right"></span></a></li>
                @endforeach
              </ul>
            </aside>

            <!-- Recent entries widget-->
            <aside class="widget widget-recent-entries-custom mb-4">
              <div class="widget-title">
                <h6>Recent Posts</h6>
              </div>
              <ul>
                @foreach ($rows as $rb)
                <li class="clearfix">
                  <div class="wi">
                    <a href="{{ url('blog/'.$rb->title_slug) }}">
                      <img src="{{ asset($rb->thumbnail_path) }}" alt="recent post" class="img-fluid rounded" />
                    </a>
                  </div>
                  <div class="wb">
                    <a href="{{ url('blog/'.$rb->title_slug) }}">{{ $rb->shortnote }}
                    <span class="post-date">{{ getFormattedDate($row->created_at,'M d, Y') }}</span>
                    </a>
                    
                  </div>
                </li>
                @endforeach

              </ul>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--blog section end-->


  <!--call to action section start-->
  <section class="call-to-action py-5">
    <div class="container">
      <div class="row justify-content-around align-items-center">
        <div class="col-md-7">
          <div class="subscribe-content">
            <h3 class="mb-1">Best Agency to Grow Your Business</h3>
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
@endsection
