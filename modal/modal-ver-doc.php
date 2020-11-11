<head>
  

<style type="text/css">
  
/*CSS para el container que muestra el PDF*/
#contenedor_pdf{ border: solid 1px #ccc;}  
#instructivo{color: white;}
</style>


</head>

<body>

<!-- Modal -->
<div id="myModalverdoc" class="modal fade" role="dialog" >
  <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:5px 5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h3 id="instructivo" class="letra"><span class="" id="tit" ></span> INSTRUCTIVO</h3>
        </div>
        <div class="modal-body" style="padding:40px 50px;">

          <form id="refresca">
            <input type="text" class="form-control hidden" id="accion" name="accion" value="traedatos">
            <input type="text" class="form-control hidden" id="idpm" name="idpm" >
          </form>  
          

          <div class="row ">
            <div class="col-lg-12" id="contenedor_pdf">
            <h5><div id="acapm" class="texto"><!-- Aca Resultado --></div></h5>           
            </div>
          </div>

        
        </div>
        <br>
        <div class="modal-footer">
          
          <a href="#" class="btn btn-primary pull-right btn-sm" data-dismiss="modal">CERRAR VENTANA</a>
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