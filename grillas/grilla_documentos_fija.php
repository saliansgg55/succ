<?php 
include_once "../accesso_bd.php";
include("../funciones.php");
?>

<!DOCTYPE html>
<html>
<head>

<style type="text/css">

</style>

  <script type="text/javascript">
    $(document).ready(function(){
      
       $('#listadocumentos').DataTable({
             "language": {
                              "sProcessing":     "Procesando...",
                              "sLengthMenu":     "Mostrar _MENU_ registros",
                              "sZeroRecords":    "No se encontraron resultados",
                              "sEmptyTable":     "Ningún dato disponible en esta tabla",
                              "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                              "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                              "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                              "sInfoPostFix":    "",
                              "sSearch":         "Buscar:",
                              "sUrl":            "",
                              "sInfoThousands":  ",",
                              "sLoadingRecords": "Cargando...",
                              "oPaginate": {
                                  "sFirst":    "Primero",
                                  "sLast":     "Último",
                                  "sNext":     "Siguiente",
                                  "sPrevious": "Anterior"
                              },
                              "oAria": {
                                  "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                  "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                              }
                          }
       });


    //ACCIONES SOBRE LA GRILLA ASIGNACIONES
$('body').on('click','#listadocumentos a',function (e){
      e.preventDefault();
      id_doc = $(this).attr('moro');
      accion = $(this).attr('data-accion');
      //alert(id_doc + ' ' + accion);

        if(accion == 'ver_doc_fija'){
            id_doc        = id_doc;
            accion       = accion;
            //alert(id_doc + ' ' + accion);

           var ver_documentos = {
                        "id_doc" : id_doc,
                        "accion" : accion              
                                  };

                $.ajax({
                    cache: false,
                    type: "POST",            
                    dataType: 'json', 
                    url: "acciones.php", 
                    data: ver_documentos,                                
                     beforeSend: function () {                                             
                        },
                    success: function(response) {

                        if(response.respuesta == true)
                        {  

                          $("#acapm").html(response.contenido); //Muestra el PDF

                        }else{
                          alertify.error(response.contenido);
                        }


                    } // Cierra Success
                 }); //cierra AJAX   

              
       }else if(accion == 'elimina_doc_fija'){ //cierra IF ver doc    


            id_doc       = id_doc;
            accion       = accion;
            //alert(id_doc + ' ' + accion);

           var elimina_documentos_fija = {
                        "id_doc" : id_doc,
                        "accion" : accion              
                                  };

// Dialogo confirmacion para borrar registro
$("#dialog-confirm-doc-fija").removeClass('hidden');
 $(function() {
    $("#dialog-confirm-doc-fija").dialog({
      resizable: false,
      height: "auto",
      width: "auto",
      modal: true,
      buttons : [
                {
                    text:'BORRAR',
                    class:'green',
                    click: function() {

                        // EMPIEZA FUNCION AJAX
                            $.ajax({
                                cache: false,
                                type: "POST",            
                                dataType: 'json', 
                                url: "acciones.php", 
                                data: elimina_documentos_fija,                                
                                 beforeSend: function () {                                             
                                    },
                                success: function(response) {

                                    if(response.respuesta == true)
                                    {  

                                      $("#grillapm").empty();
                                      $("#grillapm").load('grillas/grilla_documentos_fija.php');
                                      alertify.success(response.contenido);

                                    }else{
                                      alertify.error(response.contenido);
                                    }


                                } // Cierra Success
                             }); //cierra AJAX  
                        // CIERRA FUNCION AJAX 
                        $(this).dialog("close");
                        $("#dialog-confirm-doc-fija").dialog("close");                        
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
    }); // Cierra Dialog-confirm
  });
           


       } // cierra IF Elimina doc    
        
  });
});


  
      
   
  </script>

</head>
<body>

<div id="dialog-confirm-doc-fija" title="ELIMINAR REGISTRO DE FORMA PERMANENTE?" class="hidden">
  <p>¿Esta seguro que desea borrar este registro de forma permanente de la Base de Datos?</p>
</div>

<div class="container-fluid">
<div class="panel-body bordelista">

 
 <div class="alert alert-info" role="alert" align="center">
 <h3>DOCUMENTACION MOROSIDAD FIJA</h3>
 <hr>
  El Instructivo se puede armar en Word con colores y captura de pantalla detallando los pasos a seguir.<br>
  Al momento de Guardarlo hacerlo en <strong><u>Formato PDF</u></strong> y luego subirlo.
 </div>




 <hr><!-- table table-striped  table-hover table-condensed display -->
  <table id="listadocumentos"  class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="hidden"><small>ID</small></th>
            <th><small>TITULO</small></th>
            <th><small>IM/CH EJEMPLO</small></th>
            <th class="hidden"><small>DOCUMENTO:</small></th>
            <th><small>USUARIO</small></th>                                
            <th><small>ULT.MODIF</small></th>
            <th><small></small></th>            
            <th><small></small></th> 
            <!--<th><small>VER</small></th> -->
        </tr>
    </thead>

    <tbody id="contenidopm">
        <?php
        echo documentos_fija();
         ?>
         
     </tbody>
     
    </table>     
  </div>            

</div>
<!--
<div class="graph-outline">
    <object style="width:100%;" data="doc/matiascvact.pdf?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" type="application/pdf">
    <embed src="path/to/file.pdf?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" type="application/pdf" />
    </object>
</div>
-->
<!--
<div class="graph-outline">
    <object style="width:100%;" data="doc/matiascvact.doc?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" type="application/msword">
    <embed src="path/to/file.pdf?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" type="application/msword" />
    </object>
</div>
-->

</body>
</html>
