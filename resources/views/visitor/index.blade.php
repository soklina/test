@extends('visitor.layouts.main')

@section('page_title', 'welcome to tousnatv website')

@section('slideshow')
    @if(!empty($sliders) && count($sliders) > 0)
     <div class="gap-20"></div>
    <!-- Slideshow -->
    <section class="featured-post-area no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-xs-12 pad-r latest-news block color-red">
                    <div id="featured-slider" class="owl-carousel owl-theme featured-slider">
                         @foreach($sliders as $key => $slider)
                        <div class="item" style="background-image:url('@if($slider->featured_image){{ asset(str_replace('thumbs', 'uploads', $slider->featured_image)) }}@else{{ asset('images/no_thumbnail_img.jpg') }}@endif')">
                            <div class="featured-post">
                                <div class="post-content">

					               @if($key==1)
                                            <a class="post-cat" href="{{$slider->url}}">{{ $slider->genre }}</a> 
                                        @else
                                            <a class="post-cat" href="{{ route('visitor.article.detail', $slider->id) }}">{{ $slider->genre }}</a> 
                                        @endif()

                                                                      <h2 class="post-title title-extra-large">
                                        @if($key==1)
                                            <a href="{{$slider->url}}">{!! str_limit(strip_tags($slider->content), 50) !!}</a> 
                                        @else
                                            <a href="{{ route('visitor.article.detail', $slider->id) }}">{!! str_limit(strip_tags($slider->content), 50) !!}</a> 
                                        @endif()
                                    </h2>
                                    <span class="post-date" style="font-family: 'Hind Siliguri', sans-serif;">
                                        <i class="fa fa-clock-o"></i>
                                        {{ $slider->created_at->format('D\\, d M\\, Y') }}
                                    </span>
                                </div>
                            </div><!--/ Featured post end -->

                            
                        </div><!-- Item 1 end -->
                        @endforeach
                       
                    </div><!-- Featured owl carousel end-->
                </div><!-- Col 7 end -->


                <div class="col-md-5 col-xs-12 pad-l ">
                    <div class="row">                     
                        <div class="col-sm-12 latest-news block color-red">                            
                            <div class="post-overaly-style contentTop hot-post-top clearfix">
                                <div class="post-thumb">
                                    <a href="#"><img src="{{ asset($entertaiment[0]->featured_image) }}" class="img-responsive" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a class="post-cat" href="#">{{$entertaiment[0]->name}}</a>
                                    <h2 class="post-title title-large">
                                        <a href="{{ route('visitor.article.detail', $entertaiment[0]->id) }}">{{str_limit($entertaiment[0]->title,80)}}</a>
                                    </h2>
                                   <!--  -->
                                </div><!-- Post content end -->

                            </div><!-- Post Overaly end -->
                            
                        </div><!-- Col end -->

                        <div class="slider-top">
                        <div class="col-sm-6 pad-r-small latest-news block color-red">
                            <div class="post-overaly-style contentTop hot-post-bottom clearfix">
                                <div class="post-thumb">
                                   <a href="#"> <img src="{{ asset($khmer[0]->featured_image) }}" class="img-respons" alt=""></a>
                                </div>
                                <div class="post-content">
                                    <a class="post-cat" href="#">{{$khmer[0]->name}}</a>
                                    <h2 class="post-title title-large">
                                        <a href="{{ route('visitor.article.detail', $khmer[0]->id) }}">{{str_limit($khmer[0]->title,35)}}</a>
                                    </h2>
                                </div><!-- Post content end -->
                            </div><!-- Post Overaly end -->
                        </div><!-- Col end -->
                    </div>

                        <div class="col-sm-6 pad-l-small latest-news block color-red">
                            <div class="post-overaly-style contentTop hot-post-bottom clearfix">
                                <div class="post-thumb">
                                  <a href="#">  <img src="{{ asset($success[0]->featured_image) }}" class="img-responsive" alt=""></a>
                                </div>
                                 <div class="post-content">
                                    <a class="post-cat" href="#">{{$success[0]->name}}</a>
                                    <h2 class="post-title title-large">
                                        <a href="{{ route('visitor.article.detail', $success[0]->id) }}">{{str_limit($success[0]->title,35)}}</a>
                                    </h2>
                                </div><!-- Post content end -->
                             
                            </div><!-- Post Overaly end -->
                        </div><!-- Col end -->
                    </div>
                </div><!-- Col 5 end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Trending post end -->
                   
    <!-- /Slideshow -->
@endif()    
@endsection

@section('content')

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="latest-news block color-red">
                        <h3 class="block-title"><a href="#" class="post-cat">@lang('visitor.latest_post')</a></h3>
                        
                        <div class="row">
                            @foreach($allpost  as $key => $allpost)
                                <div class="col-sm-3">
                                    <ul class="list-post">
                                        <li class="clearfix">
                                            <div class="post-block-style clearfix">
                                                <div class="post-thumb">
                                                    <a href="{{ route('visitor.article.detail', $allpost->id) }}">
                                                        <img src="@if($allpost->featured_image)
                                                            {{ asset($allpost->featured_image) }}
                                                            @else
                                                            {{ url('images/no_thumbnail_img.jpg') }}
                                                            @endif" alt="">
                                                    </a>
                                                </div>
                                                <div class="post-content">
                                                    <h2 class="post-title title-medium">
                                                        <a href="#">{{ str_limit($allpost->title, 70) }}</a>
                                                    </h2>
                                                   <div class="post-meta">
                                                        <span class="post-date" style="font-family: 'Hind Siliguri', sans-serif;">
                                                            <i class="fa fa-clock-o"></i>
                                                            {{ $allpost->created_at->format('D\\, d M\\, Y') }}
                                                        </span>
                                                    </div>
                                                </div><!-- Post content end -->
                                            </div><!-- Post Block style end -->
                                        </li><!-- Li end -->

                                        <div class="gap-30"></div>
                                    </ul><!-- List post 4 end -->
                                    
                                </div><!-- Item 4 end -->
                                @endforeach
                        </div>

                        <!--  <div class="sponsor-slideset__footer">
                                <div class="inner">
                                    <a href="{{ route('visitor.article.page') }}">READ MORE</a>
                                </div>
                            </div> -->
                        </div><!-- Latest News owl carousel end-->

                    </div><!--- Latest news end -->
                </div>
            </div>                
</section>
<!-- /Latest article -->
        <section class="block-wrapper video-block">
        <div class="container">
            <div class="row">
                <div class="video-tab clearfix block color-red">
                    <h2 class="video-tab-title" style="color:#fff; font-family: Koulen,Arial,Helvetica,sans-serif;">ទស្សនាវីដេអូ</h2>
                    <div class="col-md-7 pad-r-0">
                        <div class="tab-content">
                            @foreach($partners as $key => $video)
                                @if($key ==0)
                                    <div class="tab-pane active animated fadeIn" id="video1">
                                        <div class="post-overaly-style clearfix">
                                           <div class="post-thumb">
                                                <img src="@if($video->logo_src){{ asset($video->logo_src) }}@else{{ asset('images/no_thumbnail_img.jpg') }}@endif" class="img-responsive" alt="{{ $video->title }}" />
                                                <a class="popup" href="{{$video->url}}">
                                              <div class="video-icon">
                                                <i class="fa fa-play" style="margin-top: 17px;"></i>
                                            </div>
                                            </a>
                                           </div><!-- Post thumb end -->
                                           <div class="post-content">   
                                              <a class="post-cat" href="#">{{$video->company_name}}</a>
                                              <h2 class="post-title">
                                                 <a href="#">{{ str_limit($video->external_url, 70) }}</a>
                                              </h2>
                                              <div class="post-meta">
                                                    <span class="post-date" style="font-family: 'Hind Siliguri', sans-serif;">
                                                        <i class="fa fa-clock-o"></i>
                                                        {{ $video->created_at->format('D\\, d M\\, Y') }}
                                                    </span>
                                                </div>
                                           </div><!-- Post content end -->
                                        </div><!-- Post Overaly Article end -->
                                    </div><!--Tab pane 1 end-->
                                @elseif($key==1)
                            
                                    <div class="tab-pane animated fadeIn" id="video2">
                                        <div class="post-overaly-style clearfix">
                                           <div class="post-thumb">
                                              <img src="@if($video->logo_src){{ asset($video->logo_src) }}@else{{ asset('images/no_thumbnail_img.jpg') }}@endif" class="img-responsive" alt="{{ $video->title }}" />
                                                <a class="popup" href="{{$video->url}}">
                                              <div class="video-icon">
                                                <i class="fa fa-play" style="margin-top: 17px;"></i>
                                            </div>
                                            </a>
                                           </div><!-- Post thumb end -->
                                           <div class="post-content">
                                              <a class="post-cat" href="#">{{$video->company_name}}</a>
                                              <h2 class="post-title title-medium">
                                                 <a href="#">{{ str_limit($video->external_url, 70) }}</a>
                                              </h2>
                                              <div class="post-meta" >
                                                <span class="post-date" style="font-family: 'Hind Siliguri', sans-serif;">
                                                    <i class="fa fa-clock-o"></i>
                                                    {{ $video->created_at->format('D\\, d M\\, Y') }}
                                                </span>
                                            </div>
                                           </div><!-- Post content end -->
                                        </div><!-- Post Overaly Article 2 end -->
                                    </div><!--Tab pane 2 end-->
                                @elseif($key==2)    

                                     <div class="tab-pane animated fadeIn" id="video3">
                                        <div class="post-overaly-style clearfix">
                                           <div class="post-thumb">
                                              <img src="@if($video->logo_src){{ asset($video->logo_src) }}@else{{ asset('images/no_thumbnail_img.jpg') }}@endif" class="img-responsive" alt="{{ $video->title }}" />
                                                <a class="popup" href="{{$video->url}}">
                                              <div class="video-icon">
                                                <i class="fa fa-play"  style="margin-top: 17px;" ></i>
                                            </div>
                                            </a>
                                           </div><!-- Post thumb end -->
                                         <div class="post-content">
                                              <a class="post-cat" href="#">{{$video->company_name}}</a>
                                              <h2 class="post-title title-medium">
                                                 <a href="#">{{ str_limit($video->external_url, 70) }}</a>
                                              </h2>
                                              <div class="post-meta">
                                                <span class="post-date" style="font-family: 'Hind Siliguri', sans-serif;">
                                                    <i class="fa fa-clock-o"></i>
                                                    {{ $video->created_at->format('D\\, d M\\, Y') }}
                                                </span>
                                            </div>
                                           </div><!-- Post content end -->
                                   
                                </div><!-- Post Overaly Article 2 end -->
                            </div><!--Tab pane 2 end-->
                            @endif() 
                        @endforeach 

                        </div><!-- Tab content end -->
                    </div><!--Tab col end -->

                    <div class="col-md-5 pad-l-0">
                        <ul class="nav nav-tabs">
                            @foreach($partners as $key => $video)

                                @if($key==0)
                                <li class="active">
                                    <a class="animated fadeIn" href="#video1" data-toggle="tab">
                                        <div class="post-thumb">
                                           <img src="@if($video->logo_src){{ asset($video->logo_src) }}@else{{ asset('images/no_thumbnail_img.jpg') }}@endif" class="img-responsive" alt="{{ $video->title }}" />
                                       </div><!-- Post thumb end -->
                                        <h3 style="font-family: 'Hanuman', serif;">{{ str_limit($video->external_url, 70) }}</h3>
                                        <div class="post-meta" style="margin-top: 7px;">
                                                <span class="post-date" style="font-family: 'Hind Siliguri', sans-serif;">
                                                    <i class="fa fa-clock-o"></i>
                                                    {{ $video->created_at->format('D\\, d M\\, Y') }}
                                                </span>
                                            </div>
                                    </a>
                                </li>
                                @elseif($key==1)
                                <li>
                                    <a class="animated fadeIn" href="#video2" data-toggle="tab">
                                        <div class="post-thumb">
                                          <img src="@if($video->logo_src){{ asset($video->logo_src) }}@else{{ asset('images/no_thumbnail_img.jpg') }}@endif" class="img-responsive" alt="{{ $video->title }}" />
                                       </div><!-- Post thumb end -->
                                        <h3 style="font-family: 'Hanuman', serif;">{{ str_limit($video->external_url, 70) }}</h3>
                                        <div class="post-meta" style="margin-top: 7px;">
                                                <span class="post-date" style="font-family: 'Hind Siliguri', sans-serif;">
                                                    <i class="fa fa-clock-o"></i>
                                                    {{ $video->created_at->format('D\\, d M\\, Y') }}
                                                </span>
                                            </div>
                                    </a>
                                </li>
                                @elseif($key==2)
                                <li>
                                    <a class="animated fadeIn" href="#video3" data-toggle="tab">
                                        <div class="post-thumb">
                                          <img src="@if($video->logo_src){{ asset($video->logo_src) }}@else{{ asset('images/no_thumbnail_img.jpg') }}@endif" class="img-responsive" alt="{{ $video->title }}" />
                                       </div><!-- Post thumb end -->
                                        <h3 style="font-family: 'Hanuman', serif;">{{ str_limit($video->external_url, 70) }}</h3>
                                        <div class="post-meta" style="margin-top: 7px;">
                                                <span class="post-date" style="font-family: 'Hind Siliguri', sans-serif;">
                                                    <i class="fa fa-clock-o"></i>
                                                    {{ $video->created_at->format('D\\, d M\\, Y') }}
                                                </span>
                                            </div>
                                    </a>
                                </li>
                                @endif()
                            @endforeach 
                        </ul>
                    </div><!--Tab nav col end -->
                </div><!-- Video tab end -->

            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Video block end -->

 
    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="latest-news block color-red">
                        <h3 class="block-titles" style="color: red; font-family: Koulen,Arial,Helvetica,sans-serif;"><span>@lang('visitor.latest_video')</span></h3>
                        <div class="row">
                        @foreach($videos as $video)
                        <div class="col-sm-4">
                                <ul class="list-post">
                                    <li class="clearfix">
                                        <div class="post-block-style clearfix">
                                            <div class="post-thumb">
                                                <a href="{{ route('visitor.video.detail', $video->id) }}">
                                                    <img class="img-responsive" src="@if($video->featured_image)
                                                    {{ url($video->featured_image) }}
                                                    @else
                                                    {{ url('images/no_thumbnail_img.jpg') }}
                                                    @endif" alt="" />
                                                </a>
                                            </div>
                                           
                                            <div class="post-content">
                                                <h2 class="post-title title-medium">
                                                    <a href="#">{{ str_limit($video->title, 150) }}</a>
                                                </h2>
                                               
                                            </div><!-- Post content end -->
                                        </div><!-- Post Block style end -->
                                    </li><!-- Li end -->
<!-- 
                                    <div class="gap-20"></div> -->
                                </ul><!-- List post 4 end -->
                                
                            </div><!-- Item 4 end -->

                        @endforeach

                        </div>      
                        </div>  
                    </div>          
                </div>
            </div>
    </section>
                    
                


@endsection

@push('script_dependencies')
    <script>
        var tracks = [
            @if(!empty($audios))
                @foreach($audios as $key => $audio)
                {
                    "track": '{{ ++$key }}',
                    "name": "{{ $audio->title }}",
                    "length": "{{ $audio->duration }}",
                    "file": "{{ $audio->sound_url }}"
                },
                @endforeach
            @endif
        ];
    </script>
  <!--   <script src="{{ asset('js/sound-player.js') }}"></script> -->
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/custom.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/ini.isotope.js')}}"></script>
    <script src="{{asset('frontend/js/isotope.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.colorbox.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/smoothscroll.js')}}"></script>
     <script src="{{asset('frontend/js/waypoints.min.justify')}}"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:15,
        responsive:{
            0:{
                items:1,
                nav:true,
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    })
</script>
@endpush

@section('scripts')

@endsection
