<!doctype html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel PHP Framework</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/login.css') }}
	
	
	{{ HTML::script('js/jquery.js') }}
	{{ HTML::script('js/ajaxlogin.js') }}
	
</head>
<body>

	<div class="container">
			<div id="loginbox" class="row wrapper"> 

			<div id="logo" class="col-xs-12">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>        
	
		{{Form::open(array('url' => 'login', 'method' => 'post'))}}
		<div class="col-xs-12">
 					@if (Session::has('login_errors'))
 					
                       <div class=" alert alert-danger">
						<center><label> El nombre de usuario o la contraseña no son correctos.</label></center>
						</div>

					@else
                   
                   <div class=" alert alert-info">
	
    				 <center><label>Ingrese Sus datos para Continuar</label></center>

  				</div>
                    @endif
        </div>

        <div class="row">
        <div class="col-xs-12">

        <div class="form-group">
 		<p>{{Form::label('usuario','usuario')}}
 			{{Form::text('username',  null, array('class'=>'form-control', "placeholder"=>"Introduce Nombre"))}}
 		</p>
 		</div>

		<div class="form-group">
 		<p>{{Form::label('password','password')}}
 			{{Form::password('password', array("class" => "form-control", "placeholder"=>"Introduce Contraseña"  ))}}
 		</p>
 		</div>
 			
 		<p>{{Form::submit('Login', array("class" => "btn  btn-primary"))}}</p>

 		{{ Form::close() }}
 		</div> 
 		</div>
 		</div>
 		</div><!-- /container -->

 	
</body>
</html>