@extends('visitor.layouts.main')

@section('page_title', 'TOUSNATV | Article serie')

@push('styles')
    <style>

    </style>
@endpush

@section('content')

@includeIf('visitor.components.article.slideshow', ['slideshow' => $serie])

<!-- Page content wrapper -->
<div class="page-wrapper__bg">
    <div class="uk-container uk-container-center">
        <div class="breadcrum uk-margin-top">
            <h3 class="font-kh-nokora uk-margin-remove plain">
                <a href="{{ route('visitor.index.page') }}">@lang('visitor.homepage')</a>
                <i class="fa fa-angle-double-right"></i>
                <a href="{{ route('visitor.article.page') }}">@lang('visitor.article')</a>
                <i class="fa fa-angle-double-right"></i>
                <a class="preventDefaultElement custom-a__link_disabled" href="#">
                    {{ $serie->category->name }}
                </a>
            </h3>
        </div>

        <!-- post by category -->
        <div class="section">
            <div class="top-post__catgory">

                <div class="section-heading bottom-line">
                    <h3 class="bg_black font-kh-nokora extra-pad">
                        {{ $serie->title }}
                    </h3>
                </div>

                <div class="section-bg__white uk-grid uk-grid-collapse uk-grid-width-1-1 uk-grid-width-small-1-2 padding-small uk-grid-width-medium-1-3 uk-grid-width-large-1-4 uk-grid-width-xlarge-1-4">
                @foreach($serie->posts as $article)
                    @includeIf('visitor.components.article.grid_box_2', ['article' => $article])
                @endforeach
                </div>

            </div>
        </div>
        <!-- /post by category -->

        <!-- Bottom post grid -->
        <div class="section">
        @if(!count($suggestSeries) <= 0)
            <div class="section-heading">
                <h3 class="bg_black font-en-opensans-cond extra-pad">
                    RECOMMENDED SERIES
                </h3>
            </div>
            <div class="bottom-post suggest-post uk-grid uk-grid-medium uk-grid-small-medium uk-gird-width-1-2 uk-grid-width-small-1-2 uk-grid-width-medium-1-4 uk-grid-large-1-4 uk-grid-width-xlarge-1-4">
            @foreach($suggestSeries as $serie)
                @includeIf('visitor.components.article.serie_box_1', ['serie' => $serie])
            @endforeach
            </div>
        @endif
        </div>
        <!-- /Bottom post grid -->

    </div>
</div>
<!-- /Page content wrapper -->

@endsection

@push('script_dependencies')

@endpush

@section('script')
<script>
    $(document).ready(function(){

    });
</script>
@endsection
