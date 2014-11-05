<?php

class VentaController extends BaseController {


public function __construct()
		{
		
		$this->beforeFilter('auth');  //bloqueo de acceso
		
		}

	
	public function getVenta()
	{
		$datos=Venta::all();
		 return View::make('ventas.venta',compact('datos'));
	}

	public function addVenta($id=null)
	{
		//$datos=Cliente::all();
		//$datos = DB::table('clientes')->orderBy('id','desc')->get();
		$datos=Cliente::find($id);
		$datos2=Producto::all();
		 return View::make('ventas.insertarv',compact('datos','datos2'));
	}

	public function postVenta()
	{
		//$datos=Cliente::find($id);
		
		 $rules = array(
			'ubigeo' => 'required|min:4',
			'experto' => 'required|min:4',
			'fecha_vent' => 'required|min:4',
			'direccion' => 'required|min:4',
			'departamento' => 'required|min:4',
			'provincia' => 'required|min:2',
			'distrito' => 'required|min:2',
			'user_id' => 'required|min:1',
			'producto_id' => 'required',
			'cliente_id' => 'required',	);

         $mensajes=array
        (
            "required"=>"este campo es obligatorio",
            "min"=>"no tiene datos minimos"
            

        );
        $dato=Input::all();
        $datos2=Producto::all();

		$validation = Validator::make(Input::all(),$rules,$mensajes);
		if($validation->fails())
		{		
		  //return Redirect::back()->withErrors($validation);;
			return View::make('ventas.insertarv',Input::all(),compact('dato','datos2'))->withErrors($validation);;
		}     
            $datos=new Venta();
			$datos->ubigeo=Input::get('ubigeo');
			$datos->experto=Input::get('experto');
			$datos->fecha_vent=Input::get('fecha_vent');
			$datos->direccion=Input::get('direccion');
			$datos->departamento=Input::get('departamento');
			$datos->provincia=Input::get('provincia');
			$datos->distrito=Input::get('distrito');
			$datos->observaciones=Input::get('observaciones');
			$datos->user_id=Input::get('user_id');
			$datos->cliente_id=Input::get('cliente_id');
			$datos->producto_id=Input::get('producto_id');
			$datos->save();
			//
            Session::flash('mensaje', 'La Venta ha sido Ingresada Exitosamente');
           	return Redirect::to('ventas');
	}

    

}


