@extends('visitor.layouts.main')

@section('page_title', 'TOUSNATV | Video by category')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('lib/jssocial/jssocials.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('lib/jssocial/jssocials-theme-flat.css') }}">

  <script src="{{asset('frontend/js/bootsrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="{{asset('frontend/js/ini.isotope.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.colorbox.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/smoothscroll.js')}}"></script>
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
@endpush
@section('content')

        <!-- Bottom post grid -->
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="latest-news block color-red">
                        <h3 class="block-title"><a href="#" class="post-cat">{{ $category_name }}</a></h3>
                        <div class="row">
                            <div class="thumbnail">
                            @if(!empty($videos))
                             @foreach($videos as $key => $video)

                                 @if($key < 3)
                                    <div class="col-sm-4">
                                        <ul class="list-post">
                                            <li class="clearfix">
                                                <div class="post-block-style clearfix">
                                                    <div class="post-thumb">
                                                        <a href="{{ route('visitor.video.detail', $video->id) }}">
                                                             @if($video->featured_image)
                                                               <img src="{{ asset($video->featured_image) }}" alt="{{ $video->title }}">
                                                            @else
                                                                <img src="{{ asset('images/no_thumbnail_img.jpg') }}" alt="{{ $video->title }}">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h2 class="post-title title-medium">
                                                            <a href="#">{{ str_limit($video->title, 70) }}</a>
                                                            
                                                        </h2>
                                                        <div class="post-meta">

                                                            <span class="post-date" style="font-family: 'Hind Siliguri', sans-serif;">
                                                                <i class="fa fa-clock-o"></i>
                                                                {{ $video->created_at->format('D\\, d M\\, Y') }}
                                                            </span>
                                                        </div>
                                                    </div><!-- Post content end -->
                                                </div><!-- Post Block style end -->
                                            </li><!-- Li end -->

                                            <div class="gap-30"></div>
                                        </ul><!-- List post 4 end -->
                                    
                                    </div><!-- Item 4 end -->

                                   @elseif($key >2)

                                     <div class="col-sm-3">
                                        <ul class="list-post">
                                            <li class="clearfix">
                                                <div class="post-block-style clearfix">
                                                    <div class="post-thumb">
                                                        <a href="{{ route('visitor.video.detail', $video->id) }}">
                                                             @if($video->featured_image)
                                                               <img src="{{ asset($video->featured_image) }}" alt="{{ $video->title }}">
                                                            @else
                                                                <img src="{{ asset('images/no_thumbnail_img.jpg') }}" alt="{{ $video->title }}">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="post-content">
                                                        <h2 class="post-title title-medium">
                                                            <a href="#">{{ str_limit($video->title, 70) }}</a>
                                                        </h2>
                                                        <div class="post-meta">

                                                            <span class="post-date" style="font-family: 'Hind Siliguri', sans-serif;">
                                                                <i class="fa fa-clock-o"></i>
                                                                {{ $video->created_at->format('D\\, d M\\, Y') }}
                                                            </span>
                                                        </div>
                                                    </div><!-- Post content end -->
                                                </div><!-- Post Block style end -->
                                            </li><!-- Li end -->

                                            <div class="gap-1"></div>
                                        </ul><!-- List post 4 end -->
                                    
                                    </div><!-- Item 4 end -->

                                @endif()
                                
                            @endforeach
                            @endif


                        </div>
                    </div><!-- Latest News owl carousel end-->
                </div><!--- Latest news end -->
            </div>
        </div>              
</section>
        
                
                
<!-- /Page content wrapper -->

@endsection

@push('script_dependencies')
    <script src="{{ asset('lib/jssocial/jssocials.min.js') }}"></script>
    <script src="{{asset('frontend/js/bootsrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="{{asset('frontend/js/ini.isotope.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.colorbox.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/smoothscroll.js')}}"></script>
    <script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
@endpush

@section('script')
    <script>
        $(".social-share").jsSocials({
            shares: ["facebook", "twitter", "googleplus", "linkedin"]
        });
    </script>
@endsection
<!--frontend-->
  
