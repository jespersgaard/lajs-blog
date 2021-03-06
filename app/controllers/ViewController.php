<?php

namespace flakron\blog\app\controllers;
/**
 * Class ViewController
 *
 * @package flakron\blog\app\controllers
 * @author Flakron Bytyqi <flakron@gmail.com>
 */
class ViewController extends \BaseController {

	public function index($controller, $view) {
		return \View::make("$controller/$view");
	}

}