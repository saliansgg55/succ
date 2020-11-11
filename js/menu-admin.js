$(document).ready(function(){

	//////////////////////////////////////////////
	/* Carga ni bien entra a panel-admin.php
	una grilla por defecto */
	//////////////////////////////////////////////
	$("#grillapm").load('grillas/grilla_morosidad_pm.php');

	// Muestra tabla de Asignaciones a Grupos 
$("#ver_asignaciones").click(function(event){
	event.preventDefault();
		  $("#grillapm").empty();  
		  $("#grillapm").load("grillas/grilla_asignaciones.php");
});


 // Muestra tabla Listado de PM
$("#ver_pm").click(function(event){
	event.preventDefault();

	$("#grillapm").empty();
	$("#grillapm").load('grillas/grilla_morosidad_pm.php');
});


 $("#moro_fijas").click(function(){
    $("#grillapm").empty();
    $("#grillapm").load('grillas/grilla_documentos_fija.php');
  }); 

 $("#moro_movil").click(function(){
    $("#grillapm").empty();
    $("#grillapm").load('grillas/grilla_documentos.php');
  });  

});