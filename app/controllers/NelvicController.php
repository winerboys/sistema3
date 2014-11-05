<?php

class NelvicController extends BaseController {


public function __construct()
		{
		
		$this->beforeFilter('auth');  //bloqueo de acceso
		
		}

	public function getIndex()
	{
		return View::make('template');
	}

			
}


