<?php

class ComercializadoraController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Muestra todas las comercializadoras
		$comercializadoras = Comercializadora::all();
		return View::make('comercializadoras.index')
		->with('comercializadoras', $comercializadoras);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('comercializadoras.nueva');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'nombre' => 'required',
			'direccion' => 'required',
			'lat' => 'required',
			'log' => 'required',
			'estado' => 'required',
			'ciudad' => 'required',
			'telefono' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->passes()) {
			$comercializadora = new Comercializadora;
			$comercializadora->nombre = Input::get('nombre');
			$comercializadora->direccion = Input::get('direccion');
			$comercializadora->lat = Input::get('lat');
			$comercializadora->log = Input::get('log');
			$comercializadora->estado = Input::get('estado');
			$comercializadora->ciudad = Input::get('ciudad');
			$comercializadora->telefono = Input::get('telefono');
			$comercializadora->logo = Input::get('logo');
			$comercializadora->url_compra = Input::get('url_compra');
			$comercializadora->save();
			// redirect
			Session::flash('message', '¡Comercializadora agregada!');
			return Redirect::action('ComercializadoraController@index');
		} else {
			return Redirect::action('ComercializadoraController@create')
				->withErrors($validator)
				->withInput();
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
