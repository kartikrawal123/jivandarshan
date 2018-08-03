<footer id="footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single_footer_top wow fadeInLeft">
                        <h2>Follow US</h2>
                        <ul class="flicker_nav">
                            <li><a href="#"><img src="{{themosis_assets()}}/images/75x75.jpg" alt=""></a></li>
                            <li><a href="#"><img src="{{themosis_assets()}}/images/75x75.jpg" alt=""></a></li>
                            <li><a href="#"><img src="{{themosis_assets()}}/images/75x75.jpg" alt=""></a></li>
                            <li><a href="#"><img src="{{themosis_assets()}}/images/75x75.jpg" alt=""></a></li>
                            <li><a href="#"><img src="{{themosis_assets()}}/images/75x75.jpg" alt=""></a></li>
                            <li><a href="#"><img src="{{themosis_assets()}}/images/75x75.jpg" alt=""></a></li>
                            <li><a href="#"><img src="{{themosis_assets()}}/images/75x75.jpg" alt=""></a></li>
                            <li><a href="#"><img src="{{themosis_assets()}}/images/75x75.jpg" alt=""></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single_footer_top wow fadeInDown">
                        <h2>Category</h2>
                        <ul class="labels_nav">
<?php

                                $categories = get_categories( array(
            'orderby' => 'name',
            'parent'  => 0
        ) );
//    echo "<pre>";
//    print_r($categories);
//    exit;
                            ?>
@foreach($categories as $post)

                            <li><a href="/category/{{$post->slug}}">{{$post->name}}</a></li>
@endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="single_footer_top wow fadeInRight">
                        <h2>About Us</h2>
                        <p>जीवन दर्शन का उद्देश्य है लोगो को ज़िन्दगी जीने का तरीका सिखाना । साथ ही जीवन दर्शन के माध्यम से लोगो की ज़िन्दगी में खुशिया लाना,लोगो को आज के तनाव से दुर करना और लोगो में ज़िन्दगी जीने की नई उमंग भरना ।
                            जीवन दर्शन साइट के अंदर कही से भी कोई भी कंटेट नहीं लिया गया है । जीवन दर्शन की हर बात हमने खुद के अनुभवों से दी है जो आपके लिए बहुत उपयोगी होगी।

                            आज तक के इतिहास में ऐसा पहली बार होगा जो ज्योतिष ज्ञान,आध्यात्मिक विचार और नई सोच-यूवा सोच(मेरी सोच) का का मिश्रण एक ही साइट में होगा । जी हां इन तीनों बातों को मिलाकर एक सोच दी जा रही है जिसे कहते है जीवन दर्शन…</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_bottom_left">
                        <p>Copyright &copy; 2017 <a href="index.html">JivanDarshan</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="footer_bottom_right">
                        <p>Developed BY Kartik Rawal</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{themosis_assets()}}/js/theme.js"></script>
<script src="{{themosis_assets()}}/js/slick.min.js"></script>
<script src="{{themosis_assets()}}/js/custom.js"></script>
