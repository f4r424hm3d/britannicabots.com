@extends('front.layouts.main')
@push('title')
<title>{{ $row->title }}</title>
@endpush
@section('main-section')
<div class="main pt-80">

  <!--header section start-->
  <section class="hero-section ptb-100 gradient-overlay"
    style="background: url('{{ url('front') }}/img/header-bg-5.jpg')no-repeat center center / cover">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-7">
          <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
            <h1 class="text-white mb-0">Latest Blog</h1>
            <div class="custom-breadcrumb">
              <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                <li class="list-inline-item breadcrumb-item"><a href="#">Home</a></li>
                <li class="list-inline-item breadcrumb-item"><a href="#">Pages</a></li>
                <li class="list-inline-item breadcrumb-item active">Latest Blog</li>
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
          <article class="post">
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

          <!-- Comments area-->
          <div class="comments-area mb-5">
            <h5 class="comments-title">3 Comments</h5>
            <div class="comment-list">
              <!-- Comment-->
              <div class="comment">
                <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="img/client-2.jpg"
                    alt="comment" /></div>
                <div class="comment-body">
                  <div class="comment-meta">
                    <div class="comment-meta-author"><a href="#">Jason Ford</a></div>
                    <div class="comment-meta-date"><a href="#">May 5, 2015 at 4:51 am</a></div>
                  </div>
                  <div class="comment-content">
                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack
                      nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim
                      8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
                  </div>
                  <div class="comment-reply"><a href="#">Reply</a></div>
                </div>
                <!-- Subcomment-->
                <div class="children">
                  <div class="comment">
                    <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="img/client-3.jpg"
                        alt="comment" /></div>
                    <div class="comment-body">
                      <div class="comment-meta">
                        <div class="comment-meta-author"><a href="#">Harry Benson</a></div>
                        <div class="comment-meta-date"><a href="#">May 5, 2015 at 4:51 am</a></div>
                      </div>
                      <div class="comment-content">
                        <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny
                          pack nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth
                          anim 8-bit hella.</p>
                      </div>
                      <div class="comment-reply"><a href="#">Reply</a></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Comment-->
              <div class="comment">
                <div class="comment-author"><img class="avatar img-fluid rounded-circle" src="img/client-4.jpg"
                    alt="comment" /></div>
                <div class="comment-body">
                  <div class="comment-meta">
                    <div class="comment-meta-author"><a href="#">Henry Cain</a></div>
                    <div class="comment-meta-date"><a href="#">May 5, 2015 at 4:51 am</a></div>
                  </div>
                  <div class="comment-content">
                    <p>Meh synth Schlitz, tempor duis single-origin coffee ea next level ethnic fingerstache fanny pack
                      nostrud. Seitan High Life reprehenderit consectetur cupidatat kogi about me. Photo booth anim
                      8-bit hella, PBR 3 wolf moon beard Helvetica.</p>
                  </div>
                  <div class="comment-reply"><a href="#">Reply</a></div>
                </div>
              </div>
            </div>
            <div class="comment-respond">
              <h5 class="comment-reply-title">Leave a Reply</h5>
              <p class="comment-notes">Your email address will not be published. Required fields are marked</p>
              <form class="comment-form row">
                <div class="form-group col-md-4">
                  <input class="form-control" type="text" placeholder="Name">
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control" type="text" placeholder="Email">
                </div>
                <div class="form-group col-md-4">
                  <input class="form-control" type="url" placeholder="Website">
                </div>
                <div class="form-group col-md-12">
                  <textarea class="form-control" rows="8" placeholder="Comment"></textarea>
                </div>
                <div class="form-submit col-md-12">
                  <button class="btn secondary-solid-btn" type="submit">Post Comment</button>
                </div>
              </form>
            </div>
          </div>
          <!-- Comments area end-->
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="sidebar-right pl-4">

            <!-- Search widget-->
            <aside class="widget widget-search">
              <form>
                <input class="form-control" type="search" placeholder="Type Search Words">
                <button class="search-button" type="submit"><span class="ti-search"></span></button>
              </form>
            </aside>


            <!-- Categories widget-->
            <aside class="widget widget-categories">
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
            <aside class="widget widget-recent-entries-custom">
              <div class="widget-title">
                <h6>Recent Posts</h6>
              </div>
              <ul>
                @foreach ($rows as $rb)
                <li class="clearfix">
                  <div class="wi">
                    <a href="{{ url('blog/'.$rb->title_slug.'-'.$rb->id) }}">
                      <img src="{{ asset($rb->thumbnail_path) }}" alt="recent post" class="img-fluid rounded" />
                    </a>
                  </div>
                  <div class="wb">
                    <a href="{{ url('blog/'.$rb->title_slug.'-'.$rb->id) }}">{{ $rb->shortnote }}</a>
                    <span class="post-date">{{ getFormattedDate($row->created_at,'M d, Y') }}</span>
                  </div>
                </li>
                @endforeach

              </ul>
            </aside>

            <!-- Subscribe widget-->
            {{-- <aside class="widget widget-categories">
              <div class="widget-title">
                <h6>Newsletter</h6>
              </div>
              <p>Enter your email address below to subscribe to my newsletter</p>
              <form action="#" method="post" class="d-none d-md-block d-lg-block">
                <input type="text" class="form-control input" id="email-footer" name="email"
                  placeholder="info@yourdomain.com">
                <button type="submit" class="btn secondary-solid-btn btn-block btn-not-rounded mt-3">Subscribe</button>
              </form>
            </aside> --}}

            <!-- Tags widget-->
            {{-- <aside class="widget widget-tag-cloud">
              <div class="widget-title">
                <h6>Tags</h6>
              </div>
              <div class="tag-cloud"><a href="#">e-commerce</a><a href="#">portfolio</a><a href="#">responsive</a><a
                  href="#">bootstrap</a><a href="#">business</a><a href="#">corporate</a></div>
            </aside> --}}
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
@endsection
