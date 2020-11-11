<style>
  .modal-header, h4, .close {
      background: rgba(179,220,237,1);
background: -moz-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(179,220,237,1)), color-stop(50%, rgba(41,184,229,1)), color-stop(100%, rgba(188,224,238,1)));
background: -webkit-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
background: -o-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
background: -ms-linear-gradient(left, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
background: linear-gradient(to right, rgba(179,220,237,1) 0%, rgba(41,184,229,1) 50%, rgba(188,224,238,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3dced', endColorstr='#bce0ee', GradientType=1 );

      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }

  .gris{color:#ccc;}

  img{padding-top: -5px;}
</style>



<!-- Modal -->
<div id="myModalingresa" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-upload"></span> Subir Casuistica</h4>
      </div>
      <div class="modal-body">
        <small><p align="center">Formulario para poder ingresar dentro de la Base de Datos <br>
        <u>(Guardia Casos Conocidos Morosidad)</u> <br>
        aquellos proceso por los que se pueda tomar accion.</p></small>
        <br>

        <!-- -->
        <form class="form-horizontal" id="inserta_caso">
          <div class="form-group">
            <label class="control-label col-sm-4" for="email">Nombre del proceso: 
            <br> <small><i class="gris">Max 50 caracteres</i></small> </label>

            <div class="col-sm-6">
              <input type="nombreproceso" class="form-control" id="nproceso" name="nproceso" placeholder="NOMBRE DEL PROCESO">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Detalles del error:
            <br> <small><i class="gris">Max 300 caracteres</i></small></label>
            <div class="col-sm-6"> 
              <input type="error" class="form-control" id="dterror" name="dterror" placeholder="DETALLES DEL ERROR">
            </div>
          </div>

          <div class="form-group">
            
            <label class="control-label col-sm-4" for="pwd" >Descripcion del proceso:
            <br> <small><i class="gris">Max 5000 caracteres</i></small>
            </label>

            <div class="col-sm-6">               
              <textarea class="form-control" rows="3" id="descproc" name="descproc" placeholder="DESCRIPCION DE LO QUE REALIZA EL PROCESO"></textarea>
            </div>
          </div> 

          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Paso 1:
             <br> <small><i class="gris">Max 2000 caracteres</i></small>
            </label>
            
            <div class="col-sm-6">               
              <textarea class="form-control" rows="2" id="paso_a" name="paso_a" placeholder="INSTRUCCIONES PASO 1"></textarea>
            </div>
          </div>     

          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Paso 2:
            <br> <small><i class="gris">Max 2000 caracteres</i></small>
            </label>

            <div class="col-sm-6">               
              <textarea class="form-control" rows="2" id="paso_b" name="paso_b" placeholder="INSTRUCCIONES PASO 2"></textarea>
            </div>
          </div>            


          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Paso 3:
            <br> <small><i class="gris">Max 2000 caracteres</i></small>
            </label>

            <div class="col-sm-6">               
              <textarea class="form-control" rows="2" id="paso_c" name="paso_c" placeholder="INSTRUCCIONES PASO 3"></textarea>
            </div>
          </div>       

          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Paso 4:
            <br> <small><i class="gris">Max 2000 caracteres</i></small>
            </label>

            <div class="col-sm-6">               
              <textarea class="form-control" rows="2" id="paso_d" name="paso_d" placeholder="INSTRUCCIONES PASO 4"></textarea>
            </div>
          </div>       

          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Paso 5:
            <br> <small><i class="gris">Max 2000 caracteres</i></small>
            </label>

            <div class="col-sm-6">               
              <textarea class="form-control" rows="2" id="paso_e" name="paso_e" placeholder="INSTRUCCIONES PASO 5"></textarea>
            </div>
          </div>  
          <!--
          <div class="form-group"> 
            <div class="col-sm-offset-2 col-sm-6">
              <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
              </div>
            </div>
          </div>
          -->

          <div class="form-group"> 
            <div class="col-sm-offset-1 col-sm-10 col-lg-6">
              <!--<button type="button" id="guardar_caso" class="btn btn-primary">Guardar Caso</button>-->
            </div>
          </div>

        </form>
        <!-- -->
        <div id="res"></div>
      </div>
      <div class="modal-footer">
      <div class="col-lg-4 ">
      <img src="https://upload.wikimedia.org/wikipedia/commons/c/c4/Personal_logonuevo.png" width="80px" heigth="50px"  class="img-responsive">
      </div>
      <!--<small class="col-lg-4 col-lg-offset-1"><i>Hagamos que todo suceda</i></small>-->
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar Ventana</button>
        <button type="button" id="guardar_caso" class="btn btn-info">Guardar Caso</button>
      </div>
    </div>

  </div>
</div>