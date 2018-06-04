@extends('visitor.layouts.main')

@section('page_title', 'Reading article')

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
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">                 
                            <div class="topup">
                                <ul class="list-post">
                                    <li class="clearfix">
                                        <div class="post-block-style clearfix">
                                            <div class="uk-panel uk-panel-body col-sm-12">
                                                <h2 class="post-preview__title">
                                        ​          {{ $article->title }}
                                                </h2>
                                            <div class="comment">
                                                <div class="pull-left">
                                                    <p>
                                                    <i class="fa fa-clock-o"></i>
                                                    {{ $article->created_at->diffForHumans() }}
                                                    </p>
                                                </div>
                                                <div class="pull-right">
                                                    <p style="font-family: 'Hanuman', serif;"><i class="fa fa-comments" ></i>ចំនួនមតិ ០</p>
                                                </div>
                                            </div>    
                                            <div class="broder"></div>
                                            <div class="datetime">
                                                <div class="pull-left">
                                                    <div class="para" >
                                                        <p style="font-family: 'Hanuman', serif;">ចន្លោះមិនឃើញ</p>
                                                    </div>
                                                </div>
                                                <div class="pull-right">
                                                    <div class="social-share">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="Pagetext">
                                                <p style="float: left; font-family: 'Hanuman', serif;">
                                                    {!! str_limit(strip_tags($article->content), 800) !!}
                                                </p>
                                            </div>
                                            <div class="uk-width-1-1">
                                                <div class="inner uk-background-cover">
                                                    <div class="detail-img">
                                                        <img  src="@if($article->featured_image) {{ asset(str_replace('thumbs', 'uploads', $article->featured_image)) }} @else {{ asset('images/no_thumbnail_img.jpg') }} @endif" alt="{{ $article->title }}">
                                                    </div>
                                                </div>
                                            </div> <!-- Post detail entry -->
                                            <div class="inner">
                                                <div class="uk-float-left">
                                                    <h3 class="font-kh-nokora" style="font-family: Koulen,Arial,Helvetica,sans-serif;">
                                    ​                   <span>ព័ត៏មានលំអិត</span>
                                                       <i class="fa fa-angle-double-right"></i>
                                    ​                   {{ $article->title }}
                                                    </h3>
                                                </div>
                                                <div class="post-content">
                                                    <p class="post-title" style="font-family: 'Hanuman', serif;">{!! $article->content !!} </p>
                                                </div><!-- Post content end -->
                                                <div class="post-detail__bottom uk-float-left">
                                                    <div class="author">
                                                        <p class="font-kh-nokora" style="font-family: Koulen,Arial,Helvetica,sans-serif;"><span>អត្ថបទ ៖ </span>{{ $article->createdBy->username }}</p>
                                                    </div>                                              
                                                    <!-- <div class="uk-panel uk-margin-top uk-clearfix" style="margin-top: -5px;">
                                                        <p>
                                                        @foreach($article->tagged as $tag)
                                                          <a href="{{ route('visitor.tag_posts') }}?name={{$tag->tag_slug}}" class="tag_item">{{ $tag->tag_name }}</a>
                                                         @endforeach
                                                        </p>                                                   
                                                    </div> -->

                                                </div>
                                                <div class="header-right">
                                            </div>     
                                        </div><!-- /Facebook comment --><!-- /Post deatil entry -->
                                         <div class="datetime">
                                    <div class="pull-left">
                                        <h4 class="font-kh-nokora" style="font-family: Koulen,Arial,Helvetica,sans-serif;" >ប្រភព៖ Kanha ប្រែសម្រួល៖ ស្វាយ វ៉ាន់ថន</h4>
                                    </div>
                                    <div class="pull-right">
                                        <div class="social-share">
                                        </div>
                                    </div>
                                </div><!--datetime-->
                                <div class="header-right">
                                    <div class="ad-banner pull-right">
                                        <a href="#"><img src="{{asset('images/ads/images.png')}}" class="img-responsive" alt=""></a>
                                    </div>
                                </div><!-- header right end --> 
                                <div class="contaets">
                                    <h4 class="font-kh-nokora" style="font-family: Koulen,Arial,Helvetica,sans-serif;">ពាក្យទាក់ទង</h4>
                                </div>
                                <div class="facebookbackground">
                                    <div class="col-md-12">
                                        <div id="fb-root"></div>
                                        <div class="textcontast">
                                            <h4 class="font-kh-nokora" style="font-family: Koulen,Arial,Helvetica,sans-serif;">ភ្លាប់ទំនាក់ទំនងជាមួយ <span​ class="khmer">Khmer</span​><span class="loop">loop</span></h4>
                                        </div>
                                        <div class="fb-like" data-href="http://tousnatv.com/sharer/sharer.php?u={{URL::current()}}" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                                    </div>   
                                </div>
                                <div class="gap-30"></div>


                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="latest-news block color-red">
                                        <div class="section-headings bottom-lines">
                                            <h4 class="bg_grey font-kh-nokora" style="color: red; font-family: Koulen,Arial,Helvetica,sans-serif;">
                                                អត្ថបទទាក់ទង
                                            </h4>
                                        </div>
                                        
                                        <div class="row">
                                           @if($relatedArticles->isNotEmpty())
                                                @foreach($relatedArticles as $post)
                                                    @includeIf('visitor.components.article.grid_box_5', ['article' => $post])
                                                @endforeach
                                            @else
                                                <h1 class="uk-text-lead">
                                                    No realated post found
                                                </h1>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>                

                 <!-- Facebook comment -->
                <div class="facebook-comment uk-float-left">
                    <div class="fb-comments" data-href="{{ route('visitor.article.detail', $article->id) }}" data-width="100%" data-numposts="5"></div>
                </div>
                            </div><!-- Post Block style end -->
                        </li><!-- Li end -->
                    </ul><!-- List post 4 end -->
                </div>     
             </div>
         </div><!--end col-sm-9-->

                <div class="col-sm-3">
                            <div class="ssss">
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
                                    @if($recentArticles->isNotEmpty())
                                        @foreach($recentArticles as $post)
                                            <div class="videoright">
                                                <a href="{{ route('visitor.article.detail', $post->id) }}">
                                                    <div class="row">
                                                    <div class="col-sm-5">
                                                        <img src="@if($post->featured_image){{ asset($post->featured_image) }}@else {{ asset('images/no_thumbnail_img.jpg') }}@endif" alt="{{ $post->title }}">
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <h2 class="post-title title-medium" style="margin-top: -5px!important;">
                                                           <a href="#"> {{ str_limit($post->title,35) }}</a>
                                                        </h2>
                                                    </div>
                                                </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    @else
                                    <h3 class="uk-text-large">
                                        No post yet
                                    </h3>
                                    @endif
                                </div>      
                        
                    </div>
                </div><!-- col-sm-3-->
            </div><!--- Latest news end -->
        </div>
    </div>         
</section>
<!-- /Bottom post detail -->

@endsection

@push('script_dependencies')
    <script src="{{ asset('lib/jssocial/jssocials.min.js') }}"></script>
@endpush

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        // social share configuration
        $(".social-share").jsSocials({
            shares: ["facebook", "twitter", "googleplus", "linkedin"]
        });
    });

   window.fbAsyncInit = function() {
    FB.init({
      appId      : '425019584546196',
      xfbml      : true,
      version    : 'v3.0'
    });
  
    FB.AppEvents.logPageView();
  
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

</script>

@endsection
