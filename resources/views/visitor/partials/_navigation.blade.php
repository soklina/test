<div class="body-inner">
    <div class="trending-bar hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="trending-title">ព័ត៌មានសំខាន់ៗ</h3>
                    <div id="trending-slide" class="owl-carousel owl-theme trending-slide">
                    
                      
                        <div class="item">
                           <div class="post-content">
                              <h2 class="post-title title-small">
                                 <a href="#"></a>
                              </h2>
                           </div><!-- Post content end -->
                        </div><!-- Item 1 end -->
                     
                   
                  
                    </div><!-- Carousel end -->
                </div><!-- Col end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </div><!--/ Trending end -->

    <!-- Header start -->
    <header id="header" class="header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="logo">
                         <a href="{{route('visitor.index.page')}}">
                            <img src="{{asset('frontend/images/Khmerloop.png')}}" alt="">
                         </a>
                    </div>
                </div><!-- logo col end -->

                <div class="col-xs-12 col-sm-9 col-md-9 header-right">
                    <div class="ad-banner pull-right">
                        <a href="#"><img src="{{asset('frontend/images/banner-ads/ad-top-header.png')}}" class="img-responsive" alt=""></a>
                    </div>
                </div><!-- header right end -->
            </div><!-- Row end -->
        </div><!-- Logo and banner area end -->
    </header><!--/ Header end -->

    <div class="main-nav clearfix">
        <div class="container">
            <div class="row">
                <nav class="site-navigation navigation">
                    <div class="site-nav-inner pull-left">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <ul class="nav navbar-nav">
                             @if(!empty($reading_menus))
                                 @foreach($reading_menus->categories as $category)
                                <li>
                                    <a href="{{ route('visitor.article.category', $category->id) }}" class="custom-a__link font-kh-nokora">
                                        {{ $category->name }}
                                    </a>
                                </li>
                                @endforeach
                             @endif
                             @if(!empty($video_menus))
                                  @foreach($video_menus->categories as $category)
                                  <li>
                                      <a href="{{ route('visitor.video.category', $category->id) }}" class="custom-a__link font-kh-nokora">
                                          <img src="{{asset('images')}}/{{ $category->images}}" alt="">
                                      </a>
                                  </li>
                                  @endforeach
                              @endif

                            </ul><!--/ Nav ul end -->
                        </div><!--/ Collapse end -->

                    </div><!-- Site Navbar inner end -->
                </nav><!--/ Navigation end -->

                
                
                <div class="search-block" style="display: none;">
                    <input type="text" class="form-control" placeholder="Type what you want and enter">
                    <span class="search-close">&times;</span>
                </div><!-- Site search end -->

            </div><!--/ Row end -->
        </div><!--/ Container end -->

    </div><!-- Menu wrapper end -->
<!-- 
    <div class="gap-40"></div> -->
   </div>
    