
<div class="content_middle_middle">
    <div class="slick_slider2">
       @foreach($rashifal as $post)
        <div class="single_featured_slide"> <a href="{{get_the_permalink($post)}}"><img src="{{get_the_post_thumbnail_url($post)}}" alt="" class="slider-img"></a>
            <h2><a href="{{get_the_permalink($post)}}">{{get_the_title($post)}}</a></h2>
            <p></p>
        </div>
@endforeach
    </div>
</div>