
//PARA MOSTRAR LA INFORMACIÓN DE UN CONSULTOR
$(".tablaConsultores").on("click", ".btnMostrarConsultor", function(){
    var idConsultor = $(this).attr("idConsultor");

    var idBuscado = new FormData();
    idBuscado.append("idConsultor", idConsultor);


})


//PARA MODIFICAR LA INFORMACIÓN DE CONSULTOR
$(".tablaConsultores").on("click", ".btnEditarConsultor", function(){
    var idEditarConsultor = $(this).attr("idEditarConsultor");

    var datos = new FormData();
    datos.append("idEditarConsultor", idEditarConsultor);

    $.ajax({
        url: "ajax/consultores.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            $("#editarNombreConsultor").val(respuesta.nombreconsultor);
            $("#editarDuiConsultor").val(respuesta.duiconsultor);
            $("#editarCargoConsultor").val(respuesta.cargoconsultor);
            $("#editarContactoConsultor").val(respuesta.contactoconsultor);
            $("#editarSedeConsultor").val(respuesta.sedeconsultor);
            $("#idEditarConsultor").val(respuesta.idconsultor);
        }
    })
});


//Traducir datatable
var tabla = $('#datatableConsultores').DataTable({
    "ajax": "ajax/tablaConsultores.ajax.php",
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
    }
});

$(".tablaConsultores").on("click", ".btnEliminarConsultor", function(){
    Swal.fire({
        title: "Eliminar consultor",
        text: "¿Está seguro que desea eliminar este consultor?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
            var idEliminarConsultor = $(this).attr("idEliminarConsultor");

            var datos = new FormData();
            datos.append("idEliminarConsultor", idEliminarConsultor);

            $.ajax({
                url: "ajax/consultores.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(respuesta){
                    var icono = respuesta.success ? "success" : "error";
                    var mensaje = respuesta.success ? respuesta.success : respuesta.error;
                    Swal.fire({
                        position: "center",
                        icon: icono,
                        title: mensaje,
                        showConfirmButton: false,
                        timer: 1500
                      });

                      tabla.ajax.reload();
                },
                error: function(res){
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: "No se pudo ejecutar la instrucción",
                        showConfirmButton: false,
                        timer: 1500
                      });
                }
            })
        }
      });
})