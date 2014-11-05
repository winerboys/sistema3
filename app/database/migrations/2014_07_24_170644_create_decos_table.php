<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('decos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('deco');
			$table->string('tarjeta');
			//campo que contendra la llave foranea
            $table->integer('user_id')->unsigned();
            //stablecemos la llave foranea
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            //campo que contendra la llave foranea
            $table->integer('cliente_id')->unsigned();
            //stablecemos la llave foranea
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('producto_id')->unsigned();
            //stablecemos la llave foranea
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');
            //llave foranea
             $table->integer('venta_id')->unsigned();
            //stablecemos la llave foranea
            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('cascade')->onUpdate('cascade');
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
		Schema::drop('decos');
	}

}
