<?php

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */

Route::get('home', 'HomeController@index');
Route::get('category', 'CategoryController@index');
Route::get('single', 'PostController@index');
//Route::get( "about", function () {
//	return view( "page.about" );
//} );
Route::get('page', ['about-us', 'uses' => 'AboutController@index' ] );
//Route::get('page', ['contact-us', 'uses' => 'ContactController@index' ] );
//Route::get('page', ['about-us', 'AboutController@index']);
//Route::get('page', ['contact-us', 'ContactController@index']);
//Route::get("archive", 'CategoryController@archive');