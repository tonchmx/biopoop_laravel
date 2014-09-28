<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComercializadorasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comercializadoras', function(Blueprint $table)
		{
			$table->create();
			$table->increments('id');
			$table->string('nombre');
			$table->string('direccion');
			$table->decimal('lat');
			$table->decimal('log');
			$table->string('logo')->nullable();
			$table->string('url_compra')->nullable();
			$table->string('estado');
			$table->string('ciudad');
			$table->string('telefono');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comercializadoras', function(Blueprint $table)
		{
			Schema::drop('comercializadoras');
		});
	}

}
