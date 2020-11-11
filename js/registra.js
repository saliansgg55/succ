$(document).ready(function(){

    $("#cambi").click(function(e){
        e.preventDefault();
        var cambiopass = $("#cambiapass").serialize();
        //alert(cambiopass);

                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "acciones.php", 
                data: cambiopass,                                
                 beforeSend: function () {     

                    },
                success: function(response) {

                    if(response.respuesta == true){       
                        
                        alertify.alert(response.contenido);
                        //$("#perfil_imagen").html("<img  width='300' height='300' id='img_perfil' class='img-thumbnail' src='img/"+response.contenido+"'>");

                            }else{
                                alertify.error(response.contenido);
                            }

                } // Cierra Success
             }); //cierra AJAX           
      
    });



// AGREGA NUEVO PROCESO
$("#gproceso").click(function(event){
    event.preventDefault();
    var agregaproceso = $("#form-procesos").serialize();
    //alert(agregaproceso);

                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "acciones.php", 
                data: agregaproceso,                                
                 beforeSend: function () {     

                    },
                success: function(response) {

                    if(response.respuesta == true)
                    {                               
                        //alertify.alert(response.contenido);
                        $("#respuesta").html('<div class="alert alert-success"><strong>Excelente!</strong> Proceso Insertado.</div>');

                        $('input').val("");
                        $('textarea').val("");

                        setTimeout(function() {
                              $("#respuesta").fadeOut(2000);
                          },3000);    


                        //$("#perfil_imagen").html("<img  width='300' height='300' id='img_perfil' class='img-thumbnail' src='img/"+response.contenido+"'>");
                    }

                } // Cierra Success
             }); //cierra AJAX       

              
});
// AGREGA NUEVO PROCESO


       $("#registra").click(function(e){
        e.preventDefault();

        var string = $("#reg").serialize();
        //alertify.alert(string);


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "acciones.php", 
                data: string,                                
                 beforeSend: function () {     

                    },
                success: function(response) {

                    if(response.respuesta == true){       
                        
                        alertify.success(response.contenido);
                        //$("#perfil_imagen").html("<img  width='300' height='300' id='img_perfil' class='img-thumbnail' src='img/"+response.contenido+"'>");

                            }else{
                                alertify.error(response.contenido);
                            }

                } // Cierra Success
             }); //cierra AJAX        


        }); // Cierra funcion


/////////////////////////////////////////////////////////
/////////////////// LOGUEO ///////////////////
/////////////////////////////////////////////////////////
     /*  $("#loguear").click(function(e){
        e.preventDefault();

        var datoslogin = $("#login").serialize();
        //alertify.alert(datoslogin);


                $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "acciones.php", 
                data: datoslogin,                                
                 beforeSend: function () {     

                    },
                success: function(response) {

                    if(response.respuesta == true){       
                        
                        $(location).attr('href','panel-admin.php');
                        //$("#perfil_imagen").html("<img  width='300' height='300' id='img_perfil' class='img-thumbnail' src='img/"+response.contenido+"'>");
                        //alertify.alert(response.contenido);
                            }else{
                                alertify.error(response.contenido);
                            }

                } // Cierra Success
             }); //cierra AJAX        


        }); // Cierra funcion*/
/////////////////////////////////////////////////////////
/////////////////// LOGUEO ///////////////////
/////////////////////////////////////////////////////////


/* 
Toman los datos del formulario para poder guardarlos en la tabla PM
*/
    $("#guardaagrega").click(function(event){
        event.preventDefault();
        var agrega = $("#formAgrega").serialize();
        //alert(agrega);
            
            $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "acciones.php", 
                data: agrega,                                
                 beforeSend: function () {     

                    },
                success: function(response) {

                    if(response.respuesta == true){

                        //alertify.success(response.contenido);
                        $("#formAgrega")[0].reset();
                        //$('input').val("");
                        //$('select').val("");
                        //$('textarea').val("");
                      
                       $("#grillapm").empty();
                       $("#grillapm").load('grillas/grilla_morosidad_pm.php');                            
                            //$('#myModal').modal().hide();
                            alertify.success("NUEVO PM GUARDADO ");

                            }

                } // Cierra Success
             }); //cierra AJAX      
        
    });


function traedatos(){
    
    location.reload();
} //Cierra funcion


//setTimeout(explode, 2000);


$('body').on('click','#morolista a',function (e){
            e.preventDefault();
    
    $("#tit").hide();
    $("#titprincipal").html('<h4><span class="glyphicon glyphicon-pencil" id="tit" ></span> Editar PM</h4>');

    $("#guardaagrega").hide();
    $("#boton").html('<a href="#" class="btn btn-primary btn-block " id="editacambios"> <span class="glyphicon glyphicon-floppy-disk"></span> Editar Cambios </a>');

    $("#camposocultos").html('<input type="text" class="form-control hidden" id="accion" name="accion" value="edita">');
    //$("#campob").html('<input type="text" class="form-control hidden" id="idpm" name="idpm" >');
        
           // <input type="text" class="form-control hidden" id="idpm" name="idpm" >

   // $('#ver_mor').click(function(){
      
      pm_id = $(this).attr('moro');
      accion = $(this).attr('data-accion');
      
//alert(accion);

if(accion == 'edita')
{                 
                $("h4, #titprincipal").addClass('hidden');
                $("#titprincipal").hide();;
                $("#editaprincipal").removeClass("hidden");
                    
                $('#id_pm').val($(this).parent().parent().children('td:eq(0)').text());
                $('#pm').val($(this).parent().parent().children('td:eq(1)').text());
                $('#im').val($(this).parent().parent().children('td:eq(2)').text());
                $('#correctivo').val($(this).parent().parent().children('td:eq(4)').text());
                $('#asignado').val($(this).parent().parent().children('td:eq(5)').text());
                $('#go_u').val($(this).parent().parent().children('td:eq(8)').text());
                $('#titulo').val($(this).parent().parent().children('td:eq(3)').text());
                $('#estado').val($(this).parent().parent().children('td:eq(6)').text());
                $('#detalle').val($(this).parent().parent().children('td:eq(7)').text());

                //$('#go_u').val($(this).parent().parent().children('td:eq(4)').text());
                /*$('#usuario_dni').val($(this).parent().parent().children('td:eq(5)').text());
                $('#usuario_email').val($(this).parent().parent().children('td:eq(6)').text());*/



 $("#editacambios").click(function(){

    titulo = $('#titulo').val();
    id_pm =  $("#id_pm").val();
    pm    =  $("#pm").val();
    im    =  $("#im").val();
    co    =  $("#correctivo").val();
    as    =  $("#asignado").val();
    go    =  $("#go_u").val();
    es    =  $("#estado").val();
    de    =  $("#detalle").val();
    //alert(titulo);
        
       // var edita = $("#formAgrega").serialize();
        
        
        var parametros = {
            "id_pm" : id_pm,
            "accion" : accion,
            "titulo" : titulo,
            "im"     : im,
            "co"     : co,
            "as"     : as,
            "go"     : go,
            "es"     : es,
            "de"     : de,
            "pm"     : pm  
                        };
   

         // Pasamos el moro_id a la pagina php para mostrar el instructivo.               
         $.ajax({
                cache: false,
                type: "POST",            
                dataType: 'json', 
                url: "acciones.php", 
                data: parametros,                                
                 beforeSend: function () {                                             
                    },
                success: function(response) {

                    if(response.respuesta == true)
                    {  

                       /* $("#contenidopm").empty();                                                     
                        $("#contenidopm").append(response.contenido);*/
                       $("#grillapm").empty();
                       $("#grillapm").load('grillas/grilla_morosidad_pm.php');                         
                        alertify.success(response.mensaje);
                        

                    }

                } // Cierra Success
             }); //cierra AJAX    

         

}); // Cierra click boton editar


}else if (accion == "elimina"){

    var param_elimina = {
            "id_pm" : pm_id,
            "accion" : accion
        };

 $("#dialog-confirm-pm").removeClass('hidden');
 $(function() {
    $("#dialog-confirm-pm").dialog({
      resizable: false,
      height: "auto",
      width: "auto",
      modal: true,
      buttons : [
                {
                    text:'BORRAR',
                    class:'green',
                    click: function() {
                                // COMIENZA FUNCION AJAX
                                    $.ajax({
                                    cache: false,
                                    type: "POST",            
                                    dataType: 'json', 
                                    url: "acciones.php", 
                                    data: param_elimina,                                
                                     beforeSend: function () {                                             
                                        },
                                    success: function(response) {

                                        if(response.respuesta == true)
                                        {  
                                            /*$("#contenidopm").empty();                                                     
                                            $("#contenidopm").append(response.contenido);*/
                                       $("#grillapm").empty();
                                       $("#grillapm").load('grillas/grilla_morosidad_pm.php');                                
                                            
                                            alertify.success("Registro Eliminado <strong>"
                                             + alertify.labels.ok 
                                             + "</strong>");

                                        }

                  
                                        //alertify.alert(response.mensaje);

                                    } // Cierra Success
                                 }); //cierra AJAX    

                                // TERMINA FUNCION AJAX 
                        $(this).dialog("close");                        
                    }                   
                },
                {
                    text:'CANCELAR',
                    class:'red',
                    click: function() {
                        $(this).dialog("close");
                    }                   
                }
            ]
    });
  });




 




}else if (accion == "ver"){        

        var pm = {
           "id_pm" : id_pm,
           "accion" : accion 
        };


                    $.ajax({
                    cache: false,
                    type: "POST",            
                    dataType: 'json', 
                    url: "acciones.php", 
                    data: pm,                                
                     beforeSend: function () {                                             
                        },
                    success: function(response) {

                        if(response.respuesta == true)
                        {  
                            //alert("funciona");
                            //$("#contenidopm").empty();                                                     
                            //$("#contenidopm").append(response.contenido);
                            $("#acapm_verpm").html(response.contenido);
                            //alertify.success(response.contenido);
                            
                            /*alertify.success("Registro Eliminado <strong>"
                             + alertify.labels.ok 
                             + "</strong>");
                            */
                        }

  
                        //alertify.alert(response.mensaje);

                    } // Cierra Success
                 }); //cierra AJAX    

        
}


    

    //}); //Cierra boton que abre modal




/*
$("#cerraae").click(function(){
    location.reload();
});
*/

});    



    }); // Cierra Document ready
