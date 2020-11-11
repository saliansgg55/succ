<?php
session_start(); //Iniciamos sesion
include_once "accesso_bd.php";
include('funciones.php'); // Archivo de Conexion
$mysqli = conexionBD(); // Conecta a la BD


$respuestaOK = false;
$mensajeError = "No se puede ejecutar la aplicación";
$contenidoOK = "";  

// Recibimos el Id referente al disco
/*
$variable = $_POST['accion'];
$user = trim($_POST['user']);
$pass = trim($_POST['pass']);
$nombre = trim($_POST['nombre']);
$apellido = trim($_POST['apellido']);

*/


switch($_POST['accion']) {
case 'registra':

if($_POST['user'] == ""){
		$respuestaOK = false;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = "FORMULARIO INCOMPLETO"; 
}else{

$verifica_usuario = $mysqli->query("SELECT go_u FROM usuarios WHERE go_u = '".$_POST['user']."'  ");

if($verifica_usuario -> num_rows != 0){

		$respuestaOK = false;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = "ESTE USUARIO YA ESTA REGISTRADO"; 

}else{
		$inserta_usuario = $mysqli->query("INSERT INTO usuarios (go_nombre, go_apellido, go_u, go_pass) VALUES ('".$_POST['nombre']."','".$_POST['apellido']."','".$_POST['user']."','".$_POST['pass']."')");
	
		$respuestaOK = true;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = "USUARIO REGISTRADO"; 

	}

}


/*while($res = $verifica_usuario -> fetch_array(MYSQLI_ASSOC))
		{
			$usuario = $res['go_u'];
				
		}*/



break;

case 'logeo':

	$consulta_user = $mysqli->query("SELECT * FROM usuarios WHERE go_u = '".$_POST['user']."' AND go_pass = '".$_POST['pass']."' ");

	if($consulta_user -> num_rows != 0){

		//Obtenemos los datos para crear las variables de session
		while($row = $consulta_user -> fetch_array(MYSQLI_ASSOC))
		{
			$usuario  =   $row['go_u'];
			$nombre   =   $row['go_nombre'];
			$apellido =   $row['go_apellido'];	
			$mail =   $row['go_mail'];	

		//Creamos variables de session
		$_SESSION['loggedin'] = true;
    	$_SESSION['u'] = $usuario;
    	$_SESSION['nombre'] = $nombre;
    	$_SESSION['apellido'] = $apellido;	
    	$_SESSION['mail'] = $mail;	
    	$_SESSION['start'] = time();
    	$_SESSION['expire'] = $_SESSION['start'] + (5 * 2000);	

		}

			$respuestaOK = true;
			$mensajeError = "No se puede ejecutar la aplicación";
			$contenidoOK = "USUARIO Y/O CLAVE INCORRECTAS"; 

		}else{


	    $respuestaOK = false;
		$mensajeError = "No se puede ejecutar la aplicación";
		$contenidoOK = "USUARIO Y/O CLAVE INCORRECTAS"; 
		}
	


break;

case 'agregapm':

		$verif_pm = $mysqli->Query("SELECT go_pm FROM pm WHERE go_pm = '".$_POST['pm']."' ");

		if($verif_pm -> num_rows != 0){

		

			$respuestaOK = false;
			$mensajeError = "No se puede ejecutar la aplicación";
			$contenidoOK = "PM EXISTENTE"; 

		}else{

			$agregapm = $mysqli->query("INSERT INTO pm (go_pm,go_im,go_correctivo,go_asignado,go_u,go_titulo,go_detalle,go_estado,go_u_ultmodif) VALUES ('".$_POST['pm']."','".$_POST['im']."','".$_POST['correctivo']."','".$_POST['asignado']."','".$_POST['go_u']."','".$_POST['titulo']."','".$_POST['detalle']."','".$_POST['estado']."','".$_POST['umodif']."' ) ");

			$respuestaOK = true;
			$mensajeError = "";
			//$contenidoOK = morosidad($mysqli);
			$contenidoOK = "PM Guardado";

		}

 
break;

case 'edita':
		
	$datos_editar = $mysqli->query("UPDATE pm 
									SET 
									go_titulo 		= '".$_POST['titulo']."' , 
									go_im 	 		= '".$_POST['im']."',
									go_correctivo 	= '".$_POST['co']."',       
									go_asignado 	= '".$_POST['as']."',
									go_estado 		= '".$_POST['es']."',
									go_detalle 		= '".$_POST['de']."',
									go_pm 			= '".$_POST['pm']."'
									WHERE id_pm 	= '".$_POST['id_pm']."' ");

  
	//if($datos_editar -> num_rows != 0){
			$respuestaOK = true;
			$mensajeError = "REGISTRO EDITADO";
			$contenidoOK = morosidad($mysqli);
	//}else{
			//$respuestaOK = false;
			//$mensajeError = "No se puede ejecutar la aplicación";
			//$contenidoOK = "ERROR AL EDITAR PM";
	//}


break;

case 'elimina':
			
			$agregapm = $mysqli->query("DELETE FROM pm WHERE id_pm 	= '".$_POST['id_pm']."' ");
			
			$respuestaOK = true;
			$mensajeError = "REGISTRO ELIMINADO";
			$contenidoOK = morosidad($mysqli);
break;

case 'ver':

$selecciona = $mysqli->query("SELECT * FROM pm WHERE id_pm = '".$_POST['id_pm']."' ");

while($row = $selecciona->fetch_array(MYSQLI_ASSOC))
{
	

	$pm = $row['go_pm'];

	$salida=' 

<div class="container-fluid">
  <h4>'.$row['go_titulo'].'</h4>
  <hr>
  <p>Detalle general del estado de los incidentes generados </p>            
  <table class="table table-striped  table-hover table-condensed display" cellspacing="0" >
    <!--<thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
      </tr>
    </thead>-->
    <tbody>
      
      <tr class="">
        <td><strong>Nº PM:</strong></td>
        <td>'.$row['go_pm'].'</td>
      </tr>

      <tr>
        <td><strong>Nº IM:</strong></td>
        <td>'.$row['go_im'].'</td> 
      </tr>

      <tr class="">
        <td><strong>Correctivo:</strong></td>
        <td>'.$row['go_correctivo'].'</td> 
      </tr>

      <tr>
        <td><strong>Asignado a:</strong></td>
        <td>'.$row['go_asignado'].'</td> 
      </tr>

      <tr class="">
        <td><strong>Estado:</strong></td>
        <td>'.$row['go_estado'].'</td> 
      </tr>      

      <tr>
        <td><strong>Creado por:</strong></td>
        <td>'.$row['go_u'].'</td> 
      </tr>

      <tr class="">
        <td><strong>Fecha Creacion:</strong></td>
        <td>'.$row['go_alta'].'</td> 
      </tr>    

      <tr>
        <td><strong>Observaciones:</strong></td>
        <td>'.$row['go_detalle'].'</td> 
      </tr>        

    </tbody>
  </table>
  <hr>
</div>
	
      
	';



}

			$respuestaOK = true;
			$mensajeError = "";
			$contenidoOK = $salida;
			

break;

case 'cambiopass':

	$actualiza_pass = $mysqli->query("UPDATE usuarios 
									SET go_pass = '".$_POST['pass']."', 
										go_u	= '".$_POST['user']."'
									WHERE go_u 	= '".$_POST['user']."' ");

//$actualiza_pass = $mysqli->query("UPDATE usuarios SET go_pass = '".$_POST['pass']."' WHERE go_u = '".$_POST['user']."' ");
	//if($actualiza_pass -> num_rows != 0){
			$respuestaOK = true;
			$mensajeError = "";
			$contenidoOK = "PASSWORD ACTUALIZADA";
			
	//}

break;

case 'verproceso':

$inserta_proceso = $mysqli->query("INSERT INTO procesos (go_npro, go_cadena, go_desc) VALUES ('".$_POST['nproceso']."','".$_POST['cadena']."','".$_POST['desc']."') ");
$seleccionador = $mysqli->query("SELECT MIN(id_pro) as total FROM procesos WHERE go_npro = '".$_POST['nproceso']."' ");
while($row = $seleccionador->fetch_array(MYSQLI_ASSOC))
{
	$idmin = $row['total'];
	$depura = $mysqli->query("DELETE FROM procesos where id_pro <> '".$row['total']."'  and go_npro = '".$_POST['nproceso']."' ");
}


//$depura = $mysqli->query("DELETE FROM procesos where go_npro = '".$_POST['nproceso']."' LIMIT 3"); 		
//if($inserta_proceso -> num_rows == 0){
			$respuestaOK = true;
			$mensajeError = "";
			$contenidoOK = $idmin;
			//"PROCESO INSERTADO";
			//mysql_close($mysqli);
//}			


break;

case 'diaria':

    $seleccionador = $mysqli->query("SELECT *  FROM procesos WHERE id_pro = '".$_POST['id_pro']."' and go_cadena = '".$_POST['cadena']."' ");

    while($row = $seleccionador->fetch_array(MYSQLI_ASSOC))
    {
      		$desc  = $row['go_desc'];
      		$titulo = $row['go_npro'];
      //  "<option value='".$proceso."'>".$proceso."</option> ";
      		$respuesta = '<div class="panel panel-default borde-c">
							
							
							<div class="panel-body">
							<p><strong>'.$titulo.'</strong></p>
							<p>'.$desc.'</p>
							</div>
						  <!--</div>-->';

    }

      		$respuestaOK = true;
			$mensajeError = "";
			$contenidoOK = $respuesta;



break;

case 'moro':

    $seleccionador = $mysqli->query("SELECT *  FROM procesos WHERE id_pro = '".$_POST['id_pro']."' and go_cadena = '".$_POST['cadena']."' ");

    while($row = $seleccionador->fetch_array(MYSQLI_ASSOC))
    {
      		$desc  = $row['go_desc'];
      		$titulo = $row['go_npro'];
      //  "<option value='".$proceso."'>".$proceso."</option> ";
      		$respuesta = '<div class="panel panel-default borde-c">
							<div class="panel-body">
							<p><strong>'.$titulo.'</strong></p>
							<p>'.$desc.'</p>
						  </div>';

    }

      		$respuestaOK = true;
			$mensajeError = "";
			$contenidoOK = $respuesta;
break;

case 'asigna_grupo':

$fecha= date("d-m-Y"); // Dia mes año Actual
$inserta_proceso = $mysqli->query("INSERT INTO grupos (
go_aplicativo,
go_doit,
go_serv_af,
go_ci_af,
go_mail,
go_fm,
go_mail_user,
go_soporte,
go_desarrollo,
go_fecha) 
VALUES (
	'".$_POST['aplicativo']."',
	'".$_POST['doit']."',
	'".$_POST['serv']."',
	'".$_POST['ci']."',
	'".$_POST['grupo_mail']."',
	'".$_POST['fm']."',
	'".$_POST['mail_usuario']."',
	'".$_POST['soporte']."',
	'".$_POST['desa']."',
	'".$fecha."'
	)");


if($inserta_proceso == true){
	
	$respuestaOK = true;
	$mensajeError = "";
	$contenidoOK = "Registro insertado";

}else{
	
	$respuestaOK = false;
	$mensajeError = "";
	$contenidoOK = "Error al insertar";

}


	

break;


case 'elimina_id_grupo':
	
	$elimina_result = $mysqli->query("DELETE FROM grupos WHERE go_id 	= '".$_POST['id_pm']."' ");

	if($elimina_result == true){

		$respuestaOK = true;
		$mensajeError = "";
		$contenidoOK = "REGISTRO ELIMINADO";

	}else{

		$respuestaOK = false;
		$mensajeError = "";
		$contenidoOK = "Error al eliminar";

	}

break;


case 'edita_asigna':
$fecha= date("d-m-Y"); // Dia mes año Actual
$go_id = $_POST['go_id'];
$go_aplicativo = $_POST['aplicativo'];
/*go_aplicativo
go_doit
go_mail
go_fm
go_mail_user
go_soporte



go_id
accion
aplicativo
doit
grupo_mail
fm
mail_usuario
soporte



*/
		$actualiza_asig = $mysqli->query("UPDATE grupos 
											SET go_aplicativo = '".$go_aplicativo."',
											go_doit		  = '".$_POST['doit']."',
											go_serv_af	  = '".$_POST['serv']."',	
											go_ci_af	  = '".$_POST['ci']."',
											go_mail       = '".$_POST['grupo_mail']."',
											go_fm	      = '".$_POST['fm']."',
											go_mail_user  = '".$_POST['mail_usuario']."',
											go_soporte	  = '".$_POST['soporte']."',
											go_desarrollo	  = '".$_POST['desa']."',
											go_fecha 	  = '".$fecha."'
											WHERE go_id 	= '".$_POST['go_id']."' 
										");

		if($actualiza_asig == true){
			$respuestaOK = true;
			$mensajeError = "";
			$contenidoOK = "Registro Editado";
			//$contenidoOK = "Registro editado";
		}else{
			$respuestaOK = false;
			$mensajeError = "";
			$contenidoOK = "Error al actualizar registro";
		}



break;

case 'ver_info_asigna':


/*
go_id
go_aplicativo
go_doit
go_serv_af
go_ci_af
go_mail
go_fm
go_mail_user
go_soporte
go_desarrollo
go_fecha

ID
APLICATIVO
GRUPO
MAIL.DOIT
SERV.AF
CI AF
FIJA/MOVI
MAIL USER
USUARIO CONTACTO
DESA.DOIT
ULT.MODIF
*/
$selecciona = $mysqli->query("SELECT * FROM grupos WHERE go_id = '".$_POST['pm_id']."' ");

while($row = $selecciona->fetch_array(MYSQLI_ASSOC))
{
	

	$pm = $row['go_id'];



	$salida=' 

<div class="container-fluid">
  <h4>'.$row['go_id'].'</h4>
  <hr>
  <h5><p>Informacion de los grupos de Aisgnacion de DOIT, usuario de contacto, grupo mail, sector desarrollo, etc. </p></h5>            
  <table class="table table-striped  table-hover table-condensed display" cellspacing="0" >
    <!--<thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
      </tr>
    </thead>-->
    <tbody>
      
      <tr class="">
        <td><strong>Nº ID:</strong></td>
        <td>'.$row['go_id'].'</td>
      </tr>

      <tr>
        <td><strong>APLICATIVO:</strong></td>
        <td>'.$row['go_aplicativo'].'</td> 
      </tr>

      <tr class="">
        <td><strong>GRUPO ASIGNACION DOIT:</strong></td>
        <td>'.$row['go_doit'].'</td> 
      </tr>

      <tr>
        <td><strong>SERVICIO AFECTADO:</strong></td>
        <td>'.$row['go_serv_af'].'</td> 
      </tr>

      <tr class="">
        <td><strong>CI AFECTADO:</strong></td>
        <td>'.$row['go_ci_af'].'</td> 
      </tr>      

      <tr>
        <td><strong>FIJA/MOVIL:</strong></td>
        <td>'.$row['go_fm'].'</td> 
      </tr>

      <tr>
        <td><strong>EMAIL USUARIO:</strong></td>
        <td>'.$row['go_mail_user'].'</td> 
      </tr>    

      <tr class="">
        <td><strong>CONTACTO A USUARIO:</strong></td>
        <td>'.$row['go_soporte'].'</td> 
      </tr>    

      <tr>
        <td><strong>DESARROLLO:</strong></td>
        <td>'.$row['go_desarrollo'].'</td> 
      </tr>        

      <tr>
        <td><strong>ULTIMA ACTUALIZACION:</strong></td>
        <td>'.$row['go_fecha'].'</td> 
      </tr>        

    </tbody>
  </table>
  <hr>
</div>
  


	';



} // Cierra While


			$respuestaOK = true;
			$mensajeError = "";
			$contenidoOK = $salida;

break;


case 'ver_doc':

//$id_doc = $_POST['id_doc'];

$selecciona = $mysqli->query("SELECT * FROM documentos WHERE id_doc = '".$_POST['id_doc']."' ");

while($row = $selecciona->fetch_array(MYSQLI_ASSOC))
{
	
	$pm = $row['doc_nombre'];


	$salida='		
	<div class="graph-outline ">
    <object style=" height:600px; width:800px;" data="doc/'.$row['doc_nombre'].'?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" type="application/pdf">
    <embed src="path/to/file.pdf?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" type="application/pdf" />
    </object>
	</div>		    
	';



} // Cierra While

	$respuestaOK = true;
	$mensajeError = "";
	$contenidoOK = $salida;

break;

case 'sube_movil':

/*
    CREATE TABLE documentos_fija (
    id_doc_f int NOT NULL AUTO_INCREMENT,
    doc_casuis_f varchar(150) NOT NULL,
    doc_contenido_f LONGBLOB,
    doc_fecha_f varchar(15),
    doc_go_u_f varchar(15),
    doc_im_f varchar(50),
    doc_nombre_f varchar(70)
    PRIMARY KEY (id_doc_f)
);

*/

$accion = $_POST['accion'];
$casuistica = $_POST['casuis'];
$im_ej = $_POST['im_ej'];
$go_user = $_POST['go_u'];
$fecha= date("d-m-Y"); // Dia mes año Actual

$rute_temporal= $_FILES["doc_movil"]["tmp_name"];
$exte = $_FILES["doc_movil"]["type"];
$doc = $_FILES["doc_movil"];
$extension = $doc["type"];
$doccu  = $_FILES["doc_movil"]["name"]; // Nombre del documento
//este es el archivo que añadiremosal campo blob

	// Guarda encriptado en la carpeta doc
	//$nom_encriptado = md5($doc["tmp_name"].".".$extension."");
	$nom_encriptado = $doc["tmp_name"].".".$extension."";
	$ruta = "doc/".$doccu;
	move_uploaded_file($doc["tmp_name"], $ruta);


	$resultado = $mysqli->query("insert into documentos (doc_casuis,doc_im,doc_contenido,doc_go_u,doc_nombre,doc_fecha) 
					values 
					('".$casuistica."', '".$im_ej."', '".$nom_encriptado."','".$go_user."','".$doccu."','".$fecha."')");




break;

case 'elimina_doc':

	$elimina_result = $mysqli->query("DELETE FROM documentos WHERE id_doc 	= '".$_POST['id_doc']."' ");

	if($elimina_result == true){

		$respuestaOK = true;
		$mensajeError = "";
		$contenidoOK = "REGISTRO ELIMINADO";

	}else{

		$respuestaOK = false;
		$mensajeError = "";
		$contenidoOK = "Error al eliminar";

	}

break;




case 'elimina_doc_fija':

	$elimina_result = $mysqli->query("DELETE FROM documentos_fija WHERE id_doc_f = '".$_POST['id_doc']."' ");

	if($elimina_result == true){

		$respuestaOK = true;
		$mensajeError = "";
		$contenidoOK = "REGISTRO ELIMINADO";

	}else{

		$respuestaOK = false;
		$mensajeError = "";
		$contenidoOK = "Error al eliminar";

	}

break;

case 'ver_doc_fija':

//$id_doc = $_POST['id_doc'];

$selecciona = $mysqli->query("SELECT * FROM documentos_fija WHERE id_doc_f = '".$_POST['id_doc']."' ");

while($row = $selecciona->fetch_array(MYSQLI_ASSOC))
{
	
	$pm = $row['doc_nombre_f'];


	$salida='		
	<div class="graph-outline ">
    <object style=" height:600px; width:800px;" data="doc/fija/'.$row['doc_nombre_f'].'?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" type="application/pdf">
    <embed src="path/to/file.pdf?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" type="application/pdf" />
    </object>
	</div>		    
	';



} // Cierra While

	$respuestaOK = true;
	$mensajeError = "";
	$contenidoOK = $salida;

break;


case 'sube_fija':

/*
    CREATE TABLE documentos_fija (
    id_doc_f int NOT NULL AUTO_INCREMENT,
    doc_casuis_f varchar(150) NOT NULL,
    doc_contenido_f LONGBLOB,
    doc_fecha_f varchar(15),
    doc_go_u_f varchar(15),
    doc_im_f varchar(50),
    doc_nombre_f varchar(70)
    PRIMARY KEY (id_doc_f)
);

*/

$accion = $_POST['accion'];
$casuistica = $_POST['casuis'];
$im_ej = $_POST['im_ej'];
$go_user = $_POST['go_u'];
$fecha= date("d-m-Y"); // Dia mes año Actual

$rute_temporal= $_FILES["doc_movil"]["tmp_name"];
$exte = $_FILES["doc_movil"]["type"];
$doc = $_FILES["doc_movil"];
$extension = $doc["type"];
$doccu  = $_FILES["doc_movil"]["name"]; // Nombre del documento
//este es el archivo que añadiremosal campo blob

	// Guarda encriptado en la carpeta doc
	//$nom_encriptado = md5($doc["tmp_name"].".".$extension."");
	$nom_encriptado = $doc["tmp_name"].".".$extension."";
	$ruta = "doc/fija/".$doccu;
	move_uploaded_file($doc["tmp_name"], $ruta);


	$resultado = $mysqli->query("insert into documentos_fija (doc_casuis_f,doc_im_f,doc_contenido_f,doc_go_u_f,doc_nombre_f,doc_fecha_f) 
					values 
					('".$casuistica."', '".$im_ej."', '".$nom_encriptado."','".$go_user."','".$doccu."','".$fecha."')");



/*
	if($resultado == true){
			$respuestaOK = true;
			echo $respuestaOK;
	}else{
		echo "No se pudo insertar el documento";
	}
*/
break;




default:
echo '$variable no es igual a 1, 2 o 3.';
}

/*
$salidaJson = array("respuesta" => $respuestaOK,
                    "mensaje" => $mensajeError,
                    "contenido" => $contenidoOK);

echo json_encode($salidaJson);   

  <iframe src="https://docs.google.com/gview?url=https://doc/'.$row['doc_nombre'].'&embedded=true" 
		    style="width: 90%; height: 1000px">
		      <p>Your browser does not support iframes.</p>
		    </iframe> 
*/

$salidaJson = array("respuesta" => $respuestaOK,
                    "mensaje" => $mensajeError,
                    "contenido" => $contenidoOK);

echo json_encode($salidaJson); 
?>