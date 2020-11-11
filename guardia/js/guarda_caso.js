$(document).ready(function(){

$("#guardar_caso").click(function(e){
		e.preventDefault();
		//alertify.alert("Probando boton de guardar caso");

	// Tomamos los datos del Formulario	
	var string = $("#inserta_caso").serialize();
	//alert(string);

         // Pasamos el moro_id a la pagina php para mostrar el instructivo.               
         $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_inserta_caso.php", 
                data: string,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true)
                    { 

                     //alertify.alert(response.contenido);
                    //$("#myModal").modal('open');  
                    
                    $("#res").html("<div class='alert alert-success'><strong>Exito!</strong> Casuistica insertada.</div>");
                    $("#inserta_caso input, #inserta_caso textarea").val('');
                        setTimeout(function(){
    				    $('#res').fadeOut('slow');
    					},3000);

                    }else{
                     
                     $("#res").html("<div class='alert alert-danger'><strong>Error!</strong> No se pudo insertar.</div>");
                     $("#inserta_caso input, #inserta_caso textarea").val(''); 	
                    	setTimeout(function(){
    				    $('#res').fadeOut('slow');
    					},3000);
                    }

                } // Cierra Success
             }); //cierra AJAX  


});

});