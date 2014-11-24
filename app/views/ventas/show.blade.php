@extends('template')
@section('sectionCuerpo')
<div class="container">

    <div class=" alert alert-info">
    <center><label>Cliente:{{$datos->cliente->nombre}} {{$datos->cliente->apellido}}</label></center>
    </div>
     
    <div class=" alert alert-success">
        <label for=""> Venta Realizada por: {{$datos->user->nombre}} {{$datos->user->apellido}}</label>
    </div>
   <div class="row">
   <div class="col-xs-12 col-sm-6">
   <label>Ubigeo</label>
    <div class="form-group">
    <input type="text" class="form-control" id="ubigeo"  name="ubigeo" value="{{$datos->ubigeo}}">
    </div>

    <div class="form-group">
    <label>Experto</label>
    <input type="text" class="form-control" id="experto"  name="experto" value="{{$datos->experto}}">
    </div>

    <div class="form-group">
    <label>Fecha de Venta</label>
    <input type="date"class="form-control" id="fech_nac"  name="fecha_vent"value="{{$datos->fecha_vent}}">
    </div>

    

   
    </div><!--col-->
     <div class="col-xs-12 col-sm-6">
     <div class="form-group">
    <label >Dirección</label>
    <input type="text" class="form-control" id="direccion"  name="direccion" value="{{$datos->direccion}}">
    </div>

    <div class="form-group">
    <input type="text" class="form-control" id="departamento"  name="departamento" value="{{$datos->departamento}}">
    </div>
      <div class="form-group">
    <input type="text" class="form-control" id="provincia" name="provincia" value="{{$datos->provincia}}">
    </div>

    <div class="form-group">
    <input type="text" class="form-control" id="distrito" name="distrito" value="{{$datos->distrito}}">
    </div>
    
    <div class="form-group">
    <label for="">Observaciones</label>
    <p>{{$datos->observaciones}}</p>
    </div>
  
    <div class="form-group">
   <label>producto</label>
   <input type="text" class="form-control" value="{{$datos->producto->produ}}">
    
    </div>
                
   
        


   </div><!--cierra col-->
</div><!--cierra container-->
@stop

