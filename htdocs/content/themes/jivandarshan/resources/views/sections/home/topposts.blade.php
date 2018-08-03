
<div class="content_top_right">
    <ul class="featured_nav wow fadeInDown">
{{--{{$category}}--}}
                @foreach($chanakya as $post)
        <li><img src="{{get_the_post_thumbnail_url($post)}}" alt="">
            <div class="title_caption"><a href="{{get_the_permalink($post)}}">{!! apply_filters('title',$post->post_title) !!}</a></div>
        </li>
        @endforeach
    </ul>
</div>
