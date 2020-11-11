<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Morosidad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="image/favicon.ico" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Boostrap css -->
  
  <link rel="stylesheet" type="text/css" href="css/index.css"> <!-- Hoja de estilo index.css -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- JQUERY -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Boostrap JS-->

  <link href="alertifyjs/css/alertify.min.css" rel="stylesheet"> <!-- Alertify CSS -->
  <script src="alertifyjs/alertify.min.js"></script> <!--Libreri Alertify -->
  <!--<script type="text/javascript" src="js/registra.js"></script> -->
  <script type="text/javascript" src="js/login.js"></script>
 

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--<a class="navbar-brand" href="#">Go Morosidad</a>-->
        <div class="navbar-brand" >
          <img src="image/personal.png" width="90" height="30" alt="" >  HAGAMOS QUE TODO SUCEDA   <small class="pull-rigth">Sistema unificado de conocimientos compartidos </small>                
        </div>        
    </div>

    <div class="row ">
      <div class="col-lg-6  col-lg-offset-6 logo"> <br>
      </div>
    </div>


  </div>
</nav>
  
<div class="container-fluid">
  
  <div class="row ">

    <div class="col-lg-6 ">

            <!-- FORMULARIO LOGIN ABRE -->
              <form class="modal-content animate" id="login">
                <div class="imgcontainer">
                  <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
                  <img src="image/avatar.png" alt="Avatar" class="avatar" id="imagen_login">
                </div>

                <div class="container-fluid">

                  
                    <div class="form-group">
                      <!--<label class="control-label col-sm-2" for="email">Email:</label>-->
                      <div class="col-sm-10">
                           <label for="psw"><b>Usuario</b></label>
                           <input type="text" placeholder="Usuario" name="user" id="user" required>
                           <input type="text" class="form-control hidden" id="accion" name="accion" value="logeo">
                      </div>
                    </div>
                    <div class="form-group">
                      <!--<label class="control-label col-sm-2" for="pwd">Password:</label>-->
                      <div class="col-sm-10">          
                           <label for="psw"><b>Password</b></label>
                           <input type="password" placeholder="Password" name="pass" id="pass" required>
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="">
                          <label></label>
                        </div>
                      </div>
                    </div>
     
              
                  <div class="row" align="center"> 
                  <a href="#"  id="loguear" class="col-xs-6"  style="text-decoration:none"> INGRESAR</a>
                  </div> 

                  
                </div> <!-- Cierra container FLuid -->

                <div class="container" >                
                </div>
              </form>
              <!-- FORMULARIO LOGIN CIERRA -->
    </div>  <!-- Cierra col-lg-6 -->







    <div class="col-lg-6 ">

      <div class="modal-content animate">
                <div class="imgcontainer">
                  <!--<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
                  <img src="image/tools.jpg" alt="Avatar" class="avatar" id="imagen_login">
                </div>

                <div class="container-fluid">
                
                <div class="row">
                      
                      <p align="center"> <strong> Guardia GO Batch</u> </strong> </p>
                    
                  </div>                

                  <div class="row">                    
                    <!--<button  style="color:white;" id="casos_conocidos" class="tools">Casos Conocidos Morosidad</button>-->
                    <a href="guardia/index.php" class="btn btn-primary tools"> Casos Conocidos Morosidad</a>
                  </div>
                    
                  <div class="row">
                      <hr>
                      <p align="center" class="well"> <strong > Lider: <u>Pablo Sebastian Correa</u> </strong> </p>
                      <hr>
                  </div>

                  <div class="row"></div>
                  <div class="row"></div>

                </div> <!-- Cierra container FLuid -->
                <br>
                <div class="container" >                
                </div>
              </div>           
    </div> <!-- Cierra col-lg-6 -->

  </div><!-- Cierra Row -->
</div> <!-- Cierra Container -->



<!-- Footer -->
<footer class="page-footer font-small blue pt-4">    
    <br><br><br>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="mailto:gsalinas@teco.com.ar"> Todos los derechos reservados</a>
      <img src="image/suceda.png" width="300px" height="100px">
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
</html>



