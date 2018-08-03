<div class="single_category wow fadeInDown">
    <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">आयुर्वेद विज्ञान</a> </h2>
    <div class="business_category_left wow fadeInDown">
        <ul class="fashion_catgnav">
            {{--@foreach($avigyan as $avigyan)--}}

            @for($j=0;$j<1;$j++)
                @if(isset($avigyan[$j]))
                    <li>
                        <div class="catgimg2_container"> <a href="{{get_the_permalink($avigyan[$j])}}"><img alt="" src="{{get_the_post_thumbnail_url($avigyan[$j])}}"></a> </div>
                        <h2 class="catg_titile"><a href="{{get_the_permalink($avigyan[$j])}}">{{get_the_title($avigyan[$j])}}</a></h2>
                        <div class="comments_box"> <span class="meta_date">{{get_the_date(('F j, Y'),$avigyan[$j]->ID)}}</span> <span class="meta_comment"><a href="#" > {{ get_comments_number($avigyan[$j]->ID)}} Comments</a></span> <span class="meta_more"><a  href="{{ get_the_permalink($avigyan[$j]) }}">Read More...</a></span> </div>
                        {{--                    <p>{{get_the_excerpt($avigyan[0])}}</p>--}}
                    </li>
                @endif
            @endfor
            {{--{{get_comments_number($avigyan[0])}}--}}
            {{--@endforeach--}}
        </ul>
    </div>
    <div class="business_category_right wow fadeInDown">
        <ul class="small_catg">
            @for($j=1;$j<4;$j++)
                @if(isset($avigyan[$j]))
                    <li>
                        <div class="media wow fadeInDown"> <a class="media-left" href="{{get_the_permalink($avigyan[$j])}}"><img src="{{get_the_post_thumbnail_url($avigyan[$j])}}" alt=""></a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="{{get_the_permalink($avigyan[$j])}}">{!! apply_filters('title',$avigyan[$j]->post_title) !!}</a></h4>
                                <div class="comments_box"> <span class="meta_date">{{get_the_date(('F j, Y'),$avigyan[$j]->ID)}}</span> <span class="meta_comment"><a href="#"> {{ get_comments_number($avigyan[$j]->ID)}} Comments</a></span> </div>
                            </div>
                        </div>
                    </li>
                @endif
            @endfor

        </ul>
    </div>
</div>