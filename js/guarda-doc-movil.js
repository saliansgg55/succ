

//////////////////////////////////////////////
///////// GUARDA DOCUMENTOS DE LA FIJA////////
//////////////////////////////////////////////

$("#form_sube_doc_movil").submit(function(){

        var parametros = new FormData($("form#form_sube_doc_movil")[0]);

        $.ajax({
          data:parametros,
          url: "acciones.php",
          type: "POST",
          contentType: false,
          processData: false,
          //dataType: 'json', 
          beforesend: function(){

          },
          success: function(response){      

              $("#form_sube_doc_movil")[0].reset();
              $("#grillapm").empty();
              $("#grillapm").load('grillas/grilla_documentos.php');
              alertify.success("DOCUMENTO SUBIDO CON EXITO !");

            }
          });
  }); // Cierra Click subir doc
