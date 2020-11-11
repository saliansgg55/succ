
//////////////////////////////////////////////
///////// GUARDA DOCUMENTOS DE LA FIJA////////
//////////////////////////////////////////////

$("#form_sube_doc_fija").submit(function(event){
        event.preventDefault();

        var parametros = new FormData($("form#form_sube_doc_fija")[0]);

        //var parametros = $("#enviarimagenes").serialize();
        //alert(parametros);
        $.ajax({
          data:parametros,
          url: "acciones.php",
          type: "POST",
          contentType: false,
          processData: false,
          //dataType: 'json', 
          beforesend: function(){
            //$("#mensaje").html("<img src='img/cargando.gif' />");

          },
          success: function(response){      

          $("#form_sube_doc_fija")[0].reset();
          $("#grillapm").empty();
          $("#grillapm").load('grillas/grilla_documentos_fija.php');
          alertify.success("DOCUMENTO SUBIDO CON EXITO !");
       

            }
          });
    }); // Cierra Click subir doc



