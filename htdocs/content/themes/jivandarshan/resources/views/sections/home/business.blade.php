    <div class="single_category wow fadeInDown">
        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">श्रीमद् भगवद्गीता</a> </h2>
        <div class="business_category_left wow fadeInDown">
            <ul class="fashion_catgnav">
              {{--@foreach($bhagvat as $bhagvat)--}}

               @for($j=0;$j<1;$j++)
                    @if(isset($bhagvat[$j]))
                <li>
                    <div class="catgimg2_container"> <a href="{{get_the_permalink($bhagvat[$j])}}"><img alt="" src="{{get_the_post_thumbnail_url($bhagvat[$j])}}"></a> </div>
                    <h2 class="catg_titile"><a href="{{get_the_permalink($bhagvat[$j])}}">{{get_the_title($bhagvat[$j])}}</a></h2>
                    <div class="comments_box"> <span class="meta_date">{{get_the_date(('F j, Y'),$bhagvat[$j]->ID)}}</span> <span class="meta_comment"><a href="#" > {{ get_comments_number($bhagvat[$j]->ID)}} Comments</a></span> <span class="meta_more"><a  href="{{ get_the_permalink($bhagvat[$j]) }}">Read More...</a></span> </div>
{{--                    <p>{{get_the_excerpt($bhagvat[0])}}</p>--}}
                </li>
                    @endif
                @endfor
                {{--{{get_comments_number($bhagvat[0])}}--}}
                  {{--@endforeach--}}
            </ul>
        </div>
        <div class="business_category_right wow fadeInDown">
            <ul class="small_catg">
                @for($j=1;$j<4;$j++)
                    @if(isset($bhagvat[$j]))
                <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="{{get_the_permalink($bhagvat[$j])}}"><img src="{{get_the_post_thumbnail_url($bhagvat[$j])}}" alt=""></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="{{get_the_permalink($bhagvat[$j])}}">{!! apply_filters('title',$bhagvat[$j]->post_title) !!}</a></h4>
                            <div class="comments_box"> <span class="meta_date">{{get_the_date(('F j, Y'),$bhagvat[$j]->ID)}}</span> <span class="meta_comment"><a href="#"> {{ get_comments_number($bhagvat[$j]->ID)}} Comments</a></span> </div>
                        </div>
                    </div>
                </li>
                    @endif
                @endfor

                {{--<li>--}}
                    {{--<div class="media wow fadeInDown"> <a class="media-left" href="{{get_the_permalink($bhagvat[2])}}"><img src="{{get_the_post_thumbnail_url($bhagvat[2])}}" alt=""></a>--}}
                        {{--<div class="media-body">--}}
                            {{--<h4 class="media-heading"><a href="{{get_the_permalink($bhagvat[$j])}}">{{get_the_title($bhagvat[2])}}</a></h4>--}}
                            {{--<div class="comments_box"> <span class="meta_date">{{get_the_date(('F j, Y'),$bhagvat[2]->ID)}}</span> <span class="meta_comment"><a href="#"> {{ get_comments_number($bhagvat[2]->ID)}} Comments</a></span> </div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}

                {{--<li>--}}
                    {{--<div class="media wow fadeInDown"> <a class="media-left" href="{{get_the_permalink($bhagvat[3])}}"><img src="{{get_the_post_thumbnail_url($bhagvat[3])}}" class="media-left" alt=""></a>--}}
                        {{--<div class="media-body">--}}
                            {{--<h4 class="media-heading"><a href="{{get_the_permalink($bhagvat[$j])}}">{{get_the_title($bhagvat[3])}}</a></h4>--}}
                            {{--<div class="comments_box"> <span class="meta_date">{{get_the_date(('F j, Y'),$bhagvat[3]->ID)}}</span> <span class="meta_comment"><a href="#"> {{ get_comments_number($bhagvat[3]->ID)}} Comments</a></span> </div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</li>--}}

            </ul>
        </div>
    </div>

</div>
