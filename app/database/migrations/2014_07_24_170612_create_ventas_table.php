<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ventas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('ubigeo')->nullable();
			$table->string('experto')->nullable();
			$table->string('contrato',20)->nullable();
			$table->string('pedido')->nullable();
			$table->string('telefono')->nullable();
			$table->string('orden')->nullable();
			$table->string('estado')->nullable();
			$table->date('fecha_vent');
			$table->string('direccion',50);
			$table->string('departamento',20);
			$table->string('provincia',20);
			$table->string('distrito',20);
			$table->text('observaciones');			
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
		Schema::drop('ventas');
	}

}
