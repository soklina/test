
@if(!empty($allpost))
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
                    <span class="post-grid__datetime">
                    </span>
                </div><!-- Post content end -->
            </div><!-- Post Block style end -->
        </li><!-- Li end -->

        <div class="gap-30"></div>
    </ul><!-- List post 4 end -->
    
</div><!-- Item 4 end -->
@endif
