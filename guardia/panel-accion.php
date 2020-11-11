<?php

session_start();
if(!$_SESSION){
  /* '<script language = javascript>
          alert("No ha iniciado Sesion");
          window.location = ("panel.php"); 
        </script>'
        */
header('Location: index.php');        
}

$idmember = $_SESSION["idmember"];
 $anio= date("Y");

 include("funcionesphp/funciones.php")

?>



<!DOCTYPE html> 
<html  lang="es"> <!-- Idioma Español -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Para dispositivo moviles -->
  <title>Galicia</title>
  <!-- Bootstrap css -->
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" >

  <!-- Para DATATABLES  CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" >


 <!-- <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.11/css/dataTables.bootstrap.min.css"> -->


    <!-- CSS Libreria Alertify -->
  <link type="text/css"  rel="stylesheet" href="themes/alertify.bootstrap.css" />
  <link type="text/css"  rel="stylesheet" href="themes/alertify.core.css" />
  <link type="text/css"  rel="stylesheet" href="themes/alertify.default.css" />
  <link rel="stylesheet" href="alertify-bootstrap-3/alertify.bootstrap3.css" />

  <link rel="stylesheet" href="media/css/jquery.dataTables.css" /><!-- CSS datatables -->






<!--  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="css/acceso.css">  -->
  <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
  <!--<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> -->
  <script type='text/javascript' src="js/contacto_mail.js"></script>

  <script type='text/javascript' src="media/js/jquery.js"></script> 
  <!-- Libreria Jquery de Alertify -->
  <script type="text/javascript" src="themes/alertify.js"></script>
  <script type="text/javascript" src="themes/alertify.min.js"></script>
  <script type='text/javascript' src="media/js/jquery.dataTables.js"></script> <!--  jquery datatable-->
  <script type="text/javascript" src="js/operaciones.js"></script>

    <!-- BOOTSTRAP TOUR CSS-->
  <link href="http://iamsaravieira.com/bootstrap-tour-standalone.css" rel="stylesheet"> 
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
<link rel="shortcut icon" href="img/favicon.ico">

  <script type="text/javascript">
  
  $(document).ready(function() {

   $('#example').DataTable();
   $('#mov').DataTable();
   $("#agda").DataTable();
   $("#mov_cel").DataTable();
   $("#tc_cel").DataTable();
   $("#agda_cel").DataTable();




  });

  </script>



</head>

<style>
#menu-sec{background-color: black;}
.panel-primary > .panel-heading { 
background: rgba(243,226,199,1);
background: -moz-linear-gradient(left, rgba(243,226,199,1) 0%, rgba(193,158,103,1) 50%, rgba(182,141,76,1) 51%, rgba(233,212,179,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(243,226,199,1)), color-stop(50%, rgba(193,158,103,1)), color-stop(51%, rgba(182,141,76,1)), color-stop(100%, rgba(233,212,179,1)));
background: -webkit-linear-gradient(left, rgba(243,226,199,1) 0%, rgba(193,158,103,1) 50%, rgba(182,141,76,1) 51%, rgba(233,212,179,1) 100%);
background: -o-linear-gradient(left, rgba(243,226,199,1) 0%, rgba(193,158,103,1) 50%, rgba(182,141,76,1) 51%, rgba(233,212,179,1) 100%);
background: -ms-linear-gradient(left, rgba(243,226,199,1) 0%, rgba(193,158,103,1) 50%, rgba(182,141,76,1) 51%, rgba(233,212,179,1) 100%);
background: linear-gradient(to right, rgba(243,226,199,1) 0%, rgba(193,158,103,1) 50%, rgba(182,141,76,1) 51%, rgba(233,212,179,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f3e2c7', endColorstr='#e9d4b3', GradientType=1 );
 }

.panel-body > .fondo-formu{ background-color: black; }
.fondo-formu{ background-color: white; }
.tour{background-color: orange; color: white; border: 1px solid black;}
.fondo{background-color: white; }
.fondo-img{ background-color: #F60; border: #000000 solid 2px;}
.amiga{background-color: orange; color: white; border: solid 2px white; font-style: bold;}
.borde{ border: #000000 solid 2px;}
.modal-header {
background: $blue;
}

.modal-header-success {
    color:#fff;
    padding:9px 15px;
    border-bottom:1px solid #eee;
    background-color: #5cb85c;
    -webkit-border-top-left-radius: 5px;
    -webkit-border-top-right-radius: 5px;
    -moz-border-radius-topleft: 5px;
    -moz-border-radius-topright: 5px;
     border-top-left-radius: 5px;
     border-top-right-radius: 5px;
}
</style>

<style type="text/css">

</style>


<body>




    <!-- Modal  Agregar Clientes-->
    <div class="modal fade" id="modalagrega" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-success">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1><i class="glyphicon glyphicon-user"></i> Tomar Pedido</h1>
                </div>
                <div class="modal-body">
                          <h4 class="well"><strong>Alta de pedido</strong></h2><br>
          <form class="form-horizontal" role="form">

            <div class="form-group">
            <label for="inputEmail" class="control-label col-sm-2">Nombre</label>
            <div class="col-sm-10">
              <input type="text" name="nombretc" id="nombretc" class="form-control"  placeholder="Nombre ">
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Telefono</label>
            <div class="col-sm-10">          
              <input type="text" name="ntc" id="ntc" class="form-control" placeholder="Telefono">
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Color</label>
            <div class="col-sm-10">          
              <input type="text" name="sdeudor" id="sdeudor" class="form-control" placeholder="Color">
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Estado</label>
            <div class="col-sm-10">          
              <input type="text" name="sacreedor" id="sacreedor" class="form-control" placeholder="Estado">
            </div>
            </div>

           <div class="form-group">
           <label class="control-label col-sm-2" for="pwd">Vencimiento</label>
           <div class="col-sm-10">          
              <input type="text" name="svenc" id="svenc" class="form-control" placeholder="Vencimiento">
            </div>
            </div>

            <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <!-- <button type="submit" class="btn btn-primary">Editar</button>-->
            </div>
            </div>
          </form>
                </div>
                <div class="modal-footer">
                  <div class="row">
                    <div class="col-lg-6">
                    <button type="button" class="btn btn-default btn-block pull-left" data-dismiss="modal">Cerrar</button>
                    </div>

                    <div class="col-lg-6">
                    <button type="button" class="btn btn-success btn-block pull-left" data-dismiss="modal">Guardar</button>
                    </div>
                  </div>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->
    
    <!-- Modal -->
    <div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-success">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1><i class="glyphicon glyphicon-thumbs-up"></i> Mobiliario Fae</h1>
                </div>
                <div class="modal-body">
                 <table class="table">
                    <thead>
                      <tr>
                        <th>Cliente</th>
                        <th>Pedido</th>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Juan Perez</td>
                        <td>Bajo mesada</td>
                        <td>En Proceso</td>
                      </tr>
                      <tr>
                        <td>Claudio Barrios</td>
                        <td>Mueble de TV</td>
                        <td>Terminado</td>
                      </tr>
                      <tr>
                        <td>July S.A</td>
                        <td>Estante</td>
                        <td>Pendiente</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->














<form id="tc">
  <input type="hidden" name="idmember" value="<?php echo $idmember ?>">
  <input type="hidden" name="option" value="7">
</form>

  <!--Segundo contenedor menu secundario MENU-->
<div class="container-fluid">
    <!--<div class="row" id="menu-sec">-->
        <!--Menu secundario es visible en sm lg-->
              <nav class="navbar navbar-default texto  hidden-xs">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="#"> <img src="https://upload.wikimedia.org/wikipedia/commons/c/cc/Banco_galicia_logo.png" class="img-responsive" width="100" heigth="100"></a>
                  </div>
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Inicio</a></li>

                   <!-- menu desplegable -->
                   <!--
                    <li class="dropdown"> 
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1
                      <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Page 1-1</a></li>
                        <li><a href="#">Page 1-2</a></li>
                        <li><a href="#">Page 1-3</a></li> 
                      </ul>

                    </li>-->
                    <!-- menu desplegable -->

      <li class="dropdown texto"> <!-- menu desplegable -->
            <a class="dropdown-toggle " data-toggle="dropdown" href="#"><!--<span class="glyphicon glyphicon-cog"></span>--> Cuentas
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
          <li><a href="#" id="ver_ctas"><!--<span class="glyphicon glyphicon-cog"></span>--> Cuentas</a></li>
          <li><a href="#" id="ver_ag"><!--<span class="glyphicon glyphicon-cog"></span>--> Agenda</a></li>
          <li><a href="#" id="u_mov"><!--<span class="glyphicon glyphicon-cog"></span>--> Ultimos Movimientos</a></li> 
        </ul>

       </li><!-- menu desplegable -->

       <li class="dropdown"> <!-- menu desplegable -->
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><!--<span class="glyphicon glyphicon-cog"></span>--> Agenda
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
          <li><a href="#" id="ver_tc" ><!--<span class="glyphicon glyphicon-cog"></span>--> Clientes</a></li>

      </ul>
      <!--  data-accion="<?PHP $idmember ?>" -->
       </li><!-- menu desplegable -->

  


       <li class="dropdown"> <!-- menu desplegable -->
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><!--<span class="glyphicon glyphicon-cog"></span>--> Pagos y Recargas
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
          <li><a href="#" id="pg_servicios"><!--<span class="glyphicon glyphicon-cog"></span>--> Pago de Servicios</a></li>
          <li><a href="#" id="pg_servicios_s"><!--<span class="glyphicon glyphicon-cog"></span>--> Pago de Servicios (Simulacion)</a></li>
          <li><a href="#" id="pago_celular"><!--<span class="glyphicon glyphicon-cog"></span>--> Recarga de Celulares</a></li>
          <li><a href="#" id="pago_tarjetas"><!--<span class="glyphicon glyphicon-cog"></span>--> Pago de tarjetas</a></li> 
      </ul>

       </li><!-- menu desplegable -->            

       <li class="dropdown"> <!-- menu desplegable -->
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><!--<span class="glyphicon glyphicon-cog"></span>--> Transferencias
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
          <li><a href="#" id="tr_saldo"><!--<span class="glyphicon glyphicon-cog"></span>--> Transferencia de Saldo</a></li>
          <li><a href="#" id="tr_simulacion"><!--<span class="glyphicon glyphicon-cog"></span>--> Transferencia Simulacion</a></li> 
          <li><a href="#" id="agsaldo"><!--<span class="glyphicon glyphicon-cog"></span>--> Agregar Saldo</a></li> 
      </ul>



                       <li class="dropdown"> <!-- menu desplegable -->
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"></span> Ajustes
                          <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                        <!--<li><a href="#" data-toggle="collapse" id="perfil"><span class="glyphicon glyphicon-user"></span> Perfil Bancario</a></li>                      
                        <li><a href="#"><span class="glyphicon glyphicon-pregunta-signo"></span> Ayuda</a></li>-->
                        <li><a href="cerrar_sesion.php"><span class="glyphicon glyphicon-share-alt"></span> Cerrar Sesion</a></li> 
                      </ul>

                    </li><!-- menu desplegable -->

                  </ul>                  

                </div>
              </nav>
            


            <!--  COMIENZA MENU PARA CELULARES -->

         <!--Menu compacto es visible en xs  MOVILES-->   
        <div class="col-xs-12 visible-xs" >
      
      <nav class="navbar navbar-default " role="navigation" >
     <div class="container-fluid">
  
      <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
      <a class="navbar-brand" href="#"> <img src="https://upload.wikimedia.org/wikipedia/commons/c/cc/Banco_galicia_logo.png" class="img-responsive" width="100" heigth="100"><small><p class="">Hackaton</p> </small></a>          
      <!-- <a class="navbar-brand" href="#"><img src="img/zorro_solo.png" width="70px" heigth="70px" id="zorro"><small><p class="">Hackaton</p> </small></a> -->
      </div>
      <br>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav ">

       <li class="dropdown texto "> <!-- menu desplegable -->
            <a class="dropdown-toggle " data-toggle="dropdown" href="#"><!--<span class="glyphicon glyphicon-cog"></span>--> Cuentas
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
          <li><a href="#" id="ver_ctas_cel"><!--<span class="glyphicon glyphicon-cog"></span>--> Cuentas</a></li>
          <li><a href="#" id="ver_ag_cel"><!--<span class="glyphicon glyphicon-cog"></span>--> Agenda</a></li>
          <li><a href="#" id="u_mov_cel"><!--<span class="glyphicon glyphicon-cog"></span>--> Ultimos Movimientos</a></li>  
        </ul>

       </li><!-- menu desplegable -->

       <li class="dropdown "> <!-- menu desplegable -->
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><!--<span class="glyphicon glyphicon-cog"></span>--> Tarjetas
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
          <li><a href="#" id="ver_tc_cel" ><!--<span class="glyphicon glyphicon-cog"></span>--> Ver Tarjetas</a></li>
      </ul>
      <!--  data-accion="<?PHP $idmember ?>" -->
       </li><!-- menu desplegable -->


       <li class="dropdown"> <!-- menu desplegable -->
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><!--<span class="glyphicon glyphicon-cog"></span>--> Pagos y Recargas
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
          <li><a href="#" id="pg_servicios_c"><!--<span class="glyphicon glyphicon-cog"></span>--> Pago de Servicios</a></li>
          <li><a href="#" id="pg_servicios_s_c"><!--<span class="glyphicon glyphicon-cog"></span>--> Pago de Servicios (Simulacion)</a></li>
          <li><a href="#" id="pago_celular_c"><!--<span class="glyphicon glyphicon-cog"></span>--> Recarga de Celulares</a></li>
          <li><a href="#" id="pago_tarjetas_c"><!--<span class="glyphicon glyphicon-cog"></span>--> Pago de tarjetas</a></li> 
      </ul>

       </li><!-- menu desplegable -->            

       <li class="dropdown"> <!-- menu desplegable -->
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><!--<span class="glyphicon glyphicon-cog"></span>--> Transferencias
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
          <li><a href="#" id="tr_saldo_c"><!--<span class="glyphicon glyphicon-cog"></span>--> Transferencia de Saldo</a></li>
          <li><a href="#" id="tr_simulacion_c"><!--<span class="glyphicon glyphicon-cog"></span>--> Transferencia Simulacion</a></li> 
          <li><a href="#" id="agsaldo_c"><!--<span class="glyphicon glyphicon-cog"></span>--> Agregar Saldo</a></li>

      </ul>

       </li><!-- menu desplegable -->             

      
        

       <li class="dropdown"> <!-- menu desplegable -->
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><!--<span class="glyphicon glyphicon-cog"></span>--> Ajustes
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
        <li><a href="#"><!--<span class="glyphicon glyphicon-cog"></span>--> Perfil</a></li>
        <li><a href="#"><!--<span class="glyphicon glyphicon-cog"></span>--> Ayuda</a></li>
        <li><a href="cerrar_sesion.php"><!--<span class="glyphicon glyphicon-cog"></span>--> Cerrar Sesion</a></li> 
      </ul>

     </li><!-- menu desplegable -->

      </ul>
      
      
      </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
  </nav>
  <br /><p></p>
    </div>
</div>
<!--Fin del segundo contenedor-->   





        <!-- <div id="demo" class="collapse"> -->

<!-- Ver Datos de la cuenta -->

<div class="container-fluid hidden" id="datoscuenta">
  <div class="row">
    <div class="col-md-4 col-xs-12 col-lg-6 col-sm-4">
      <?php  $idmember = $_SESSION["idmember"]; 
      echo  usuario($idmember); ?>
    </div>



    <div class="col-md-4 col-xs-12 col-lg-6 col-sm-4">
      <?php  echo cuenta($idmember);   ?>
    </div>
</div> <!-- Termina Ver Datos de la cuenta -->

</div>

    <div class="col-md-4 col-xs-12 col-lg-6 col-sm-4 hidden">
                    <!-- COMIENZA PANEL -->
                    <div class="panel panel-primary">
                    <div class="panel-heading"><strong> DATOS DE LA CUENTA </strong> <button type="button" id="c_ct_cel" class="close" >&times;</button></div>
                    <div class="panel-body">
                            
                            <div class="row">
                              <div class="col-xs-12">

                              </div>
                            </div>
                    </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
    </div>



  

<div id="trans" class="container-fluid hidden"> <!--  Transferencia de saldo EFECTIVA -->
    <div class="row" >
        <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 col-lg-offset-3">
            <?php echo transferencia($idmember); ?>
        </div>
    </div>

</div> <!--  Cierra DIV trans-->


<div id="trans_s" class="container-fluid hidden"> <!-- Transferencia SIMULACION -->
    <div class="row" >
        <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 col-lg-offset-3">
            <?php echo transferencia_simula($idmember); ?>
        </div>
    </div>

</div> <!--  Cierra DIV trans_s-->

<!--  Pagos -->
<div id="pagos" class="hidden">
    <div class="row" >
        <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 col-lg-offset-3">
            <?php echo pagos($idmember); ?>
        </div>
    </div>

</div> <!--  Cierra DIV pagos-->

<!--  Pagos Simulacion -->
<div id="pagos_s" class="container-fluid hidden">
    <div class="row" >
        <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 col-lg-offset-3">
            <?php echo pagos_simulacion($idmember); ?>
        </div>
    </div>

</div> <!--  Cierra DIV pagos_s-->


<!--  Agregar Saldo -->
<div id="agrsaldo" class="container-fluid hidden">
    <div class="row" >
        <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 col-lg-offset-3">
            <?php echo agregaSaldo($idmember); ?>
        </div>
    </div>

</div> <!--  Cierra DIV agrsaldo-->


<!--  tarjeta -->
<!--
<div id="tc">
    <div class="row" >
        <div class="col-md-4 col-xs-12 col-lg-6 col-sm-4 hidden-lg">
            <?php //echo tarjeta($idmember); ?>
        </div>
    </div>

</div>
-->


 <div id="res" class="container-fluid hidden"></div>
<!--  PAGO DE TARJETA -->
<div id="pg_tarjeta" class="hidden">
    <div class="row" >
        <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 col-lg-offset-3" id="tarjeta_ver">
                <?php echo pagos_tarjeta($idmember); ?>
        </div>
    </div>

</div> <!--  Cierra DIV pg_tarjeta-->


<!--  PAGO DE CELULAR -->
<div id="pg_celular" class="container-fluid hidden">
    <div class="row" >
        <div class="col-md-6 col-xs-12 col-lg-6 col-sm-6 col-lg-offset-3" id="tarjeta_ver">
                <?php echo pagos_celular($idmember); ?>
        </div>
    </div>

</div> <!--  Cierra DIV pg_celular-->

<!--</div>-->



<!--  COMIENZAN ULTIMOS MOVIMIENTOS -->

<!--  GRILLA TARJETAS DE CRDITO -->
<div id="tarjeta" class="container-fluid hidden">
    <div class="row" >
        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 hidden-xs" id="tarjeta_ver">

                        <!-- COMIENZA PANEL -->
                        <div class="panel panel-primary">
                        <div class="panel-heading"><strong> AGENDA</strong> 
                          <button type="button" id="c_tc" class="close" >&times;</button></div>
                        <div class="panel-body">
          



                <div class="row">
                <div class="col-xs-12 col-lg-12 col-sm-12 col-md-6">
                  <div class="btn-group ">
                    <!--<a class="btn btn-success" href="#success" data-toggle="modal"><h4><i class="glyphicon glyphicon-eye-open"></i> Success</h4></a>-->
                    <a href="#" class="btn btn-primary">Reportes</a>
                    <a href="#" class="btn btn-primary">Estadisticas</a>
                    <a href="#" class="btn btn-primary" id="agregar" data-toggle="modal" data-target="#modalagrega">Agregar Cliente</a>
                  </div>
                </div>                    
                </div>
                <br>



                <table id="example" class="table table-striped table-bordered table-hover table-condensed " cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Nº Tarjeta</th>
                        <th>Saldo deudor</th>
                        <th>Saldo acreedor</th>
                        <th>vencimiento</th>                        
                        <th>ED</th>
                        <th>EL</th>
                        <th>VER</th>
                    </tr>
                </thead>
              <!--  <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Nº Tarjeta</th>
                        <th>Saldo deudor</th>
                        <th>Saldo acreedor</th>
                        <th>vencimiento</th>
                    </tr>
                </tfoot>-->
                <tbody>
                  <?php
                  $punto = $mysqli->query("SELECT * FROM tarjeta  WHERE idmember = '".$idmember."' ");

                    while($row = $punto -> fetch_array(MYSQLI_ASSOC))
                        {
                          //$puntos = $row['balancedepuntos'];                  
                        
                  echo "<tr>";
                      
                      echo "<td>".$row['nombretarjeta']."</td>";
                      echo "<td>".$row['numerotarjeta']."</td>";
                      echo "<td>".$row['saldodeudor']."</td>";
                      echo "<td>".$row['saldoacreedor']."</td>";
                      echo "<td>".$row['vencimiento']."</td>";      

                      echo "<td class='centerTXT' style='text-align:center'><a data-accion='editar'  class='' id='agregarUsers' href=".$row['idmember']." data-toggle='modal' data-target='#smallModal' ><span class='glyphicon glyphicon-pencil' style='color:black;'></span></a> </td> ";               
                      echo "<td class='centerTXT' style='text-align:center'><a data-accion='elimina'  class='' id='eliminar' href=".$row['idmember']." data-toggle='modal' ><span class='glyphicon glyphicon-trash' style='color:black;'></span></a> </td> ";               
                      echo "<td class='centerTXT' style='text-align:center'><a data-accion='ver'  class='' id='' href='#success' data-toggle='modal'  ><span class='glyphicon glyphicon-eye-open' style='color:black;'></span></a> </td> ";               
                      echo "<td class='centerTXT' style='text-align:center'><a data-accion='ver'  class='' id='ver' href=".$row['idmember']." data-toggle='modal'  ><span class='glyphicon glyphicon-eye-user' style='color:black;'></span></a> </td> ";               
                      
                    echo "</tr>";

                     } ?>
                   </table>

                        </div> <!-- Cierra Panel-Body -->
                        </div> <!-- Cierra panel panel-primary -->                   
        </div>
    </div>

</div>
<!--  GRILLA TARJETAS DE CRDITO -->


<!--cacabella-->

    <!--  <a href="#" class="btn btn-lg btn-danger" data-toggle="modal" data-target="#smallModal">Click to open Modal</a> -->


<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="smallModal" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header modal-header-success">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Editar Datos</h4>
      </div>
      <div class="modal-body">
        <!--<h3>Modal Body</h3>-->

        <!--   COMIENZA FORMULARIO  -->



          <h2>Otro titulo</h2>
          <form class="form-horizontal" role="form">

            <div class="form-group">
            <label for="inputEmail" class="control-label col-sm-2">Nombre Tarjeta</label>
            <div class="col-sm-10">
              <input type="text" name="nombretc" id="nombretc" class="form-control"  placeholder="Nombre de tarjeta">
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Nº Tarjeta</label>
            <div class="col-sm-10">          
              <input type="text" name="ntc" id="ntc" class="form-control" placeholder="Nº de Tarjeta">
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Saldo Deudor</label>
            <div class="col-sm-10">          
              <input type="text" name="sdeudor" id="sdeudor" class="form-control" placeholder="Saldo Deudor">
            </div>
            </div>

            <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Saldo Acreedor</label>
            <div class="col-sm-10">          
              <input type="text" name="sacreedor" id="sacreedor" class="form-control" placeholder="Saldo Acreedor">
            </div>
            </div>

           <div class="form-group">
           <label class="control-label col-sm-2" for="pwd">Vencimiento</label>
           <div class="col-sm-10">          
              <input type="text" name="svenc" id="svenc" class="form-control" placeholder="Vencimiento">
            </div>
            </div>

            <div class="form-group">        
            <div class="col-sm-offset-2 col-sm-10">
              <!-- <button type="submit" class="btn btn-primary">Editar</button>-->
            </div>
            </div>
          </form>



        <!--   CIERRA FORMULARIO  -->


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Editar</button>
      </div>
    </div>
  </div>
</div>








<!--  GRILLA TARJETAS DE CRDITO TARJETA VISTA CELULAR-->
<div id="tarjeta_cel" class="container-fluid hidden">
    <div class="row" >
        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 hidden-sm hidden-md hidden-lg" id="tarjeta_ver">

            <button type="button" id="c_tc_cel" class="close" >&times; Cerrar</button>
          

                <table id="tc_cel" class="table table-striped table-bordered table-hover table-condensed table-responsive" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Nº Tarjeta</th>
                        <th>Saldo deudor</th>
                        <th>Saldo acreedor</th>
                        <th>vencimiento</th>
                    </tr>
                </thead>
              <!--  <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Nº Tarjeta</th>
                        <th>Saldo deudor</th>
                        <th>Saldo acreedor</th>
                        <th>vencimiento</th>
                    </tr>
                </tfoot>-->
                <tbody>
                  <?php
                  $punto = $mysqli->query("SELECT * FROM tarjeta  WHERE idmember = '".$idmember."' ");

                    while($row = $punto -> fetch_array(MYSQLI_ASSOC))
                        {
                          //$puntos = $row['balancedepuntos'];                  
                        
                  echo "<tr>";
                      
                      echo "<td>".$row['nombretarjeta']."</td>";
                      echo "<td>".$row['numerotarjeta']."</td>";
                      echo "<td>".$row['saldodeudor']."</td>";
                      echo "<td>".$row['saldoacreedor']."</td>";
                      echo "<td>".$row['vencimiento']."</td>";                      
                    echo "</tr>";

                     } ?>
                   </tbody>
                   </table>

                 
        </div>
    </div>

</div>
<!--  GRILLA TARJETAS DE CRDITO TARJETA VISTA CELULAR-->



<!-- GRILLA ULTIMOS MOVIMIENTOS -->
<div id="umv" class="hidden">

      <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 hidden-xs " >
                    <div class="panel panel-primary">
                    <div class="panel-heading"><strong> ULTIMOS MOVIMIENTOS </strong> <button type="button" id="c_mv" class="close" >&times;</button> </div>
                    <div class="panel-body">
                            


                <table id="mov" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Descripcion</th>
                        <th>Monto</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Transaccion</th>
                        <th>Puntos</th>
                        
                    </tr>
                </thead>
              <!--  <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Nº Tarjeta</th>
                        <th>Saldo deudor</th>
                        <th>Saldo acreedor</th>
                        <th>vencimiento</th>
                    </tr>
                </tfoot>-->
                <tbody>
                  <?php
                  
 
                  $caca = $mysqli->query("SELECT * FROM account a, account_tx at where a.idaccount_tx = at.idaccount_tx and a.idmember= '".$idmember."' ");
                  
                    while($row = $caca -> fetch_array(MYSQLI_ASSOC))
                        {
                          //$puntos = $row['balancedepuntos'];                  
                        
                   echo "<tr>";
                      
                      echo "<td>".$row['description']."</td>";
                      echo "<td>".$row['monto']."</td>";
                      echo "<td>".$row['movuser']."</td>";
                      echo "<td>".$row['creationdate']."</td>"; 
                      echo "<td>".$row['idtransaction']."</td>"; 
                      echo "<td>".$row['puntos']."</td>";                                               

                    echo "</tr>";

                     } ?>
                   </table>

                                       </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
        </div>
</div> <!--  Cierra DIV U.MOVIMIENTOS -->
<!-- TERMINA GRILLA ULTIMOS MOVIMIENTOS -->




<!-- GRILLA ULTIMOS MOVIMIENTOS VISTA CELULAR -->
<div id="umv_cel" class="hidden">

      <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12  hidden-md hidden-sm hidden-lg" >
        <button type="button" id="c_mv_cel" class="close" >&times; Cerrar</button>
                            


                <table id="mov_cel" class="table table-striped table-bordered table-hover table-condensed table-responsive" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Descripcion</th>
                        <th>Monto</th>
                        <th>Usuario</th>
                        <th>Fecha</th>
                        <th>Transaccion</th>
                        <th>Puntos</th>
                        
                    </tr>
                </thead>
              <!--  <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Nº Tarjeta</th>
                        <th>Saldo deudor</th>
                        <th>Saldo acreedor</th>
                        <th>vencimiento</th>
                    </tr>
                </tfoot>-->
                <tbody>
                  <?php
                  
 
                  $caca = $mysqli->query("SELECT * FROM account a, account_tx at where a.idaccount_tx = at.idaccount_tx and a.idmember= '".$idmember."' ");
                  
                    while($row = $caca -> fetch_array(MYSQLI_ASSOC))
                        {
                          //$puntos = $row['balancedepuntos'];                  
                        
                   echo "<tr>";
                      
                      echo "<td>".$row['description']."</td>";
                      echo "<td>".$row['monto']."</td>";
                      echo "<td>".$row['movuser']."</td>";
                      echo "<td>".$row['creationdate']."</td>"; 
                      echo "<td>".$row['idtransaction']."</td>"; 
                      echo "<td>".$row['puntos']."</td>";                                               

                    echo "</tr>";

                     } ?>
                   </tbody>
                   </table>

       </div>
</div> <!--  Cierra DIV U.MOVIMIENTOS VISTA CELULAR -->
<!-- TERMINA GRILLA ULTIMOS MOVIMIENTOS  VISTA CELULAR-->




<!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

  <!-- Modal Ver Movimientos -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Detalle de Movimiento</h4>
        </div>
        <div class="modal-body">
          <p> Hola <div id="id_user"></div></p>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  <!-- Modal Ver Movimientos -->



<!-- GRILLA AGENDA -->
<div id="agenda" class="hidden">

      <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 hidden-xs " >
                    <div class="panel panel-primary">
                    <div class="panel-heading"><strong> AGENDA </strong> <button type="button" id="c_ag" class="close" >&times;</button> </div>
                    <div class="panel-body">
                            


                <table id="agda" class="table table-striped table-bordered table-hover table-condensed" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>CBU Destino</th>
                        <th>Descripcion</th>
                        <th>Correo</th>
                    </tr>
                </thead>
              <!--  <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Nº Tarjeta</th>
                        <th>Saldo deudor</th>
                        <th>Saldo acreedor</th>
                        <th>vencimiento</th>
                    </tr>
                </tfoot>-->
                <tbody>
                  <?php
                  
 
                  $caca = $mysqli->query("SELECT * FROM agenda where idmember= '".$idmember."' ");
                  //$caca = $mysqli->query("SELECT * FROM account_tx  WHERE idaccount_tx = '".$idmember."' order by 7 desc");

                    while($row = $caca -> fetch_array(MYSQLI_ASSOC))
                        {
                          //$puntos = $row['balancedepuntos'];                  
                        
                   echo "<tr>";
                      
                      echo "<td>".$row['cbudestino']."</td>";
                      echo "<td>".$row['descripcion']."</td>";
                      echo "<td>".$row['correo']."</td>";

                    echo "</tr>";

                     } ?>
                   </table>

                                       </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
        </div>
</div> <!--  Cierra DIV AGENDA -->
<!-- TERMINA GRILLA AGENDA -->


<!-- GRILLA AGENDA -->
<div id="agenda_cel" class="hidden ">

      <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 hidden-md hidden-sm hidden-lg " >
          <button type="button" id="c_ag_cel" class="close" >&times; Cerrar</button><br>
                            
            <div class="row hidden"> Texto Descriptivo</div>

                <table id="agda_cel" class="table table-striped table-bordered table-hover table-condensed table-responsive" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>CBU Destino</th>
                        <th>Descripcion</th>
                        <th>Correo</th>
                    </tr>
                </thead>
              <!--  <tfoot>
                    <tr>
                        <th>Nombre</th>
                        <th>Nº Tarjeta</th>
                        <th>Saldo deudor</th>
                        <th>Saldo acreedor</th>
                        <th>vencimiento</th>
                    </tr>
                </tfoot>-->
                <tbody>
                  <?php
                  
 
                  $caca = $mysqli->query("SELECT * FROM agenda where idmember= '".$idmember."' ");
                  //$caca = $mysqli->query("SELECT * FROM account_tx  WHERE idaccount_tx = '".$idmember."' order by 7 desc");

                    while($row = $caca -> fetch_array(MYSQLI_ASSOC))
                        {
                          //$puntos = $row['balancedepuntos'];                  
                        
                   echo "<tr>";
                      
                      echo "<td>".$row['cbudestino']."</td>";
                      echo "<td>".$row['descripcion']."</td>";
                      echo "<td>".$row['correo']."</td>";

                    echo "</tr>";

                     } ?>
                   </tbody>
                   </table>

        </div>
</div> <!--  Cierra DIV AGENDA -->
<!-- TERMINA GRILLA AGENDA -->






<script type="text/javascript">
$(document).ready(function() {
  $("[data-toggle='tooltip']").tooltip();
});  
</script>


  <!-- Archivo JQuery -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
        <!-- BOOTSTRAP TOUR JS -->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript"  src="http://iamsaravieira.com/bootstrap-tour-standalone.js"></script>
  <!-- Archivo Java Script -->
  <script src="js/bootstrap.js"></script>
  <script src="/twitter-bootstrap/twitter-bootstrap-v2/js/bootstrap-modal.js"></script>  

    <!-- Jquery para Datatables  Internet 
  <script type="text/javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/dataTables.bootstrap.min.js"></script>-->

  <!-- Jquery para DATATABLES LOCAL -->
  <script type="text/javascript" src="media/js/jquery.js"></script>
  <script type="text/javascript" src="media/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="media/js/dataTables.bootstrap.min.js"></script>


</body>
</html>