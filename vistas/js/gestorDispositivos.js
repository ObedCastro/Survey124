
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
            $("#mostrarTipoDispositivo").text(respuesta.tipodispositivo);
            $("#mostrarMarcaDispositivo").text(respuesta.marcadispositivo);
            $("#mostrarModeloDispositivo").text(respuesta.modelodispositivo);
            $("#mostrarImeiDispositivo").text(respuesta.imeidispositivo);
            $("#mostrarSerieDispositivo").text(respuesta.seriedispositivo);
            $("#mostrarTelefonoDispositivo").text(respuesta.telefonodispositivo);
            $("#mostrarResponsableDispositivo").text(respuesta.responsabledispositivo);
            $("#mostrarFechaRegistro").text(respuesta.fecharegistro);
            $("#mostrarFechaEdicion").text(respuesta.fechamodificacion);
            
            const datos = JSON.parse(respuesta.accesorios);
            if(datos.Cubo == "1"){$("#checkCubo").attr('checked',true);}else{$("#checkCubo").attr('checked',false);}
            if(datos.Cable == "1"){$("#checkCable").attr('checked',true);}else{$("#checkCable").attr('checked',false);}
            if(datos.Lapiz == "1"){$("#checkLapiz").attr('checked',true);}else{$("#checkLapiz").attr('checked',false);}
            if(datos.Powerbank == "1"){$("#checkPowerbank").attr('checked',true);}else{$("#checkPowerbank").attr('checked',false);}
            if(datos.Funda == "1"){$("#checkFunda").attr('checked',true);}else{$("#checkFunda").attr('checked',false);}
            if(datos.Cargador == "1"){$("#checkCargadorLaptop").attr('checked',true);}else{$("#checkCargadorLaptop").attr('checked',false);}
            if(datos.Maletin == "1"){$("#checkMaletin").attr('checked',true);}else{$("#checkMaletin").attr('checked',false);}
            if(datos.Mouse == "1"){$("#checkMouse").attr('checked',true);}else{$("#checkMouse").attr('checked',false);}
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


