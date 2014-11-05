<?php

class PventaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		$level=Auth::user()->rol;
			if($level=='a')
			{
			$datos=Pventa::all();
			
			 return View::make('pventas.show',compact('datos'));
			}
		else{
			Session::flash('mensaje', 'No tiene Autorizacion para esta Pagina');
           	return Redirect::to('ventas');
			}	
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate($id=null)
	
	{
		$level=Auth::user()->rol;
			if($level=='a')
			{
		$datos=Venta::find($id);
		
		//return $datos->experto;
		return View::make('pventas.insertar',compact('datos'));
	}
		else{
			Session::flash('mensaje', 'No tiene Autorizacion para esta Pagina');
           	return Redirect::to('ventas');
			}
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function addPventa()
	{
		//$input=Input::All();		
		//print_r($input);
		 $rules = array(
			'user_id' => 'required',
			'cliente_id' => 'required',
			'producto_id' => 'required',
			'venta_id' => 'required',);

         $mensajes=array
        (
            "required"=>"este campo es obligatorio",    
        );

		$validation = Validator::make(Input::all(),$rules,$mensajes);
		if($validation->fails())
		{		
		  return Redirect::back()->withErrors($validation);;
		}     
            $datos=new Pventa();
			$datos->pedido=Input::get('pedido');
			$datos->caja=Input::get('caja');
			$datos->telefono=Input::get('telefono');
			$datos->orden=Input::get('orden');
			$datos->estado=Input::get('estado');
			$datos->user_id=Input::get('user_id');
			$datos->cliente_id=Input::get('cliente_id');
			$datos->producto_id=Input::get('producto_id');
			$datos->venta_id=Input::get('venta_id');
			$datos->save();
			
            Session::flash('mensaje', 'El registro ha sido ingresado exitosamente');
           	return Redirect::to('pventa/show');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
