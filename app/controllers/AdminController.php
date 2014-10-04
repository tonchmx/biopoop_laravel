<?php

class AdminController extends BaseController {

	/* public function __construct() {
		$this->beforeFilter(function(){
			if(Auth::guest()){
				return Redirect::to('/login');
			}
		}, ['except' => ['getLogin', 'doLogin']]);
	}*/

	public function getDashboard()
	{
		$totalComercializadoras = Comercializadora::all()->count();
		$totalNoticias = Noticia::all()->count();
		$totalSponsors = Sponsor::all()->count();
		return View::make('admin.info')
			->with(array('totalComercializadoras' => $totalComercializadoras, 'totalNoticias' => $totalNoticias, 'totalSponsors' => $totalSponsors));
	}

	public function getLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$rules = [
			'username' => 'required',
			'password' => 'required'
		];

		$validator = Validator::make(Input::all(), $rules);
		if ($validator->passes()) {
			$userdata = [
				'username' => Input::get('username'),
				'password' => Input::get('password')
			];
			if(Auth::attempt($userdata)){
				return Redirect::to('admin/dashboard');
			}
			return Redirect::back()->with('message', 'Usuario o contraseña incorrectos.');
		}
		else {
			return Redirect::to('login')
				->withErrors($validator)
				->withInput(Input::except('password'));
		}
	}

	public function doLogout()
	{
		Auth::logout();
		return Redirect::to('login')->with('message', "¡Hasta luego!");
	}


}
