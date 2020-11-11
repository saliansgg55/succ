<?php 
include_once "../accesso_bd.php";
include("../funciones.php");
?>

<!DOCTYPE html>
<html>
<head>
  <!-- JQUERY LIBRERIAS IU PARA DIALOGO -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" type="text/css" href="css/dialog-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <script type="text/javascript">
    $(document).ready(function(){
      
       $('#listaasignacion').DataTable({
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
$('body').on('click','#listaasignacion a',function (e){
      e.preventDefault();
      pm_id = $(this).attr('moro');
      accion = $(this).attr('data-accion');
      //alert(pm_id + ' ' + accion);
   

/*$('body').on('click','#listaasignacion a',function (){
      pm_id = $(this).attr('moro');
      accion = $(this).attr('data-accion');
      alert(pm_id);

}    
*/



  if(accion == 'edita_asigna'){


  // Cambiamos titulo de la modal (para Editar)
  $(".modal-title").text();
  $(".modal-title").text('Editar Grupo Asignacion');
  
  $("#guarda_asignacion").addClass('hidden');
  $("#edita_asignacion").removeClass('hidden');
  //$("#guarda_asignacion").attr("id","edita_asignacion"); //Obtiene y cambia el valor id del Boton (guarda_asignacion)
   //var id_atri = $("#edita_asignacion").attr("id");      



  $('#go_id').val($(this).parent().parent().children('tr#info td:eq(0)').text());
  $('#aplicativo').val($(this).parent().parent().children('tr#info td:eq(1)').text());
  $('#doit').val($(this).parent().parent().children('td:eq(2)').text());

  $('#serv').val($(this).parent().parent().children('td:eq(3)').text());
  $('#ci').val($(this).parent().parent().children('td:eq(4)').text());

  $('#grupo_mail').val($(this).parent().parent().children('td:eq(5)').text());
  $('#fm').val($(this).parent().parent().children('td:eq(6)').text());
  $('#mail_usuario').val($(this).parent().parent().children('td:eq(7)').text());
  $('#soporte').val($(this).parent().parent().children('td:eq(8)').text());
  $('#desa').val($(this).parent().parent().children('td:eq(9)').text());
 


  $("#edita_asignacion").click(function(event){
      event.preventDefault();

      go_id        = $('#go_id').val();
      accion       = accion;
      aplicativo   = $('#aplicativo').val();
      doit         = $('#doit').val();
      serv         = $('#serv').val();
      ci           = $('#ci').val();
      grupo_mail   = $('#grupo_mail').val();
      fm           = $('#fm').val();
      mail_usuario = $('#mail_usuario').val();
      soporte      = $('#soporte').val();
      desa         = $('#desa').val();


        var param_editar_asignacion = {
                  "go_id"       : go_id,
                  "accion"      : accion,
                  "aplicativo"  : aplicativo,
                  "doit"        : doit,
                  "serv"        : serv,
                  "ci"          : ci,
                  "grupo_mail"  : grupo_mail,
                  "fm"          : fm,
                  "mail_usuario": mail_usuario,
                  "soporte"     : soporte,
                  "desa"     : desa       
                                      };

        
      
           $.ajax({
                    cache: false,
                    type: "POST",            
                    dataType: 'json', 
                    url: "acciones.php", 
                    data: param_editar_asignacion,                                
                     beforeSend: function () {                                             
                        },
                    success: function(response) {

                        if(response.respuesta == true)
                        {  
                          
                       $("#form_asignaciones")[0].reset(); 
                       $("#grillapm").empty();
                       $("#grillapm").load('grillas/grilla_asignaciones.php');
                       alert("REGISTRO EDITADO OK");


                        }else{
                          alertify.error(response.contenido);
                        }

  
                        //alertify.alert(response.mensaje);

                    } // Cierra Success
                 }); //cierra AJAX   


  });

    /*
aplicativo
doit
grupo_mail
fm
mail_usuario
soporte
    */
    


  }else if(accion == 'elimina_id_grupo'){

      //////////////////////////////////////////////////////////
      //ID y Accion necesarias para el DELETE en acciones.php
      pm_id = $(this).attr('moro');
      accion = $(this).attr('data-accion')
      //////////////////////////////////////////////////////////
      

      //////////////////////////////////////////////////////////
      // Datos a pasar a acciones.php
      var param_elimina = 
      {
            "id_pm" : pm_id,
            "accion" : accion
      };
      //////////////////////////////////////////////////////////

      //////////////////////////////////////////////////////////
      // Dialogo confirmacion para borrar registro
      //alertify.confirm('¿Borrar de forma permanente?', 
      
 $("#dialog-confirm").removeClass('hidden');
 $(function() {
    $("#dialog-confirm").dialog({
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
                                                  
                                                  
                                                 $("#grillapm").empty();
                                                 $("#grillapm").load('grillas/grilla_asignaciones.php');
                                                 alertify.success(response.contenido); 
                                


                                               }else{
                                                  alertify.error(response.contenido);
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



    




  }else if(accion == 'ver_info_asigna'){

      //////////////////////////////////////////////////////////
      //ID y Accion necesarias para el DELETE en acciones.php
      pm_id = $(this).attr('moro');
      accion = $(this).attr('data-accion')
      //////////////////////////////////////////////////////////

      //////////////////////////////////////////////////////////
      // Datos a pasar a acciones.php
      var param_ver = 
      {
            "pm_id" : pm_id,
            "accion" : accion
      };


      //////////////////////////////////////////////////////////


              // COMIENZA FUNCION AJAX
    //////////////////////////////////////////////////////////
           $.ajax({
                    cache: false,
                    type: "POST",            
                    dataType: 'json', 
                    url: "acciones.php", 
                    data: param_ver,                                
                     beforeSend: function () {                                             
                        },
                    success: function(response) {

                        if(response.respuesta == true)
                        {  
                         
                         $("#acapm_ver").html(response.contenido);

                       }else{
                          alertify.error("Error al intentar abrir informacion");
                        }

  
                        //alertify.alert(response.mensaje);

                    } // Cierra Success
                 }); //cierra AJAX   
      //////////////////////////////////////////////////////////

  } // Termina Cierre del IF Eliminar



     }); //Cierra Click sobre la tabla
}); // Cierra Document Ready   



   
  </script>

</head>
<body>
<div id="dialog-confirm" title="ELIMINAR REGISTRO DE FORMA PERMANENTE?" class="hidden">
  <p>¿Esta seguro que desea borrar este registro de forma permanente de la Base de Datos?</p>
</div>

<div class="container-fluid">
<div class="panel-body bordelista">

 <div class="alert alert-info" role="alert" align="center">
  Informacion detallada los diversos aplicativos, grupo de email y donde se debe derivar/asignar.
 </div>


 <hr> <!-- table table-striped  table-hover table-condensed display -->
  <table id="listaasignacion" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th class="hidden"><small>ID</small></th>
            <th><small>APLICATIVO</small></th>
            <th><small>GRUPO DOIT</small></th>
            <th class="hidden"><small>MAIL.DOIT:</small></th>
            <th class="hidden"><small>SERV.AF</small></th>
            <th class="hidden"><small>CI AF</small></th>
            <th><small>FIJA/MOVIL</small></th>
            <!--<th><small>GO PERTENECE</small></th>-->
            <th><small>MAIL USER</small></th>                      
            <th><small>USUARIO CONTACTO</small></th>
            <th><small>DESA.DOIT</small></th>                                
            <th><small>ULT.MODIF</small></th>
            <th><small></small></th>            
            <th><small></small></th> 
            <th><small></small></th> 
            <!--<th><small>VER</small></th> -->
        </tr>
    </thead>

    <tbody id="contenidopm">
        <?php
        echo grupos();
         ?>
         
     </tbody>
     
    </table>     
  </div>            
</div>
</body>
</html>
