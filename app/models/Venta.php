<?php

class Venta extends Eloquent
	
{protected  $table='ventas';


	public function cliente()
		{

		return $this->belongsTo('Cliente');
		}

	public function producto()
		{

		return $this->belongsTo('Producto');
		}

		public function user()
		{

		return $this->belongsTo('User');
		}

		public function pventa()
		{

		return $this->belongsTo('Pventa');
		}
}

?>