<?php

class PagoController extends \BaseController {

	
	public function index()
	{
		
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
		$datos=Pventa::find($id);
		
		//return $datos->experto;
		return View::make('pagos.insertar',compact('datos'));
			}
		else{
			Session::flash('mensaje', 'No tiene Autorizacion para esta Pagina');
           	return Redirect::to('ventas');
		}	
	
	}


	
	public function store()
	{
		//
	}


	
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
