<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/estilo.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/registra.js"></script>



</head>

<body>

<!-- Modal -->
  <div class="modal fade" id="myModalRegistra" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-user"></span> Registrarse</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          
          <form role="form" id="reg">
           
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Nombre de usuario</label>
              <input type="text" class="form-control" id="user" name="user" placeholder="Ingresa tu U584XXX">
              <input type="text" class="form-control hidden" id="accion" name="accion" value="registra">
            </div>
           
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="pass" name="pass" placeholder="Clave">
            </div>

             <div class="form-group">
              <label for="nombre"><span class="glyphicon glyphicon-user"></span> Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>

             <div class="form-group">
              <label for="apellido"><span class="glyphicon glyphicon-user"></span> Apellido</label>
              <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido">
            </div>

              <!--
              <button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-off" id="registra"></span> Registrar</button>
            -->
              <a href="#" class="btn btn-info btn-block" id="registra"><span class="glyphicon glyphicon-off" ></span> Registra</a>
          </form>
        
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar </button>
          <p>Hagamos que todo suceda</p>
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtnRegistra").click(function(){
        $("#myModalRegistra").modal();
    });
});
</script>
</body>