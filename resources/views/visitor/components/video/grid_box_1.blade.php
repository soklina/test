@if(!empty($video))
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
<!--     -->
                <div class="post-content">
                    <h2 class="post-title title-medium">
                        <a href="#">{{ str_limit($video->title, 70) }}</a>
                    </h2>
                    <div class="post-meta">

                        <span class="post-date">
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
@endif
