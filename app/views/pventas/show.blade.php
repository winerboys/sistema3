@extends('template')
@section('sectionCuerpo')
<br>
<br>
	<br>
<div class="table-responsive">

<h2>{{ Session::get('mensaje') }}</h2>
    <div class=" alert alert-info">
    <center><h3><label>Estado Ventas</label></h3></center>
    </div>


  
     <table class="table table-striped">
     <tr>
        <th><label>Cliente</label></th>
     	<th><label>Apellido</label></th>
        <th><label>DNI</label></th>
        <th><label>Pedido</label></th>
        <th><label>Caja</label></th>
        <th><label>Telefono</label></th>
        <th><label>Orden</label></th>
        <th><label>Estado</label></th>
        <th><label>Producto</label></th>
        <th><label>Vendedor</label></th>
        <th><label>pago</label></th>
    </tr>
     	
    
    @foreach($datos as $dato)
   
    <tr>
    	<td>{{$dato->cliente->nombre}}</td>
    	<td>{{$dato->cliente->apellido}}</td>
        <td>{{$dato->cliente->dni}}</td>
        <td>{{$dato->pedido}}</td>
        <td>{{$dato->caja}}</td>
        <td>{{$dato->telefono}}</td> 
        <td>{{$dato->orden}}</td>
        <td>{{$dato->estado}}</td>
        <td>{{$dato->producto->produ}}</td>
        <td>{{$dato->user->nombre}}</td>
        <td><a href="../pago/ingresar/{{$dato->id}}">pago</a></td>
              
        </tr>    		
    @endforeach
	</table>

   
</div>
@stop

