<?php
include('accesso_bd.php');
include('agrega_caso.php');
?>
<!DOCTYPE html> 
<html  lang="es"> <!-- Idioma Español -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Para dispositivo moviles -->
  <title>Guardia GO BATCH</title>
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

  <!--<link rel="stylesheet" href="media/css/jquery.dataTables.css" /> CSS datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.semanticui.min.css">



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

  <!-- <script type="text/javascript" src="js/operaciones.js"></script> -->

    <!-- BOOTSTRAP TOUR CSS-->
  <link href="http://iamsaravieira.com/bootstrap-tour-standalone.css" rel="stylesheet"> 
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
<link rel="shortcut icon" href="img/favicon.ico">

<script type="text/javascript">
$(document).ready(function(){
    $('#morolista').DataTable({
                     "language": {
                              "sProcessing":     "Procesando...",
                              "sLengthMenu":     "Mostrar _MENU_ registros",
                              "sZeroRecords":    "No se encontraron resultados",
                              "sEmptyTable":     "Ningún dato disponible en esta tabla",
                              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                              "sInfoPostFix":    "",
                              "sSearch":         "Buscar:",
                              "sUrl":            "",
                              "sInfoThousands":  ",",
                              "sLoadingRecords": "Cargando...",
                              "oPaginate": {
                                  "sFirst":    "Primero",
                                  "sLast":     "Último",
                                  "sNext":     "Siguiente",
                                  "sPrevious": "Anterior"
                              },
                              "oAria": {
                                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                              }
                          }
    }); // Formato de la Tabla


$('body').on('click','#morolista a',function (e){
            e.preventDefault();
    
   // $('#ver_mor').click(function(){
      
      moro_id = $(this).attr('moro');
      accion = $(this).attr('data-accion');
      var parametros = {
        "valorCaja1" : moro_id
                        };
//alert(accion);

if(accion == 'ver')
{


         // Pasamos el moro_id a la pagina php para mostrar el instructivo.               
         $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_instructivo.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true)
                    {  
                    //$("#myModal").modal('open');  
                   $('#muestrainst').html(response.contenido); // Agrega el Video
                    $("#nombre_job").html(response.proceso);

                    //$('#probar').html(response.contenido); // Agrega el Video
                   // $("#casa").html(response.proceso);
                    }

                } // Cierra Success
             }); //cierra AJAX    
}else if (accion == "agregar"){

  //alertify.success(accion);

}
    //}); //Cierra boton que abre modal

});    


});

</script>



<script language="Javascript">
document.oncontextmenu = function(){return false}
</script>



<style type="text/css">
/* CSS used here will be applied after bootstrap.css */
.modal-header-success {
background: rgba(74,1,122,1);
background: -moz-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(74,1,122,1)), color-stop(41%, rgba(60,4,97,1)), color-stop(100%, rgba(74,1,122,1)));
background: -webkit-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -o-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -ms-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: linear-gradient(to right, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4a017a', endColorstr='#4a017a', GradientType=1 );
}
.modal-header-warning {
background: rgba(74,1,122,1);
background: -moz-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(74,1,122,1)), color-stop(41%, rgba(60,4,97,1)), color-stop(100%, rgba(74,1,122,1)));
background: -webkit-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -o-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -ms-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: linear-gradient(to right, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4a017a', endColorstr='#4a017a', GradientType=1 );
}
.modal-header-danger {
background: rgba(74,1,122,1);
background: -moz-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(74,1,122,1)), color-stop(41%, rgba(60,4,97,1)), color-stop(100%, rgba(74,1,122,1)));
background: -webkit-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -o-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -ms-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: linear-gradient(to right, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4a017a', endColorstr='#4a017a', GradientType=1 );
}
.modal-header-info {
background: rgba(74,1,122,1);
background: -moz-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(74,1,122,1)), color-stop(41%, rgba(60,4,97,1)), color-stop(100%, rgba(74,1,122,1)));
background: -webkit-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -o-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -ms-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: linear-gradient(to right, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4a017a', endColorstr='#4a017a', GradientType=1 );
}
.modal-header-primary {
background: rgba(74,1,122,1);
background: -moz-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(74,1,122,1)), color-stop(41%, rgba(60,4,97,1)), color-stop(100%, rgba(74,1,122,1)));
background: -webkit-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -o-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -ms-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: linear-gradient(to right, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4a017a', endColorstr='#4a017a', GradientType=1 );
}

.modal-body {
    max-height: calc(100vh - 210px);
    overflow-y: auto;
}

.panel-heading{
background: rgba(74,1,122,1);
background: -moz-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(74,1,122,1)), color-stop(41%, rgba(60,4,97,1)), color-stop(100%, rgba(74,1,122,1)));
background: -webkit-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -o-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -ms-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: linear-gradient(to right, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4a017a', endColorstr='#4a017a', GradientType=1 );
}


.panel-title{
  background: rgba(74,1,122,1);
background: -moz-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(74,1,122,1)), color-stop(41%, rgba(60,4,97,1)), color-stop(100%, rgba(74,1,122,1)));
background: -webkit-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -o-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -ms-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: linear-gradient(to right, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4a017a', endColorstr='#4a017a', GradientType=1 );
}

.navbar-inverse{
  
background: rgba(74,1,122,1);
background: -moz-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(74,1,122,1)), color-stop(41%, rgba(60,4,97,1)), color-stop(100%, rgba(74,1,122,1)));
background: -webkit-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -o-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -ms-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: linear-gradient(to right, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4a017a', endColorstr='#4a017a', GradientType=1 );
color:white !important;
border: none;
}

hr{
border: #3c0461 solid 2px;
}


.btn-primary,
.btn-primary:hover,
.btn-primary:active
{
  background: rgba(74,1,122,1);
background: -moz-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(74,1,122,1)), color-stop(41%, rgba(60,4,97,1)), color-stop(100%, rgba(74,1,122,1)));
background: -webkit-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -o-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: -ms-linear-gradient(left, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
background: linear-gradient(to right, rgba(74,1,122,1) 0%, rgba(60,4,97,1) 41%, rgba(74,1,122,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4a017a', endColorstr='#4a017a', GradientType=1 );

border:#3c0461 solid 1px;
}


</style>











</head>

<body >


<!-- COMIENZA MENU HORIZONTAL NEGRO -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Guardia GO Batch</a>
    </div>
    <ul class="nav navbar-nav">      
      <li class="active"><a href="#">Morosidad</a></li>
      <li class="active"><a href="../index.php">Principal</a></li>
      
      <!--<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Acciones
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#" data-toggle="modal" data-target="#myModal">Agregar casuistica</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li> 
        </ul>
      </li>-->
     <!-- 
      <li><a href="#">Page 2</a></li> 
      <li><a href="#">Page 3</a></li> 
      -->
    </ul>
  </div>
</nav>
<!-- TERMINA MENU HORIZONTAL NEGRO -->



<?php
    function morosidad(){
        $salida = "";
        $mysqli = conexionBD();
        $contenido_inedito = $mysqli->query("SELECT * FROM morosidad ");
        while($row_i = $contenido_inedito -> fetch_array(MYSQLI_ASSOC))
        {            

            $salida.='
                  <tr>
                    <td class="hidden"><small><strong>'.$row_i['moro_id'].'</strong></small></td>
                    <td class=""><h6><strong>'.$row_i['moro_nombre'].'</strong></h6></td>
                    <td align="left"><h6>'.$row_i['moro_error'].'</h6></td>
                    <td class="hidden"><small>'.$row_i['moro_desc'].'</small></td>

                    
                    <td>
                    <a data-accion="ver"  class="" id="ver_mor" moro="'.$row_i['moro_id'].'"><span class="glyphicon glyphicon-folder-open" style="color:black;" data-toggle="modal" data-target="#myModal"></span></a>                    
                    <!--<a  tema="" id="inedito_apretar" data-toggle="collapse" data-target="#escucha_inedito" class="btn btn-info btn-xs">Escuchar</a>-->
                    </td>

                    
                  </tr>
               

                ';
            } // Cierra While
            return $salida;

        }// Cierra funcion ii

?>



<!-- COMIENZA GUARDIA MOROSIDAD -->
   <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 hidden-xs ">
                    <br>
                            
                <p>Listado de los casos conocidos de Morosidad</p>    
                <hr >
                <table id="morolista" class="table  table-hover table-condensed display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="hidden"><small>ID</small></th>
                        <th align="center"><small>PROCESO</small></th>
                        <th align="center"><small>ERROR</small></th>
                        <th class="hidden"><small>DESCRIPCION</small></th>
                        <th align="center"><small></small></th>
 
                        
                    </tr>
                </thead>
                <!--<tfoot>
                    <tr>
                        <th>PROCESO</th>
                        <th>ERROR</th>
                        <th>ACCIONES</th>                        
                    </tr>
                </tfoot>-->
                <tbody>
                    <?php
                    echo morosidad();
                     ?>
                 </tbody>    
                   </table>

              <br><br>
        </div>
</div> <!--  Cierra DIV U.MOVIMIENTOS -->
<!-- TERMINA GUARDIA MOROSIDAD -->





<div id="probar"></div>
<div id="casa"></div>






  <!-- Comienza Modal Muestra datos del instructivo -->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1 id="nombre_job" ><i></i> </h1> <!--class="glyphicon glyphicon-thumbs-up" -->
                </div>
                <div class="modal-body">                  
                  <!-- Aca va el contenido de la modal -->
                  <div id="muestrainst">
                  </div>
                  <!-- Aca va el contenido de la modal -->
                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary btn-block pull-left" data-dismiss="modal">Cerrar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->
<!-- Termina Modal Muestra datos del instructivo -->


<?php
function formAgregar(){
  $formagregar = "";

  $formagregar .='




  <div class="container">
  <h2 id="titulo">Agregar Caso Conocido</h2>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nombre del Proceso:</label>
      <div class="col-sm-3">
        <input type="nombre" class="form-control col-xs-2" id="nproceso" placeholder="Nombre del proceso">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Descripcion:</label>
      <div class="col-sm-3">      
        <textarea rows="3" cols="50" id="desc" name="desc"  class="form-control col-xs-2" placeholder="Descripcion del proceso"> </textarea>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2 " for="pwd">Error:</label>
      <div class="col-sm-3">      
        <textarea rows="3" cols="50" id="error" name="error"  class="form-control col-xs-2" placeholder="Descripcion del Error"> </textarea>
      </div>
    </div>   

    <div class="form-group"> <!-- PASO 1 -->
      <label class="control-label col-sm-2 " for="pwd">Paso 1:</label>
      <div class="col-sm-3">      
        <textarea rows="3" cols="50" id="paso_a" name="paso_a"  class="form-control col-xs-2" placeholder="Paso 1"> </textarea>
      </div>
    </div>        

    <div class="form-group"> <!-- PASO 2 -->
      <label class="control-label col-sm-2 " for="pwd">Paso 2:</label>
      <div class="col-sm-3">      
        <textarea rows="3" cols="50" id="paso_b" name="paso_b"  class="form-control col-xs-2" placeholder="Paso 1"> </textarea>
      </div>
    </div>  

    <div class="form-group"> <!-- PASO 3 -->
      <label class="control-label col-sm-2 " for="pwd">Paso 3:</label>
      <div class="col-sm-3">      
        <textarea rows="3" cols="50" id="paso_c" name="paso_c"  class="form-control col-xs-2" placeholder="Paso 1"> </textarea>
      </div>
    </div>  

    <div class="form-group"> <!-- PASO 4 -->
      <label class="control-label col-sm-2 " for="pwd">Paso 4:</label>
      <div class="col-sm-3">      
        <textarea rows="3" cols="50" id="paso_d" name="paso_d"  class="form-control col-xs-2" placeholder="Paso 1"> </textarea>
      </div>
    </div>  

    <div class="form-group"> <!-- PASO 5 -->
      <label class="control-label col-sm-2 " for="pwd">Paso 5:</label>
      <div class="col-sm-3">      
        <textarea rows="3" cols="50" id="paso_d" name="paso_d"  class="form-control col-xs-2" placeholder="Paso 1"> </textarea>
      </div>
    </div>                  

    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-3">
        <button type="button" class="btn btn-success" id="guardarconocido">Guardar caso</button>
      </div>
    </div>
  </form>
</div>

';
return $formagregar;
} // Cierra Funcion


?>



  <!-- Comienza Modal Formulario carga  -->
    <!-- Modal -->
    <div class="modal fade" id="agregaModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-header-primary">Agregar
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h1 id="nombre_job"><i></i> </h1> <!--class="glyphicon glyphicon-thumbs-up" -->
                </div>
                <div class="modal-body">                  
                  <!-- Aca va el contenido de la modal -->
                  <div id="formAgregar">
                    <?php echo formAgregar(); ?>
                  </div>
                  <!-- Aca va el contenido de la modal -->
                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary  pull-left" data-dismiss="modal">Cerrar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <!-- Modal -->
<!-- Termina Modal Formulario carga -->




















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
