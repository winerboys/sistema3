<?php

class ClienteController extends BaseController {


public function __construct()
		{
		
		$this->beforeFilter('auth');  //bloqueo de acceso
		
		}

	
	public function getCliente()
	{
		$datos=Cliente::all();
		//$datos = DB::table('clientes')->orderBy('id','desc')->get();
		
		 return View::make('clientes.cliente',compact('datos'));
	}

	public function addCliente()
	{
		$datos=Cliente::all();
		 return View::make('clientes.incliente');
	}

	public function postCliente()
    {
         $rules = array(
			'nombre' => 'required|min:4',
			'apellido' => 'required|min:4',
			'apellido2' => 'required|min:4',
			'departamento' => 'required|min:4',
			'provincia' => 'required|min:2',
			'dni' => 'required|min:8|unique:clientes',
			'celular' => 'required|min:9',
			'celular2' => 'required|min:9',
			'correo' => 'min:8|unique:clientes'
			
			);

         $mensajes=array
        (
            "required"=>"este campo es obligatorio",
            "min"=>"no tiene datos minimos",
            "unique"=>"el cliente ya existe"

        );
        $dato=Input::all();
		$validation = Validator::make(Input::all(),$rules,$mensajes);
		if($validation->fails())
		{		
			  //return Redirect::back()->withErrors($validation);;
			return View::make('clientes.incliente',$dato)->withErrors($validation);;
		}     
            $datos=new Cliente();
			$datos->nombre=Input::get('nombre');
			$datos->apellido=Input::get('apellido');
			$datos->apellido2=Input::get('apellido2');
			$datos->direccion=Input::get('direccion');
			$datos->departamento=Input::get('departamento');
			$datos->provincia=Input::get('provincia');
			$datos->distrito=Input::get('distrito');
			$datos->dni=Input::get('dni');
			$datos->fech_nac=Input::get('fech_nac');
			$datos->celular=Input::get('celular');
			$datos->celular2=Input::get('celular2');
			$datos->correo=Input::get('correo');
			$datos->save();
			
            Session::flash('mensaje', 'El Cliente ha sido Ingresado Exitosamente');
           	return Redirect::to('clientes');
        
    	
    }
  
    
}


