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
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          
          <form role="form" id="login">
          
            <div class="form-group ">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
              <input type="text" class="form-control" id="user" name="user" placeholder="Ingresa tu U584XXX">
              <input type="text" class="form-control hidden" id="accion" name="accion" value="logeo">
            </div>
          
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Clave">
            </div>
 
              <!--<button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>-->
              <a href="#" class="btn btn-primary btn-block" id="loguear"><span class="glyphicon glyphicon-off"></span> Entrar</a>
          </form>
        
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
         
        </div>
      </div>
      
    </div>
  </div> 
</div>
 








</body>