<div class="single_bottom_rightbar">
    <h2>Popular Post</h2>
    <ul class="small_catg popular_catg wow fadeInDown">

        @foreach($posts as $post)
            <li>
                <div class="media wow fadeInDown"> <a href="#" class="media-left"><img alt="" src="{{get_the_post_thumbnail_url($post)}}"> </a>
                    <div class="media-body">
                        <h4 class="media-heading"><a href="#">{!! apply_filters('title',$post->post_title) !!}</a></h4>
                        <p>{!! apply_filters('excerpt',$post->post_excerpt) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
</div>
