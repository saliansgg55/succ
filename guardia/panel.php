<?php
session_start();
/*if(!$_SESSION){

  header('Location: panel.php');        
}else{
  header('Location: panel-accion.php');  
}
*/

$anio = date("Y");


?>
<!DOCTYPE html> 
<html  lang="es"> <!-- Idioma Español -->

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Para dispositivo moviles -->
	<title>Hackaton</title>
	<!-- Bootstrap css -->
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" >




    <!-- CSS Libreria Alertify -->
  <link type="text/css"  rel="stylesheet" href="themes/alertify.bootstrap.css" />
  <link type="text/css"  rel="stylesheet" href="themes/alertify.core.css" />
  <link type="text/css"  rel="stylesheet" href="themes/alertify.default.css" />
  <link rel="stylesheet" href="alertify-bootstrap-3/alertify.bootstrap3.css" />

<!--  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" type="text/css" href="css/acceso.css">  -->

  <script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> 
  <script type='text/javascript' src="js/contacto_mail.js"></script>

  <!-- Libreria Jquery de Alertify -->
  <script type="text/javascript" src="themes/alertify.js"></script>
  <script type="text/javascript" src="themes/alertify.min.js"></script>
  <script type="text/javascript" src="js/funciones.js"></script><!-- Funciones Personalizadas -->

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link rel="shortcut icon" href="img/favicon.ico">
</head>



<body>



<?php // Menu Principal
  include('menu_principal.php');
?>


<div class="container">
  
  <!-- Trigger the modal with a button -->
  <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
      <div class="panel panel-primary">
          <div class="panel-heading "><span class="glyphicon glyphicon-user"></span> Acceso a Usuarios </div>
         
          <div class="panel-body">

      <div class="row ">
        <div class="col-xs-6 col-md-6">
              <form role="form" id="login"> <!-- FORMULARIO DE LOGUIN -->
                <div class="form-group">
                  <label for="user">Usuario</label>
                  <input type="text" class="form-control" id="user" name="user" placeholder="Nombre de usuarios">
                </div>

                <div class="form-group">
                  <label for="pwd">Clave</label>
                  <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Contraseña">
                </div>

                  <!--<button type="button" class="btn btn-primary" data-toggle="popover" data-trigger="Acceso Móvil" data-content="Tienes que tener Clave Home Banking" id="submit"  >
                    Entrar</button>-->

                 <a href="#" id="submit" data-loading-text="Verificando..." autocomplrete="off" class="btn btn-primary" data-toggle="popover" data-trigger="hover" data-content="Debes tener CLAVE Homebanking">Ingresar</a>          
                 <a href="#" id="caca" class="txt-azul"><small>  Registrate </small></a>
            </form> <!-- FORMULARIO DE LOGUIN -->
              
        </div>

        <div class="col-xs-6 col-md-6 ">
          <img src="https://pixabay.com/static/uploads/photo/2015/06/17/08/23/silhouette-812127_960_720.jpg" class="img-thumbnail pull-right" alt="Cinque Terre" width="160" height="130">

        </div>
      </div>

<br>
            <div class="row">
              <div class="col-xs-12">
                <div class="alert alert-danger" id="sugerencia">
                  <strong>Sugerencia!</strong> 
                </div>
              </div>
            </div>
          </div>
      </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>








  <!-- Archivo JQuery -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  <script src="js/jquery-1.12.3.min.js"></script>
  <!-- Archivo Java Script -->
  <script src="js/bootstrap.js"></script>
  <script src="/twitter-bootstrap/twitter-bootstrap-v2/js/bootstrap-modal.js"></script>  

  <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->




</body>

</html>

