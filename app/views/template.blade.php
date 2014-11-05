<!doctype html>
<html>
<head>
   <meta charset="UTF-8">
  <title>Sistema Ugel el Collao</title>
  <link rel="stylesheet" href="/sistema3/public/css/bootstrap.css">
  <link rel="stylesheet" href="/sistema3/public/css/cssTemplate.css">
   {{ HTML::script('js/jquery.js') }}
  {{ HTML::script('js/bootstrap.min.js') }}
  {{ HTML::script('js/jsBuscar.js') }}
   </head>
 <body>
 <header class"container"> 
      <div class="contenedor row" >
        <div class="col-xs-4 col-sm-2"><img src="/sistema3/public/img/logo.png" height="100" width="180"></div>
        <div class="hidden-xs col-sm-7 ">
        <center><h1>GRUPO NELVIC COMUNICACIONES</h1></center>
        <center><h4>Empresa Colaboradora de Movistar</h4></center>
        </div>
        <div class="col-xs-8 col-sm-3">
        <b class="letra">Usuario: {{ Auth::user()->username}}</b>
      <br>
      <b class="letra">Fecha : {{date('d-m-Y')}}</b> <br>
     <a  class="letra sesion"  href="{{ URL::to('/logout') }}">Cerrar Sesión</a>
    </div>


        </div><!--cieerre row-->
</header>
   
  <section id="navbar">
  <div class="navbar navbar-default jose" role="navigation">
        <div class="container">

          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  href="<?=URL::to('/')?>">Panel de Control</a>
          </div>
         
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
            
              <li class="dropdown">
              
                <a href="" class="dropdown-toggle jose" data-toggle="dropdown">CLIENTES<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?=URL::to('addclientes');?>">NUEVO</a></li>
                  <li><a href="<?=URL::to('clientes');?>">CLIENTES</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">VENTAS<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?=URL::to('clientes');?>">NUEVO</a></li>
                    <li><a href="<?=URL::to('clientes');?>">VENTAS</a></li>
                </ul>
                </li>

                 <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">ESTADO<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="<?=URL::to('clientes');?>">NUEVO</a></li>
                    <li><a href="<?=URL::to('clientes');?>">VENTAS</a></li>
                </ul>
                </li>

              <li> <a href="<?=URL::to('administrador');?>">AMINISTRADOR</a></li>

              <li> @if(Session::get('msg'))
              {{ Session::get('msg') }}
              @endif</li>
           
           
            </ul><!--/.nav-navbar -->

       </div><!--/.nav-collapse -->
       </div>
   </div>
  </section>  
  <div class="section">
  <section>
  
                  @yield('sectionCuerpo') 
            
  </section>
  </div>
  <footer>
    <div class="">
     <h5> &copy;System J.L cel :951637107</h5>
    </div>
  </footer>
    </body>
</html>