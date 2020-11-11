<!DOCTYPE html>
<html>



<head>


<script type="text/javascript">
  $("#form_asignaciones")[0].reset();
</script>


</head>
<body>

<div id="dialog-message" title="MENSAJE INFORMATIVO" class="hidden">
  <p> Debe completar los campos obligatorios. </p>
</div>


<div class="container-fluid">
  <!-- Modal -->
  <div class="modal fade" id="myModalSubeMovil" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Subir Documento Morosidad Movil</h4>
        </div>
       

        <div class="modal-body">
        <div class="container-fluid">
        <!-- FORMULARIO ASIGNA NUEVO GRUPO -->
           <br>
            <div class="row">
                <div class="col-lg-12">
                 <div class="alert alert-info">
                  <strong>Info!</strong> Dentro del documento Word puede contenier en caso de ser
                  necesario print de pantalla, paso a paso lo mas detallado posible para que pueda entenderse.                  
                </div>

                <div class="alert alert-warning" role="alert">
                  <b>!IMPORTANTE</b>   
                  <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> Ver ejemplo </a> Al guardar el .doc hacerlo en <STRONG>formato PDF</STRONG>.
                </div>

                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    <div class="graph-outline " align="center"><!-- Documento ejemplo pdf -->
                      <object style=" height:400px; width:500px;" data="doc/ejemplo.pdf?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" type="application/pdf">
                      <embed src="path/to/file.pdf?#zoom=85&scrollbar=0&toolbar=0&navpanes=0" type="application/pdf" />
                      </object>
                    </div>    <!-- Documento ejemplo pdf -->                    
                  </div>
                </div>

                </div>
            </div>
          

           <div class="row">
             
              
              <div class="col-lg-2 "></div>

              <div class="col-lg-8 "><!-- formulario para subir la documentacion -->
                <form class="form-horizontal" id="form_sube_doc_movil">
                  <!--<div class="col-lg-6 ">-->

                     <div class="form-group ">                  
                        <label for="email">Casuistica: </label> 
                        <!--<input type="text" class="form-control hidden" id="go_id" name="go_id" >-->
                        <input type="text" class="form-control " id="casuis" name="casuis" placeholder="Breve Descripcion del problema" required>
                        <input type="text" class="form-control hidden" id="accion" name="accion" value="sube_movil">                    
                     </div>

                     <div class="form-group">
                        <label for="email">IM/CH de Ejemplo : </label>
                        <input type="text" class="form-control" id="im_ej" name="im_ej" placeholder="Nº IM de ejemplo">
                      </div>        

                     <div class="form-group">
                        <label for="email">Usuario: <?php  echo $_SESSION['nombre'].' '.$_SESSION['apellido'] ?></label>
                        <input type="text" class="form-control" id="go_u" name="go_u" value="<?php echo $_SESSION['u']; ?>"  >
                      </div> 

                     <div class="form-group">
                        <label for="email">Documento Formato (pdf):</label>
                        <input type="file" name="doc_movil" id="doc_movil" required>
                      </div>                     
                                                                    
                  <!--</div> -->
                <!-- Cierra Col-lg -->

                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">SUBIR DOCUMENTO</button>
                      </div>

                      <div class="form-group">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">CANCELAR</button>
                      </div>
          
                </form>
                
              </div>                     <!-- formulario para subir la documentacion --> 

              <div class="col-lg-2 "></div>

              
          </div>

          <div class="row"><br></div>


      
     
        <!-- FORMULARIO ASIGNA NUEVO GRUPO -->
          
        </div>
        <div class="modal-footer">
          <!--<div class="col-lg-3"> <img src="image/personal.png" width="150px" height="40px" align="rigth"></div>-->
          <div class="col-lg-3"> <img src="image/suceda.png" width="150px" height="40px" align="left"></div>
 
        </div>

        </div><!-- Cierra Container-fluid -->
      </div>
      
    </div>
  </div>
  
</div>


</body>
</html>