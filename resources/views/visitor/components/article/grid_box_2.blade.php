@if(!empty($article) & $article != null)

            <div class="row">
                <div class="col-lg-12 col-md-12  col-sm-12 col-xs-12">
                    <div class="block category-listing category-style2">
                        <div class="post-block-style post-list clearfix">
                            <div class="row">
                                <div class="col-md-11 col-sm-6">
                                    <div class="post-thumb thumb-float-style">
                                        <a href="{{ route('visitor.article.detail', $article->id) }}">
                                            <img class="img-responsive" src="@if($article->featured_image){{ asset($article->featured_image) }}@else{{ asset('images/no_thumbnail_img.jpg') }}@endif" alt="" />
                                        </a>
                                    </div>
                                     <div class="post-content">
                                        <h2 class="post-title title-large">
                                            <a href="#"> {{ str_limit($article->title, 70) }}</a>
                                        </h2>
                                    </div>    
                                </div><!-- Img thumb col end -->
                            </div><!-- 2nd row end -->
                        </div><!-- 2nd Post list end -->
                    </div><!-- Block Technology end -->
                </div><!-- Content Col end -->
            </div><!-- Row end -->

@endif
