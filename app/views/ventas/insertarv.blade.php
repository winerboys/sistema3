@extends('template')
@section('sectionCuerpo')
<div class="container">

    <div class=" alert alert-info">
    <center><label>VENTA PARA: {{$datos->nombre}} {{$datos->apellido}}</label></center>
    </div>
     
 {{Form::open(array('url' => 'pventa', 'method' => 'post'))}}
   <div class="row">
   <div class="col-xs-12 col-sm-6">
    <div class="form-group">
    <input type="text" class="form-control" id="nombre" placeholder="Ingrese Ubigeo" name="ubigeo" value="{{$ubigeo or ''}}">
    </div>{{$errors->first("ubigeo")}}

    <div class="form-group">
    <input type="text" class="form-control" id="apellido" placeholder="Ingrese Experto" name="experto" value="{{$experto or ''}}">
    </div>{{$errors->first("experto")}}

    <div class="form-group">
    <label>Fecha de Venta</label>
    <input type="date"class="form-control" id="fech_nac" placeholder="Ingrese Fecha cd Venta" name="fecha_vent"value="{{$fecha_vent or ''}}">
    </div>

    <div class="form-group">
    <label >Dirección</label>
    <input type="text" class="form-control" id="direccion" placeholder="Ingrese Dirección" name="direccion" value="{{$direccion or ''}}">
    </div>{{$errors->first("direccion")}}

    <div class="form-group">
    <input type="text" class="form-control" id="departamento" placeholder="Ingrese Departamento" name="departamento" value="{{$departamento or ''}}">
    </div>{{$errors->first("departamento")}}

    <div class="form-group">
    <input type="text" class="form-control" id="provincia" placeholder="Ingrese Provincia" name="provincia" value="{{$provincia or ''}}">
    </div>{{$errors->first("provincia")}}

    <div class="form-group">
    <input type="text" class="form-control" id="distrito" placeholder="Ingrese Distrito" name="distrito" value="{{$distrito or ''}}">
    </div>{{$errors->first("distrito")}}
    </div><!--col-->
     <div class="col-xs-12 col-sm-6">
    
    <div class="form-group">
    <textarea type="text" class="form-control"  rows="5" id="observaciones" placeholder="Ingrese Observaciones" name="observaciones" value="{{$observaciones or ''}}"> </textarea>
    </div>{{$errors->first("observaciones")}}
  
    <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">
    
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


    @if(isset($dato))
                
                <input type="hidden"  name="cliente_id" value="{{$cliente_id}}">
        @else     
                <input type="hidden"  name="cliente_id" value="{{$datos->id}}">
     @endif
    

   {{Form::submit('Guardar', array("class" => "btn  btn-primary"))}}
   {{ Form::close() }}
   </div><!--cierra col-->
</div><!--cierra container-->
@stop

