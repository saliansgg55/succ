<?php
include_once "accesso_bd.php"; // Archivo de Conexion
$mysqli = conexionBD(); // Conecta a la BD


$respuestaOK = false;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "";  

// Recibimos el Id referente al disco
//$variable= trim($_POST['valorCaja1']);

//$respuestaOK = true;
//$mensajeError = "No se puede ejecutar la aplicación";
//$contenidoOK = $_POST['nproceso'];  

/*
switch($variable) {
case 1:*/

$insertaAgenda = sprintf("INSERT INTO morosidad
                 SET moro_nombre='%s', moro_error='%s' ,moro_desc='%s', moro_paso_a='%s',moro_paso_b='%s',moro_paso_c='%s', moro_paso_d='%s', moro_paso_e='%s'",
                 $_POST['nproceso'],$_POST['dterror'],$_POST['descproc'],$_POST['paso_a'],$_POST['paso_b'],$_POST['paso_c'],$_POST['paso_d'],$_POST['paso_e']);

  // Ejecutamos el query
  $resultadoQuery = $mysqli->query($insertaAgenda);

$respuestaOK = true;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "Registro insertado"; 

 /* if($mysqli -> affected_rows == 1){
    mysqli_close($mysqli);       

    $respuestaOK = true;
    $contenidoOK = "ok";//morosidad($mysqli);
    $mensajeError = "";
//$contenido = "Registro insertado";
}else{
    mysqli_close($mysqli); 

    $respuestaOK = false;
    $contenidoOK = "";
    $mensajeError = "Error al insertar registro";

}
*/

$salidaJson = array("respuesta" => $respuestaOK,
                    "mensaje" => $mensajeError,
                    "contenido" => $contenidoOK);

echo json_encode($salidaJson);             

/*break;
default:
echo '$variable no es igual a 1, 2 o 3.';*/




