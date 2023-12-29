$(document).ready(function(){
//Asignar dispositivo
  $("#formularioAsignacion" ).on( "submit", function( event ) {
    event.preventDefault();
    let datosAsignar = $("#formularioAsignacion").serialize();

    $.ajax({
      url: 'ajax/dispositivos.ajax.php',
      method: "POST",
      dataType: "json",
      data: datosAsignar,
      success: function(respuesta){
        table.ajax.reload();
        $("#modalAsignarDispositivo").modal('hide');
      },
      error: function(error){
        console.log("Erroraso: "+error)
      }
    })
  })
})
