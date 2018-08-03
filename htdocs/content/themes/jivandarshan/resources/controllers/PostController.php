<?php

namespace Theme\Controllers;

use Themosis\Route\BaseController;

class PostController extends BaseController
{
    public function index()
    {
        global $post;
        setup_postdata( $post );
        return view('page.single',compact('post'));
    }
}
