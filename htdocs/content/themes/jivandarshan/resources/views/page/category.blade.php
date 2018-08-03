@extends('app')
@section('main-content')


    <section id="mainContent">
        <div class="content_bottom">
            <div class="col-lg-8 col-md-8">
@include('sections.category.posts')
                 </div>
            <div class="col-lg-4 col-md-4">
                @include('sections.home.sidebar')
                </div>
            </div>
    </section>
    </div>

@endsection