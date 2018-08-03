<div class="content_bottom_left">
    <div class="single_category wow fadeInDown">
        <div class="archive_style_1">
            <div style="margin-top:15px;">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">{{single_cat_title()}}</a></li>
                </ol>
            </div>
            <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text"></span> </h2>
{{--            @if($loop->index % 2 == 0)--}}

            @foreach($posts as $post)

                @if($loop->index % 2 == 0)
                    @if(device_type() == "desktop")
                <div class="business_category_left wow fadeInDown custom-css">
                    @else
                        <div class="business_category wow fadeInDown custom-css">

                        @endif
                <ul class="fashion_catgnav">
                    <li>
                        <div class="catgimg2_container"> <a href="{{get_the_permalink($post)}}"><img alt="" src="{{get_the_post_thumbnail_url($post)}}"></a> </div>
                        <h2 class="catg_titile"><a href="{{get_the_permalink($post)}}">{!! apply_filters('title',$post->post_title) !!}</a></h2>
                        <div class="comments_box"> <span class="meta_date">{{get_the_date(('F j, Y'),$post->ID)}}</span> <span class="meta_comment"><a href="#">{{ get_comments_number($post->ID)}} Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                        <p><?php
                            $excerpt = strip_tags($post->post_content);
                            if (strlen($excerpt) > 400) {
                                $excerpt = substr($excerpt, 0, 400);
                                $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
                                $excerpt .= '...';
                            }
                            echo $excerpt;
                            ?></p>
                    </li>
                    <li class="clearfix"></li>
                </ul>

            </div>
                @endif
            @endforeach

                {{--@endif--}}
        </div>

    </div>
</div>
{!! paginate_links() !!}
