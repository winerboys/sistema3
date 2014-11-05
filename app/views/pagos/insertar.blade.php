@extends('template')
@section('sectionCuerpo')

<div class="table-responsive">
<div class=" alert alert-info">
    
    <center><label>Estado Pagos</label></center>

  </div>

<!--
<a href="<?=URL::to('addclientes');?>" class="btn btn-primary" >Nuevo Clientes</a>
  <br>

  {{$errors->first("user_id")}}
  {{$errors->first("cliente_id")}}
  {{$errors->first("producto_id")}}
  {{$errors->first("venta_id")}}
  
    {{Form::open(array('url' => 'pventa/add', 'method' => 'post'))}}
   
    <div class="form-group">
   <label >Numero de Pedido</label>
    <input type="text" class="form-control" id="" placeholder="Ingrese Pedido" name="pedido">
    </div>
    <div class="form-group">
   <label >Caja Asignada</label>
    <input type="text" class="form-control" id="" placeholder="Ingrese Pedido" name="caja">
    </div>

    <div class="form-group">
    <label >Telefono</label>
    <input type="text" class="form-control" id="apellido" placeholder="Ingrese Telefono" name="telefono">
    </div>

    <div class="form-group">
    <label >Orden</label>
    <input type="text" class="form-control" id="" placeholder="Ingrese Orden" name="orden">
    </div>  
      
    <div class="form-group">
    <label>Estado</label>
    <select class="form-control" name="estado" id="estado">
      <option value="ingresado">ingresado</option>
      <option value="liquidado">liquidado</option>
      <option value="anulado"> anulado </option>
      <option value="block "> block </option>
     </select>
    </div>

     
    <input type="hidden"  name="user_id" id="user_id"value="{{$datos->user_id}}">
    <input type="hidden" name="cliente_id"id=""value="{{$datos->cliente_id}}">
    <input type="hidden"  name="producto_id" id="user_id"value="{{$datos->producto_id}}">
    <input type="hidden" name="venta_id" id=""value="{{$datos->id}}">
    </div>
    </td>
    </tr>
    
   {{Form::submit('Guardar', array("class" => "btn  btn-primary"))}}
   {{ Form::close() }}


  
 @stop

