<?php

class SponsorController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Muestra todos los sponsors
		$sponsors = Sponsor::all();
		return View::make('sponsors.index')
			->with('sponsors', $sponsors);
	}

	public function getSponsorsJSON()
	{
		return Response::json(Sponsor::all());
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sponsors.nueva');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$rules = array(
			'nombre' => 'required'
		);
		
		$validator = Validator::make(Input::all(), $rules);
		if($validator->passes()){
			$sponsor = new Sponsor;
			$sponsor->nombre = Input::get('nombre');
			
			//Creamos las variables si se manda una imagen
			if(Input::hasFile('logo')){
				$file = Input::file('logo');
				$fileName = Input::file('logo')->getClientOriginalName();
				// Comprobamos que sea una imagen valida
				if($file->isValid()){
					// Movemos la imagen a su carpeta destino
					$file->move(public_path()."/img/sponsors", $fileName);
					// Guardamos el nombre de la imagen en la base de datos
					$sponsor->logo = $fileName;
				}
			}

			$sponsor->save();
			//redirect
			Session::flash('message', '¡Nuevo sponsor agregado!');
			return Redirect::action('SponsorController@index');	
		} else {
			return Redirect::action('SponsorController@create')
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
		$sponsor = Sponsor::find($id);
		return View::make('sponsors.mostrar')
			->with('sponsor', $sponsor);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sponsor = Sponsor::find($id);
		return View::make('sponsors.editar')
			->with('sponsor', $sponsor);
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
			'nombre' => 'required'
		);

		//Creamos las variables si se manda una imagen
		if(Input::hasFile('logo')){
			$file = Input::file('logo');
			$fileName = Input::file('logo')->getClientOriginalName();
		}

		$validator = Validator::make(Input::all(), $rules);
		if($validator->passes()){
			$sponsor = Sponsor::find($id);
			$sponsor->nombre = Input::get('nombre');
			//Comprobamos que sea una imagen valida para poder guardar
			if(isset($fileName)){
				$sponsor->logo = $fileName;	
				if($file->isValid()){
					$file->move(public_path()."/img/sponsors", $fileName);
					$sponsor->save();
					//redirect
					Session::flash('message', '¡Sponsor actualizado con imagen!');
					return Redirect::action('SponsorController@index');	
				}
			} 
			// Si no nos envian una imagen, guardamos normalmente
			else {
				$sponsor->save();
				//redirect
				Session::flash('message', '¡Sponsor actualizado sin imagen!');
				return Redirect::action('SponsorController@index');	
			}
		} else {
			return Redirect::action('SponsorController@edit')
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
		$sponsor = Sponsor::find($id);
		$sponsor->delete();
		Session::flash('message', 'Sponsor eliminado');
		return Redirect::action('SponsorController@index');
	}


}
