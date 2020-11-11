
<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/estilo.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/registra.js"></script>




</head>

<body>

<!-- Modal -->
  <div class="modal fade" id="myModalpass" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:5px 5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> ELIMINAR REGISTRO</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          
          <form role="form" id="cambiapass">
          
            <div class="form-group ">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> <?php  echo $_SESSION['u'].' '.$_SESSION['nombre'].' '.$_SESSION['apellido'] ?></label>
              <input type="text" class="form-control" id="user" name="user" placeholder="<?php  echo $_SESSION['u']; ?>">
              <input type="text" class="form-control hidden" id="accion" name="accion" value="cambiopass">
            </div>
          
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Nueva clave</label>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingresar Nueva Clave">
            </div>
 
              <!--<button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>-->
              <!--<a href="#" class="btn btn-primary btn-block cambiar" id="cambiopass"><span class="glyphicon glyphicon-floppy-disk"></span> Cambiar Clave</a>-->
              <!--<a href="#" class="btn btn-primary btn-block " id="cambi"> CAMBIAR CLAVE</a>-->
          </form>
        
        </div>
        <div class="modal-footer">
        <div class="col-lg-3"> <img src="image/suceda.png" width="150px" height="40px" align="rigth"></div>
        <a href="#" class="btn btn-primary  " id="cambi"> CAMBIAR CLAVE</a>
        <a href="#" class="btn btn-primary  pull-rigth" data-dismiss="modal"> CERRAR VENTANA</a>
        <!--<button type="submit" class="btn btn-primary  pull-rigth" data-dismiss="modal"> CERRAR VENTANA</button>-->
         
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtnpass").click(function(){
        $("#myModalpass").modal();
    });
});
</script>
</body>