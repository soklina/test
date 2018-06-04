@extends('visitor.layouts.main')

@section('page_title', 'Reading article {{ $author->username }}')

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('lib/jssocial/jssocials.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('lib/jssocial/jssocials-theme-flat.css') }}">
@endpush

@section('content')
    <div class="page-bg__wrapper">
        <div class="uk-container uk-container-center">
            <div class="breadcrum uk-margin-top">
                <h3 class="font-kh-nokora uk-margin-remove plain">
                    <a href="{{ route('visitor.index.page') }}">@lang('visitor.homepage')</a>
                    <i class="fa fa-angle-double-right"></i>
                    <a href="javascript:void(0)">@lang('visitor.meetAuthor')</a>
                </h3>
            </div>

            <!-- Top detail preview -->
            <div class="section">
                <div class="post-detail__preview section-bg__white">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-1-1 uk-width-xlarge-1-1 post-preview__article">
                            <div class="uk-panel uk-panel-body">
                                <div class="breadcrum uk-margin-bottom">
                                    <h3 class="font-kh-nokora uk-margin-remove yellow">
                                        <i class="fa fa-users"></i>
                                        <a href="javascript:void(0)">@lang('visitor.meetAuthor')</a>
                                    </h3>
                                </div>

                                <h1 class="post-preview__title font-kh-nokora">

                                </h1>

                                <div class="post-preview__snippet">
                                    <div class="uk-padding-small float_l uk-width-small-1-4">
                                        <img src="@if($author->picture) {{ $author->picture }} @else {{ asset('images/no_thumbnail_img.jpg') }} @endif" style="width:250px;" alt="{{ $author->username }}">
                                    </div>
                                    <div>
                                        <b>Name</b>: ​{{ $author->username }}<br/>
                                        <b>Phone</b>: ​{{ $author->phone }}<br/>
                                        <b>Email</b>: ​{{ $author->email }}<br/>
                                        <b>Career</b>: ​{{ $author->career }}<br/>
                                        <b>Address</b>: ​{{ $author->address }}<br/>
                                        <b>Biography</b>: ​{{ $author->bio }}<br/>
                                    </div>
                                </div>

                                <div class="social-share">

                                </div>
                            </div>
                        </div>

                        <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-2-3 uk-width-xlarge-2-3 post-preview__thumbnail">
                            <div class="inner uk-background-cover">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Top detail preview -->

            <!-- Bottom post detail -->
            <div class="post-detail__wrapper uk-margin-top">

                <div class="left-column">
                    <!-- Related post -->
                    <div class="section uk-float-left">
                        <div class="related-post">
                            <div class="section-heading bottom-line plain">
                                <h3 class="font-kh-nokora color-black">
                                    អ្នកនិពន្ធផ្សេងៗ
                                </h3>
                            </div>
                            <div class="section-bg__white">
                                <div class="uk-grid uk-grid-collapse uk-grid-width-1-1 uk-grid-width-small-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-3 uk-grid-width-xlarge-1-3 uk-panel-body">
                                    @if($authors->isNotEmpty())
                                        <div class="owl-carousel owl-theme" style="padding:10px">
                                            @foreach($authors as $author)
                                                <div class="item">
                                                    <center>
                                                        <div style="background-repeat: no-repeat;background-position:center;width:180px;height:180px;background-image: url('{{$author->picture}}')"></div>
                                                        <h5 class="text-center"><a href="{{route('visitor.author.detail',$author->id)}}" style="font-weight: bold;color: #333;font-size: 1.06rem;line-height: 1.6;">{{$author->username}}</a></h5>
                                                    </center>
                                                </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <h1 class="uk-text-lead">
                                            No other authors found
                                        </h1>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Related post -->
                </div>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Ads section -->
                    <div class="sidebar-ads__container">
                        <div class="ads-box">
                            <div class="inner">
                                <img src="{{ asset('images/article/detail/sidebar_ads_box_1.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="ads-box">
                            <div class="inner">
                                <img src="{{ asset('images/article/detail/sidebar_ads_box_2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- /Ads section -->
                </div>
                <!-- /Sidebar -->
            </div>
            <!-- /Bottom post detail -->

        </div>
    </div>
@endsection

@push('script_dependencies')
<script src="{{ asset('lib/jssocial/jssocials.min.js') }}"></script>
@endpush
@section('script')
    <script src="{{asset('css/owlcarousel/owl.carousel.min.js')}}"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
@endsection
