@extends('template')
@section('sectionCuerpo')
<div class="container">
<div class="table-responsive">


    <div class=" alert alert-info">
    <center><label>Ventas Internet</label></center>
    </div>
     @if(Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible" role="alert">
                {{ Session::get('mensaje') }}
              </div><!cierra-->
       
               @endif


  
     <table class="table table-striped">
     <tr>
        <th><label>Cliente</label></th>
     	<th><label>Apellido</label></th>
        <th><label>DNI</label></th>
        <th><label>Experto</label></th>
        <th><label>fecha Venta</label></th>
        <th><label>Direccion</label></th>
        <th><label>Distrito</label></th>
        <th><label>Producto</label></th>
        <th><label>Vendedor</label></th>
        <th><label>Estado</label></th>
        
    </tr>
     	
    
    @foreach($datos as $dato)
   
    <tr>
    	<td>{{$dato->cliente->nombre}}</td>
    	<td>{{$dato->cliente->apellido}}</td>
        <td>{{$dato->cliente->dni}}</td>
        <td>{{$dato->experto}}</td>
        <td>{{$dato->fecha_vent}}</td>
        <td>{{$dato->direccion}}</td> 
        <td>{{$dato->provincia}}</td>
        <td>{{$dato->producto->produ}}</td>
        <td>{{$dato->user->nombre}}</td>
        <!--<td><input type="button" id="{{$dato->id}}" value="Editar" onclick="editarUsuario(this.id);"></td>-->
        <td><a href="pventa/ingresar/{{$dato->id}}">estado</a></td>
        <td><a title="Ver" class="btn btn-success btn-sm"href="show/{{$dato->id}}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
        <td><a title="Editar" class="btn btn-primary btn-sm"href="actualizarventas/{{$dato->id}}"><span class="glyphicon glyphicon-edit"></span></a></td>
        <td><a title="Eliminar" class="btn btn-danger btn-sm"href="imprimir"><span class="glyphicon glyphicon-trash"></span></a></td>
   
        </tr>    		
    @endforeach
	</table>

   
</div><!--cierra table responsive-->
</div><!--cierra container-->
@stop

