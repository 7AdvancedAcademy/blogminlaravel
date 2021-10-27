@extends('layouts.main')


@section('main-section')
        <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
        <div class="container-fluid">
          <div class="owl-banner owl-carousel">
            @foreach($posts->take(4) as $post)
            <div class="item">
              @if($post->img) 
              <img src="{{ asset('/uploads/posts/'.$post->img) }}" alt="">
              @else
              <img src="assets/images/banner-item-01.jpg" alt="">
              @endif
              <div class="item-content">
                <div class="main-content">
                  <div class="meta-category">
                    <span>Fashion</span>
                  </div>
                  <a href="{{ route('article', $post->slug) }}"><h4>{{ $post->title }}</h4></a>
                  <ul class="post-info">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">{{ $post->create_at }}</a></li>
                    {{-- <li><a href="#">12 Comments</a></li> --}}
                  </ul>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- Banner Ends Here -->

  
  
      <section class="blog-posts">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="all-blog-posts">
                <div class="row">
                  @foreach($posts->slice(4, 15) as $post)
                  <div class="col-lg-12">
                    <div class="blog-post">
                      <div class="blog-thumb">
                        @if($post->img) 
                        <img src="{{ asset('/uploads/posts/'.$post->img) }}" alt="">
                        @else
                        <img src="assets/images/blog-post-01.jpg" alt="">
                        @endif
                      </div>
                      <div class="down-content">
                        <span>Lifestyle</span>
                        <a href="{{ route('article', $post->slug) }}"><h4>{{ $post->title }}</h4></a>
                        <ul class="post-info">
                          <li><a href="#">Admin</a></li>
                          <li><a href="#">{{ $post->created_at->diffForHumans() }}</a></li>
                        </ul>
                       <p>
                        @if(strlen($post->content > 200))
                        {{ substr(strip_tags($post->content), 200) }}
                        @else 
                          {{ strip_tags($post->content) }}
                        @endif

                       </p>
                        <div class="post-options">
                          <div class="row">
                            <div class="col-6">
                              <ul class="post-tags">
                                <li><i class="fa fa-tags"></i></li>
                                <li><a href="#">Beauty</a>,</li>
                                <li><a href="#">Nature</a></li>
                              </ul>
                            </div>
                            <div class="col-6">
                              <ul class="post-share">
                                <li><i class="fa fa-share-alt"></i></li>
                                <li><a href="#">Facebook</a>,</li>
                                <li><a href="#"> Twitter</a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  @endforeach
  
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sidebar">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="sidebar-item search">
                      <form id="search_form" name="gs" method="GET" action="#">
                        <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                      </form>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="sidebar-item recent-posts">
                      <div class="sidebar-heading">
                        <h2>Recent Posts</h2>
                      </div>
                      <div class="content">
                        <ul>
                          <li><a href="post-details.html">
                            <h5>Vestibulum id turpis porttitor sapien facilisis scelerisque</h5>
                            <span>May 31, 2020</span>
                          </a></li>
                          <li><a href="post-details.html">
                            <h5>Suspendisse et metus nec libero ultrices varius eget in risus</h5>
                            <span>May 28, 2020</span>
                          </a></li>
                          <li><a href="post-details.html">
                            <h5>Swag hella echo park leggings, shaman cornhole ethical coloring</h5>
                            <span>May 14, 2020</span>
                          </a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="sidebar-item categories">
                      <div class="sidebar-heading">
                        <h2>Categories</h2>
                      </div>
                      <div class="content">
                        <ul>
                          <li><a href="#">- Nature Lifestyle</a></li>
                          <li><a href="#">- Awesome Layouts</a></li>
                          <li><a href="#">- Creative Ideas</a></li>
                          <li><a href="#">- Responsive Templates</a></li>
                          <li><a href="#">- HTML5 / CSS3 Templates</a></li>
                          <li><a href="#">- Creative &amp; Unique</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="sidebar-item tags">
                      <div class="sidebar-heading">
                        <h2>Tag Clouds</h2>
                      </div>
                      <div class="content">
                        <ul>
                          <li><a href="#">Lifestyle</a></li>
                          <li><a href="#">Creative</a></li>
                          <li><a href="#">HTML5</a></li>
                          <li><a href="#">Inspiration</a></li>
                          <li><a href="#">Motivation</a></li>
                          <li><a href="#">PSD</a></li>
                          <li><a href="#">Responsive</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
@endsection