

$("#form_asignaciones_g").submit(function(event){
	event.preventDefault();


    var formu_asigna = $("#form_asignaciones_g").serialize();
    

               $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "acciones.php", 
                data: formu_asigna,                                
                 beforeSend: function () {                       
                    },
                success: function(response) {
                  
                    if(response.respuesta == true)
                    {         
                       $("#grillapm").empty();
                       $("#grillapm").load('grillas/grilla_asignaciones.php');
                       $("#form_asignaciones_g")[0].reset();
                       alertify.success(response.contenido);                       
                    }else{
                      alertify.error(response.contenido);
                      $("#form_asignaciones_g")[0].reset();
                      $('#myModalAsigna').modal(toggle); // CIERRA MODAL
                    }

                } // Cierra Success
             }); //cierra AJAX    

         

});