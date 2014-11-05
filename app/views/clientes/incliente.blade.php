@extends('template')
@section('sectionCuerpo')  
 {{Form::open(array('url' => 'inclientes', 'method' => 'post'))}}
    <div class="container">
    <div class=" alert alert-info">
    <center><label>Ingrese Nuevo Cliente</label></center>
    </div>
      <div class="btn-group">
      <a href="<?=URL::to('clientes');?>" class="btn btn-success"><span class="glyphicon glyphicon-user"></span >Clientes</a>
      <a href="<?=URL::to('nelvic');?>" class="btn btn-success" ><span class="glyphicon glyphicon-home"></span > Inicio</a>
       </div><!--cierra btngroup-->
    <div class="row">
    <div class="col-xs-12 col-sm-6">

    <div class="form-group">
    <label for="exampleInputNombres-Apellidos">Nombres Y Apellidos</label>
    <input type="text" class="form-control" id="nombre" placeholder="Ingrese  Nombre" name="nombre" value="{{$nombre or ''}}">
     {{$errors->first("nombre")}}
    </div>

    <div class="form-group">
    <input type="text" class="form-control" id="apellido" placeholder="Ingrese Apellido Paterno" name="apellido" value="{{$apellido or ''}}">
     {{$errors->first("apellido")}}
    </div>

    <div class="form-group">
    <input type="text" class="form-control" id="apellido2" placeholder="Ingrese Apellido Materno " name="apellido2" value="{{$apellido2 or ''}}">
     {{$errors->first("apellido2")}}
    </div>

    <div class="form-group">
    <label for="exampleInputDirección">Dirección</label>
    <input type="text" class="form-control" id="direccion" placeholder="Ingrese Dirección" name="direccion" value="{{$direccion or ''}}">
     {{$errors->first("direccion")}}  

    </div>
     <div class="form-group">
   <input type="text" class="form-control" id="departamento" placeholder="Ingrese Departamento" name="departamento" value="{{$departamento or ''}}">
   {{$errors->first("departamento")}}
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="provincia" placeholder="Ingrese Provincia" name="provincia" value="{{$provincia or ''}}">
     {{$errors->first("provincia")}}
  </div>
<div class="form-group">
  <input type="text" class="form-control" id="distrito" placeholder="Ingrese Distrito" name="distrito" value="{{$distrito or ''}}">
     {{$errors->first("distrito")}}
  </div>

</div> <!--cierra col-->
<div class="col-xs-12 col-sm-6">
  

  <div class="form-group">
    <label for="exampleInputDNI">DNI</label>
    <input type="text" class="form-control" id="dni" placeholder="Ingrese DNI" name="dni" value="{{$dni or ''}}">
   {{$errors->first("dni")}}
  </div>
  <div class="form-group">
    <label>Fecha Nacimiento</label>
    <input type="date"class="form-control" id="fech_nac" placeholder="Ingrese Fecha Nacimiento" name="fech_nac"value="{{$fech_nac or ''}}">
  </div>
 <label>Numero de Celulares</label>
  <div class="form-group input-group">
  <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span ></span>
    <input type="tel" class="form-control" id="celular" placeholder="Ingrese celular" name="celular" value="{{$celular or ''}}">
   </div>
    <div class="form-group input-group">
    <span class="input-group-addon"><span class="glyphicon glyphicon-phone-alt"></span ></span>
    <input type="text" class="form-control" id="celular2" placeholder="Ingrese Celular 2" name="celular2" value="{{$celular2 or ''}}">
  </div>
   <label for="exampleInputEmail1">Correo Electronico</label>
  
   <div class="form-group input-group">   
    <span class="input-group-addon">@</span>
    <input type="text" class="form-control" id="dni" placeholder="Ingrese Correo Electronico" name="correo">
   <span class="color">{{$errors->first("correo")}}</span>
  </div>
  <div class="form.group">
  <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-floppy-disk"></span> GUARDAR</button>
  <br>
  </div>
  <a href=""></a>

  </div>
 

  </div>
   </div>
   </div>

   
   {{ Form::close() }}         
      

@stop