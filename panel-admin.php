<?php
include_once "accesso_bd.php";
//include("funciones.php");

session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
  header('Location: index.php');
   //echo "Esta pagina es solo para usuarios registrados.<br>";
   //echo "<br><a href='index.php'>Login</a>";
   //echo "<br><br><a href='index.php'>Registrarme</a>";

exit;
}

$now = time();

if($now > $_SESSION['expire']) {
session_destroy();

header('Location: index.php');
//echo "Su sesion a terminado,
//<a href='index.php'>Necesita Hacer Login</a>";
exit;
}

?>


<?php 
      // INCLUIMOS TODAS LAS VENTANAS MODALES QUE SE VAN A UTIL
      include('modal/modal-ver-asigna.php');
      include("modal/modal-asigna-edita.php");
      include("modal/modal-ver-doc.php");
      include("modal/modal-doc-sube-movil.php");
      include("modal/modal-doc-sube-fija.php");
      include("modal/modal-asigna.php");
      include("modal/modal-edita.php");
      include('modal/modal-agrega.php'); 
      include('modal/modal-ver-pm.php');
      include('modal/modal-cambio-pass.php');
      include('modal/modal-procesos.php');
      include('modal/modal-cobdiaria.php');
      include('modal/modal-cobmoro.php');
      include('modal/modal-cobfrec.php');
      include("modal/modal-cargahs.php");
      
?>



<!DOCTYPE html>
<html lang="en">
<head>

 <title>GO MOROSIDAD</title>


  <link rel="shortcut icon" href="image/favicon.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Boostrap css -->
  <link rel="stylesheet" type="text/css" href="css/index.css"> <!-- Hoja de estilo index.css -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- JQUERY -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Boostrap JS-->


  <script type='text/javascript' src="media/js/jquery.dataTables.js"></script> <!--  jquery datatable-->

  <link rel="stylesheet" type="text/css" href="css/panel-admin.css"> <!-- CSS panel Admin -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- Bootstrap Core CSS -->
  <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">    <!-- MetisMenu CSS -->
  <!--<link href="../dist/css/sb-admin-2.css" rel="stylesheet">-->    <!-- Custom CSS -->
  <link href="../vendor/morrisjs/morris.css" rel="stylesheet">    <!-- Morris Charts CSS -->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"><!-- Custom Fonts -->


  <link type="text/css"  rel="stylesheet" href="themes/alertify.core.css" />
  <link type="text/css"  rel="stylesheet" href="themes/alertify.default.css" />


  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" type="text/css" href="css/dialog-ui.css">

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script type="text/javascript" src="js/menu-admin.js"></script> <!-- Acciones Sobre el menu -->
  <script type="text/javascript" src="js/guarda-doc-fija.js"></script> <!-- Sube Doc fija -->
  <script type="text/javascript" src="js/guarda-doc-movil.js"></script> <!-- Sube Doc movil -->
  <script type="text/javascript" src="js/opciones.js"></script> <!-- diversas opciones -->
  <script type="text/javascript" src="js/guarda-asigna.js"></script> <!-- Guarda Asigna -->

  <link rel="stylesheet" href="alertify-bootstrap-3/alertify.bootstrap3.css" />
  <script type="text/javascript" src="themes/alertify.js"></script>
  <script type="text/javascript" src="themes/alertify.min.js"></script>


    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<script type="text/javascript">
/*$(document).ready(function(){
  $("#form_asignaciones")[0].reset();

  ////////////////////////////////////////
  // MUESTRA Y SUBE DOCUMENTO DE LA FIJA 
  ////////////////////////////////////////
  $("#moro_fijas").click(function(){
    $("#grillapm").empty();
    $("#grillapm").load('grilla_documentos_fija.php');
  }); 


      $("#guarda_doc_fija").click(function(){

        var parametros = new FormData($("form#form_sube_doc_fija")[0]);

        //var parametros = $("#enviarimagenes").serialize();
        //alert(parametros);
        $.ajax({
          data:parametros,
          url: "acciones.php",
          type: "POST",
          contentType: false,
          processData: false,
          //dataType: 'json', 
          beforesend: function(){
            //$("#mensaje").html("<img src='img/cargando.gif' />");

          },
          success: function(response){      

          $("#form_sube_doc_fija")[0].reset();
          $("#grillapm").empty();
          $("#grillapm").load('grilla_documentos_fija.php');
              

          }
        });

      }); // Cierra Click subir doc
  ////////////////////////////////////////       
  // MUESTRA Y SUBE DOCUMENTO DE LA FIJA 
  ////////////////////////////////////////
*/
});
</script>


<style type="text/css"> 
.menu-admin{
  background: white;
}


#utilidad:hover {
color: #207ce5; 
text-decoration: none; 
}

#utilidad:visited v{
color: #207ce5; 
text-decoration: none; 
}

#utilidad:link v{
color: #207ce5; 
text-decoration: none; 
}

#utilidad:active v{
color: #207ce5; 
text-decoration: none; 
}
</style>

</head>
<body>

<nav class="navbar navbar-inverse menu-admin">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#" style="color:#207ce5;"><b>GO Morosidad</b></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Inicio</a></li>

        <li><a href="#" id="utilidad" style="color:#207ce5; "><span class="glyphicon glyphicon-user" id="utilidad"></span><b> <?php echo $_SESSION['u'].' '.$_SESSION['nombre'].' '.$_SESSION['apellido'] ?></b></a></li>
        <!--<li><a href="http://10.245.106.169/guardia/admin.php"> Guardia Admin</a></li>-->
        

        <!--<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="utilidad"></span> Procesos
          <span class="caret"></span></a>
          <ul class="dropdown-menu pull-left">
            
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#myModalverpro" id="myBtnverpro" style="color:black;">COB_DIARIA</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#myModalvermoro" id="myBtnvermoro">COB_MOROREPORTES</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#myModalverfrec" id="myBtnverfrec">COB_FREC_HOR</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#myModalpro" id="myBtnpro">NUEVO PROCESO</a></li>-->
            <!--
            <li class="dropdown-header">Morosidad </li>
            <li class="divider"></li>
            <li><a href="#" class="pull-left">COB_DIARIA</a></li>
            <li><a href="#" class="pull-left">COB_MOROREPORTES</a></li>
            <li><a href="#" class="pull-left">COB_FREC_HOR</a></li>  
      
            <li class="divider"></li>
            <li class="dropdown-header">Nuevo proceso </li>
            <li><a href="#">AGREGAR PROCESO</a></li>    
          -->
      
          <!--</ul>
        </li>-->



        <!-- OPCIONES -->
        <li class="dropdown"> 
          <a class="dropdown-toggle " data-toggle="dropdown" href="#" id="utilidad"> Utilidad
          <span class="caret"></span></a>
          <ul class="dropdown-menu pull-left">
                
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#"  id="ver_asignaciones" > Grupo Asignaciones</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#"  id="ver_pm"> Lista de PM'S</a></li>

          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#myModalAsigna">Agregar Grupo Asignacion</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#myModal">Agregar Nuevo PM</a></li>
                <!--
                <li class="dropdown-header">Morosidad </li>
                <li class="divider"></li>
                <li><a href="#" class="pull-left">COB_DIARIA</a></li>
                <li><a href="#" class="pull-left">COB_MOROREPORTES</a></li>
                <li><a href="#" class="pull-left">COB_FREC_HOR</a></li>  
          
                <li class="divider"></li>
                <li class="dropdown-header">Nuevo proceso </li>
                <li><a href="#">AGREGAR PROCESO</a></li>    
              -->     
          </ul>
        </li> 
        <!-- OPCIONES -->


        <!-- DOCUMENTACION -->
        <li class="dropdown"> 
          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="utilidad"> Documentacion
          <span class="caret"></span></a>
          <ul class="dropdown-menu pull-left">
                
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#"  id="moro_movil" > Morosidad Movil</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#"  id="moro_fijas" > Morosidad Fija</a></li>

          <li role="presentation" class="divider"></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#myModalSubeMovil">Subir Doc Movil</a></li>
          <li role="presentation"><a role="menuitem" tabindex="-1" href="#" data-toggle="modal" data-target="#myModalSubeFija">Subir Doc Fija</a></li>
                <!--
                <li class="dropdown-header">Morosidad </li>
                <li class="divider"></li>
                <li><a href="#" class="pull-left">COB_DIARIA</a></li>
                <li><a href="#" class="pull-left">COB_MOROREPORTES</a></li>
                <li><a href="#" class="pull-left">COB_FREC_HOR</a></li>  
          
                <li class="divider"></li>
                <li class="dropdown-header">Nuevo proceso </li>
                <li><a href="#">AGREGAR PROCESO</a></li>    
              -->     
          </ul>
        </li> 
        <!-- DOCUMENTACION -->

      </ul>




      <!-- CONFIGURACIONES -->
      <ul class="nav navbar-nav navbar-right">
   
          <li class="dropdown">

          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="utilidad">
            <span class="glyphicon glyphicon-cog"></span> Configuraciones 
            <span class="caret"></span></a>
              
          <ul class="dropdown-menu">
            <li class="dropdown-header">Configuracion</li>
            <li><a href="#" id="myBtnpass" data-toggle="modal" data-target="#myModalpass" > Cambiar Password</a></li>
            <!--<li><a href="#">CSS</a></li>
            <li><a href="#">JavaScript</a></li>-->
            <li class="divider"></li>
            <li class="dropdown-header">Cerrar Sesion</li>
            <li><a href="logout.php"></span> Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  



<div id="grillapm"> <!-- DONDE SE VAN A MOSTRAR TODAS LAS TABLAS DENTRO DE ESTE DIV -->
  <!--<div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 hidden-xs ">   </div>-->
</div> <!--  Cierra DIV #grillapm -->


</div>












        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <!-- <p>Copyright &copy; Go Morosidad 2018</p> -->
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->





<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.13/i18n/Spanish.json"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css ">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.foundation.min.css ">

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.foundation.min.js"></script>

    <!--<script src="../vendor/jquery/jquery.min.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <!--<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>-->

    <!-- Metis Menu Plugin JavaScript -->
    <!--<script src="../vendor/metisMenu/metisMenu.min.js"></script>-->

    <!-- Morris Charts JavaScript -->
    <!--<script src="../vendor/raphael/raphael.min.js"></script>-->
    <!--<script src="../vendor/morrisjs/morris.min.js"></script>-->
    <!--<script src="../data/morris-data.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <!--<script src="../dist/js/sb-admin-2.js"></script>-->




</body>    
</html>
