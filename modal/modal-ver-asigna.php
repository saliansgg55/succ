<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--<link href="css/estilo.css" rel="stylesheet">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/registra.js"></script>

<style type="text/css">
.texto{
  font-size: 10px;
  color: black;
}
</style>

</head>

<body>

<!-- Modal -->
<div id="myModalverAsigna" class="modal fade" role="dialog">
  <div class="modal-dialog modal-md">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:5px 5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 id="titprincipal" class="letra"> Información</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">

          <form id="refresca">
            <input type="text" class="form-control hidden" id="accion" name="accion" value="traedatos">
            <input type="text" class="form-control hidden" id="idpm" name="idpm" >
          </form>  
          

          <div class="row ">
            <div class="col-lg-12">
            <h5><div id="acapm_ver" class="texto"><!-- Aca Resultado --></div></h5>           
            </div>
          </div>

        
        </div>
        <br>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary pull-right btn-sm" data-dismiss="modal">CERRAR VENTANA</button>
          <div class="col-lg-3"> <img src="image/suceda.png" width="150px" height="40px" align="rigth"></div>
          <!--<div class="col-lg-3"> <img src="image/personal.png" width="100px" height="30px" align="left"></div>-->
          <!--<button type="submit" id="cerraae" class="btn btn-primary btn-primary  pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>-->
          
        </div>
      </div>

  </div>
</div>
<script>
$(document).ready(function(){

    //$("#btnagrega").click(function(){
      //  $("#myModalver").modal();
    //});
});
</script>
</body>