<?php

namespace Theme\Controllers;

use Themosis\Route\BaseController;

class HomeController extends BaseController
{
    public function valuelist($array, $array_column) {
        return array_column($array, $array_column);
    }

    public function index($post, $query)
    {
        global $cat_name;
        $posts = $query->posts;
        $chanakya1 = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 4,
            'category' => '8');
        $chanakya = get_posts($chanakya1);

//        $popularpost  = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );

//        echo "<pre>";
//        print_r($popularpost);
//        exit;

//        global $cat_name;
//        $merisoch =getPostData("मेरी-सोच");

//        echo"<pre>";
//        print_r($merisoch);
//exit;
//        $catarray = array();
//        $home = array();
//        foreach ($categories as $key) {
//            if ($key->slug != "uncategorized") {
//                $catarray = $key->cat_name;
//                $data = $this->categoryData($catarray);
//                $home[$cat_name]= $data["posts"];
//
//            }
//        }
//        exit;
//exit;

        $category1 = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 2,
            'category' => '14');
        $merisoch = get_posts($category1);
        $category2 = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 2,
            'category' => '3');
        $avichar = get_posts($category2);
        $category3 = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 4,
            'category' => '17');
        $bhagvat = get_posts($category3);
        $category4 = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 4,
            'category' => '10');
        $jyotish = get_posts($category4);
        $category5 = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 4,
            'category' => '16');
        $vastu = get_posts($category5);
        $category6 = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 4,
            'category' => '5');
        $avigyan = get_posts($category6);
        $category7 = array(
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => 4,
            'category' => '15');
        $rashifal = get_posts($category7);
//        $args = array(
//            'type'            => 'monthly',
//            'limit'           => '',
//            'format'          => 'html',
//            'before'          => '',
//            'after'           => '',
//            'show_post_count' => false,
//            'echo'            => 1,
//            'order'           => 'DESC',
//            'post_type'     => 'post'
//        );
//        $archive = wp_get_archives($args);
//echo "<pre>";
//print_r($archive);
//exit;
//        global $post;
//        $args  = array(
//            'meta_key'       => 'post_views_count',
//            'orderby'        => 'meta_value_num',
//            'posts_per_page' => 5,
//            'post__not_in'   => array($post->ID)
//        );
//        $posts = get_posts( $args );
//        td($posts);
        return view('page.home', compact('posts', 'top', 'chanakya','merisoch','avichar','bhagvat','jyotish','vastu','avigyan','rashifal','cat_name'));
    }

//    public function categoryData($category)
//    {
//        $args = array(
//            "category_name" => $category,
//            "posts_per_page" => 7,
//            "orderby" => 'post_date',
//            "order" => 'DESC',
//        );
//        $data = array("catdata" => get_category_by_slug($category), "posts" => get_posts($args));
//        return $data;
//    }
}