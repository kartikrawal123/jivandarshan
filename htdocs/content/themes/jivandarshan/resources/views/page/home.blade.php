@extends('app')

@section('main-content')
    {{--<div id="overlay">--}}
        {{--<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
        {{--<ins class="adsbygoogle"--}}
             {{--style="display:block; text-align:center;"--}}
             {{--data-ad-layout="in-article"--}}
             {{--data-ad-format="fluid"--}}
             {{--data-ad-client="ca-pub-5170007030338054"--}}
             {{--data-ad-slot="2352937073"></ins>--}}
        {{--<script>--}}
            {{--(adsbygoogle = window.adsbygoogle || []).push({});--}}
        {{--</script>--}}


    {{--</div>--}}

    <section id="mainContent">
        <div class="content_top">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm6">
                        @include('sections.home.topslider')
                </div>
{{--                @foreach($homedata as $category=>$post)--}}
                <div class="col-lg-6 col-md-6 col-sm6">
                    @include('sections.home.topposts')
                </div>
            </div>
        </div>
        <div class="content_middle">
            <div class="col-lg-3 col-md-3 col-sm-3">
                @include('sections.home.category1')
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                    @include('sections.home.middleslider')
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">

                    @include('sections.home.category2')
            </div>
        </div>
        <div class="content_bottom">
            <div class="col-lg-8 col-md-8">
                <div class="content_bottom_left">

                @include('sections.home.business')
                @include('sections.home.games')
                @include('sections.home.tech')
            </div>
{{--@endforeach--}}
            <div class="col-lg-4 col-md-4">

                    @include('sections.home.sidebar')
            </div>
        </div>
        </div>
    </section>

    @endsection