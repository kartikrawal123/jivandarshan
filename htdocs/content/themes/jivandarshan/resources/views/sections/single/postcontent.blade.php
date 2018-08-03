<div class="content_bottom_left">
<div class="single_page_area">
    <ol class="breadcrumb">
        <li><a href="/">Home</a></li>
        <li class="active">{!! apply_filters('title',$post->post_title) !!}</li>
    </ol>
    <h2 class="post_titile">{!! apply_filters('title',$post->post_title) !!}</h2>
    <div class="single_page_content">
        <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Wpfreeware</a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i>Technology</a> </div>
        <img class="img-center" src="{{get_the_post_thumbnail_url()}}" alt="">
        <p>{!! apply_filters('the_content', $post->post_content) !!}</p>

    </div>
</div>
</div>
<?php
$next = get_next_post();
$prev = get_previous_post();
?>
<div class="post_pagination">
    @if(!$prev == null)
    <div class="prevsingle"> <a class="angle_left" href="{{get_the_permalink($prev)}}"><i class="fa fa-angle-double-left"></i></a>
        <div class="pagincontent"> <span>Previous Post</span> <a href="{{get_the_permalink($prev)}}">{!! apply_filters('title',$prev->post_title) !!}</a> </div>
    </div>
   @endif
        @if($prev == null)


        <div class="prevsingle"> <a class="angle_left" href="{{get_the_permalink($post)}}"><i class="fa fa-angle-double-left"></i></a>
            <div class="pagincontent"> <span>Previous Post</span> <a href="{{get_the_permalink($post)}}">{!! apply_filters('title',$post->post_title) !!}</a> </div>
        </div>
        @endif
        @if(!$next == null)

        <div class="nextsingle">
        <div class="pagincontent"> <span>Next Post</span> <a href="{{get_the_permalink($next)}}">{!! apply_filters('title',$next->post_title) !!}</a> </div>
        <a class="angle_right" href="{{get_the_permalink($next)}}"><i class="fa fa-angle-double-right"></i></a> </div>
@endif
        @if($next == null)


        <div class="nextsingle"> <a class="angle_right" href="{{get_the_permalink($post)}}"><i class="fa fa-angle-double-right"></i></a>
                    <div class="pagincontent"> <span>Next Post</span> <a href="{{get_the_permalink($post)}}">{!! apply_filters('title',$post->post_title) !!}</a> </div>
                </div>
@endif
</div>

<div class="share_post"> <a class="facebook" href="https://www.facebook.com/sharer.php?u={{get_the_permalink($post)}}"><i class="fa fa-facebook"></i>Facebook</a>
    <a class="twitter" href="https://www.twitter.com/intent/tweet?text={{urlencode(get_the_title($post))}}"><i class="fa fa-twitter"></i>Twitter</a>
    <a class="googleplus" href="https://plus.google.com/share?url={{urlencode(get_the_permalink($post))}}"><i class="fa fa-google-plus"></i>Google+</a>
    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i>LinkedIn</a>
    <a class="stumbleupon" href="#"><i class="fa fa-stumbleupon"></i>StumbleUpon</a>
    <a class="pinterest" href="https://pinterest.com/pin/create/button/?url={{get_the_permalink($post)}}"><i class="fa fa-pinterest"></i>Pinterest</a> </div>
@if(related_articles())
<div class="similar_post">
    <h2>Similar Post You May Like <i class="fa fa-thumbs-o-up"></i></h2>
    <ul class="small_catg similar_nav wow fadeInDown animated">
        @foreach(related_articles() as $article)
            <li>
            <div class="media wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> <a class="media-left related-img" href="{{get_the_permalink($article)}}"><img src="{{get_the_post_thumbnail_url($article)}}" alt=""></a>
                <div class="media-body">
                    <h4 class="media-heading"><a href="{{get_the_permalink($article)}}">{!! apply_filters('title',$article->post_title) !!}</a></h4>
                    <p>{!! apply_filters('excerpt',$article->post_excerpt) !!}</p>
                </div>
            </div>
        </li>
            @endforeach

    </ul>
</div>
@endif
</div>