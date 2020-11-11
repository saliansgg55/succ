<?php
include_once "accesso_bd.php";

//Funcion para traer los datos del usuario
function usuario($idmember){
$id = $idmember;
$cuenta = "";
$mysqli = conexionBD(); // Conexion a la Base Hackaton

$info = $mysqli->query("SELECT * FROM user  WHERE idmember = '".$id."' ");
$punto = $mysqli->query("SELECT balancedepuntos FROM account_res  WHERE idaccount_tx = '".$id."' ");

while($row = $punto -> fetch_array(MYSQLI_ASSOC))
    {
      $puntos = $row['balancedepuntos'];

    }

while($res = $info -> fetch_array(MYSQLI_ASSOC))
    {
      $user = $res['username'];
      $tipodni = $res['tipodocumento'];
      $documento = $res['documento'];
      $idmember = $res['idmember'];

$cuenta .='
                      <!-- COMIENZA PANEL -->
                    <div class="panel panel-primary ">
                    <div class="panel-heading"><strong> DETALLES DE USUARIO </strong> <button type="button" id="c_duser" class="close" >&times;</button></div>
                    <div class="panel-body">
                        
                      <div class="row ">
                        <div class=" col-md-12 col-xs-12 col-lg-4 col-sm-6 "><strong>Usuario: </strong>'.$user.'</div>                          
                      </div>

                       <div class="row ">
                        <div class=" col-md-12 col-xs-12 col-lg-4 col-sm-4 "><strong>DNI: </strong>'.$documento.'</div>                          
                      </div>

                       <div class="row ">
                        <div class=" col-md-12 col-xs-12 col-lg-4 col-sm-4 "><strong>Puntos: </strong>'.$puntos.'</div>                          
                      </div>                      

                    </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
';



  }

  return $cuenta; 

} // Termina Funcion Usuario


function cuenta($idmember){


$id = $idmember;
$cuenteleta = "";
//include"accesso_bd.php";

$mysqli = conexionBD();
$cuen = $mysqli->query("SELECT * FROM account  WHERE idmember = '".$id."' ");


while($res = $cuen -> fetch_array(MYSQLI_ASSOC))
    {
      $cuenta = $res['cuenta'];
      $cbu = $res['cbu'];
      $creacion = $res['creationdate'];          

      $cuenteleta .='
                          <!-- COMIENZA PANEL -->
                    <div class="panel panel-primary">
                    <div class="panel-heading"><strong> DATOS DE LA CUENTA </strong> <button type="button" id="c_dcta" class="close" >&times;</button></div>
                    <div class="panel-body">

                      <div class="row ">
                        <div class=" col-md-12 col-xs-12 col-lg-4 col-sm-4 "><strong>Nº Cuenta: </strong>'.$cuenta.'</div>                          
                      </div>

                       <div class="row ">
                        <div class=" col-md-12 col-xs-12 col-lg-4 col-sm-4 "><strong>CBU: </strong>'.$cbu.'</div>                          
                      </div>

                      <div class="row ">
                        <div class=" col-md-12 col-xs-12 col-lg-4 col-sm-4 "><strong>Alta: </strong>'.$creacion.'</div>                          
                      </div>
      
                    </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
      ';
  }
  return $cuenteleta; 

}


function tarjeta($idmember){
$id = $idmember;
$tc = "";
$mysqli = conexionBD(); // Conexion a la Base Hackaton

$info = $mysqli->query("SELECT * FROM tarjeta  WHERE idmember = '".$id."' ");
$punto = $mysqli->query("SELECT balancedepuntos FROM account_res  WHERE idaccount_tx = '".$id."' ");

while($row = $punto -> fetch_array(MYSQLI_ASSOC))
    {
      $puntos = $row['balancedepuntos'];

    }

while($res = $info -> fetch_array(MYSQLI_ASSOC))
    {
      $ntarjeta = $res['nombretarjeta'];
      $numtarjeta = $res['numerotarjeta'];
      $sdeudor = $res['saldodeudor'];
      $idmember = $res['idmember'];


      

$tc .='
                      <!-- COMIENZA PANEL -->
                    <div class="panel panel-primary ">
                    <div class="panel-heading"><strong> TARJETA '.$ntarjeta.' </strong> </div>
                    <div class="panel-body">
                        
                      <div class="row ">
                        <div class=" col-md-12 col-xs-12 col-lg-6 col-sm-6 "><strong>Tarjeta: </strong>'.$ntarjeta.'</div>                          
                      </div>

                       <div class="row ">
                        <div class=" col-md-12 col-xs-12 col-lg-6 col-sm-4 "><strong>Numero: </strong>'.$numtarjeta.'</div>                          
                      </div>

                       <div class="row ">
                        <div class=" col-md-12 col-xs-12 col-lg-6 col-sm-4 "><strong>Saldo Deudor: $</strong>'.$sdeudor.'</div>                          
                      </div>                      

                    </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
';



  }

  return $tc; 

} // Termina Funcion Usuario





  function transferencia($idmember){
$id = $idmember;
$account = "";
//include"accesso_bd.php";

$mysqli = conexionBD();
$cuen = $mysqli->query("SELECT * FROM account  WHERE idmember = '".$id."' ");
$cb = $mysqli->query("SELECT cbu FROM account ");


                       /*$caca .= '<select name="tur_paciente" id="tur_paciente" class="form-control  input-lg ">    
                         ' while($fila = $cb -> fetch_array(MYSQLI_ASSOC)) {
                            //$dni = $fila['prof_dni'];
                               "<option value='".$fila['cbu']."'>".$fila['cbu']." </option>"
                          }'
                       </select>   ';*/
    while($fila = $cuen -> fetch_array(MYSQLI_ASSOC))
        {
            
              
          $account .= '

                              <!-- COMIENZA PANEL -->
                    <div class="panel panel-primary">
                    <div class="panel-heading"><strong> TRANSFERENCIA </strong> <button type="button" id="c_trans" class="close" >&times;</button></div>
                    <div class="panel-body">
                            <div class="row amiga borde"><br>
                            <div class="col-lg-2">
                            <img src="img/mano-amiga.png" alt="Smiley face" height="45" width="45" id="empezar" data-accion="tr" class="img-responsive img-circle fondo-img">                              
                            </div>
                            <div class="col-lg-6 col-lg-offset-2">
                            <p>La Mano amiga lo acompañara en todo el proceso de su operacion guiandote paso a paso.</p>
                            </div>
                            </div>

                            <div class="row">
                            
                             <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                                
                              </div>
                            </div>   <br>

                            <div class="row">
                   
                    

                            <form id="tr">
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              <label> Cuenta Origen</label>
                                 
                                  <input type="hidden" name="usuario" value="web">    
                                  <input type="hidden" name="descripcion" value="Transferencia">
                                  <input type="hidden" name="idtransaccion" value="2">  
                                  <input type="hidden" name="option" value="1"> 

                                  <input type="text" name="cbuori" value="67349200" class="form-control cbo" data-placement="bottom">

                              </div>



                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label> Cuenta Destino</label>
                                  <input type="text" name="cbudes" id="cbudes" value="46823791" class="form-control cbd">
                              </div>    

                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label>Saldo </label>    <br>                              
                                  <input type="text" name="saldo" value="" id="saldo" class="form-control sd">                                  
                              </div>        
                                                           

                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <!--<label>Operar </label>     --><br>
                                  <button type="button" id="transferir" class="btn btn-warning"><span >Transferir</span></button>                                       
                                  <!--<button type="button" id="c_trans" class="btn btn-default"><span >Cancelar Transferencia</span></button>           -->
                                  </select>
                              </div>       
       
                             </form>   
                              
                             <div id="resultado" name="resultado" class="container"> </div>

                            </div>
                    </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
          ';
          }
        

          return $account;
              /* liberar el conjunto de resultados */
              //$resultado->free();
       

} // Cierra funcion


  function transferencia_simula($idmember){
$id = $idmember;
$tr_simula = "";
//include"accesso_bd.php";

$mysqli = conexionBD();
//$cuen = $mysqli->query("SELECT * FROM account  WHERE idmember = '".$id."' ");
//$cb = $mysqli->query("SELECT cbu FROM account ");


                       /*$caca .= '<select name="tur_paciente" id="tur_paciente" class="form-control  input-lg ">    
                         ' while($fila = $cb -> fetch_array(MYSQLI_ASSOC)) {
                            //$dni = $fila['prof_dni'];
                               "<option value='".$fila['cbu']."'>".$fila['cbu']." </option>"
                          }'
                       </select>   ';*/
    /*while($fila = $cuen -> fetch_array(MYSQLI_ASSOC))
        { */
            
              
          $tr_simula .= '

                              <!-- COMIENZA PANEL -->
                    <div class="panel panel-primary">
                    <div class="panel-heading"><strong> TRANSFERENCIA INSTRUCTIVA</strong> <button type="button" id="c_trans_s" class="close" >&times;</button></div>
                    <div class="panel-body">

                            <div class="row amiga borde"><br>
                            <div class="col-lg-2">
                            <img src="img/mano-amiga.png" alt="Smiley face" height="45" width="45" id="trs" data-accion="tr" class="img-responsive img-circle fondo-img">
                            </div>
                            <div class="col-lg-6 col-lg-offset-2">
                            <p>La Mano amiga lo acompañara en todo el proceso de su operacion guiandote paso a paso.</p>
                            </div>
                            </div><br>

                              
                              
                         
                            
                            <div class="row">
                            
                            <form id="tr_s">
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              
                                
                              <label> Cuenta Origen</label>
                                 
                                  <input type="hidden" name="usuario" value="web">    
                                  <input type="hidden" name="descripcion" value="Transferencia">
                                  <input type="hidden" name="idtransaccion" value="2">  
                                  <input type="hidden" name="option" value="2"> 

                                  <input type="text" name="cbuori" id="cbuori" value="67349200" class="form-control ">

                              </div>



                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label> Cuenta Destino</label>
                                  <input type="text" name="cbudes" id="cbudes" value="46823791" class="form-control cbds">
                              </div>    

                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label>Saldo </label>    <br>                              
                                  <input type="text" name="saldo_s" value="" id="saldo_s" class="form-control">                                  
                              </div>        
                                                           

                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <!--<label>Operar </label>     --><br>
                                  <button type="button" id="transferir_s" class="btn btn-warning"><span >Transferir</span></button>    
                                  <!--<button type="button" id="c_trans_s" class="btn btn-default"><span >Cancelar</span></button> -->       
                                  <br><br>
                                  </select>
                              </div>       

                             </form>   
                              
                             <div id="resultado" name="resultado" class="container"> </div>

                            </div>
                    </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
          ';
          //}
        

          return $tr_simula;
              /* liberar el conjunto de resultados */
              //$resultado->free();
       

} // Cierra funcion Transferencia Simulacion






  function pagos($idmember){
$id = $idmember;
$pago = "";
//include"accesso_bd.php";

$mysqli = conexionBD();
$usuario_u = $mysqli->query("SELECT username FROM user  WHERE idmember = '".$id."' ");
//OBTENER USUARIO


    while($fila = $usuario_u -> fetch_array(MYSQLI_ASSOC))
        {
            $user = $fila['username'];
              
          $pago .= '



                              <!-- COMIENZA PANEL -->
                    <div class="panel panel-primary">
                    <div class="panel-heading"><strong> PAGOS </strong> <button type="button" id="c_pg" class="close" >&times;</button></div>
                    <div class="panel-body">
                            <div class="row amiga borde"><br>
                            <div class="col-lg-2">
                            <img src="img/mano-amiga.png" alt="Smiley face" height="45" width="45" id="pgw" data-accion="tr" class="img-responsive img-circle fondo-img">
                            </div>
                            <div class="col-lg-6 col-lg-offset-2">
                            <p>La Mano amiga lo acompañara en todo el proceso de su operacion guiandote paso a paso.</p>
                            </div>
                            </div><br>

                            
                            
                            <form id="pg">
                              
                              
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 >
                              
                                  <input type="hidden" name="idmember" value='.$id.'>
                                  <input type="hidden" name="option" value="3">  
                                  <input type="hidden" name="idtransaccion" value="2">  
                                  <label> Usuario </label>         
                                  <select name="usuario" id="usuario" class="form-control  input-md ">    
                                  <option value='.$user.'>'.$user.'</option>  
                                  
                                  </select>

                              </div>
                              



                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                                  <label> Saldo a abonar</label>
                                  <input type="text" name="monto" id="monto" class="form-control">                                  
                              </div>    


                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                                  <label>Monto a transferir </label>    <br>                              
                                  <select name="descripcion" id="descripcion" class="form-control  input-md ">    
                                  <option value="AYSA">AYSA</option>
                                  <option value="Telecom">Telecom</option>
                                  <option value="Telefonica">Telefonica</option>
                                  <option value="Movistar">Movistar</option>             
                                  </select>
                              </div>        
                              
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                                  <!--<label>Operar </label>     --><br>
                                  <button type="button" id="pagar" class="btn btn-warning"><span >Pagar</span></button>    
                                  <!--<button type="button" id="c_pg" class="btn btn-default"><span >Cancelar</span></button>-->
                                  <br><br>
                                  </select>
                              </div>  

                             </form>   
                              
                             <div id="contenido" class="container"> </div>

                            </div>
                    </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
          ';
          }
        

          return $pago;
              /* liberar el conjunto de resultados */
              //$resultado->free();
       

} // Cierra funcion


//SIMULACION DE PAGO DE SERVICIOS
  function pagos_simulacion($idmember){
$id = $idmember;
$pago_s = "";
//include"accesso_bd.php";

$mysqli = conexionBD();
$usuario_u = $mysqli->query("SELECT username FROM user  WHERE idmember = '".$id."' ");
//OBTENER USUARIO


    while($fila = $usuario_u -> fetch_array(MYSQLI_ASSOC))
        {
            $user = $fila['username'];
              
          $pago_s .= '



                              <!-- COMIENZA PANEL -->
                    <div class="panel panel-primary">
                    <div class="panel-heading"><strong> PAGOS (SIMULACION) </strong> <button type="button" id="c_pg_s" class="close" >&times;</button></div>
                    <div class="panel-body">
                            <div class="row amiga borde"><br>
                            <div class="col-lg-2">
                            <img src="img/mano-amiga.png" alt="Smiley face" height="45" width="45" id="pgs" data-accion="tr" class="img-responsive img-circle fondo-img">
                            </div>
                            <div class="col-lg-6 col-lg-offset-2">
                            <p>La Mano amiga lo acompañara en todo el proceso de su operacion guiandote paso a paso.</p>
                            </div>
                            </div><br>

                            <div class="row">
                            
                            <form id="pg_s">
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              
                              
                              <label> Usuario</label>
                                  <input type="hidden" name="idmember" value='.$id.'>
                                  <input type="hidden" name="option" value="4">  
                                  <input type="hidden" name="idtransaccion" value="2">           
                                  <select name="usuario" id="usuario" class="form-control  input-md user">    
                                  <option value='.$user.'>'.$user.'</option>  
                                  
                                  </select>

                              </div>



                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label> Saldo a abonar</label>
                                  <input type="text" name="monto" id="monto_pgs" class="form-control montos">                                  
                              </div>    


                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label>Servicio  </label>    <br>                              
                                  <select name="descripcion" id="descripcion" class="form-control  input-md desc">    
                                  <option value="AYSA">AYSA</option>
                                  <option value="Telecom">Telecom</option>
                                  <option value="Telefonica">Telefonica</option>
                                  <option value="Movistar">Movistar</option>             
                                  </select>
                              </div>        
                              
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <!--<label>Operar </label>     --><br>
                                  <button type="button" id="pagar_s" class="btn btn-warning"><span >Pagar</span></button>    
                                  <!--<button type="button" id="c_pg_s" class="btn btn-default"><span >Cancelar</span></button> -->
                                  <br><br>
                                  </select>
                              </div>  

                             </form>   
                              
                             <div id="contenido" class="container"> </div>

                            </div>
                    </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
          ';
          }
        

          return $pago_s;
              /* liberar el conjunto de resultados */
              //$resultado->free();
       

} // Cierra funcion


function agregaSaldo($idmember){
$id = $idmember;
$agrega = "";


          $agrega .= '                            <!-- COMIENZA PANEL -->
                    <div class="panel panel-primary ">
                    <div class="panel-heading "><strong> Agregar saldo </strong> <button type="button" id="c_agr" class="close" >&times;</button> </div>
                    <div class="panel-body fondo-formu">
                              

                            <div class="row">
                            <form id="agr">
                              <input type="hidden" name="option" value="12"> 
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <label> CBU Destino </label>
                                <input type="text" name="cbudes" class="form-control">
                              </div>



                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label> Saldo </label>
                                  <input type="text" name="saldo"  class="form-control">                                  
                              </div>    

                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label>Nombre de usuario </label>    <br>                              
                                  <input type="text" name="usuario"  class="form-control">  
                              </div>

                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label>ID Transaccion </label>    <br>                              
                                  <input type="text" name="idtransaccion" value="1"  class="form-control">  
                              </div>          

                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label>ID Descripcion </label>    <br>                              
                                  <textarea type="text" name="descripcion"  class="form-control">  </textarea>
                              </div>                                      
                              
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <!--<label>Operar </label> --><br>
                                  <button type="button" id="agregar_saldo" class="btn btn-warning"><span >Pagar</span></button>    
                                 <!-- <button type="button" id="c_agr" class="btn btn-default"><span >Cancelar</span></button> -->
                                  <br><br>
                                  </select>
                              </div>  

                             </form>   
                              
                             <div id="contenido" class="container"> </div>

                            </div>
                    </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
          ';

  return $agrega;
}


 function pagos_tarjeta($idmember){
$id = $idmember;
$pago_tc = "";
//include"accesso_bd.php";

$mysqli = conexionBD();
$usuario_u = $mysqli->query("SELECT username FROM user  WHERE idmember = '".$id."' ");
//OBTENER USUARIO


    while($fila = $usuario_u -> fetch_array(MYSQLI_ASSOC))
        {
            $user = $fila['username'];
              
          $pago_tc .= '



                              <!-- COMIENZA PANEL -->
                    <div class="panel panel-primary">
                    <div class="panel-heading"><strong> PAGOS DE TARJETAS</strong> <button type="button" id="c_pg_tc" class="close" >&times;</button></div>
                    <div class="panel-body">
                            <div class="row amiga borde"><br>
                            <div class="col-lg-2">
                            <img src="img/mano-amiga.png" alt="Smiley face" height="45" width="45" id="pgtc" data-accion="tr" class="img-responsive img-circle fondo-img">
                            </div>
                            <div class="col-lg-6 col-lg-offset-2">
                            <p>La Mano amiga lo acompañara en todo el proceso de su operacion guiandote paso a paso.</p>
                            </div>
                            </div><br>

                            <div class="row">
                            
                            <form id="pg_tc">
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                              
                              
                              <label> Usuario</label>
                                  <input type="hidden" name="idmember" value='.$id.'>
                                  <input type="hidden" name="option" value="3">  
                                  <input type="hidden" name="idtransaccion" value="4">           
                                  <select name="usuario" id="usuario" class="form-control  input-md utc">    
                                  <option value='.$user.'>'.$user.'</option>  
                                  
                                  </select>

                              </div>



                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label> Saldo a abonar</label>
                                  <input type="text" name="monto" id="monto" class="form-control montotc">                                  
                              </div>    


                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label>Monto a transferir </label>    <br>                              
                                  <select name="descripcion" id="descripcion" class="form-control  input-md desctc">    
                                  <option value="AYSA">AYSA</option>
                                  <option value="Telecom">Telecom</option>
                                  <option value="Telefonica">Telefonica</option>
                                  <option value="Movistar">Movistar</option>             
                                  </select>
                              </div>        
                              
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <!--<label>Operar </label>     --><br>
                                  <button type="button" id="pagar_tc" class="btn btn-warning"><span >Pagar</span></button>    
                                  <!--<button type="button" id="c_pg_tc" class="btn btn-default"><span >Cancelar</span></button>        -->
                                  <br><br>
                                  </select>
                              </div>  

                             </form>   
                              
                             <div id="contenido" class="container"> </div>

                            </div>
                    </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
          ';
          }
        

          return $pago_tc;
              /* liberar el conjunto de resultados */
              //$resultado->free();
       

} // Cierra funcion



 function pagos_celular($idmember){
$id = $idmember;
$pago_cel = "";
//include"accesso_bd.php";

$mysqli = conexionBD();
$usuario_u = $mysqli->query("SELECT username FROM user  WHERE idmember = '".$id."' ");
//OBTENER USUARIO


    while($fila = $usuario_u -> fetch_array(MYSQLI_ASSOC))
        {
            $user = $fila['username'];
              
          $pago_cel .= '



                              <!-- COMIENZA PANEL -->
                    <div class="panel panel-primary">
                    <div class="panel-heading"><strong> RECARGA DE CELULARES </strong> <button type="button" id="c_pg_cel" class="close" >&times;</button></div>
                    <div class="panel-body">
                            <div class="row amiga borde"><br>
                            <div class="col-lg-2">
                            <img src="img/mano-amiga.png" alt="Smiley face" height="45" width="45" id="pgcel" data-accion="tr" class="img-responsive img-circle fondo-img"><br>
                            </div>
                            <div class="col-lg-6 col-lg-offset-2">
                            <p>La Mano amiga lo acompañara en todo el proceso de su operacion guiandote paso a paso.</p>
                            </div>
                            </div><br>

                            <div class="row">
                            
                            <form id="pg_cel">
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                                            
                              <label> Usuario</label>
                                  <input type="hidden" name="idmember" value='.$id.'>
                                  <input type="hidden" name="option" value="3">  
                                  <input type="hidden" name="idtransaccion" value="5">           
                                  <select name="usuario" id="usuario" class="form-control  input-md ucel">    
                                  <option value='.$user.'>'.$user.'</option>  
                                  
                                  </select>

                              </div>



                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label> Saldo a cargar</label>
                                  <input type="text" name="monto" id="monto" class="form-control montocel">                                  
                              </div>    


                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <label>Monto a transferir </label>    <br>                              
                                  <select name="descripcion" id="descripcion" class="form-control  input-md desccel">    
                                  <option value="AYSA">AYSA</option>
                                  <option value="Telecom">Telecom</option>
                                  <option value="Telefonica">Telefonica</option>
                                  <option value="Movistar">Movistar</option>             
                                  </select>
                              </div>        
                              
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                  <!--<label>Operar </label>     --><br>
                                  <button type="button" id="pagar_cel" class="btn btn-warning"><span >Pagar</span></button>    
                                  <!--<button type="button" id="c_pg_cel" class="btn btn-default"><span >Cancelar</span></button>        -->
                                  <br><br>
                                  </select>
                              </div>  

                             </form>   
                              
                             <div id="contenido" class="container"> </div>

                            </div>
                    </div> <!-- Cierra Panel-Body -->
                    </div> <!-- Cierra panel panel-primary -->
          ';
          }
        

          return $pago_cel;
              /* liberar el conjunto de resultados */
              //$resultado->free();
       

} // Cierra funcion




function ver_umov($idmember){
$id = $idmember;
$ver = "";
$mysqli = conexionBD(); // Conexion a la Base Hackaton

$caca = $mysqli->query("SELECT * FROM account a, account_tx at where a.idaccount_tx = at.idaccount_tx and a.idmember= '".$idmember."' ");


while($res = $caca -> fetch_array(MYSQLI_ASSOC))
    {

$ver .='
                        <h3> Detalles de '.$res['description'].' </h3>
                        <div class="row ">
                          <p>
                          Se Transfiere $'.$res['monto'].' (En pesos Argentinos) al CBU Destino: '.$res['cbu'].'<br>
                          en concepto de '.$res['description'].' el día '.$res['creationdate'].' obteniendo por esta Transaccion
                          '.$res['puntos'].' puntos.
                          </p>                                                  
                      </div>  
';



  } // Cierra while

  return $ver; 

} // Termina Funcion Usuario


?>
