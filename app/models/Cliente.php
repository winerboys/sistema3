<?php

class Cliente extends Eloquent
	
{protected  $table='clientes';
 


	public function venta(){

		return $this->hasMany('Venta');
	}

	public function pventa()
		{

		return $this->hasMany('Pventa');
		}
}

?>
