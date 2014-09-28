<?php

class IndexController extends \BaseController {

	/**
	 * show index page
	 *
	 * @return 	void
	 */
	public function index()
	{
		return View::make('index');
	}

}
