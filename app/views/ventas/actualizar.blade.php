@extends('template')
@section('sectionCuerpo')
<div class="container">

    <div class=" alert alert-info">
    <center><label>Actualizar Venta</label></center>
    </div>
     
 {{Form::open(array('url' => 'update', 'method' => 'post'))}}
   <div class="row">
   <div class="col-xs-12 col-sm-6">
    <div class="form-group">
    <input type="text" class="form-control" id="nombre"  name="ubigeo" value="{{$datos->ubigeo}}">
    </div>{{$errors->first("ubigeo")}}

    <div class="form-group">
    <input type="text" class="form-control" id="apellido"  name="experto" value="{{$datos->experto}}">
    </div>{{$errors->first("experto")}}

    <div class="form-group">
    <label>Fecha de Venta</label>
    <input type="date"class="form-control" id="fech_nac"  name="fecha_vent"value="{{$datos->fecha_vent}}">
    </div>

    <div class="form-group">
    <label >Dirección</label>
    <input type="text" class="form-control" id="direccion"  name="direccion" value="{{$datos->direccion}}">
    </div>{{$errors->first("direccion")}}

    <div class="form-group">
    <input type="text" class="form-control" id="departamento"  name="departamento" value="{{$datos->departamento}}">
    </div>{{$errors->first("departamento")}}

    <div class="form-group">
    <input type="text" class="form-control" id="provincia" name="provincia" value="{{$datos->provincia}}">
    </div>{{$errors->first("provincia")}}

    <div class="form-group">
    <input type="text" class="form-control" id="distrito" name="distrito" value="{{$datos->distrito}}">
    </div>{{$errors->first("distrito")}}
    </div><!--col-->
     <div class="col-xs-12 col-sm-6">
    
    <div class="form-group">
    <textarea type="text" class="form-control"  rows="5" id="observaciones" name="observaciones" placeholder="dfsdfsdf" value="{{$datos->observaciones}}"> </textarea>
    </div>{{$errors->first("observaciones")}}
  
   
    
    <div class="form-group">
   <label>seleccione Producto</label>
    <select class="form-control" name="producto_id" id="">
     @if(isset($producto4))
    <option value="{{$producto4->id}}">{{$producto4->produ}}</option>
    @endif
    @foreach($datos2 as $dato2)
      <option value="{{$dato2->id}}">{{$dato2->produ}}</option>
    @endforeach
    </select>
    </div>
                
    <input type="hidden"  name="cliente_id" value="{{$datos->cliente_id}}">
    <input type="hidden"  name="user_id" value="{{$datos->user_id}}">
     <input type="hidden"  name="id" value="{{$datos->id}}">
        

   {{Form::submit('Actualizar', array("class" => "btn  btn-primary"))}}
   {{ Form::close() }}
   </div><!--cierra col-->
</div><!--cierra container-->
@stop

