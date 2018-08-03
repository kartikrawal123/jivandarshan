<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 30-04-2018
 * Time: 19:51
 */

class CategoryList_Widget extends WP_Widget {

	public function __construct()
	{
		$params = [
			'description' => 'Category List',
			'name' => 'Category List'
		];

		parent::__construct( 'CategoryList_Widget', '', $params);
	}
	public function widget($args, $instance)
	{
		$data = \Theme\Controllers\WidgetController::CategoryList();
		echo view("widgets.categorylist", ["categories" => $data]);
	}
}