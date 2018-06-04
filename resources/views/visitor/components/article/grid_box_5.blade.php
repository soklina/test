@if(!empty($article) & $article != null)


    <div class="col-sm-4">
        <ul class="list-post">
            <li class="clearfix">
                <div class="post-block-style clearfix">
                    <div class="post-thumb">
                        <a href="{{ route('visitor.article.detail', $article->id) }}">
                            <img class="img-responsive" src="@if($article->featured_image){{ asset($article->featured_image) }}@else{{ asset('images/no_thumbnail_img.jpg') }}@endif" alt="" />
                        </a>
                    </div>
             
                    <div class="post-content">
                        <h2 class="post-title title-medium">
                            <a href="#"> {{ str_limit($article->title, 70) }}</a>
                        </h2>
                        
                    </div><!-- Post content end -->
                </div><!-- Post Block style end -->
            </li><!-- Li end -->

            <div class="gap-30"></div>
        </ul><!-- List post 4 end -->
        
    </div><!-- Item 4 end -->
                           
                  

@endif    