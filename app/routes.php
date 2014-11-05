 <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('login');
});

//login
Route::post('/login', 'UserLogin@user');

Route::get('logout', function()
{
    Auth::logout();
    return Redirect::to('/');
});




//listar cliente
	Route::get('/clientes', 'ClienteController@getCliente');
	Route::post('/inclientes', 'ClienteController@postCliente');
	Route::get('/addclientes', 'ClienteController@addCliente');
	//ir a ingresar clientes
//Rutas de estado venta
	Route::any('/pventa/ingresar/{id?}', 'PventaController@getCreate');
	Route::any('/pventa/add', 'PventaController@addPventa');
	Route::any('/pventa/show', 'PventaController@index');
//rutas de pagos
	Route::any('/pago/ingresar/{id?}', 'PagoController@getCreate');
//rutas de las ventas
	Route::get('/ventas', 'VentaController@getVenta');
	Route::post('/pventa','VentaController@postVenta' );
	Route::get('/inventa/{id?}','VentaController@addVenta');

//rutas post venta
	Route::any('/postventa/{id}', 'PventaController@getCreate');
//prueba de rutas
	Route::any('/pagos',function()
		{return 'prueba correcta de rutas';});

	




//ingresar nueva venta
Route::get('/insertarventa', function()

	{
		$datos=new Venta;
			$datos->ubigeo="2401";
			$datos->experto="4437645";
			$datos->fecha_vent="2014-07-14";
			$datos->direccion="jr chucuito 644";
			$datos->departamento="puno";
			$datos->provincia="el collao";
			$datos->distrito="ilave";					
			$datos->user_id="1";                  
            $datos->cliente_id="1";
            $datos->producto_id="2";
			$datos->save();

		return'datos ingresados correctamente';
	});
//ingresar nueva venta
Route::get('/cliente', function()

	{
		$datos=new Cliente;
			$datos->nombre="Mery Olinda";
			$datos->apellido="Palomino";
			$datos->apellido2="Cruz";
			$datos->direccion="Jr chucuito 644";
			$datos->departamento="Puno";
			$datos->provincia="El collao";
			$datos->distrito="Ilave";
			$datos->dni="40387885";
			$datos->fech_nac="1979-09-30";
			$datos->celular="974435831";
			$datos->celular2="973577628";
			$datos->save();

		return'datos ingresados correctamente';
	});
//ingresar  nuevo usuario
Route::get('/dato', function()

	{
		$datos=new User;
		$datos->username="machaca";
		$datos->nombre="jose luis";
		$datos->dni="43315575";
		$datos->password=Hash::make('machacacopari');
		$datos->apellido="machaca";
		$datos->apellido2="copari";
		$datos->rol="b";
		$datos->telefono="951637107";
		$datos->celular="951637107";
		$datos->save();

		$datos=new User;
		$datos->username="winerboys";
		$datos->nombre="jose";
		$datos->dni="43315576";
		$datos->password=Hash::make('machacacopari');
		$datos->apellido="machaca";
		$datos->apellido2="copari";
		$datos->rol="a";
		$datos->telefono="951637107";
		$datos->celular="951637107";
		$datos->save();

		return'datos ingresados correctamente';
	});
//ingresar  CAT_PRODUCTOS	
Route::get('/cat', function()

	{
		$datos=new categoria;
		$datos->nombre="duo";
		$datos->save();

		$datos=new categoria;
		$datos->nombre="trio";
		$datos->save();

		$datos=new categoria;
		$datos->nombre="dth";
		$datos->save();

			

				return'datos ingresados correctamente';
	});

//ingresar  productos
Route::get('/prod', function()

	{
		$datos=new producto;
		$datos->produ="Duo 1mb";
		$datos->categoria_id="1";
		$datos->save();

		$datos=new producto;
		$datos->produ="Duo 2mb";
		$datos->categoria_id="1";
		$datos->save();

		$datos=new producto;
		$datos->produ="Duo 4mb";
		$datos->categoria_id="1";
		$datos->save();

		$datos=new producto;
		$datos->produ="Duo 8mb";
		$datos->categoria_id="1";
		$datos->save();
		$datos=new producto;

		$datos->produ="Duo 10 mb";
		$datos->categoria_id="1";
		$datos->save();

		$datos=new producto;
		$datos->produ="Duo 15 mb";
		$datos->categoria_id="1";
		$datos->save();

		$datos=new producto;
		$datos->produ="DTH Estandar";
		$datos->categoria_id="2";
		$datos->save();

		$datos=new producto;
		$datos->produ="DTH Estandar + HD";
		$datos->categoria_id="2";
		$datos->save();

		$datos=new producto;
		$datos->produ="DTH Estelar";
		$datos->categoria_id="2";
		$datos->save();

		$datos=new producto;
		$datos->produ="DTH Estelar + HD";
		$datos->categoria_id="2";
		$datos->save();

		$datos=new producto;
		$datos->produ=" Trio 4mb";
		$datos->categoria_id="3";
		$datos->save();

		$datos=new producto;
		$datos->produ=" Trio 2mb";
		$datos->categoria_id="3";
		$datos->save();
		
				return'datos ingresados correctamente';
	});



//rutas del sistema
Route::controller('nelvic', 'NelvicController');



Route::get('admin', array('before' => 'auth', function()
{
    return View::make('template');	
}));

