<?php

namespace flakron\blog\app\services\impl;

use flakron\blog\app\models\Post;
use flakron\blog\app\services\PostService;

/**
 * Class PostServiceImpl
 *
 * @package flakron\blog\app\services\impl
 * @author Flakron Bytyqi <flakron@gmail.com>
 */
class PostServiceImpl implements PostService {

	/**
	 * Fetch all Posts
	 *
	 * @return mixed
	 */
	public function fetchAll() {
		return Post::orderBy('create_date', 'desc')->get();
	}
}