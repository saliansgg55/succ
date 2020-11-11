$(document).ready(function(){


$('[data-toggle="popover"]').popover();   


$("#sugerencia").hide();
/////////////	 FUNCION LOGIN
//////////////////////////////////////////////////////////////////////////////////////////////
		$("#submit").click(function(){
			var $btn = $(this).button('loading');

			var user = $("#user").val();
			var pwd = $("#pwd").val();

			// Verificamos que los campos no esten vacios
			if(user == "" && pwd == ""){
				$("#sugerencia").slideDown();
	            $("#sugerencia").html('<strong>Sugerencia!</strong> Usuario y Contraseña vacios' );  
	            $btn.button('reset');
	            setTimeout(function() {
			        $("#sugerencia").fadeOut(1500);
			    },1500); 

	            return false;
			}											
				

		/*	if(user == ""){
				$("#sugerencia").show();
	            $("#sugerencia").html('<strong>Sugerencia!</strong> Falta usuario' );  

	            setTimeout(function() {
			        $("#sugerencia").fadeOut(1500);
			    },1500); 
			}*/
			

			var string = $("#login").serialize();	
			//alert("asdasd");
			//alertify.alert(string);
			$.ajax({
	            cache: false,
	            type: "POST",            
	            dataType: 'json', 
	            url: "procesa/procesa_accesso.php", 
	            data: string,                                 
				 beforeSend: function () {
	                     //Añadimos la imagen de carga en el contenedor
						 //$('#Loginform').hide('slow');
	        			//alert("Antes de enviar");                                                    
	                },
	            success: function(response) {
					//alert("adentro");  
	                //alert(response.mensaje);
	                
	                if(response.respuesta == true){       
	                            
	                            //window.location.href = "http://admin.php";                                 
	                            window.location = ('panel-accion.php'); 
	                            $("#user,#pwd").val("");
	                            alertify.success(response.mensaje);
	                            $btn.button('reset');
	                        }else{  


	                        	$("#user,#pwd").val("");    
	                        	$("#sugerencia").slideDown();
	                        	$("#sugerencia").html('<strong>Sugerencia!</strong> ' + response.mensaje);         
	                        	$btn.button('reset');

	                        	    setTimeout(function() {
								        $("#sugerencia").fadeOut(1500);
								    },1500);             
	                            //alertify.error(response.mensaje);	                            
	                            //$("#respuest").append(response.mensaje).fadeOut(4000); 
	                            //$("input:text, input:password").val(""); 

	                        }

	            } // Cierra Success
       		 }); //cierra AJAX
		
		}); // Cierra Funcion CLick

/////////////	TERMINA FUNCION LOGIN
//////////////////////////////////////////////////////////////////////////////////////////////


	}); // CIERRA DOCUMENT READY