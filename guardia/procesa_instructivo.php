<?php
include_once "accesso_bd.php"; // Archivo de Conexion
$mysqli = conexionBD(); // Conecta a la BD


$respuestaOK = false;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "";  

// Recibimos el Id referente al disco
$variable= trim($_POST['valorCaja1']);

/*
switch($variable) {
case 1:*/

$query_cd_solo = $mysqli->query("SELECT * FROM morosidad WHERE moro_id = ".$variable."  ");
while($res = $query_cd_solo -> fetch_array(MYSQLI_ASSOC))
            {
              $paso_a = nl2br($res['moro_paso_a'], false);
              $Result = str_replace( "\n", '<br>', $paso_a ); 

        $video ='<div class="media">
          <div class="media-body">
            <h2 class="media-heading " style="color:black;">Proceso: <strong>   '.$res['moro_nombre'].'</strong></h2> <br>           
          </div>

        <div class="alert alert-success">
          <strong>DESCRIPCION DE FUNCIONAMIENTO: </strong> '.$res['moro_desc'].'
        </div>

        <div class="alert alert-danger">
          <strong>ERROR!</strong> '.$res['moro_error'].'
        </div>




<div class="panel-group" id="accordion">
  <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        PASO 1</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">'.$Result.'</div>      
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        PASO 2</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">'.$res['moro_paso_b'].'</div>
    </div>
  </div>
  <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        PASO 3</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">'.$res['moro_paso_c'].'</div>
    </div>
  </div>

    <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        PASO 4</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">'.$res['moro_paso_d'].'</div>
    </div>
  </div>

    <div class="panel panel-info">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        PASO 5</a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body">'.$res['moro_paso_e'].'</div>
    </div>
  </div>

    <div class="panel panel-warning">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
        ULTIMA INSTANCIA</a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body">
          Ante cualquier inconveniente por favor
          Llamar a los referentes de Morosidad.<br>
          <strong>Pablo Correa: '.$res['moro_tel_g'].' </strong> <br>
      
    </div>
  </div>
          <br>
          <div class="alert alert-warning">
          Ante cualquier inconveniente por favor
          Llamar a los referentes de Morosidad.<br>       
          <strong>Pablo Correa: '.$res['moro_tel_g'].' </strong> <br>   
          
          

</div>

    ';
      $job = $res['moro_nombre'];                  
            }

            $proceso = $job;
            $respuestaOK = true;
            $mensajeError = "No se puede ejecutar la aplicación";
            $contenidoOK = $video; 

$salidaJson = array("respuesta" => $respuestaOK,
                    "mensaje" => $mensajeError,
                    "proceso" => $proceso,
                    "contenido" => $contenidoOK);

echo json_encode($salidaJson);             

/*break;
default:
echo '$variable no es igual a 1, 2 o 3.';*/




