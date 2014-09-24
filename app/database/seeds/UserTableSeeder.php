<?php

class UserTableSeeder extends Seeder {
	public function run()
	{
		User::create(array(
			'username' => '',
			'email' => '',
			'password' => Hash::make(''),
			'nombre' => ''
		));
	}
}