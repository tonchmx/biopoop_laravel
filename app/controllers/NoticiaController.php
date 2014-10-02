<?php

class NoticiaController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Muestra todas las noticias
		$noticias = Noticia::all();
		return View::make('noticias.index')
		->with('noticias', $noticias);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('noticias.nueva');
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
			'url_noticia' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->passes()) {
			$noticia = new Noticia;
			$noticia->nombre = Input::get('nombre');
			$noticia->url_noticia = Input::get('url_noticia');
			$noticia->logo = Input::get('logo');
			$noticia->save();
			//redirect
			Session::flash('message', '¡Nueva noticia agregada!');
			return Redirect::action('NoticiaController@index');
		} else {
			return Redirect::action('NoticiaController@create')
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
		$noticia = Noticia::find($id);
		return View::make('noticias.mostrar')
			->with('noticia', $noticia);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$noticia = Noticia::find($id);

		return View::make('noticias.editar')
			->with('noticia', $noticia);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'nombre' => 'required',
			'url_noticia' => 'required'
		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->passes()) {
			$noticia = Noticia::find($id);
			$noticia->nombre = Input::get('nombre');
			$noticia->url_noticia = Input::get('url_noticia');
			$noticia->logo = Input::get('logo');
			$noticia->save();
			//redirect
			Session::flash('message', '¡Noticia actualizada!');
			return Redirect::action('NoticiaController@index');
		} else {
			return Redirect::action('NoticiaController@create')
				->withErrors($validator)
				->withInput();
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$noticia = Noticia::find($id);
		$noticia->delete();
		Session::flash('message', 'Noticia eliminada');
		return Redirect::action('NoticiaController@index');
	}


}
