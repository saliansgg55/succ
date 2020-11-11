
<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/estilo.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/registra.js"></script>




</head>

<body>

<!-- Modal -->
  <div class="modal fade" id="myModalpro" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="fa fa-address-card-o"></span> Agregar proceso</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          
            <div>
            <small style="color:black;">Lista de procesos que se encuentran dentro de la ruta: COBRANZAS --> COB_DIARIA  y una breve descripcion de lo que realiza por dentro.</small>
            </div>
            <br>

          <form role="form" id="form-procesos">
          
            <div class="form-group col-lg-6">
              <label for="nproceso"><span ></span> Nombre del proceso</label>
              <input type="text" class="form-control" id="nproceso" name="nproceso" placeholder="Nombre del proceso">
              <input type="text" class="form-control hidden" id="accion" name="accion" value="verproceso">
            </div>  

              <!-- GRUPO ASIGNADO -->
              <div class="form-group col-lg-6">
                <label for="corr">Cadena:</label>
                      <select class="form-control " id="cadena" name="cadena">
                        <option value="COB_DIARIA">COB_DIARIA</option>
                        <option value="COB_MOROREPORTES">COB_MOROREPORTES</option>
                        <option value="COB_FREC_HOR">COB_FREC_HOR</option>
                        <option value="COB_VERAZ">COB_VERAZ</option>
                      </select>
              </div><br>            
            
            <div class="form-group">  
              <!--<label for="desc"><span class="glyphicon glyphicon-eye-open"></span> Descripcion</label>          -->
              <textarea class="form-control" rows="5" id="desc" name="desc" placeholder="Descripcion..."></textarea>          
            </div><br> 
 
              <!--<button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>-->
              <!--<a href="#" class="btn btn-primary btn-block cambiar" id="cambiopass"><span class="glyphicon glyphicon-floppy-disk"></span> Cambiar Clave</a>-->
              <div id="respuesta"></div>

              <a href="#" class="btn btn-primary btn-block " id="gproceso"> Guardar cambios</a>
          </form>
        
        </div>
        <div class="modal-footer">
          <div class="col-lg-3"> <img src="image/suceda.png" width="150px" height="40px" align="rigth"></div>
          <button type="submit" class="btn btn-primary pull-rigth" data-dismiss="modal"> Cerrar</button>
         
        </div>
      </div>
      
    </div>
  </div> 
</div>
 



 
<script>
$(document).ready(function(){
    $("#myBtnpro").click(function(){
        $("#myModalpro").modal();
    });
});
</script>
</body>