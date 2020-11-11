  <style>
  .modal-header, h4, .close {
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




  <!--<script type="text/javascript" src="js/registra.js"></script>-->


  <!-- Modal -->
  <div class="modal fade" id="myModalhs" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><span class="glyphicon glyphicon-upload"></span> Subir HS Extra</h4>
        </div>
        <div class="modal-body">
          <p> <h6 align="center">Formulario carga de horas Extras.</h6> </p> <br>

        <!-- -->
        <form class="form-horizontal" id="inserta_hs">
          <div class="form-group">
            <label class="control-label col-sm-4" for="email">Usuario: 
            <!--<br> <small><i class="gris">Max 50 caracteres</i></small>--> </label>

            <div class="col-sm-6">
              <input type="text" class="form-control hidden" id="accion" name="accion" value="hs">
              <input type="text" class="form-control" id="go_h_u" name="go_h_u" value="<?php echo $_SESSION['u'] ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Fecha Inicio:
            <!-- <br> <small><i class="gris">Max 300 caracteres</i></small> --> </label>
            <div class="col-sm-6"> 
              <!--<input type="error" class="form-control" id="dterror" name="dterror" placeholder="DETALLES DEL ERROR">-->
              <input type="date" class="form-control" id="go_h_fi" name="go_h_fi" step="1" min="2013-01-01" max="2020-12-31" value="<?php echo date("Y-m-d" );?>">
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Fecha Fin :
            <!--<br> <small><i class="gris">Max 5000 caracteres</i></small>-->
            </label>

            <div class="col-sm-6">               
              <input type="date" class="form-control" id="go_h_ff" name="go_h_ff" step="1" min="2013-01-01" max="2020-12-31" value="<?php echo date("Y-m-d");?>">
            </div>
          </div> 

          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Codigo:
             <!--<br> <small><i class="gris">Max 5 caracteres</i></small>-->
            </label>
            
            <div class="col-sm-6">               
                <!--<label for="sel1">Codigo HS Extra:</label>-->
                <select class="form-control" id="go_h_cod" name="go_h_cod">
                  <option value="EX10">EX10</option>
                  <option value="EX15">EX15</option>
                  <option value="EX20">EX20</option>
                  <option value="EX25">EX25</option>
                  <option value="EX30">EX30</option>
                  <option value="EX40">EX40</option>                  
                  <option value="TD80">TD80</option>
                  <option value="TD80">TD90</option>
                  <option value="G200">G200</option>
                  <option value="G140">G140</option>
                </select>
            
            </div>
          </div>     

          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Cant.HS:
            <!-- <br> <small><i class="gris">Max 2000 caracteres</i></small> -->
            </label>

            <div class="col-sm-4">               
              <input type="text" class="form-control" id="go_h_cant" name="go_h_cant"  placeholder="CANT.NUMERICA">
            </div>
          </div>            


          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Tarea:
            <!--<br> <small><i class="gris">Max 2000 caracteres</i></small>-->
            </label>

            <div class="col-sm-6">               
                <select class="form-control" id="go_h_tarea" name="go_h_tarea">
                  <option value="Intervencion">Intervencion</option>
                  <option value="Guardia Pasiva">Guardia Pasiva</option>
                </select>
            </div>
          </div>       

          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Motivo:
            <!--<br> <small><i class="gris">Max 2000 caracteres</i></small>-->            
            </label>

            <div class="col-sm-6">               
              <input type="text" class="form-control" id="go_h_motivo" name="go_h_motivo"  placeholder="MOTIVO TAREA">
            </div>
          </div>       

          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >CH:
            <!--<br> <small><i class="gris">Max 2000 caracteres</i></small>-->
            </label>

            <div class="col-sm-6">               
              <input type="text" class="form-control" id="go_h_ch" name="go_h_ch"  placeholder="CH">
            </div>
          </div>  

          <div class="form-group">
            <label class="control-label col-sm-4" for="pwd" >Mes:
             <!--<br> <small><i class="gris">Max 5 caracteres</i></small>-->
            </label>
            
            <div class="col-sm-6">               
                <!--<label for="sel1">Codigo HS Extra:</label>-->
                <select class="form-control" id="go_ctrl_mes" name="go_ctrl_mes">                  
                  <option value="Enero">Enero</option>
                  <option value="Febrero">Febrero</option>
                  <option value="Marzo">Marzo</option>
                  <option value="Abril">Abril</option>
                  <option value="Mayo">Mayo</option>
                  <option value="Junio">Junio</option>                  
                  <option value="Julio">Julio</option>
                  <option value="Agosto">Agosto</option>
                  <option value="Septiembre">Septiembre</option>
                  <option value="Octubre">Octubre</option>
                  <option value="Noviembre">Noviembre</option>
                  <option value="Diciembre">Diciembre</option>
                </select>
            
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

        <div id="resp"></div>

        </div>
        <div class="modal-footer">
          <button type="button" id="guardar_hs" class="btn btn-primary">Guardar hora</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar Ventana</button>
        </div>
      </div>
      
    </div>
  </div>


