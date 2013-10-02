<?php

namespace flakron\blog\app\controllers;

/**
 * Class LogoutController
 *
 * @author Flakron Bytyqi <flakron@gmail.com>
 * @package flakron\blog\app\controllers
 */
class LogoutController extends \BaseController {

	public function index() {
		\Auth::logout();
	}

}