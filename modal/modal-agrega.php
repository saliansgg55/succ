<head>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--<link href="css/estilo.css" rel="stylesheet">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/registra.js"></script>



</head>

<body>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:5px 5px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 id="titprincipal"> AGREGAR NUEVO PM</h4>
          <h4 id="editaprincipal" class="hidden">EDITAR PM</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">

          <form id="refresca">
            <input type="text" class="form-control hidden" id="accion" name="accion" value="traedatos">
            <input type="text" class="form-control hidden" id="idpm" name="idpm" >
          </form>  
          
             <form id="formAgrega">

               <div class="form-group col-lg-6 hidden" id="camposocultos">


               </div>
               <input type="text" class="form-control hidden" id="id_pm" name="id_pm" >

              <!-- PM -->
              <div class="form-group col-lg-6">
                <label for="pm">PM:</label>
                <input type="text" class="form-control" id="pm" name="pm" placeholder="Nº PM">
              </div>

              <!-- IM -->
              <div class="form-group col-lg-6">
                <label for="im">IM:</label>
                <input type="text" class="form-control" id="im" name="im" placeholder="Nº IM">
              </div>

              <!-- CORRECTIVO -->
              <div class="form-group col-lg-6">
                <label for="corr">Correctivo:</label>
                <input type="text" class="form-control" id="correctivo" name="correctivo" placeholder="Nº Correctivo">
              </div>
   
              <!-- GRUPO ASIGNADO -->
              <div class="form-group col-lg-6">
                <label for="corr">Grupo Asignado:</label>
                      <select class="form-control " id="asignado" name="asignado">
                        <option value="POSVENTA">WS_GO_POSVENTA</option>
                        <option value="DESARROLLO">APL_MOROSIDAD_Y_ABOGADOS</option>
                        <option value="COBRANZAS">WS_GO_COBRANZAS</option>
                        <option value="COBRANZAS">WS_GO_SIEBEL</option>
                      </select>
              </div>

              <!-- U5848xxx -->
              <div class="form-group col-lg-6">
                <label for="u">GO U:</label>
                <input type="text" class="form-control" id="go_u" name="go_u" value="<?php echo $_SESSION['u']; ?>">
              </div>              

              <!-- TITULO -->
              <div class="form-group col-lg-6">
                <label for="u">Titulo:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo">
              </div>                

              <!-- ESTADO -->
              <div class="form-group col-lg-6">
                <label for="corr">Estado:</label>
                      <select class="form-control " id="estado" name="estado">
                        <option value="Pendiente">Pendiente</option>
                        <option value="En proceso">En proceso</option>
                        <option value="Cerrado">Cerrado</option>
                        <option value="Resuelto">Resuelto</option>
                      </select>
              </div>      

              <div class="form-group col-lg-6">                
                <input type="text" class="form-control hidden" id="umodif" name="umodif" value="<?php echo $_SESSION['u']; ?>">
                <input type="text" class="form-control hidden" id="accion" name="accion" value="agregapm">
              </div>       

              <!-- DETALLE -->
              <div class="form-group" >
                <!--<label for="detalle">Detalle:</label>-->
                <textarea class="form-control" rows="5" id="detalle" name="detalle" placeholder="Comentarios..."></textarea>

              </div>                                  

              <div id="boton">
              <!--<a href="#" class="btn btn-primary btn-block " id="guardaagrega" data-dismiss="modal">  GUARDAR CAMBIOS</a>-->
              </div>
              
            </form>
        
        </div>
        <br>
        <div class="modal-footer">
          <div class="col-lg-3"> <img src="image/suceda.png" width="150px" height="40px" align="rigth"></div>
          <a href="#" class="btn btn-primary " id="guardaagrega" data-dismiss="modal">  GUARDAR CAMBIOS</a>
          <a href="#" id="cerraae" class="btn btn-primary  " data-dismiss="modal">CERRAR VENTANA</a>
          <!--<button type="submit" id="cerraae" class="btn btn-primary  pull-rigth" data-dismiss="modal"> CERRAR VENTANA</button>-->
          
        </div>
      </div>

  </div>
</div>
<script>
$(document).ready(function(){

    //$("#btnagrega").click(function(){
      //  $("#myModala").modal();
    //});
});
</script>
</body>