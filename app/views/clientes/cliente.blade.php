@extends('template')
@section('sectionCuerpo')
<div class="container">
<div class="row"> 
<div class="col-xs-12"></div>
    <div class=" alert alert-info">
      <center><label>Listado Clientes</label></center>
    </div>  
    <div class="btn-group">
  <a href="<?=URL::to('addclientes');?>" class="btn btn-success"><span class="glyphicon glyphicon-user"></span > Nuevo</a>
  <a href="<?=URL::to('nelvic');?>" class="btn btn-success" ><span class="glyphicon glyphicon-home"></span > Inicio</a>
 </div><!--cierra botones--> <br>
 <label for="Buscar">Buscar</label>
        <div class="contenidoTo form-group input-group">
        <span class="input-group-addon icono"><span class="glyphicon glyphicon-search"></span ></span>
        <input type="text" class="form-control" id="Buscar" name="Buscar" class="text"  onkeyup="buscarEnClass('buscarEnTablaCategoria', this.value)">
        </div>
         @if(Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible" role="alert">
                {{ Session::get('mensaje') }}
              </div><!cierra-->
       
               @endif


    <div class="table-responsive">
     <table class=" table table-condensed table-striped buscarEnTablaCategoria">
        <tr>
        <th><label>Nombres</label></th>
        <th><label>Apellidos</label></th>
        <th><label>Direccion</label></th>
        <th><label>Provincia</label></th>
        <th><label>Distrito</label></th>
        <th><label>DNI</label></th>
        <th><label>Nacimiento</label></th>
        <th><label>Celular</label></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        </tr> 
      
    @foreach($datos as $dato)
         
    <tr class="elementoBuscar">
    	  <td>{{$dato->nombre}}</td> 
    	  <td>{{$dato->apellido}} {{$dato->apellido2}}</td>
        <td>{{$dato->direccion}}</td>
        <td>{{$dato->provincia}}</td>
        <td>{{$dato->distrito}}</td>
        <td>{{$dato->dni}}</td>
        <td>{{$dato->fech_nac}}</td>
        <td>{{$dato->celular}}</td>

        <td>
        <div class="input-group">
         <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                <span class=" glyphicon glyphicon-shopping-cart"></span>
                <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu btn btn-success" role="menu">
                    <li><a href="inventa/{{$dato->id}}"><span class=" glyphicon glyphicon-earphone"></span> Internet</a></li>
                     <li><a href="#"><span class=" glyphicon glyphicon-hd-video"></span> DTH</a></li>
                </ul> </div> </td>
        <td><a title="Ver" class="btn btn-success btn-sm"href="show/{{$dato->id}}"><span class="glyphicon glyphicon-eye-open"></span></a></td>
        <td><a title="Editar" class="btn btn-primary btn-sm"href="editclientes/{{$dato->id}}"><span class="glyphicon glyphicon-edit"></span></a></td>
        <td><a title="Eliminar" class="btn btn-danger btn-sm"href="imprimir"><span class="glyphicon glyphicon-trash"></span></a></td>
   
    </tr>

    @endforeach
    
	   </table>    
    </div> <!--cierra tabla responsi-->
    </div><!--cierra row-->
    </div><!--cierracontainer-->
@stop