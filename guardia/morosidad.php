<?php
 include_once "accesso_bd.php";


    function morosidad($mysqli){
        $salida = "";
        $mysqli = conexionBD();
        $contenido_inedito = $mysqli->query("SELECT * FROM morosidad ");
        while($row_i = $contenido_inedito -> fetch_array(MYSQLI_ASSOC))
        {            

            $salida.='
                  <tr>
                    <td><small>'.$row_i['moro_id'].'</small></td>
                    <td><small>'.$row_i['moro_nombre'].'</small></td>
                    <td><small>'.$row_i['moro_error'].'</small></td>
                    <td><small>'.$row_i['moro_desc'].'</small></td>

                    
                    <td>
                    <a data-accion="ver"  class="btn btn-info btn-xs" id="ver_mor" moro="'.$row_i['moro_id'].'"><span class="glyphicon glyphicon-eye-open" style="color:black;" data-toggle="modal" data-target="#myModal"></span></a>                    
                    <!--<a  tema="" id="inedito_apretar" data-toggle="collapse" data-target="#escucha_inedito" class="btn btn-info btn-xs">Escuchar</a>-->
                    </td>

                    <td>
                    <a data-accion="agregar"  class="btn btn-info btn-xs" id="ver_mor" moro="'.$row_i['moro_id'].'"><span class="glyphicon glyphicon-plus" style="color:black;" data-toggle="modal" data-target="#agregaModal"></span></a>
                    </td>
                  </tr>
               

                ';
            } // Cierra While
            return $salida;

        }// Cierra funcion ii


//echo morosidad();
?>


