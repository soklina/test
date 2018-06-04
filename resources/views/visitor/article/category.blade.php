@extends('visitor.layouts.main')


@section('page_title', 'TOUSNATV | Article by category {{ $category->name }}')


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


<!---center-->
<section class="block-wrapper">
    <div class="container">
        <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="latest-news block color-red">
                <h3 class="block-title"><a href="#" class="post-cat">{{ $category_name }}</a></h3>
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="row">

                                @foreach($articles as $key=> $article)

                                @if($key < 2)
                                    <div class="col-sm-6">
                                        <ul class="list-post">
                                            <li class="clearfix">
                                                <div class="post-block-style clearfix">
                                                    <div class="post-thumb">
                                                        <a href="{{ route('visitor.article.detail', $article->id) }}">
                                                            <img class="img-responsive" src="@if($article->featured_image){{ asset($article->featured_image) }}@else{{ asset('images/no_thumbnail_img.jpg') }}@endif" alt="" />
                                                        </a>
                                                     </div>

                                                    <div class="post-content">
                                                        <h2 class="post-title title-medium" >
                                                               <a href="#">  {{ str_limit($article->title, 150) }}</a>
                                                        </h2>
                                                    </div><!-- Post content end -->
                                                </div><!-- Post Block style end -->
                                            </li><!-- Li end -->
                                            <div class="gap-30"></div>
                                        </ul><!-- List post 4 end -->
                                    </div>

                                @elseif($key >1)

                                    <div class="col-sm-12 ">
                                        <div class="row">
                                            <div class="col-sm-5">
                                                <ul class="list-post">
                                                    <li class="clearfix">
                                                        <div class="post-block-style clearfix">
                                                            <div class="post-thumb">
                                                                <a href="{{ route('visitor.article.detail', $article->id) }}">
                                                                    <img class="img-responsive" src="@if($article->featured_image){{ asset($article->featured_image) }}@else{{ asset('images/no_thumbnail_img.jpg') }}@endif" alt="" />
                                                                </a>
                                                             </div>
                                                        </div><!-- Post Block style end -->
                                                    </li><!-- Li end -->
                                                    <div class="gap-30"></div>
                                                </ul><!-- List post 4 end -->
                                            </div>
                                            <div class="col-sm-7">
                                                <div class="Pagetext">
                                                    <h2 class="post-title title-medium">
                                                        <a href="#">{{ str_limit($article->title, 70) }}</a>
                                                        
                                                    </h2>
                                                    <div class="post-meta">
                                                        <span class="post-date" style="font-family: 'Hind Siliguri', sans-serif;">
                                                            <i class="fa fa-clock-o"></i>
                                                            {{ $article->created_at->format('D\\, d M\\, Y') }}
                                                        </span>
                                                    </div>
                                                    <div class="broder"></div>
                                                    <p>{!! str_limit(strip_tags($article->content), 300) !!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endif()
                                        
                            @endforeach
                                
                            </div>
                        </div><!--end col-sm-9-->

                        <div class="col-sm-3">

                            <div class="sss">
                                <div class="sidebar-ads__container">
                                    <div class="ads-box">
                                        <div class="inner">
                                            <img src="{{ asset('images/article/detail/sidebar_ads_box_1.jpg') }}" alt="">
                                        </div>
                                    </div>  
                                </div>
                                <div class="sidebar-popular__post">
                                    <div class="section-heading bottom-line">
                                        <h4 class="bg_grey font-kh-nokora" style="color: red; font-family: Koulen,Arial,Helvetica,sans-serif;">
                                            អត្តបទថ្មីបំផុត
                                        </h4>
                                    </div>
                                
                                        @foreach($recentArticles as $post)
                                        
                                            <div class="videoright">
                                                <a href="{{ route('visitor.article.detail', $post->id) }}">
                                                <div class="row">
                                                    <div class="col-sm-5">
                                                        <img src="@if($post->featured_image){{ asset($post->featured_image) }}@else {{ asset('images/no_thumbnail_img.jpg') }}@endif" alt="{{ $post->title }}">
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <h2 class="post-title title-medium" style="margin-top: -5px!important;">
                                                           <a href="#"> {{ str_limit($post->title,30) }}</a>
                                                        </h2>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>

                                        @endforeach
                                       
                                </div>      
                            </div>  
     
                        </div><!-- col-sm-3-->

                    </div><!--end row-->
                    
                </div><!-- Latest News owl carousel end-->
            </div><!--- Latest news end -->
        </div>
    </div>
</section>

<!-- Page content wrapper -->
<!-- Pagination -->    
@endsection
@push('script_dependencies')

@endpush

@section('script')
 
@endsection
