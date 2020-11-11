<?php                                                                        
    
    switch ($_POST['option']) {
    case 1:
        inv_prc_transferir_saldo();
        break;    
    case 2:
        inv_prc_transferir_saldo_simulacion();
        break;                             
    case 3:
        inv_prc_pago();
        break;    
    case 4:
        inv_prc_pago_simulacion();
        break;      
    case 5:
        inv_prc_puntos_totales();
        break;
    case 6:
        inv_prc_select_members();
        break;
    case 7:
        inv_prc_ver_tarjetas();
        break;  
    case 8:
        inv_prc_sumatoria_saldo();
        break;   		
    case 12:
        inv_prc_agregar_saldo();
        break;        
}
     
     function inv_prc_pago(){ 
     	$mysqli = new mysqli("localhost", "root", "", "hackaton");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{
		$params="'".$_POST['idmember']."',".$_POST['monto'].",'".$_POST['usuario']."','".$_POST['descripcion']."',".$_POST['idtransaccion'];				
		$result = mysqli_query($mysqli, "CALL prc_pago(".$params.", @v_resultado)") or die("Query fail ".mysqli_connect_error());		
		$result = mysqli_query($mysqli, "SELECT @v_resultado") or die("Query fail ".mysqli_connect_error());
		$row = mysqli_fetch_array($result);
		
		echo "$params<br>";		
		print "Resultado transaccion: ".$row[0];
	}
     }
     
     function inv_prc_pago_simulacion(){
	$mysqli = new mysqli("localhost", "root", "", "hackaton");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{
		$params="'".$_POST['idmember']."',".$_POST['monto'].",'".$_POST['usuario']."','".$_POST['descripcion']."',".$_POST['idtransaccion'];				
		$result = mysqli_query($mysqli, "CALL prc_pago_simulacion(".$params.", @v_resultado)") or die("Query fail ".mysqli_connect_error());		
		$result = mysqli_query($mysqli, "SELECT @v_resultado") or die("Query fail ".mysqli_connect_error());
		$row = mysqli_fetch_array($result);
		
		echo "$params<br>";		
		print "Resultado transaccion: ".$row[0];
	}     
     }
     
     function inv_prc_transferir_saldo(){
	$mysqli = new mysqli("localhost", "root", "", "hackaton");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{
		$params="'".$_POST['cbuori']."','".$_POST['cbudes']."',".$_POST['saldo'].",'".$_POST['usuario']."','".$_POST['descripcion']."',".$_POST['idtransaccion'];								
		$result = mysqli_query($mysqli, "CALL prc_transferir_saldo(".$params.", @v_resultado)") or die("Query fail ".mysqli_connect_error());		
		$result = mysqli_query($mysqli, "SELECT @v_resultado") or die("Query fail ".mysqli_connect_error());
		$row = mysqli_fetch_array($result);
		
		echo "$params<br>";		
		print "Resultado transaccion: ".$row[0];		
	}
     }

     function inv_prc_transferir_saldo_simulacion(){
	$mysqli = new mysqli("localhost", "root", "", "hackaton");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{
		$params="'".$_POST['cbuori']."','".$_POST['cbudes']."',".$_POST['saldo'].",'".$_POST['usuario']."','".$_POST['descripcion']."',".$_POST['idtransaccion'];								
		$result = mysqli_query($mysqli, "CALL prc_transferir_saldo_simulacion(".$params.", @v_resultado)") or die("Query fail ".mysqli_connect_error());		
		$result = mysqli_query($mysqli, "SELECT @v_resultado") or die("Query fail ".mysqli_connect_error());
		$row = mysqli_fetch_array($result);
		
		echo "$params<br>";		
		print "Resultado transaccion: ".$row[0];		
	}
     }
     
     function inv_prc_puntos_totales(){                                                                        
	$mysqli = new mysqli("localhost", "root", "", "hackaton");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{
		$params="'".$_POST['idmember']."'";				
		$result = mysqli_query($mysqli, "CALL prc_puntos_totales(".$params.")") or die("Query fail ".mysqli_connect_error());		
		//$result = mysqli_query($mysqli, "SELECT @v_resultado") or die("Query fail ".mysqli_connect_error());
		$row = mysqli_fetch_array($result);
		
		echo "$params<br>";		
		print "Resultado transaccion: ".$row[0];
	}
     }         
     
     function inv_prc_select_members(){        
     	$mysqli = new mysqli("localhost", "root", "", "hackaton");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{		
		$result = mysqli_query($mysqli, "CALL prc_select_members()") or die("Query fail ".mysqli_connect_error());		
		//$result = mysqli_query($mysqli, "SELECT @v_resultado") or die("Query fail ".mysqli_connect_error());
		while ($row = mysqli_fetch_array($result)){			
		print_r($row['idmember']." ".$row['nombre']." ".$row['apellido']);
		print "<br>";
		}
	}                                                       
     }      	
     
     function inv_prc_agregar_saldo(){       
	$mysqli = new mysqli("localhost", "root", "", "hackaton");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{
		$params="'".$_POST['cbudes']."',".$_POST['saldo'].",'".$_POST['usuario']."','".$_POST['descripcion']."',".$_POST['idtransaccion'];				
		$result = mysqli_query($mysqli, "CALL prc_agregar_saldo(".$params.", @v_resultado)") or die("Query fail ".mysqli_connect_error());		
		$result = mysqli_query($mysqli, "SELECT @v_resultado") or die("Query fail ".mysqli_connect_error());
		$row = mysqli_fetch_array($result);
		
		echo "$params<br>";		
		print "Resultado transaccion: ".$row[0];
	} 
     }    
     
     function inv_prc_ver_tarjetas(){       
	$mysqli = new mysqli("localhost", "root", "", "hackaton");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{
		$params="'".$_POST['idmember']."'";				
		$result = mysqli_query($mysqli, "CALL prc_ver_tarjetas(".$params.")") or die("Query fail ".mysqli_connect_error());		
		//$result = mysqli_query($mysqli, "SELECT @v_resultado") or die("Query fail ".mysqli_connect_error());
		while ($row = mysqli_fetch_array($result)){			
		print_r($row['nombretarjeta']." ".$row['numerotarjeta']." ".$row['saldodeudor']." ".$row['saldoacreedor']." ".$row['vencimiento']);
		print "<br>";
		}
	}
	}               

     function inv_prc_sumatoria_saldo(){       
	$mysqli = new mysqli("localhost", "root", "", "hackaton");
	if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
	}else{
		$params="'".$_POST['idmember']."'";		
        $total=0;		
		$result = mysqli_query($mysqli, "CALL prc_sumatoria_saldo(".$params.")") or die("Query fail ".mysqli_connect_error());		
		//$result = mysqli_query($mysqli, "SELECT @v_resultado") or die("Query fail ".mysqli_connect_error());
		while ($row = mysqli_fetch_array($result)){			
		print_r($row['concepto']." ".$row['monto']);
		$total=$total+$row['monto'];
		print "<br>";
		}
		print "Total: ".$total;
	}
	}
	
?>   