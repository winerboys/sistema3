<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username',20);
			$table->string('nombre',20);
			$table->string('dni',8);
			$table->string('password');
			$table->string('apellido',20);
			$table->string('apellido2',20);
			$table->string('rol',1);
			$table->boolean('estado');
			$table->string('telefono',20)->nullable();
			$table->string('celular',20)->nullable();
			$table->string('remember_token',100);
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
		Schema::drop('users');
	}

}
