<?php

class IndexController extends \BaseController {

	/**
	 * show index page
	 *
	 * @return 	void
	 */
	public function index()
	{
		/**
		 * Obtenemos las fotos de instagram
		 */
		$url = "https://api.instagram.com/v1/tags/biopoop/media/recent?access_token=201595603.1fb234f.1f8228966895432097386c32e09d94ac";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		$result = curl_exec($ch);
		curl_close($ch);
		$fotos = json_decode($result);


		return View::make('index')
			->with(array('fotos'=>$fotos));
	}

	public function getContactUsForm()
	{
		// $_POST
		// firstname
		// lastname
		// email
		// telephone
		// subject
		// message

		$data = $_POST;
		if(isset($data['firstname']) && isset($data['lastname']) && isset($data['email']) && isset($data['subject']) && isset($data['message'])){
			// Enviamos el correo
			Mail::send('email.contacto', $data, function($message) use ($data){
				$nombre = $data['firstname']. ' ' . $data['lastname'];
				$message->from($data['email'], $nombre);
				$message->to('hola@biopoop.com.mx');
				$message->subject("biopoop:" . $data['subject']);
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