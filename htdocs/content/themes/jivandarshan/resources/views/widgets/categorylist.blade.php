<div class="single_bottom_rightbar wow fadeInDown">
    <h2>Category</h2>
    <ul class="labels_nav">
        @foreach($categories as $post)

            <li><a href="/category/{{$post->slug}}">{{$post->name}}</a></li>
        @endforeach
    </ul>
</div>