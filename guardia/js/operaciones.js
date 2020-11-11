$(document).ready(function(){


// Vistas
/*
umv
tarjeta
agenda
datoscuenta
trans
umv_cel
tarjeta_cel
agenda_cel
datoscuenta
trans_s
pagos
pagos_s
agrsaldo
pg_tarjeta
pg_celular
*/

/*
 #umv
,#tarjeta
,#agenda
,#datoscuenta
,#trans
,#umv_cel
,#tarjeta_cel
,#agenda_cel
,#datoscuenta
,#trans_s
,#pagos
,#pagos_s
,#agrsaldo
,#pg_tarjeta
,#pg_celular
*/
// Botones a apretar
/*u_mov

ver_tc
ver_ag_cel
ver_ctas
tr_saldo
tr_saldo_c
u_mov_cel
ver_tc_cel
ver_ag_cel
ver_ctas_cel

tr_simulacion
tr_simulacion_c
pg_servicios_c
pg_servicios
pg_servicios_s
pg_servicios_s_c
agsaldo
agsaldo_c
pago_tarjetas
pago_tarjetas_c
pago_celular
pago_celular_c
*/
  //$("#trans,#agrsaldo,#pagos,#trans_s,#pagos_s,#pg_tarjeta,#pg_celular").addClass("hidden");
  $("#agrsaldo,#pagos,#trans_s,#pagos_s,#pg_tarjeta,#pg_celular").hide();
  // Comienza acciones para Grilla Ultimos movimientos
  $("#umv").hide(); // Oculta ultimos movimientos y ver tarjetas de credito
  $("#umv").removeClass("hidden");
  $("#u_mov").click(function(){ $("#umv").fadeIn(500); });
  $("#c_mv").click(function(){ $("#umv").fadeOut(500); });
  // Termina acciones para Grilla Ultimos movimientos

  // Comienza acciones para ver Grilla Tarjeta de credito
  $("#tarjeta").hide();
  $("#tarjeta").removeClass("hidden");
  $("#ver_tc").click(function(){ $("#tarjeta").fadeIn(500); });
  $("#c_tc").click(function(){ $("#tarjeta").fadeOut(500); });
  // Termina acciones para ver Grilla Tarjeta de credito


  // Comienza acciones para ver Grilla Agenda
  $("#agenda").hide();
  $("#agenda").removeClass("hidden");
  $("#ver_ag").click(function(){ $("#agenda").fadeIn(500); });
  $("#ver_ag_cel").click(function(){ $("#agenda").fadeIn(500); });
  $("#c_ag").click(function(){ $("#agenda").fadeOut(500); });
  // Termina acciones para ver Grilla Agenda


  // Comienza acciones para ver Datos de la Cuenta
  $("#datoscuenta").hide();
  $("#datoscuenta").removeClass("hidden");
  $("#ver_ctas").click(function(){ $("#datoscuenta").fadeIn(500); });
  $("#ver_ctas").click(function(){ $("#datoscuenta").fadeIn(500); });
  $("#c_dcta,#c_duser").click(function(){ $("#datoscuenta").fadeOut(500); });
  // Termina acciones para ver Datos de la Cuenta

    // Comienza acciones para ver Transferencia de saldo
  $("#trans").hide();
  $("#trans").removeClass("hidden");
  $("#tr_saldo,#tr_saldo_c").click(function(){ $("#trans").fadeIn(500); });
  $("#tr_saldo,#tr_saldo_c").click(function(){ $("#trans").fadeIn(500); });
  $("#c_trans").click(function(){ $("#trans").fadeOut(500); });
  // Termina acciones para ver Transferencia de saldo

  // Vista ultimos movimientos Vista para Celular
  $("#umv_cel").hide();
  $("#umv_cel").removeClass("hidden");
  $("#u_mov_cel").click(function(){ $("#umv_cel").fadeIn(500); });
  $("#c_mv_cel").click(function(){ $("#umv_cel").fadeOut(500); });

  // Vista ultimos movimientos Vista Celular Tarjetas
  $("#tarjeta_cel").hide();
  $("#tarjeta_cel").removeClass("hidden");
  $("#ver_tc_cel").click(function(){ $("#tarjeta_cel").fadeIn(500); });
  $("#c_tc_cel").click(function(){ $("#tarjeta_cel").fadeOut(500); });
  
  // Vista ultimos movimientos Vista Celular Agenda
  $("#agenda_cel").hide();
  $("#agenda_cel").removeClass("hidden");
  $("#ver_ag_cel").click(function(){ $("#agenda_cel").fadeIn(500); });
  $("#c_ag_cel").click(function(){ $("#agenda_cel").fadeOut(500); });

  // Vista ultimos movimientos Vista Celular Cuentas
  $("#datoscuenta").hide();
  $("#datoscuenta").removeClass("hidden");
  $("#ver_ctas_cel").click(function(){ $("#datoscuenta").fadeIn(500); });
  $("#c_ct_cel").click(function(){ $("#datoscuenta").fadeOut(500); });


   /* $("#tr_saldo").click(function(){
        //$("#trans").removeClass("hidden");
        $("#trans").fadeIn(500);
        $btn.button('reset');
    });



    $("#c_trans").click(function(){
        $("#trans").fadeOut('slow');
    });*/

    $("#transferir").click(function(){
      //var saldo = $("#saldo").val();
      //var desc = $("#descripcion").val();

          if($("#saldo").val().length < 1) {  
                 alertify.error("Dene ingresar Monto a transferir");  
                 //$("#error_saldo").css('color','red').text("Debe ingresar un monto").fadeOut(4000);
                 return false;              
                 }else{

   var num_real = $("#saldo").val();
   var numero = $("#saldo").val() / 100 ;                
  // CALCULO PARA LOS PUNTOS OBTENIDOS EN ESTA TRANSFERENCIA
     if( numero < 1){  
      var n = 0; 
       }else{
          
          if( num_real >= 1000){
            var n = numero.toPrecision(2); 
          }else{
            var n = numero.toPrecision(1); 
          }
      }

      var str = $("#tr").serialize();
        //alert(str);


       $.ajax({
                beforeSend: function(){
                  //alert("Antes de entrar");
                },
              cache: false,
                type: "POST",
                dataType: "json",
                url:"prueba.php",                
                data:str,  
                success: function(response){                          
                    //alert("adentro");
                    if(response.respuesta == true){

                      $("#saldo").val('');                                            
                      alertify.success(response.contenido + " " + " Puntos recibidos: " + n);                                    

                    }else{
                      alertify.error(response.mensaje);
                    }

                  } // Cierra Success

              }); // Cierra Ajax
    }

    });


////////////////////////////////////////////////////
/// TRANSFERENCIA SIMULACION
////////////////////////////////////////////////////

// Comienza Acciones para Pago de Tarjetas
  $("#trans_s").hide();
  $("#trans_s").removeClass("hidden");
  $("#tr_simulacion,#tr_simulacion_c").click(function(){ $("#trans_s").fadeIn(500); });
  $("#tr_simulacion,#tr_simulacion_c").click(function(){ $("#trans_s").fadeIn(500); });
  $("#c_trans_s").click(function(){ $("#trans_s").fadeOut(500); });
// Termina Acciones para AgPago de Tarjetas


 $("#transferir_s").click(function(){
      //var saldo = $("#saldo").val();
      //var desc = $("#descripcion").val();

          if($("#saldo_s").val().length < 1) {  
                 alertify.error("Dene ingresar Monto a transferir");  
                 //$("#error_saldo").css('color','red').text("Debe ingresar un monto").fadeOut(4000);
                 return false;              
                 }else{

 var num_real = $("#saldo_s").val();
  var numero = $("#saldo_s").val() / 100 ;
  //var n = numero.toPrecision(1);
  //alert(n);

  // CALCULO PARA LOS PUNTOS OBTENIDOS EN ESTA TRANSFERENCIA
     if( numero < 1){  
      var n = 0; 
       }else{
          
          if( num_real >= 1000){
            var n = numero.toPrecision(2); 
          }else{
            var n = numero.toPrecision(1); 
          }
      }

      
        var str = $("#tr_s").serialize();
        //alert(str);


       $.ajax({
                beforeSend: function(){
                  //alert("Antes de entrar");
                },
              cache: false,
                type: "POST",
                dataType: "json",
                url:"prueba.php",                
                data:str,  
                success: function(response){                          
                    //alert("adentro");
                    if(response.respuesta == true){

                      $("#saldo_s").val('');                      
                      alertify.success(response.contenido + " " + " Puntos recibidos: " + n);
           

                    }else{
                      alertify.error(response.mensaje);
                    }

                  } // Cierra Success

              }); // Cierra Ajax
    }

    });
////////////////////////////////////////////////////
/// TERMINA TRANSFERENCIA SIMULACION
////////////////////////////////////////////////////
 

////////////////////////////////////////////////////
/// PAGO DE SERVICIOS
////////////////////////////////////////////////////


// Comienza Acciones para Pago de servicio CEL
  $("#pagos").hide();
  $("#pagos").removeClass("hidden");
  $("#pg_servicios_c,#pg_servicios").click(function(){ $("#pagos").fadeIn(500); });
  $("#pg_servicios_c,#pg_servicios").click(function(){ $("#pagos").fadeIn(500); });
  $("#c_pg").click(function(){ $("#pagos").fadeOut(500); });
// Termina Acciones para Pago de servicio CEL



$("#pagar").click(function(){

            if($("#monto").val().length < 1) {  
                 alertify.error("Dene ingresar Monto a transferir");  
                 //$("#error_saldo").css('color','red').text("Debe ingresar un monto").fadeOut(4000);
                 return false;              
                 }else{

  var str = $("#pg").serialize();
  //alert(str);
  var num_real = $("#monto").val();
  var numero = $("#monto").val() / 100 ;


     if( numero < 1){  
      var n = 0; 
       }else{
          
          if( num_real >= 1000){
            var n = numero.toPrecision(2); 
          }else{
            var n = numero.toPrecision(1); 
          }
      }

   $.ajax({
                beforeSend: function(){
                  //$("#contenido").html("Procesando").fadeOut(3000);
                },
              cache: false,
                type: "POST",
                dataType: "json",
                url:"prueba.php",                
                data:str,  
                success: function(response){                          
                    //alert("adentro");
                    if(response.respuesta == true){

                      $("#monto").val("");              
                        
                        alertify.success(response.contenido + " " + " Puntos recibidos: " + n);

                    }else{
                      alertify.error(response.mensaje);
                    }

                  } // Cierra Success

              }); // Cierra Ajax

  }
  }) // Cierra Funcion 

////////////////////////////////////////////////////
/// TERMINA PAGO DE SERVICIOS
////////////////////////////////////////////////////



////////////////////////////////////////////////////
/// PAGO DE SERVICIOS ( SIMULACION )
////////////////////////////////////////////////////
// Comienza Acciones para Pago de servicio CEL Simulacion
  $("#pagos_s").hide();
  $("#pagos_s").removeClass("hidden");
  $("#pg_servicios_s,#pg_servicios_s_c").click(function(){ $("#pagos_s").fadeIn(500); });
  $("#pg_servicios_s,#pg_servicios_s_c").click(function(){ $("#pagos_s").fadeIn(500); });
  $("#c_pg_s").click(function(){ $("#pagos_s").fadeOut(500); });
// Termina Acciones para Pago de servicio CEL Simulacion



$("#pagar_s").click(function(){
              if($("#monto_pgs").val().length < 1) {  
                 alertify.error("Dene ingresar Monto a transferir");  
                 //$("#error_saldo").css('color','red').text("Debe ingresar un monto").fadeOut(4000);
                 return false;              
                 }else{

  var str = $("#pg_s").serialize();
  //alert(str);
  var num_real = $("#monto").val();
  var numero = $("#monto").val() / 100 ;


     if( numero < 1){  
      var n = 0; 
       }else{
          
          if( num_real >= 1000){
            var n = numero.toPrecision(2); 
          }else{
            var n = numero.toPrecision(1); 
          }
      }

   $.ajax({
                beforeSend: function(){
                  //$("#contenido").html("Procesando").fadeOut(3000);
                },
              cache: false,
                type: "POST",
                dataType: "json",
                url:"prueba.php",                
                data:str,  
                success: function(response){                          
                    //alert("adentro");
                    if(response.respuesta == true){

                      $("#monto").val("");              
                        
                        alertify.success(response.contenido + " " + " Puntos recibidos: " + n);

                    }else{
                      alertify.error(response.mensaje);
                    }

                  } // Cierra Success

              }); // Cierra Ajax

}
  }) // Cierra Funcion 

////////////////////////////////////////////////////
/// TERMINA PAGO DE SERVICIOS SIMULACION
////////////////////////////////////////////////////
// Comienza Acciones para Agregar Saldo Cel
  $("#agrsaldo").hide();
  $("#agrsaldo").removeClass("hidden");
  $("#agsaldo,#agsaldo_c").click(function(){ $("#agrsaldo").fadeIn(500); });
  $("#agsaldo,#agsaldo_c").click(function(){ $("#agrsaldo").fadeIn(500); });
  $("#c_agr").click(function(){ $("#agrsaldo").fadeOut(500); });
// Termina Acciones para Agregar Saldo Cel


$("#agregar_saldo").click(function(){
  var str = $("#agr").serialize();
  //alert(str);

   $.ajax({
                beforeSend: function(){
                 // $("#contenido").html("Procesando").fadeOut(3000);
                },
              cache: false,
                type: "POST",
                dataType: "json",
                url:"prueba.php",                
                data:str,  
                success: function(response){                          
                    //alert("adentro");
                    if(response.respuesta == true){

                      //$("#saldo").val('');
                      //$("#descripcion").val('');
                      //alertify.alert(response.mensaje);
                      //$("#contenido").html(response.contenido).fadeOut(3000);
                      //$("#agr input, #agr textarea").val("");
                      alertify.success(response.contenido);
                      //alertify.alert(response.mensaje);
                  
                      //$("#tr_saldo").slow(3000);
                      //alertify.success(response.mensaje);               

                    }else{
                      alertify.error(response.mensaje);
                    }

                  } // Cierra Success

              }); // Cierra Ajax

   }) // Cierra Funcion 


$("#tarjeta").click(function(){
  str = $("#tc").serialize();
  //alert(idmember);

     $.ajax({
                beforeSend: function(){
                 // $("#contenido").html("Procesando").fadeOut(3000);
                },
              cache: false,
                type: "POST",
                dataType: "json",
                url:"prueba.php",                
                data:str,  
                success: function(response){                          
                    //alert("adentro");
                    if(response.respuesta == true){

                      //$("#saldo").val('');
                      //$("#descripcion").val('');
                      //alertify.alert(response.mensaje);
                      //$("#contenido").html(response.contenido).fadeOut(3000);
                      //$("#agr input, #agr textarea").val("");
                      $("#example").html(response.contenido);
                      //alertify.alert(response.contenido);
                      //$("#example").html(response.contenido);

                      //alertify.success(response.contenido);
                      //alertify.alert(response.mensaje);
                  
                      //$("#tr_saldo").slow(3000);
                      //alertify.success(response.mensaje);               

                    }else{
                      alertify.error(response.mensaje);
                    }

                  } // Cierra Success

              }); // Cierra Ajax

});



////////////////////////////////////////////////////
/// PAGO DE TARJETAS
////////////////////////////////////////////////////

// Comienza Acciones para Pago de Tarjetas
  $("#pg_tarjeta").hide();
  $("#pg_tarjeta").removeClass("hidden");
  $("#pago_tarjetas,#pago_tarjetas_c").click(function(){ $("#pg_tarjeta").fadeIn(500); });
  $("#pago_tarjetas,#pago_tarjetas_c").click(function(){ $("#pg_tarjeta").fadeIn(500); });
  $("#c_pg_tc").click(function(){ $("#pg_tarjeta").fadeOut(500); });
// Termina Acciones para AgPago de Tarjetas


$("#pagar_tc").click(function(){
  var str = $("#pg_tc").serialize();
  //alert(str);
  var num_real = $("#monto").val();
  var numero = $("#monto").val() / 100 ;


     if( numero < 1){  
      var n = 0; 
       }else{
          
          if( num_real >= 1000){
            var n = numero.toPrecision(2); 
          }else{
            var n = numero.toPrecision(1); 
          }
      }

   $.ajax({
                beforeSend: function(){
                  //$("#contenido").html("Procesando").fadeOut(3000);
                },
              cache: false,
                type: "POST",
                dataType: "json",
                url:"prueba.php",                
                data:str,  
                success: function(response){                          
                    //alert("adentro");
                    if(response.respuesta == true){

                      $("#monto").val("");              
                        
                        alertify.success(response.contenido + " " + " Puntos recibidos: " + n);

                    }else{
                      alertify.error(response.mensaje);
                    }

                  } // Cierra Success

              }); // Cierra Ajax


  }) // Cierra Funcion 

////////////////////////////////////////////////////
/// TERMINA PAGO DE TARJETAS
////////////////////////////////////////////////////


////////////////////////////////////////////////////
/// PAGO DE CELULARES
////////////////////////////////////////////////////

// Comienza Acciones para Pago de Tarjetas
  $("#pg_celular").hide();
  $("#pg_celular").removeClass("hidden");
  $("#pago_celular,#pago_celular_c").click(function(){ $("#pg_celular").fadeIn(500); });
  $("#pago_celular,#pago_celular_c").click(function(){ $("#pg_celular").fadeIn(500); });
  $("#c_pg_cel").click(function(){ $("#pg_celular").fadeOut(500); });
// Termina Acciones para AgPago de Tarjetas



$("#pagar_cel").click(function(){
  var str = $("#pg_cel").serialize();
  //alert(str);
  var num_real = $("#monto").val();
  var numero = $("#monto").val() / 100 ;


     if( numero < 1){  
      var n = 0; 
       }else{
          
          if( num_real >= 1000){
            var n = numero.toPrecision(2); 
          }else{
            var n = numero.toPrecision(1); 
          }
      }

   $.ajax({
                beforeSend: function(){
                  //$("#contenido").html("Procesando").fadeOut(3000);
                },
              cache: false,
                type: "POST",
                dataType: "json",
                url:"prueba.php",                
                data:str,  
                success: function(response){                          
                    //alert("adentro");
                    if(response.respuesta == true){

                      $("#monto").val("");              
                        
                        alertify.success(response.contenido + " " + " Puntos recibidos: " + n);

                    }else{
                      alertify.error(response.mensaje);
                    }

                  } // Cierra Success

              }); // Cierra Ajax


  }) // Cierra Funcion 

////////////////////////////////////////////////////
/// TERMINA PAGO DE CELULARES
////////////////////////////////////////////////////




///////////////////////////////////
/// WIZARD DE TRANSFERENCIA

$("#empezar").click(function(){
tour_tr.init();
tour_tr.start();
});



// BOOTSTRAP TOUR - TRANSDERENCIA
var tour_tr = new Tour({
  steps: [
  {
    element: ".cbo",
    title: "Transferencia",
    content: "Cuenta origen.",
    placement: "bottom"
  },
      {
    element: ".cbd",
    title: "Transferencia",
    content: "Cuenta destino",
    placement: "bottom"
  },  
      {
    element: ".sd",
    title: "Transferencia",
    content: "Escribir el saldo a transferir (En numeros).",
    placement: "bottom"
  }  
],
  backdrop: true,
  storage: false,
  animation: true,
  placement: "bottom",
  template: function(step) {
          return "<div class='popover'>  <div class='arrow'></div>  <div class='popover-inner'><h3 class='popover-title tour'></h3>    <div class='popover-content fondo'></div>    <div class='modal-footer'>    <a href='#' class='btn end' data-role='end' data-toggle='tooltip' data-placement='bottom' title='Terminar'><span class='glyphicon glyphicon-log-out'></span></a>    <a href='#' class='btn pull-right prev' data-role='prev' data-toggle='tooltip' data-placement='bottom' title='Anterior'><span class='glyphicon glyphicon-arrow-left'></span></a>    <a href='#' data-role='next' class='btn pull-right next' data-toggle='tooltip' data-placement='bottom' title='Siguiente'><span class='glyphicon glyphicon-arrow-right'></span></a>    </div>  </div></div>";
        }


});



$("#trs").click(function(){
tour_trs.init();
tour_trs.start();
});



// BOOTSTRAP TOUR - TRANSDERENCIA
var tour_trs = new Tour({
  steps: [
  {
    element: "#cbuori",
    title: "Transferencia",
    content: "Cuenta origen.",
    placement: "bottom"
  },
      {
    element: ".cbds",
    title: "Transferencia",
    content: "Cuenta destino",
    placement: "bottom"
  },  
      {
    element: "#saldo_s",
    title: "Transferencia",
    content: "Escribir el saldo a transferir (En numeros).",
    placement: "bottom"
  }  
],
  backdrop: true,
  storage: false,
  animation: true,
  placement: "bottom",
  template: function(step) {
          return "<div class='popover'>  <div class='arrow'></div>  <div class='popover-inner'><h3 class='popover-title tour'></h3>    <div class='popover-content fondo'></div>    <div class='modal-footer'>    <a href='#' class='btn end' data-role='end' data-toggle='tooltip' title='Terminar'><span class='glyphicon glyphicon-log-out'></span></a>    <a href='#' class='btn pull-right prev' data-role='prev' data-toggle='tooltip' title='Anterior'><span class='glyphicon glyphicon-arrow-left'></span></a>    <a href='#' data-role='next' class='btn pull-right next' data-toggle='tooltip' title='Siguiente'><span class='glyphicon glyphicon-arrow-right'></span></a>    </div>  </div></div>";
        }


});


$("#pgw").click(function(){
tour_pg.init();
tour_pg.start();
});



// BOOTSTRAP TOUR - TRANSDERENCIA
var tour_pg = new Tour({
  steps: [
      {
    element: "#usuario",
    title: "Pago",
    content: "Usted va a abonar",
    placement: "bottom"
  },
  {
    element: "#monto",
    title: "Pago",
    content: "Cantidad a pagar",
    placement: "bottom"
  },
      {
    element: "#descripcion",
    title: "Pago",
    content: "Eliga el Servicio a pagar",
    placement: "bottom"
  }
],
  backdrop: true,
  storage: false,
  animation: true,
  placement: "bottom",
  template: function(step) {
          return "<div class='popover'>  <div class='arrow'></div>  <div class='popover-inner'><h3 class='popover-title tour'></h3>    <div class='popover-content fondo'></div>    <div class='modal-footer'>    <a href='#' class='btn end' data-role='end' data-toggle='tooltip' title='Terminar'><span class='glyphicon glyphicon-log-out'></span></a>    <a href='#' class='btn pull-right prev' data-role='prev' data-toggle='tooltip' title='Anterior'><span class='glyphicon glyphicon-arrow-left'></span></a>    <a href='#' data-role='next' class='btn pull-right next' data-toggle='tooltip' title='Siguiente'><span class='glyphicon glyphicon-arrow-right'></span></a>    </div>  </div></div>";
        }


});

$("#pgs").click(function(){

tour_ps.init();
tour_ps.start();

});



// BOOTSTRAP TOUR - TRANSDERENCIA
var tour_ps = new Tour({
  steps: [
      {
    element: ".user",
    title: "Pago",
    content: "<small>Usted va a abonar</small>",
    placement: "bottom",
    placement: "bottom"
  },
  {
    element: ".montos",
    title: "Pago",
    content: "<small>Cantidad a pagar</small>",
    placement: "bottom",
    placement: "bottom"
  },
      {
    element: ".desc",
    title: "Pago",
    content: "<small>Eliga el Servicio a pagar</small>",
    placement: "bottom",
    placement: "bottom"
  }
],
  backdrop: true,
  storage: false,
  animation: true,
  placement: "top",
  template: function(step) {
          return "<div class='popover'>  <div class='arrow'></div>  <div class='popover-inner'><h3 class='popover-title tour'></h3>    <div class='popover-content fondo'></div>    <div class='modal-footer'>    <a href='#' class='btn end' data-role='end' data-toggle='tooltip' title='Terminar'><span class='glyphicon glyphicon-log-out'></span></a>    <a href='#' class='btn pull-right prev' data-role='prev' data-toggle='tooltip' title='Anterior'><span class='glyphicon glyphicon-arrow-left'></span></a>    <a href='#' data-role='next' class='btn pull-right next' data-toggle='tooltip' title='Siguiente'><span class='glyphicon glyphicon-arrow-right'></span></a>    </div>  </div></div>";
        }


});


// TOUR PAGO DE TARJETA DE CREDITO
$("#pgtc").click(function(){
tour_ptc.init();
tour_ptc.start();
});



// BOOTSTRAP TOUR - TRANSDERENCIA
var tour_ptc = new Tour({
  steps: [
      {
    element: ".utc",
    title: "Tarjeta",
    content: "Usted va a abonar",
    placement: "bottom"
  },
  {
    element: ".montotc",
    title: "Tarjeta",
    content: "Cantidad a pagar",
    placement: "bottom"
  },
      {
    element: ".desctc",
    title: "Tarjeta",
    content: "Eliga el Servicio a pagar",
    placement: "bottom"
  }
],
  backdrop: true,
  storage: false,
  animation: true,
  placement: "top",
  template: function(step) {
          return "<div class='popover'>  <div class='arrow'></div>  <div class='popover-inner'><h3 class='popover-title tour'></h3>    <div class='popover-content fondo'></div>    <div class='modal-footer'>    <a href='#' class='btn end' data-role='end' data-toggle='tooltip' title='Terminar'><span class='glyphicon glyphicon-log-out'></span></a>    <a href='#' class='btn pull-right prev' data-role='prev' data-toggle='tooltip' title='Anterior'><span class='glyphicon glyphicon-arrow-left'></span></a>    <a href='#' data-role='next' class='btn pull-right next' data-toggle='tooltip' title='Siguiente'><span class='glyphicon glyphicon-arrow-right'></span></a>    </div>  </div></div>";
        }


});



// TOUR PAGO DE TARJETA DE CREDITO
$("#pgcel").click(function(){
tour_pcel.init();
tour_pcel.start();
});



// BOOTSTRAP TOUR - TRANSDERENCIA
var tour_pcel = new Tour({
  steps: [
      {
    element: ".ucel",
    title: "Pago Celular",
    content: "Usted va a abonar",
    placement: "bottom"
  },
  {
    element: ".montocel",
    title: "Pago Celular",
    content: "Cantidad a pagar",
    placement: "bottom"
  },
      {
    element: ".desccel",
    title: "Pago Celular",
    content: "Compania a pagar",
    placement: "bottom"
  }
],
  backdrop: true,
  storage: false,
  animation: true,
  placement: "top",
  template: function(step) {
          return "<div class='popover'>  <div class='arrow'></div>  <div class='popover-inner'><h3 class='popover-title tour'></h3>    <div class='popover-content fondo'></div>    <div class='modal-footer'>    <a href='#' class='btn end' data-role='end' data-toggle='tooltip' title='Terminar'><span class='glyphicon glyphicon-log-out'></span></a>    <a href='#' class='btn pull-right prev' data-role='prev' data-toggle='tooltip' title='Anterior'><span class='glyphicon glyphicon-arrow-left'></span></a>    <a href='#' data-role='next' class='btn pull-right next' data-toggle='tooltip' title='Siguiente'><span class='glyphicon glyphicon-arrow-right'></span></a>    </div>  </div></div>";
        }


});




$('body').on('click','#example a',function (e){
      e.preventDefault();

      // alert($(this).attr('data-accion'));
      // Id Usuario
      idUser_ok = $(this).attr('href');
      accion_ok = $(this).attr('data-accion');

      //$('#id_user').val(idUser_ok);


      if( accion_ok == 'editar'){
        //$("#myModal").modal();
        
        //$("#titulo_grande").html('<h4 style="color:red;" id="titulo_grande"><span class="glyphicon glyphicon-pencil"></span> Edición de Producto</h4>');
        //$("#titulo_chico").html('<h2 id="titulo_chico">EDITAR PRODUCTO DEL STOCK</h2>');
        // Valor de la acción
        $('#accion').val('editUser');



        // Llenar el formulario con los datos del registro seleccionado
        $('#nombretc').val($(this).parent().parent().children('td:eq(0)').text());
        $('#ntc').val($(this).parent().parent().children('td:eq(1)').text());
        $('#sdeudor').val($(this).parent().parent().children('td:eq(2)').text());
        $('#sacreedor').val($(this).parent().parent().children('td:eq(3)').text());
        $('#svenc').val($(this).parent().parent().children('td:eq(4)').text());
        //$('#pac_tel_fijo').val($(this).parent().parent().children('td:eq(5)').text());
        //$('#pac_cel').val($(this).parent().parent().children('td:eq(6)').text());
        //$('#pac_localidad').val($(this).parent().parent().children('td:eq(7)').text());
        //$('#pac_domicilio').val($(this).parent().parent().children('td:eq(8)').text());
        //$('#pac_nacionalidad').val($(this).parent().parent().children('td:eq(9)').text());
        //$('#pac_email').val($(this).parent().parent().children('td:eq(10)').text());
        //$('#pac_estado').val($(this).parent().parent().children('td:eq(11)').text());
        //$('#pac_obra_social').val($(this).parent().parent().children('td:eq(12)').text());
        //$('#pac_ob_socio').val($(this).parent().parent().children('td:eq(13)').text());
        //$('#pac_ob_plan').val($(this).parent().parent().children('td:eq(14)').text());

        $("#smallModal").modal();
      }

}); // Cierra body click
















});






