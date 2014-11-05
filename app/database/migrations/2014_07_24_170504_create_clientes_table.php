<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',20);
			$table->string('apellido',20);
			$table->string('apellido2',20);
			$table->string('direccion',50);
			$table->string('departamento',20);
			$table->string('provincia',20);
			$table->string('distrito',20);
			$table->string('dni',8);
			$table->string('ruc')->nullable();
			$table->date('fech_nac');
			$table->string('celular')->nullable();
			$table->string('celular2')->nullable();
			$table->string('correo',50)->nullable();
			$table->text('observacion')->nullable();
			
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
		Schema::drop('clientes');
	}

}
