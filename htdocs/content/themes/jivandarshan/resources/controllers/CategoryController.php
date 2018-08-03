<?php

namespace Theme\Controllers;
use \WP_Query;
use Themosis\Route\BaseController;

class CategoryController extends BaseController
{
    public function index($post, $query)
    {
        $posts = $query->posts;
                $data = setup_postdata( $post );
//        echo "<pre>";
//        print_r($data);
//        exit;
        return view('page.category',compact('posts'));
    }
    public function archive()
    {
//        $data = get_queried_object();
//        echo "<pre>";
//        print_r($data);
//        exit;

        $filtered_posts = new WP_Query( array(
            'date_query' => array(
                array(
                    // String via strtotime()
                    'after'     => 'August 1st, 2014',
                    // Or if you want, an array
                    'before'    => array(
                        'year'  => 2014,
                        'month' => 9,
                        'day'   => 30,
                    ),
                    'inclusive' => true,
                ),
            ),
            'posts_per_page' => -1,
        ) );
//       get_archive_template();
////        add_action( 'pre_get_posts', function ( $query ) {
//            if ( !is_admin() && $query->is_date() && $query->is_month() && $query->is_main_query() ) {
//                $query->set( 'posts_per_page', '-1' );
//            }
//        });
//        $posts = $q->posts;
//        echo "<pre>";
//        print_r($posts);
//        exit;
        return view('page.archive');

    }
}
