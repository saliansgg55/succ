<?php

    function morosidad(){
    	/*
		Muestra el contenido de la tabla PM dentro del Datatables en el Tab Home
    	*/


        $salida = "";
        $mysqli = conexionBD();
        $contenido_inedito = $mysqli->query("SELECT * FROM pm ");


if($contenido_inedito -> num_rows != 0){

        while($row_i = $contenido_inedito -> fetch_array(MYSQLI_ASSOC))
        {            

            $salida.='
                  <tr>
                    <td class="hidden"><small>'.$row_i['id_pm'].'</small></td>
                    <td><small>'.$row_i['go_pm'].'</small></td>
                    <td><small>'.$row_i['go_im'].'</small></td>
                    <td><small>'.$row_i['go_titulo'].'</small></td>
                    <td><small>'.$row_i['go_correctivo'].'</small></td>  
                    <td><small>'.$row_i['go_asignado'].'</small></td>                  
                    <td><small>'.$row_i['go_estado'].'</small></td>
                    <td class="hidden"><small>'.$row_i['go_detalle'].'</small></td>
                    <td><small>'.$row_i['go_u'].'</small></td>
                    <td><small>'.$row_i['go_alta'].'</small></td>

                    
                    <td>
                    <a data-accion="edita"  class="" id="edita_pm" moro="'.$row_i['id_pm'].'"><span class="glyphicon glyphicon-pencil" style="color:blue;" data-toggle="modal" data-target="#myModal"></span></a>                    
                    
                    <td>
                    <a data-accion="elimina"  class="" id="elimina_pm" moro="'.$row_i['id_pm'].'" ><span class="glyphicon glyphicon-trash" style="color:red;" ></span></a>                    
                    </td>


                    <!--
                    <td>
                    <a data-accion="ver"  class="" id="ver_pm" moro="'.$row_i['id_pm'].'"><span class="glyphicon glyphicon-eye-open" style="color:black;" data-toggle="modal" data-target="#myModalverPm"></span></a>                    
                    </td>
                    -->

                  
                    
                  </tr>
               

                ';
            } // Cierra While

		}
	else{
		$salida = '
			<tr id="sinDatos">
				<td colspan="10" class="centerTXT" align="center">NO HAY REGISTROS EN LA BASE DE DATOS</td>
	   		</tr>
		';
	}            
            return $salida;

        }// Cierra funcion ii






    function pmuser(){
    	/*
		Muestra el contenido de la tabla PM dentro del Datatables en el Tab Home
    	*/


        $salida = "";
        $mysqli = conexionBD();
        $contenido_inedito = $mysqli->query("SELECT * FROM pm ");


if($contenido_inedito -> num_rows != 0){

        while($row_i = $contenido_inedito -> fetch_array(MYSQLI_ASSOC))
        {            

            $salida.='
                  <tr>
                    <td><small>'.$row_i['go_pm'].'</small></td>
                    <td><small>'.$row_i['go_im'].'</small></td>
                    <td><small>'.$row_i['go_correctivo'].'</small></td>  
                    <td><small>'.$row_i['go_u'].'</small></td>
                

                    
                  </tr>
               

                ';
            } // Cierra While

		}
	else{
		$salida = '
			<tr id="sinDatos">
				<td colspan="10" class="centerTXT" align="center">NO HAY REGISTROS EN LA BASE DE DATOS</td>
	   		</tr>
		';
	}            
            return $salida;

        }// Cierra funcion ii




    function invitado(){
        /*
        Muestra el contenido de la tabla PM dentro del Datatables en el Tab Home
        */


        $salida = "";
        $mysqli = conexionBD();
        $contenido_inedito = $mysqli->query("SELECT * FROM pm ");


if($contenido_inedito -> num_rows != 0){

        while($row_i = $contenido_inedito -> fetch_array(MYSQLI_ASSOC))
        {            

            $salida.='
                  <tr>
                    <td class="hidden"><small>'.$row_i['id_pm'].'</small></td>
                    <td><small>'.$row_i['go_pm'].'</small></td>
                    <td><small>'.$row_i['go_im'].'</small></td>
                    <td><small>'.$row_i['go_titulo'].'</small></td>
                    <td><small>'.$row_i['go_correctivo'].'</small></td>  
                    <td><small>'.$row_i['go_asignado'].'</small></td>                  
                    <td><small>'.$row_i['go_estado'].'</small></td>
                    <td class="hidden"><small>'.$row_i['go_detalle'].'</small></td>
                    <td><small>'.$row_i['go_u'].'</small></td>
                    <td><small>'.$row_i['go_alta'].'</small></td>
                



                    <td>
                    <a data-accion="ver"  class="" id="ver_pm" moro="'.$row_i['id_pm'].'"><span class="glyphicon glyphicon-eye-open" style="color:black;" data-toggle="modal" data-target="#myModalver"></span></a>                    
                    </td>

                    <!--<a  tema="" id="inedito_apretar" data-toggle="collapse" data-target="#escucha_inedito" class="btn btn-info btn-xs">Escuchar</a>-->
                    <!--</td>-->
                    
                  </tr>
               

                ';
            } // Cierra While

        }
    else{
        $salida = '
            <tr id="sinDatos">
                <td colspan="10" class="centerTXT" align="center">NO HAY REGISTROS EN LA BASE DE DATOS</td>
            </tr>
        ';
    }            
            return $salida;

        }// Cierra funcion ii




    function grupos(){
        /*
        Muestra el contenido de la tabla PM dentro del Datatables en el Tab Home
    CREATE TABLE grupos (
    go_ID int NOT NULL AUTO_INCREMENT,
    go_aplicativo varchar(255) NOT NULL,
    go_doit varchar(255),
    go_mail varchar(70),
    go_fm varchar(15),
    go_go varchar(50),
    go_mail_user varchar(70),
    go_soporte varchar(60),
    PRIMARY KEY (go_ID)
);

        */


        $salida = "";
        $mysqli = conexionBD();
        $resultado = $mysqli->query("SELECT * FROM grupos ");


if($resultado -> num_rows != 0){

        while($row_i = $resultado -> fetch_array(MYSQLI_ASSOC))
        {            

            $salida.='
                  <tr id="info">
                   <td class="hidden"><small>'.$row_i['go_id'].'</small></td>
                    <td><strong><small>'.$row_i['go_aplicativo'].'</small></strong></td>
                    <td><small>'.$row_i['go_doit'].'</small></td>
                    <td class="hidden"><small>'.$row_i['go_serv_af'].'</small></td>
                    <td class="hidden"><small>'.$row_i['go_ci_af'].'</small></td>
                    <td class="hidden"><small>'.$row_i['go_mail'].'</small></td>
                    <td><small>'.$row_i['go_fm'].'</small></td>                      
                    <td><small>'.$row_i['go_mail_user'].'</small></td>
                    <td><small>'.$row_i['go_soporte'].'</small></td>
                    <td><small>'.$row_i['go_desarrollo'].'</small></td>
                    <td><small>'.$row_i['go_fecha'].'</small></td>

                    <!-- data-toggle="modal" data-target="#myModalAsigna" -->

                    <td>
                    <a data-accion="edita_asigna" id="ver_go" moro="'.$row_i['go_id'].'" > <span class="glyphicon glyphicon-pencil" style="color:blue" data-toggle="modal" data-target="#myModalAsignaEdita"></span></a>                    
                    </td>

                    <td>
                    <a data-accion="elimina_id_grupo" id="ver_go" moro="'.$row_i['go_id'].'" > <span class="glyphicon glyphicon-trash" style="color:red" ></span></a>                    
                    </td>

                    <td>
                    <a data-accion="ver_info_asigna" id="ver_go" moro="'.$row_i['go_id'].'" > <span class="glyphicon glyphicon-folder-open" style="color:black" data-toggle="modal" data-target="#myModalverAsigna" ></span></a>                    
                    </td>

                  </tr>
               

                ';
            } // Cierra While moro="'.$row_i['go_id'].'"

        }else{
        $salida = '
            <tr id="sinDatos">
                <td colspan="10" class="centerTXT" align="center">NO HAY REGISTROS EN LA BASE DE DATOS</td>
            </tr>
        ';
    }            
            return $salida;

        }// Cierra funcion ii



function documentos(){
/*
    CREATE TABLE documentos (
    id_doc int NOT NULL AUTO_INCREMENT,
    doc_casuis varchar(150) NOT NULL,
    doc_contenido LONGBLOB,
    doc_fecha varchar(15),
    doc_go_u varchar(15),
    doc_im varchar(50),
    doc_nombre varchar(70),
    PRIMARY KEY (id_doc)
);

*/

        $salida = "";
        $mysqli = conexionBD();
        $resultado = $mysqli->query("SELECT * FROM documentos ");


if($resultado -> num_rows != 0){

        while($row_i = $resultado -> fetch_array(MYSQLI_ASSOC))
        {            

            $salida.='
                  <tr id="info">
                   <td class="hidden"><small>'.$row_i['id_doc'].'</small></td>
                    <td><strong><small>'.$row_i['doc_casuis'].'</small></strong></td>
                    <td><small>'.$row_i['doc_im'].'</small></td>
                    <td class="hidden"><small>'.$row_i['doc_contenido'].'</small></td>                    
                    <td><small>'.$row_i['doc_go_u'].'</small></td>                      
                    <td><small>'.$row_i['doc_fecha'].'</small></td>
                    

                    <!-- data-toggle="modal" data-target="#myModalverdoc" -->

                    <td>
                    <a data-accion="ver_doc" id="ver_go" moro="'.$row_i['id_doc'].'" > <span class="glyphicon glyphicon-folder-open" style="color:black" data-toggle="modal" data-target="#myModalverdoc"></span></a>                    
                    </td>

                    <td>
                    <a data-accion="elimina_doc" id="ver_go" moro="'.$row_i['id_doc'].'" > <span class="glyphicon glyphicon-trash" style="color:red" ></span></a>                    
                    </td>


                  </tr>
               

                ';
            } // Cierra While moro="'.$row_i['go_id'].'"

        }
    else{
        $salida = '
            <tr id="sinDatos">
                <td colspan="10" class="centerTXT" align="center">NO HAY REGISTROS EN LA BASE DE DATOS</td>
            </tr>
        ';
    }            
            return $salida;

}




function documentos_fija(){
/*
    CREATE TABLE documentos (
    id_doc int NOT NULL AUTO_INCREMENT,
    doc_casuis varchar(150) NOT NULL,
    doc_contenido LONGBLOB,
    doc_fecha varchar(15),
    doc_go_u varchar(15),
    doc_im varchar(50),
    doc_nombre varchar(70),
    PRIMARY KEY (id_doc)
);

*/

        $salida = "";
        $mysqli = conexionBD();
        $resultado = $mysqli->query("SELECT * FROM documentos_fija ");


if($resultado -> num_rows != 0){

        while($row_i = $resultado -> fetch_array(MYSQLI_ASSOC))
        {            

            $salida.='
                  <tr id="info">
                   <td class="hidden"><small>'.$row_i['id_doc_f'].'</small></td>
                    <td><strong><small>'.$row_i['doc_casuis_f'].'</small></strong></td>
                    <td><small>'.$row_i['doc_im_f'].'</small></td>
                    <td class="hidden"><small>'.$row_i['doc_nombre_f'].'</small></td>
                    <td><small>'.$row_i['doc_go_u_f'].'</small></td>                      
                    <td><small>'.$row_i['doc_fecha_f'].'</small></td>
                    

                    <!-- data-toggle="modal" data-target="#myModalverdoc" -->

                    <td>
                    <a data-accion="ver_doc_fija" id="ver_go" moro="'.$row_i['id_doc_f'].'" > <span class="glyphicon glyphicon-folder-open" style="color:black" data-toggle="modal" data-target="#myModalverdoc"></span></a>                    
                    </td>

                    <td>
                    <a data-accion="elimina_doc_fija" id="ver_go" moro="'.$row_i['id_doc_f'].'" > <span class="glyphicon glyphicon-trash" style="color:red" ></span></a>                    
                    </td>

                   <!-- <td>
                    <a href="http://localhost/personal/doc/fija/'.$row_i['doc_nombre_f'].'" > <span class="glyphicon glyphicon-download" style="color:green" ></span> </a>
                    
                    </td>-->
                  </tr>
               

                ';
            } // Cierra While moro="'.$row_i['go_id'].'"

        }
    else{
        $salida = '
            <tr id="sinDatos">
                <td colspan="10" class="centerTXT" align="center">NO HAY REGISTROS EN LA BASE DE DATOS</td>
            </tr>
        ';
    }            
            return $salida;

}


?>

