$(document).ready(function(){
  //$("#form_asignaciones")[0].reset();


/*
$("#guarda_asignacion_guardar").click(function(event){
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
*/

/*
  $("#form_asignaciones")[0].reset();

  $("#guarda_asignacion").click(function(){
    alert("asdasd");
    
if($("#aplicativo").val().length < 1 ){
    alertify.alert("Hay campos que son obligatorios");
    $("#form_asignaciones")[0].reset();
}else{

    var formu_asigna = $("#form_asignaciones").serialize();
    //alert(formu_asigna);
    
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
                       $("#grillapm").load('grilla_asignaciones.php');
                       $("#form_asignaciones")[0].reset();

                       alertify.success(response.contenido);
                       

                    
                        //$('textarea').val("");


                        //$("#perfil_imagen").html("<img  width='300' height='300' id='img_perfil' class='img-thumbnail' src='img/"+response.contenido+"'>");
                    }else{

                      alertify.error(response.contenido);
                      $("#form_asignaciones")[0].reset();
                    }

                } // Cierra Success
             }); //cierra AJAX    

  } //Cierre IF Validacion campo vacio
  
  });
*/

      $("#grillapm").empty();
      $("#grillapm").load('grillas/grilla_asignaciones.php');



}); // Cierra Document ready