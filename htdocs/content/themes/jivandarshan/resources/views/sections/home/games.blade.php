<div class="games_fashion_area">
    <div class="games_category">
        <div class="single_category">
            <h2><span class="bold_line"><span></span></span><span class="solid_line"></span> <a class="title_text" href="#">ज्योतिष ज्ञान</a></h2>
            <ul class="fashion_catgnav wow fadeInDown">
                {{--<li>--}}
                    {{--<div class="catgimg2_container"> <a href="{{get_the_permalink($jyotish[3])}}"><img alt="" src="{{get_the_post_thumbnail_url($jyotish[3])}}"></a> </div>--}}
                    {{--<h2 class="catg_titile"><a href="{{get_the_permalink($jyotish[3])}}">{{get_the_title($jyotish[3])}}</a></h2>--}}
                    {{--<div class="comments_box"> <span class="meta_date">{{get_the_date(('F j, Y'),$jyotish[$j]->ID)}}</span> <span class="meta_comment"><a href="#">{{ get_comments_number($jyotish[$j]->ID)}} Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>--}}
                    {{--<p>d</p>--}}
                {{--</li>--}}
                @for($j=0;$j<1;$j++)
                    @if(isset($jyotish[$j]))

                    <li>
                    <div class="catgimg2_container"> <a href="{{get_the_permalink($jyotish[$j])}}"><img alt="" src="{{get_the_post_thumbnail_url($jyotish[$j])}}"></a> </div>
                    <h2 class="catg_titile"><a href="{{get_the_permalink($jyotish[$j])}}">{{get_the_title($jyotish[$j])}}</a></h2>
                    <div class="comments_box"> <span class="meta_date">{{get_the_date(('F j, Y'),$jyotish[$j]->ID)}}</span> <span class="meta_comment"><a href="#">{{ get_comments_number($jyotish[$j]->ID)}} Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                    <p>d</p>
                </li>
                    @endif
                    @endfor
            </ul>
            <ul class="small_catg wow fadeInDown">
                @for($j=1;$j<3;$j++)
                    @if(isset($jyotish[$j]))
                <li>
                    <div class="media wow fadeInDown"> <a class="media-left" href="{{get_the_permalink($jyotish[$j])}}"><img src="{{get_the_post_thumbnail_url($jyotish[$j])}}" alt=""></a>
                        <div class="media-body">
                            <h4 class="media-heading"><a href="{{get_the_permalink($jyotish[$j])}}">{{get_the_title($jyotish[$j])}}</a></h4>
                            <div class="comments_box"> <span class="meta_date">{{get_the_date(('F j, Y'),$jyotish[$j]->ID)}}</span> <span class="meta_comment"><a href="#">{{ get_comments_number($jyotish[$j]->ID)}} Comments</a></span> </div>
                        </div>
                    </div>
                </li>
                @endif
                @endfor
            </ul>
        </div>
    </div>
    <div class="fashion_category">
        <div class="single_category">
            <div class="single_category wow fadeInDown">
                <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">वास्तुशास्त्र</a> </h2>
                <ul class="fashion_catgnav wow fadeInDown">
                    @for($j=0;$j<1;$j++)
                        @if(isset($vastu[$j]))
                    <li>
                        <div class="catgimg2_container"> <a href="{{get_the_permalink($vastu[$j])}}"><img alt="" src="{{get_the_post_thumbnail_url($vastu[$j])}}"></a> </div>
                        <h2 class="catg_titile"><a href="{{get_the_permalink($vastu[$j])}}">{{get_the_title($vastu[$j])}}</a></h2>
                        <div class="comments_box"> <span class="meta_date">{{get_the_date(('F j, Y'),$vastu[$j]->ID)}}</span> <span class="meta_comment"><a href="#">{{ get_comments_number($vastu[$j]->ID)}} Comments</a></span> <span class="meta_more"><a  href="#">Read More...</a></span> </div>
                        <p>d</p>
                    </li>
                        @endif
                        @endfor
                </ul>
                <ul class="small_catg wow fadeInDown">
                    @for($j=1;$j<3;$j++)
                        @if(isset($vastu[$j]))
                    <li>
                        <div class="media wow fadeInDown"> <a class="media-left" href="{{get_the_permalink($vastu[$j])}}"><img src="{{get_the_post_thumbnail_url($vastu[$j])}}" alt=""></a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="{{get_the_permalink($vastu[$j])}}">{{get_the_title($vastu[$j])}}</a></h4>
                                <div class="comments_box"> <span class="meta_date">{{get_the_date(('F j, Y'),$vastu[$j]->ID)}}</span> <span class="meta_comment"><a href="#">{{ get_comments_number($vastu[$j]->ID)}} Comments</a></span> </div>
                            </div>
                        </div>
                    </li>
                        @endif
                    @endfor
                </ul>
            </div>
        </div>
    </div>
</div>
