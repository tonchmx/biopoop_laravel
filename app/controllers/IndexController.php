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

	public function getContactUsForm()
	{
		$data = $_POST;
		if(isset($data['name']) && isset($data['email']) &&  isset($data['message'])){
			// Enviamos el correo
			Mail::send('email.contacto', $data, function($message) use ($data){
				$message->from($data['email'], $data['name']);
				$message->to('hola@biopoop.com.mx');
				$message->subject('Contacto');
			});

			// Enviamos un correo de confirmación a nuestro cliente
			Mail::send('email.cliente', $data, function($message) use ($data) {
				$message->from('hola@biopoop.com.mx', 'Biopoop®');
				$message->to($data['email']);
				$message->subject('¡Gracias por contactarnos!');
			});
			return Response::json(array('success' => true));
		} else {
			return Response::json(array('success' => false));
		} 
	}

}