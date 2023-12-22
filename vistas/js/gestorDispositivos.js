

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
            $("#mostrarTipoDispositivo").text(respuesta.tipodispositivo);
            $("#mostrarMarcaDispositivo").text(respuesta.marcadispositivo);
            $("#mostrarModeloDispositivo").text(respuesta.modelodispositivo);
            $("#mostrarImeiDispositivo").text(respuesta.imeidispositivo);
            $("#mostrarSerieDispositivo").text(respuesta.seriedispositivo);
            $("#mostrarTelefonoDispositivo").text(respuesta.telefonodispositivo);
            $("#mostrarResponsableDispositivo").text(respuesta.responsabledispositivo);
            $("#fechaRegistro").text(respuesta.fecharegistro);
            $("#fechaModificacion").text(respuesta.fechamodificacion);
            $("#mostrarComentarioDispositivo").text(respuesta.comentariodispositivo);
            
            const datos = JSON.parse(respuesta.accesorios);
            if(datos.Cubo == "1"){$("#checkCubo").parent().show();}else{$("#checkCubo").parent().hide();}
            if(datos.Cable == "1"){$("#checkCable").parent().show();}else{$("#checkCable").parent().hide();}
            if(datos.Lapiz == "1"){$("#checkLapiz").parent().show();}else{$("#checkLapiz").parent().hide();}
            if(datos.Powerbank == "1"){$("#checkPowerbank").parent().show();}else{$("#checkPowerbank").parent().hide();}
            if(datos.Funda == "1"){$("#checkFunda").parent().show();}else{$("#checkFunda").parent().hide();}
            if(datos.Cargador == "1"){$("#checkCargadorLaptop").parent().show();}else{$("#checkCargadorLaptop").parent().hide();}
            if(datos.Maletin == "1"){$("#checkMaletin").parent().show();}else{$("#checkMaletin").parent().hide();}
            if(datos.Mouse == "1"){$("#checkMouse").parent().show();}else{$("#checkMouse").parent().hide();}
            if(datos.Mousepad == "1"){$("#checkMousepad").parent().show();}else{$("#checkMousepad").parent().hide();}
        }
    })
});


//RELLENAR CAMPOS PARA EDITAR DISPOSITIVO
$(".tablaDispositivos").on("click", ".btnEditarDispositivo", function(){
    var idEditarDispositivo = $(this).attr("idEditarDispositivo");

    var datos2 = new FormData();
    datos2.append("idEditarDispositivo", idEditarDispositivo);

    $.ajax({
        url: "ajax/dispositivos.ajax.php",
        method: "POST",
        data: datos2,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta){
            $("#modalEditarDispositivos #idEditarDispositivo").val(respuesta['iddispositivo']);
            $("#modalEditarDispositivos #editarTipoDispositivo").val(respuesta['tipodispositivo']);
            $("#modalEditarDispositivos #marcaDispositivo").val(respuesta['marcadispositivo']);
            $("#modalEditarDispositivos #modeloDispositivo").val(respuesta['modelodispositivo']);
            $("#modalEditarDispositivos #imeiDispositivo").val(respuesta['imeidispositivo']);
            $("#modalEditarDispositivos #serieDispositivo").val(respuesta['seriedispositivo']);
            $("#modalEditarDispositivos #telefonoDispositivo").val(respuesta['telefonodispositivo']);
            $("#modalEditarDispositivos #sedeDispositivo").val(respuesta['sededispositivo']);
            $("#modalEditarDispositivos #comentarioDispositivo").val(respuesta['comentariodispositivo']);
        }
    })
});





$(document).ready(function(){
    /*var table = $('#datatable').DataTable({
       orderCellsTop: true,
       fixedHeader: true
    });*/

    //Traducir datatable
var table = $('#datatable').DataTable({
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
    dom: 'Bfrtip',
        buttons: [
            {
                extend: 'pdfHtml5',
                download: 'open'
            },
            {
                extend: 'excelHtml5',
                autoFilter: true,
                sheetName: 'Exported data'
            }
        ]
});
 
    //Creamos una fila en el head de la tabla y lo clonamos para cada columna
    $('#datatable thead tr').clone(true).appendTo( '#datatable thead' );
 
    $('#datatable thead tr:eq(1) th').each( function (i) {
        $(this).html( '<input style="width: 100%;" type="text" placeholder="Search..." />' );
  
        $( 'input', this ).on( 'keyup change', function () {
            if ( table.column(i).search() !== this.value ) {
                table
                    .column(i)
                    .search( this.value )
                    .draw();
            }
        } );
    } );  
});