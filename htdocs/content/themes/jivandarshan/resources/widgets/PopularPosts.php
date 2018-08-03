<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 30-04-2018
 * Time: 19:51
 */

class PopularPosts_Widget extends WP_Widget {

    public function __construct()
    {
        $params = [
            'description' => 'Popular Posts',
            'name' => 'Popular Posts'
        ];

        parent::__construct( 'PopularPosts_Widget', '', $params);
    }
    public function widget($args, $instance)
    {
        $data = \Theme\Controllers\WidgetController::PopularPosts();
        echo view("widgets.popularposts", ["posts" => $data]);
    }
}