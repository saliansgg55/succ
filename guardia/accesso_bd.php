<?php

$mysqli = new mysqli("localhost", "root", "", "guardia");


if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}else{
	//echo "Conexion OK";
}


function conexionBD(){
	$mysqli = new mysqli("localhost", "root", "", "guardia");

	/* check connection */
	if (mysqli_connect_errno()) {
	    printf("Connect failed: %s\n", mysqli_connect_error());
	    exit();
	}else{
		//echo "Conexion OK";
	}

	return $mysqli;
}
?>