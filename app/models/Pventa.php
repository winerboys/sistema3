<?php

class Pventa extends Eloquent
	
{
	protected  $table='Pventas';

	public function producto(){

		return $this->belongsTo('Producto');
	}

	public function user(){

		return $this->belongsTo('User');
	}

	public function cliente()
		{
		return $this->belongsTo('Cliente');
		}
	public function venta()
		{
		return $this->belongsTo('Venta');
		}

}

?>