
<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/estilo.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/registra.js"></script>




</head>

<body>

<!-- Modal -->
  <div class="modal fade" id="myModalverfrec" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="fa fa-address-card-o"></span> COB_FREC_HOR</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <div class="container-fluid">
            <small>Listado de procesos correspondientes a la cadena COB_FREC_HOR.</small><br><br>
              <div class="form-group col-lg-6">
                
                <label for="corr">Procesos</label>
                      <select class="form-control " id="proces" name="proces">
                        <option value="Seleccione">Seleccione...</option>
                        
                        <?php
                        $seleccionador = $mysqli->query("SELECT go_npro,id_pro  FROM procesos WHERE go_cadena = 'COB_FREC_HOR' ");

                        while($row = $seleccionador->fetch_array(MYSQLI_ASSOC))
                        {
                          $proceso  = $row['go_npro'];
                          $id_pro = $row['id_pro'];
                          echo "<option value='".$id_pro."'>".$proceso."</option> ";
                        }
                        ?>
                        

                      </select>
              </div> 

              <br><br><br><br><br>
              <div id="detalleprocesosc" >
              </div>

          </div>


              
        <br> 
        </div>
        <div class="modal-footer">
                <div class="col-lg-3"> <img src="image/suceda.png" width="150px" height="40px" align="rigth"></div>
          <button type="submit" class="btn btn-primary  pull-rigth" data-dismiss="modal"> Cerrar</button>
         
        </div>
      </div>
      
    </div>
  </div> 

 
<script>
$(document).ready(function(){
    $("#myBtnverfrec").click(function(){

$("select[name=proces]").change(function(){
        proc = $('select[name=proces]').val();
        cadena = "COB_FREC_HOR";
        accion = "moro";
       //alert(proc + accion);
        //alert($('select[name=proc]').val());
            //$('input[name=valor1]').val($(this).val());
        

       
       var parametros = {
            "accion" : accion,
            "id_pro": proc,
            "cadena": cadena
                        };      

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
                        //alertify.alert(response.contenido);
                        //$("#respuesta").html('<div class="alert alert-success"><strong>Excelente!</strong> Proceso Insertado.</div>');
                        $("#detalleprocesosc").html(response.contenido);
                        //$('input').val("");
                        //$('textarea').val("");

                        /*
                        setTimeout(function() {
                              $("#respuesta").fadeOut(2000);
                          },3000);    
                        */

                        //$("#perfil_imagen").html("<img  width='300' height='300' id='img_perfil' class='img-thumbnail' src='img/"+response.contenido+"'>");
                   }

                } // Cierra Success
             }); //cierra AJAX   

});


        $("#myModalverfrec").modal();
    });
});
</script>
</body>