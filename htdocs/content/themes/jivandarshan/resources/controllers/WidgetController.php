<?php

namespace Theme\Controllers;

use Themosis\Route\BaseController;

class WidgetController extends BaseController {
	public function __construct() {

	}

	public static function CategoryList() {

        $categories = get_categories( array(
            'orderby' => 'name',
            'parent'  => 0
        ) );
		return $categories;

	}
	public static function PopularPosts() {

        $args = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 3,);
        $posts = get_posts($args);

        return $posts;

	}
}
