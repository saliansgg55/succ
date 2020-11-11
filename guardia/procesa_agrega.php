<?php
 include_once "accesso_bd.php";
//include('morosidad.php');// Archivo de Conexion
$mysqli = conexionBD(); // Conecta a la BD


$respuestaOK = false;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "";  
$procesoOK = "";

//$query_cd_solo = $mysqli->query("SELECT * FROM morosidad WHERE moro_id = ".$variable."  ");


$insertaAgenda = sprintf("INSERT INTO morosidad
                 SET moro_nombre='%s', moro_error='%s' ,moro_desc='%s', moro_paso_a='%s',moro_paso_b='%s',moro_paso_c='%s', moro_paso_d='%s', moro_paso_e='%s'",
                 $_POST['nproceso'],$_POST['error'],$_POST['desc'],$_POST['paso_a'],$_POST['paso_b'],$_POST['paso_c'],$_POST['paso_d'],$_POST['paso_e']);

  // Ejecutamos el query
  $resultadoQuery = $mysqli->query($insertaAgenda);

if($mysqli -> affected_rows == 1){
    mysqli_close($mysqli);       
    $procesoOK = "Registro Insertado";
    $respuestaOK = true;
    $contenidoOK = "ok";//morosidad($mysqli);
    $mensajeError = "";
//$contenido = "Registro insertado";
}else{
    mysqli_close($mysqli); 
    $procesoOK = "";
    $respuestaOK = false;
    $contenidoOK = "";
    $mensajeError = "Error al insertar registro";

}

$salidaJson = array("respuesta" => $respuestaOK,
                    "mensaje" => $mensajeError,
                    "proceso" => $procesoOK,
                    "contenido" => $contenidoOK);

echo json_encode($salidaJson);             

/*break;
default:
echo '$variable no es igual a 1, 2 o 3.';*/

?>


