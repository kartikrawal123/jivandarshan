{{--<div id="preloader">--}}
    {{--<div id="status">&nbsp;</div>--}}
{{--</div>--}}
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
    <header id="header">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="header_bottom">
                    <div class="header_bottom_left">
                        <div class="logo">
                            <img src="{{themosis_assets()}}/images/logo.png" class="logo-png">
                        </div>
                    </div>
                    <div class="header_bottom_right">
                        @if(device_type() == "desktop")

                        @endif

                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="navarea">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>
                <?php
                add_filter ( 'nav_menu_css_class', 'so_37823371_menu_item_class', 10, 4 );

                function so_37823371_menu_item_class ( $classes, $item, $args, $depth ){
                    $classes[] = 'dropdown';
                    return $classes;
                }
//                add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

//                function special_nav_class ($classes, $item) {
//                    if (in_array('current-menu-item', $classes) ){
//                        $classes[] = 'active menu-item';
//                    }
//                    return $classes;
//                }
                ?>


                <div id="navbar" class="navbar-collapse collapse">
                    <?php
//                    add_filter ( 'nav_menu_css_class', 'so_37823371_menu_item_class', 10, 4 );
//
//                    function so_37823371_menu_item_class ( $classes, $item, $args, $depth ){
//                        $classes[] = 'nav-link';
//                        return $classes;
//                    }
//                    add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
//                    //
                    function special_nav_class ($classes, $item) {
                        if (in_array('current-menu-item', $classes) ){
                            $classes[] = 'active';
                        }
                        return $classes;
                    }

                    //                        class My_Walker_Nav_Menu extends Walker_Nav_Menu {
                    //                            function start_lvl(&$output, $depth) {
                    //                                $indent = str_repeat("\t", $depth);
                    //                                $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
                    //                            }
                    //                        }

                    ?>
                    {{wp_nav_menu(["menu"=>"MainMenu","menu_class"=>"nav navbar-nav",'container_id' => 'cssmenu',])}}
                        {{--<ul class="nav navbar-nav">--}}
                            {{--<li class="active"><a href="#">Home</a></li>--}}
                            {{--<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="#">Page 1-1</a></li>--}}
                                    {{--<li><a href="#">Page 1-2</a></li>--}}
                                    {{--<li><a href="#">Page 1-3</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="#">Page 2</a></li>--}}
                            {{--<li><a href="#">Page 3</a></li>--}}
                        {{--</ul>--}}
                    {{--<ul class="nav navbar-nav">--}}
                        {{--<li class=""><a href="/">Home</a></li>--}}
                        {{--<li class="dropdown"> <a href="/cate" class="" data-toggle="dropdown" role="button" aria-expanded="false">Archives<span class="caret"></span></a>--}}
                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li><a href="/cate">Archive</a></li>--}}
                                {{--<li><a href="pages/archive1.html">Archive 1</a></li>--}}
                                {{--<li><a href="pages/archive2.html">Archive 2</a></li>--}}
                                {{--<li><a href="pages/archive3.html">Archive 3</a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="/post">Single page</a></li>--}}
                        {{--<li><a href="pages/contact.html">Contact</a></li>--}}
                        {{--<li><a href="pages/404.html">404 page</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
        </nav>
    </div>