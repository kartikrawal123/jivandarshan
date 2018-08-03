<?php

namespace Theme\Controllers;

use Themosis\Route\BaseController;

class AboutController extends BaseController
{
    public function index()
    {
        $data = get_queried_object();
$args = array(
    'post_per_page'=> -1,
    'post_type'=>'teams',
    'order' => 'asc'
);
$posts = get_posts($args);

//                td($posts);
        return view('page.about',compact('data','posts'));
    }
}
