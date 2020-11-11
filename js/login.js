$(document).ready(function(){



/////////////////// LOGUEO ///////////////////
       $("#loguear").click(function(){
        //e.preventDefault();

        var datoslogin = $("#login").serialize();


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
                       
                            }else{
                                alertify.error(response.contenido);
                            }

                } // Cierra Success
             }); //cierra AJAX        


        }); // Cierra funcion

/////////////////// LOGUEO ///////////////////


    $("#casos_conocidos").click(function(){
        $(location).attr('href','guardia/index.php');
    });

});