$(document).ready(function(){
    $('#morolista').DataTable(); // Formato de la Tabla








$('body').on('click','#morolista a',function (e){
            e.preventDefault();
    
   // $('#ver_mor').click(function(){
      
      moro_id = $(this).attr('moro');
      accion = $(this).attr('data-accion');
      var parametros = {
        "valorCaja1" : moro_id
                        };
//alert(accion);

if(accion == 'ver')
{


         // Pasamos el moro_id a la pagina php para mostrar el instructivo.               
         $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_instructivo.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true)
                    {  
                    //$("#myModal").modal('open');  
                   $('#muestrainst').html(response.contenido); // Agrega el Video
                    $("#nombre_job").html(response.proceso);

                    //$('#probar').html(response.contenido); // Agrega el Video
                   // $("#casa").html(response.proceso);
                    }

                } // Cierra Success
             }); //cierra AJAX 


}else if (accion == "agregar"){
    //moro_id = $(this).attr('moro');

  //data : “variable1=”+parametro_1+“&variable2=”+parametro2+“&variable3=”+parametro_n,
    $("#guardarconocido").click(function(e){
          e.preventDefault();
      var agrega = $("#agregacaso").serialize();
        //alert(agrega);
         $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_agrega.php", 
                data: agrega,
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true)
                    {  

                    
                    //$("#myModal").modal('close');  
                    alertify.success(response.proceso);
                    $("#agregacaso input, #agregacaso textarea").val(''); 
                    $('#myModal').remove(); 
                    //Pasados 2 segundos Actualiza DIV#tabletas
                    setTimeout(function(){
                      location.reload('#tabletas');                      
                    }, 1000);
                    

                    }else{

                    alertify.error(response.mensaje);
                    
                    }

                } // Cierra Success
             }); //cierra AJAX  

    });
    
    //alertify.success(accion);
    //alert(agrega);

}else if (accion == "eliminar"){
  moro_id = $(this).attr('moro');
        var parametros = {
        "valorCaja1" : moro_id
                        };
  accion = $(this).attr('data-accion');
  //"nombre="+nombre,
  //alertify.alert(moro_id);


// Definimos los botones
    alertify.set({ labels: {
    ok     : "Eliminar",
    cancel : "Cancelar"
    } });

// diálogo de confirmación
alertify.confirm("¿ Desea eliminar este registro ?", function (e) {
    if (e) {
        // Usuario ha hecho clic en "aceptar"
        moro_id = $(this).attr('moro');
    //alertify.success('Eliminar');

      //AJAX-AJAX 
           $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_elimina.php", 
                data: parametros,
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true)
                    {  

                    
                    //$("#myModal").modal('close');  
                    alertify.success(response.proceso);                                       
                    //Pasados 2 segundos Actualiza DIV#tabletas
                    setTimeout(function(){
                      location.reload('#tabletas');                      
                    }, 1000);
                    

                    }else{

                    alertify.error(response.mensaje);
                    
                    }

                } // Cierra Success
             }); //cierra AJAX  
  // AJAX-AJAX
        
    } 
});

 
}else if (accion == "editar"){

  moro_id = $(this).attr('moro');
  //dato =  $(this).attr('traer');
  dato = "traer";
  //dato = $("#traer").text("traer");
  //alertify.success(dato);
  var parametros = { "valorCaja1" : moro_id , "traer" : dato};

  // Cambio el texto al Boton
  $("#guardarconocido").text("Editar");
  // Editamos el Titulo
  $("#titulo").text("Editar Caso Conocido");

        //AJAX-AJAX 
           $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "procesa_edita.php", 
                data: parametros,
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true)
                    {  

                    $("#moroid").val(response.moroid);
                    $('#nproceso').val(response.nproceso);
                    $('#desc').val(response.morodesc);
                    $('#error').val(response.moroerror);
                    $('#paso_a').val(response.pasoa);
                    $('#paso_b').val(response.pasob);
                    $('#paso_c').val(response.pasoc);
                    $('#paso_d').val(response.pasod);
                    $('#paso_e').val(response.pasoe);                    
                    

                    }else{

                    alertify.error(response.mensaje);
                    
                    }

                } // Cierra Success
             }); //cierra AJAX  

} // Cierra ELSE


                    // Al apretar el boton editar
                     $("#guardarconocido").click(function(e){
                        e.preventDefault();
                        //data : “variable1=”+parametro_1+“&variable2=”+parametro2+“&variable3=”+parametro_n,
                        //dato = "edita";
                        //alertify.error(datos);
                        //var parametro = { "traer" : dato};
                        alertify.success("Registro Editado OK");
                        //var formu = $("#agregacaso").serialize();
                        //alert(formu);
                        //alert(dato);
                        //alert(formu);
                       //****************************************
                          //AJAX-AJAX 
                        /*   $.ajax({
                                cache: false,
                                type: "POST",            
                                dataType: 'json', 
                                url: "procesa_edita.php", 
                                data: formu,
                                 beforeSend: function () {                                             
                                    },
                                success: function(response) {

                                    if(response.respuesta == true)
                                    {  
                                    
                                    //$("#myModal").modal('close');  
                                    alertify.success(response.mensaje);                                       
                                    //Pasados 2 segundos Actualiza DIV#tabletas
                                    
                                  /*
                                    setTimeout(function(){
                                      location.reload('#tabletas');                      
                                    }, 1000);
                                  */  

                                /*   }else{

                                    alertify.error(response.mensaje);
                                    
                                    }

                                } // Cierra Success
                             }); //cierra AJAX  
                          */
                            // AJAX-AJAX 
                         //****************************************

                     }); 

    //}); //Cierra boton que abre modal

});    


//Funcion auto recargar DIV
function auto_load(){
        $.ajax({
          url: "morosidad.php",
          cache: false,
          success: function(data){
             $("#tabletas").html(data);
          } 
        });
}

/*
$('#someid').addClass("load");

setTimeout(function(){
  $('#someid').addClass("done");
}, 2000);
*/

}); // Cierra Document Jquery ready
