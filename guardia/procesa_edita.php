<?php
 include_once "accesso_bd.php";
//include('morosidad.php');// Archivo de Conexion
$mysqli = conexionBD(); // Conecta a la BD

//$moro = $_POST['valorCaja1'];

//Variables Globales
$respuestaOK = false;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "";  
$procesoOK = "";
$moro_id = "";                    
$error   = "";
$desc    = "";
$paso_a  = "";
$paso_b  = "";
$paso_c  = "";
$paso_d  = "";
$paso_e  = "";

/*$traer     = $_POST['traer'];  
$moroid    = $_POST['moroid'];  
$nproceso  = $_POST['nproceso'];
$desc      = $_POST['desc'];
$error     = $_POST['error'];
$paso_a    = $_POST['paso_a'];
$paso_b    = $_POST['paso_b'];
$paso_c    = $_POST['paso_c'];
$paso_d    = $_POST['paso_d'];
$paso_e    = $_POST['paso_e'];*/
 
switch ($_POST['traer']) {
    case "traer":
                $salida = "";



        $mysqli = conexionBD();
        $consulta = $mysqli->query("SELECT * FROM morosidad where moro_id = ".$_POST['valorCaja1']." ");
        while($row_i = $consulta -> fetch_array(MYSQLI_ASSOC))
        {            

            $respuestaOK = true;
            $mensajeError = "Error inesperado ";
            $contenidoOK = "";  
            $procesoOK = "";
            $moro_id = $row_i['moro_id'];
            $moro_proceso = $row_i['moro_nombre'];
            $error   = $row_i['moro_error'];
            $desc    = $row_i['moro_desc'];
            $paso_a  = $row_i['moro_paso_a'];
            $paso_b  = $row_i['moro_paso_b'];
            $paso_c  = $row_i['moro_paso_c'];
            $paso_d  = $row_i['moro_paso_d'];
            $paso_e  = $row_i['moro_paso_e'];

            } // Cierra While
            


        break;
    case "edita":
/*
$moroid    = $_POST['moroid'];  
$nproceso  = $_POST['nproceso'];
$desc      = $_POST['desc'];
$error     = $_POST['error'];
$paso_a    = $_POST['paso_a'];
$paso_b    = $_POST['paso_b'];
$paso_c    = $_POST['paso_c'];
$paso_d    = $_POST['paso_d'];
$paso_e    = $_POST['paso_e'];*/

            $respuestaOK = true;
            $mensajeError = "caca";
            $contenidoOK = "";  
            $procesoOK = "";
            $moro_id = "";                    
            $error   = "";
            $desc    = "";
            $paso_a  = "";
            $paso_b  = "";
            $paso_c  = "";
            $paso_d  = "";
            $paso_e  = "";



        break;
   
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}


//$query_cd_solo = $mysqli->query("SELECT * FROM morosidad WHERE moro_id = ".$variable."  ");



$salidaJson = array("respuesta" => $respuestaOK,
                    "mensaje" => $mensajeError,
                    "moroid" => $moro_id,
                    "nproceso" => $moro_proceso,
                    "moroerror" => $error,
                    "morodesc" => $desc,
                    "pasoa" => $paso_a,
                    "pasob" => $paso_b,
                    "pasoc" => $paso_c,
                    "pasod" => $paso_d,
                    "pasoe" => $paso_e,
                    "proceso" => $procesoOK,
                    "contenido" => $contenidoOK);

echo json_encode($salidaJson);             


/*break;
default:
echo '$variable no es igual a 1, 2 o 3.';*/

?>


