<!DOCTYPE html>
<html>



<head>


<script type="text/javascript">
  $("#form_asignaciones")[0].reset();
</script>


</head>
<body>
<div class="container-fluid">
  <!-- Modal -->
  <div class="modal fade" id="myModalAsignaEdita" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Agregar Grupo Asignacion</h4>
        </div>
       

        <div class="modal-body">
        <div class="container-fluid">
        <!-- FORMULARIO ASIGNA NUEVO GRUPO -->
           <br>
            <div class="row">
                <div class="col-lg-12">
                  <h5><p><u><i>Datos de Asignacion de cada grupo</i></u></p></h5>
                </div>
            </div>
          

           <div class="row">
             <form class="form-horizontal" id="form_asignaciones">
              
                <div class="col-lg-5 ">

               <div class="form-group ">
                  <label for="email">Aplicativo: </label> 
                  <input type="text" class="form-control hidden" id="go_id" name="go_id" >
                  <input type="text" class="form-control " id="aplicativo" name="aplicativo" placeholder="Ej: Siebel, GEO, ICE, etc" required>
                  <input type="text" class="form-control hidden" id="accion" name="accion" value="asigna">


                </div>

               <div class="form-group">
                  <label for="email">Grupo Asignacion DOIT : </label>
                  <input type="text" class="form-control" id="doit" name="doit" placeholder="A quien se dirige el IM, PM, etc.">
                </div>        

               <div class="form-group">
                  <label for="email">Grupo Email DOIT:</label>
                  <input type="text" class="form-control" id="grupo_mail" name="grupo_mail" placeholder="Mail de sector asignado a DOIT">
                </div> 

               <div class="form-group">
                  <label for="email">Grupo Desarrollo DOIT:</label>
                  <input type="text" class="form-control" id="desa" name="desa" placeholder="SLA / Desarrollo">
                </div> 
                                                        

                </div>

                <div class="col-lg-1 "></div>

                <div class="col-lg-5 ">

             <!--<div class="form-group">
                <label for="sel1">Morosidad/Cobranzas:</label>
                <select class="form-control" id="sector" name="sector">
                  <option value="MOROSIDAD">GO Morosidad</option>
                  <option value="COBRANZAS">GO Cobranzas</option>                  
                </select>
              </div>   -->

             <div class="form-group">
                  <label for="email">Servicio Afectado:</label>
                  <input type="text" class="form-control" id="serv" name="serv" placeholder="Servicio afectado">
              </div>     

             <div class="form-group">
                  <label for="email">CI Afectado:</label>
                  <input type="text" class="form-control" id="ci" name="ci" placeholder="CI Afectado">
              </div>                            
              
              <div class="form-group">
                <label for="sel1">Fija/Movil:</label>
                <select class="form-control" id="fm" name="fm">
                  <option value="Fija">Fija</option>
                  <option value="Movil">Movil</option>    
                  <option value="Fija/Movil">Fija/Movil</option>                
                </select>
              </div> 

               <div class="form-group">
                  <label for="email">Email Usuario :</label>
                  <input type="text" class="form-control" id="mail_usuario" name="mail_usuario" placeholder="Grupo mail destinatario">
                </div>        

               <div class="form-group">
                  <label for="email">Contacto Usuario:</label>
                  <input type="text" class="form-control" id="soporte" name="soporte" placeholder="Persona de contacto">
                </div> 

                </div>

              </form>
          </div>


      
        <!-- <p>Some text in the modal.</p> -->
        <!-- FORMULARIO ASIGNA NUEVO GRUPO -->
          
        </div>
        <div class="modal-footer">
          <!--<div class="col-lg-3"> <img src="image/personal.png" width="150px" height="40px" align="rigth"></div>-->
          <div class="col-lg-3"> <img src="image/suceda.png" width="100px" height="30px" align="left"></div>
          <a href="#" id="guarda_asignacion" class="btn btn-primary" data-dismiss="modal" > Guardar </a>
          <a href="#" id="edita_asignacion" class="btn btn-primary hidden" data-dismiss="modal" > GUARDAR CAMBIOS </a>
          <a href="#" class="btn btn-primary " data-dismiss="modal">CANCELAR</a>
          <!--<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">CANCELAR</button>-->
        </div>

        </div><!-- Cierra Container-fluid -->
      </div>
      
    </div>
  </div>
  
</div>


</body>
</html>