<?php
/**
 * Created by PhpStorm.
 * User: shubhamparikh
 * Date: 30-Jan-18
 * Time: 5:06 PM
 */

namespace Theme\Models;


use Illuminate\Database\Eloquent\Model;

class Featured extends Model
{
	public function getPostsAttribute($value)
	{
		return json_decode($value);
	}

	public function setPostsAttribute($value)
	{
		$this->attributes["posts"] = json_encode($value);
	}
}

