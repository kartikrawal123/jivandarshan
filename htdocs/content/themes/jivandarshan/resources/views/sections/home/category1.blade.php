<div class="content_middle_leftbar">
    <div class="single_category wow fadeInDown">
        <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a href="#" class="title_text">मेरी सोच</a> </h2>
        <ul class="catg1_nav">

           @foreach($merisoch as $post)
            <li>
                <div class="catgimg_container"> <a href="{{get_the_permalink($post)}}" class="catg1_img"><img alt="" src="{{get_the_post_thumbnail_url($post)}}"></a></div>
                <h3 class="post_titile"><a href="pages/single.html">{!! apply_filters('title',$post->post_title) !!}</a></h3>
            </li>
           @endforeach
                   </ul>
    </div>
</div>