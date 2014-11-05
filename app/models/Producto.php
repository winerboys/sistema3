<?php

class Producto extends Eloquent
	
{
	protected  $table='productos';

	public function categoria(){

		return $this->belongsTo('Categoria');
	}

	public function venta(){

		return $this->hasMany('Venta');
	}

	public function pventa()
		{

		return $this->hasMany('Pventa');
		}

}

?>