<!DOCTYPE html>
<html>



<head>





</head>
<body>
<div class="container-fluid">
  <!-- Modal -->
  <div class="modal fade" id="myModalEdita" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar Grupo Asignacion</h4>
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
                  <input type="text" class="form-control " id="aplicativo" name="aplicativo" placeholder="Ej: Siebel, GEO, ICE, etc">
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
                <label for="sel1">Fija/Movil:</label>
                <select class="form-control" id="fm" name="fm">
                  <option value="Fija">Fija</option>
                  <option value="Movil">Movil</option>                  
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
          <div class="col-lg-3"> <img src="image/personal.png" width="150px" height="40px" align="rigth"></div>
          <div class="col-lg-3"> <img src="image/personal_palabra.png" width="100px" height="30px" align="left"></div>
          <a href="#" id="guarda_asignacion" class="btn btn-primary" data-dismiss="modal"> Guarda Cambios</a>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
        </div>

        </div><!-- Cierra Container-fluid -->
      </div>
      
    </div>
  </div>
  
</div>


</body>
</html>