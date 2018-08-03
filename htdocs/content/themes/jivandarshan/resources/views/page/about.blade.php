@extends('app')
@section('main-content')
    {{--<section id="mainContent">--}}
        <div class="container">
        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About Us
                    {{--<small>It's Nice to Meet You!</small>--}}
                </h1>
                <p>{!! apply_filters('the_content',$data->post_content) !!}</p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Team</h2>
            </div>

            @foreach($posts as $post)
                {{--@if($loop->index%3 == 0)--}}
                    {{--<br>--}}
                {{--@for($i=0;$i<3;$i++)--}}

                    <?php
//                        $data=get_post_meta($posts[$loop->index+$i]);
                        $meta = get_post_meta($post);
                ?>
            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-thumbnail img-center custom-img" src="{{get_the_post_thumbnail_url($post)}}" alt="">
                <h3>{!! apply_filters('title',$post->post_title) !!}
                    {{--<small>{{$data["Occupation"][0]}}</small>--}}
                </h3>
                <p>{!! apply_filters('the_content',$post->post_content) !!}</p>
            </div>
                    {{--@endfor--}}
                {{--@endif--}}

            @endforeach
        </div>
    </div>
    {{--</section>--}}
@endsection