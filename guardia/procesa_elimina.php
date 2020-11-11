<?php
 include_once "accesso_bd.php";
//include('morosidad.php');// Archivo de Conexion
$mysqli = conexionBD(); // Conecta a la BD

//$moro = $_POST['valorCaja1'];

$respuestaOK = false;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "";  
$procesoOK = "";

//$query_cd_solo = $mysqli->query("SELECT * FROM morosidad WHERE moro_id = ".$variable."  ");


  $query = sprintf("DELETE FROM morosidad 
        WHERE moro_id=%d LIMIT 1", 
        $_POST['valorCaja1']);

        // Ejecutamos el query
        $resultadoQuery = $mysqli -> query($query);



if($mysqli -> affected_rows == 1){
    mysqli_close($mysqli);       
    $procesoOK = "Registro eliminado";
    $respuestaOK = true;
    $contenidoOK = "ok";//morosidad($mysqli);
    $mensajeError = "";
//$contenido = "Registro insertado";
}else{
    mysqli_close($mysqli); 
    $procesoOK = "";
    $respuestaOK = false;
    $contenidoOK = "";
    $mensajeError = "No se pudo eliminar ";

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


