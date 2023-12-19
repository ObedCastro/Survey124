
//Cargar la tabla de dispositivos de manera dinámica
/*$.ajax({
    url: "ajax/verDetalleDispositivo.ajax.php",
    success: function(respuesta){
        console.log("Respuesta", respuesta);
    }
});*/

//Mostrar información de un solo dispositivo
$(".tablaDispositivos").on("click", ".btnMostrarDispositivos", function(){
    var idDispositivo = $(this).attr("idDispositivo");

    var datos = new FormData();
    datos.append("idDispositivo", idDispositivo);

    $.ajax({
        url: "ajax/dispositivos.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            console.log("respuesta", respuesta); 
        }
    })
})


//Traducir datatable
$('#datatable').DataTable({
    "ajax": "ajax/tablaDispositivos.ajax.php",
    "deferRender": true,
    "retrieve": true,
    "processing": true,
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
});