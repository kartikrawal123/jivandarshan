<?php
//echo "<pre>";
//print_r($category);
//exit;
?>
<div class="latest_slider">
    <div class="slick_slider">

       @foreach($posts as $post)

        <div class="single_iteam"><img src="{{ get_the_post_thumbnail_url($post) }}" class="slider-img" alt="">
            <h2><a class="slider_tittle" href="{{get_the_permalink($post)}}">{!! apply_filters('title',$post->post_title) !!}</a></h2>
        </div>
           @endforeach
    </div>
</div>