<?php 
include_once "../accesso_bd.php";
include("../funciones.php");
?>




<script type="text/javascript">
$(document).ready(function(){
   $('#morolista').DataTable({
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
});
</script>
<div id="dialog-confirm-pm" title="ELIMINAR REGISTRO DE FORMA PERMANENTE?" class="hidden">
  <p>¿Esta seguro que desea borrar este registro de forma permanente de la Base de Datos?</p>
</div>


<div class="container-fluid">
<div class="panel-body bordelista">

 <div class="alert alert-info" role="alert" align="center">
  Listado de IM, PM, Correctivos, Evolutivos, detalle de cada uno para darle seguimiento.
 </div>
 
 <hr><!-- table table-striped  table-hover table-condensed display -->
  <table id="morolista" class="display" cellspacing="0" width="100%">
    <thead>
        <tr>
         <th class="hidden"><small>ID</small></th>
         <th><small>PM</small></th>
         <th><small>IM</small></th>
         <th><small>TITULO</small></th>
         <th><small>CORRECTIVO</small></th>
         <th><small>ASIGNADO</small></th>
         <th><small>ESTADO</small></th>
         <th class="hidden"><small>DETALLE</small></th>
         <th><small>USUARIO</small></th>
         <th><small>FECHA ALTA</small></th>                          
         <th><small></small></th> 
         <th><small></small></th> 
         <th><small></small></th> 
        </tr>
    </thead>

    <tbody id="contenidopm">
        <?php
        echo morosidad();
         ?>
         
     </tbody>
     
    </table>     
  </div>            
</div>