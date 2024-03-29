//Resetear formularios de modal, en cuanto el modal se oculte
$("#modalDispositivos").on("hidden.bs.modal", function () {
    $(this).find('form')[0].reset();
  });
 
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
            className: 'btnDt btn-app export pdf',
            text: '<i class="fa fa-file-pdf-o" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Exportar a PDF"></i>',
            download: 'open',
            orientation: 'landscape',
            exportOptions: {
                columns: [0,1,2,3,4,5,6,7]
            },
            title: "Listado de dispositivos",
            customize: function(doc) {
                doc.content[1].margin = [ 100, 0, 100, 0 ] //left, top, right, bottom
            }
        },
        {
            extend: 'excelHtml5',
            className: 'btnDt btn-app export excel',
            text: '<i class="fa fa-file-excel-o" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Exportar a Excel"></i>',
            autoFilter: true,
            sheetName: 'Exported data'
        }
    ]
    });

//__________________________________________________________________________________________

//Creamos una fila en el head de la tabla y lo clonamos para cada columna
$('#datatable thead tr').clone(true).appendTo( '#datatable thead' );
$('#datatable thead tr:eq(1) th').each( function (i) {
    $(this).html( '<input style="width: 100%;" type="text" placeholder="Buscar..." />' );
    $( 'input', this ).on( 'keyup change', function () {
        if ( table.column(i).search() !== this.value ) {
            table
                .column(i)
                .search( this.value )
                .draw();
        }
    });
});

// --------------------------------------------------------------------------------------------
// VALIDANDO EL TIPO DE DISPOSITIVO Y OCULTAR CAMPOS EN EL FOMRULARIO DE NUEVO DISPOSITIVO
$(".btnNuevoDispositivo").on("click", function(){
    $("#tipoDispositivo").on("change", function(){
        if($("#tipoDispositivo").val() == "Laptop"){
            $("#imeiDispositivo").parent().hide();
            $("#imeiDispositivo").removeAttr("required");
            $("#telefonoDispositivo").parent().hide();
            $("#telefonoDispositivo").removeAttr("required");
        }
        if($("#tipoDispositivo").val() == "Telefono" || $("#tipoDispositivo").val() == "Tablet"){
            $("#imeiDispositivo").parent().show();
            $("#imeiDispositivo").prop("required", true);
            $("#telefonoDispositivo").parent().show();
            $("#telefonoDispositivo").prop("required", true);
        }
    })
})
// ---------------------------------------------------------------------------------------------

//PARA ASIGNAR DISPOSITIVO
$("#formularioAsignacion").on("click", ".btnNuevaAsignacion", function(event){
    event.preventDefault();

    $("#selectConsultores").on("change", function(){
        $(".invalid-feedback").hide();
    })

    if($("#selectConsultores").val() == ""){
        Swal.fire({
            icon: "warning",
            title: "Por favor seleccione un consultor",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"
        }).then(function(result){
            //window.location = "dispositivos";
        });
    } else{
        
        let datosAsignar = $("#formularioAsignacion").serialize();
        var url = 'fpdf/Asignar.php?' + datosAsignar;

        window.open(url, '_blank');
        $("#modalAsignarDispositivo").hide();
        location.reload();

    }

    

});

//PARA RECUPERAR DISPOSITIVO
$("#formularioRecuperar").on("click", ".btnRecuperar", function(event){
//$("#formularioAsignacion" ).on( "submit", function( event ) {
    event.preventDefault();
    let datosRecuperar = $("#formularioRecuperar").serialize();
    var url = 'fpdf/Recuperar.php?' + datosRecuperar;

    window.open(url, '_blank');
    $("#modalRecuperarDispositivo").hide();
    location.reload();

});


//Mostrar información de un solo dispositivo
$(".tablaDispositivos").on("click", ".btnMostrarDispositivos", function(){

    /* Resuelve problema de modal fijo */
    $('#modalVerDetalleDispositivo').on('shown.bs.modal', function () {
        $('#modalVerDetalleDispositivo').modal('handleUpdate');
        $('#modalVerDetalleDispositivo').scrollTop(1);
    });

    //Limpiar el elemnto para mostrar el historial, si es que lo tiene
    $(".timelineHistorial").empty();

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
            $("#mostrarTipoDispositivo").text(respuesta[0].tipodispositivo);
            $("#mostrarMarcaDispositivo").text(respuesta[0].marcadispositivo);
            $("#mostrarModeloDispositivo").text(respuesta[0].modelodispositivo);

            if(respuesta[0].imeidispositivo == ""){
                $("#mostrarImeiDispositivo").parent().hide();
            } else{
                $("#mostrarImeiDispositivo").parent().show();
                $("#mostrarImeiDispositivo").text(respuesta[0].imeidispositivo);
            }

            $("#mostrarSerieDispositivo").text(respuesta[0].seriedispositivo);

            if(respuesta[0].telefonodispositivo == ""){
                $("#mostrarTelefonoDispositivo").parent().hide();
            }else{
                $("#mostrarTelefonoDispositivo").parent().show();;
                $("#mostrarTelefonoDispositivo").text(respuesta[0].telefonodispositivo);

            }

            $("#fechaRegistro").text(respuesta[0].fecharegistro);
            $("#fechaModificacion").text(respuesta[0].fechamodificacion);

            if(respuesta[0].comentariodispositivo != ""){
                $("#mostrarComentarioDispositivo").parent().show();
                $("#mostrarComentarioDispositivo").text(respuesta[0].comentariodispositivo);
            } else{
                $("#mostrarComentarioDispositivo").parent().hide();
            }

            if(respuesta[0].estadodispositivo != "2"){
                $(".sin-accesorios").text("Sin accesorios asignados actualmente");
                $("#checkCubo").parent().hide();
                $("#checkCable").parent().hide();
                $("#checkLapiz").parent().hide();
                $("#checkPowerbank").parent().hide();
                $("#checkFunda").parent().hide();
                $("#checkCargadorLaptop").parent().hide();
                $("#checkMaletin").parent().hide();
                $("#checkMouse").parent().hide();
                $("#checkMousepad").parent().hide();

            } else{
                if(respuesta[0].accesorios != "" || respuesta[0] != null){
                    $(".sin-accesorios").text("");
                    const datos = JSON.parse(respuesta[0].accesorios);
                    if(datos.Cubo == "1"){$("#checkCubo").parent().show();}else{$("#checkCubo").parent().hide();}
                    if(datos.Cable == "1"){$("#checkCable").parent().show();}else{$("#checkCable").parent().hide();}
                    if(datos.Lapiz == "1"){$("#checkLapiz").parent().show();}else{$("#checkLapiz").parent().hide();}
                    if(datos.Powerbank == "1"){$("#checkPowerbank").parent().show();}else{$("#checkPowerbank").parent().hide();}
                    if(datos.Funda == "1"){$("#checkFunda").parent().show();}else{$("#checkFunda").parent().hide();}
                    if(datos.Cargador == "1"){$("#checkCargadorLaptop").parent().show();}else{$("#checkCargadorLaptop").parent().hide();}
                    if(datos.Maletin == "1"){$("#checkMaletin").parent().show();}else{$("#checkMaletin").parent().hide();}
                    if(datos.Mouse == "1"){$("#checkMouse").parent().show();}else{$("#checkMouse").parent().hide();}
                    if(datos.Mousepad == "1"){$("#checkMousepad").parent().show();}else{$("#checkMousepad").parent().hide();}
                } else{
                    console.log("Sin accesorios");
                }

            }


            if(respuesta[1] != ""){
                $("#mostrarMovimientos").show();

                respuesta[1].forEach(datos => {
                    if(datos.fecha_asignacion != ""){
                        
                        if(datos.fecha_recepcion != null){
                            $(".timelineHistorial").append(
                                '<div class=" mb-3">'+
                                    '<span class="timeline-step"><i class="ni ni-laptop text-danger text-gradient"></i></span>'+
                                    '<div class="timeline-content">'+
                                        '<h6 class="text-dark text-sm font-weight-bold mb-0">Recepción</h6>'+
                                        '<p class="text-muted text-xs mt-1 mb-0 d-inline-flex"><span style="margin-right:5px;">'+datos.nombre_receptor+'</span> Ha recuperado el dispositivo en fecha <span class="font-weight-bold" style="margin-left:5px;">'+datos.fecha_recepcion+'</span></p>'+
                                    '</div>'+
                                '</div>'
                            );
    
                        }
    
                        $(".timelineHistorial").append(
                            '<div class=" mb-3">'+
                                '<span class="timeline-step"><i class="ni ni-laptop text-success text-gradient"></i></span>'+
                                '<div class="timeline-content">'+
                                    '<h6 class="text-dark text-sm font-weight-bold mb-0">Asignación</h6>'+
                                    '<p class="text-muted text-xs mt-1 mb-0 d-inline-flex"><span style="margin-right:5px;">'+datos.nombre_asignador+'</span>Ha asignado el dispositivo en fecha <span class="font-weight-bold" style="margin-left:5px;">'+datos.fecha_asignacion+'</span></p>'+
                                '</div>'+
                            '</div>'
                        );
    
                    }
                });

            } else{
                $("#mostrarMovimientos").hide();
            }

            /* Actualizar el scroll del modal */
            actualizarScrollDispositivos();

        }
    });
});
 
//Convertir a mayúsculas a medida se va escribiendo
function mayus(e) {
    e.value = e.value.toUpperCase();
}

//REGISTRAR NUEVO DISPOSITIVO
$("#formNuevoDispositivo").on("submit", function(e){
    e.preventDefault();

    if($("#tipoDispositivo").val() != "" && $("#marcaDispositivo").val() != "" && $("#modeloDispositivo").val() != "" && $("#serieDispositivo").val() != "" && $("#sedeDispositivo").val() != ""){

        if(($("#tipoDispositivo").val() != "Laptop" && $("#imeiDispositivo").val().length == 15) || $("#tipoDispositivo").val() == "Laptop"){
            var nuevo = $("#formNuevoDispositivo").serialize();
            /* console.log(nuevo); */
            
            $.ajax({
                url: "ajax/dispositivos.ajax.php",
                method: "POST",
                data: nuevo,
                dataType: "json",
                success: function(respuesta){
                    Swal.fire({
                        position: "center",
                        icon: respuesta.icono,
                        title: respuesta.titulo,
                        text: respuesta.mensaje,
                        showConfirmButton: true
                      });
        
                    $("#modalDispositivos").modal('hide');
                    table.ajax.reload();
                },
                error: function(res){
                    Swal.fire({
                        position: "center",
                        icon: "error",
                        title: res,
                        showConfirmButton: true
                      });
        
                    $("#modalDispositivos").hide();
                    table.ajax.reload();
                }
            })
        }

    }


})


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
            if(respuesta['tipodispositivo'] != "Laptop"){
                $("#modalEditarDispositivos #editarImeiDispositivo").parent().show();
                $("#modalEditarDispositivos #editarTelefonoDispositivo").parent().show();
                $("#modalEditarDispositivos #editarImeiDispositivo").val(respuesta['imeidispositivo']);
                $("#modalEditarDispositivos #editarTelefonoDispositivo").val(respuesta['telefonodispositivo']);
            } else if(respuesta['tipodispositivo'] != "Telefono" || respuesta['tipodispositivo'] != "Tablet"){
                $("#modalEditarDispositivos #editarImeiDispositivo").parent().hide();
                $("#modalEditarDispositivos #editarTelefonoDispositivo").parent().hide();
            }

            $("#modalEditarDispositivos #idEditarDispositivo_").val(respuesta['iddispositivo']);
            $("#modalEditarDispositivos #editarTipoDispositivo").val(respuesta['tipodispositivo']);
            $("#modalEditarDispositivos #editarMarcaDispositivo").val(respuesta['marcadispositivo']);
            $("#modalEditarDispositivos #editarModeloDispositivo").val(respuesta['modelodispositivo']);
            $("#modalEditarDispositivos #editarSerieDispositivo").val(respuesta['seriedispositivo']);
            $("#modalEditarDispositivos #editarSedeDispositivo").val(respuesta['sededispositivo']);
            $("#modalEditarDispositivos #comentarioDispositivo").val(respuesta['comentariodispositivo']);
        }
    })
});

//MODIFICAR LA INFORMACIÓN DEL DISPOSITIVO
$("#formModificarDispositivo").on("submit", function(e){
    e.preventDefault();

    if($("#editarSerieDispositivo").val().length > 8){
        var infoModificar = $("#formModificarDispositivo").serialize();
        //console.log(infoModificar);
        
        $.ajax({
            url: "ajax/dispositivos.ajax.php",
            method: "POST",
            data: infoModificar,
            dataType: "json",
            success: function(respuesta){
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: respuesta.mensaje,
                    showConfirmButton: false,
                    timer: 1500
                    });
    
                    table.ajax.reload();
                    $("#modalEditarDispositivos").modal("hide");
            },
            error: function(res){
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: res.mensaje,
                    showConfirmButton: false,
                    timer: 500
                    });
    
                    table.ajax.reload();
                    $("#modalEditarDispositivos").modal("hide");
            }
        });

    }
    


});



$(document).ready(function(){
//__________________________________________________________________________________________
//Mostrar información antes de ASIGNAR un dispositivo
    $(".tablaDispositivos").on("click", ".btnAsignarDispositivo", function(){

        var idDispositivo = $(this).attr("idDispositivo")
        var datos3 = new FormData();
        datos3.append("idDispositivo", idDispositivo);

        $.ajax({
            url: "ajax/dispositivos.ajax.php",
            method: "POST",
            data: datos3,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(resultado){

                var respuesta = resultado[0];
                //Mostrar solo los accesorios que corresponen al tipo de dispositivo
                if(respuesta["tipodispositivo"] == "Telefono"){
                    $(".accesoriosMovil").show();
                    $(".accesoriosLaptop").hide();
                    $(".accesorioLapiz").hide();
                } else if(respuesta["tipodispositivo"] == "Tablet"){
                    $(".accesoriosMovil").show();
                    $(".accesorioLapiz").show();
                    $(".accesoriosLaptop").hide();
                } else if(respuesta["tipodispositivo"] == "Laptop"){
                    $(".accesoriosMovil").hide();
                    $(".accesorioLapiz").hide();
                    $(".accesoriosLaptop").show();
                }

                //Mostrar información en la ventana de asignar el dispositivo
                $("#modalAsignarDispositivo .idDispositivoAsignar").val(respuesta['iddispositivo']);
                $("#modalAsignarDispositivo .detalleAsignarTipo").text(respuesta['tipodispositivo']);
                $("#modalAsignarDispositivo .detalleAsignarMarca").text(respuesta['marcadispositivo']);
                $("#modalAsignarDispositivo .detalleAsignarModelo").text(respuesta['modelodispositivo']);

                if(respuesta["imeidispositivo"]){
                    $("#modalAsignarDispositivo .detalleAsignarIMEI").parent().show();
                    $("#modalAsignarDispositivo .detalleAsignarIMEI").text(respuesta['imeidispositivo']);
                }else{
                    $("#modalAsignarDispositivo .detalleAsignarIMEI").parent().hide();
                }

                if(respuesta["respuesta['telefonodispositivo']"]){
                    $("#modalAsignarDispositivo .detalleAsignarTelefono").parent().show();
                    $("#modalAsignarDispositivo .detalleAsignarTelefono").text(respuesta['telefonodispositivo']);
                }else{
                    $("#modalAsignarDispositivo .detalleAsignarTelefono").parent().hide();
                }

                $("#modalAsignarDispositivo .detalleAsignarSerie").text(respuesta['seriedispositivo']);
                $("#modalAsignarDispositivo .detalleAsignarSede").text(respuesta['sededispositivo']);
                $("#modalAsignarDispositivo .detalleAsignarFecha").text(respuesta['fecharegistro']);

                var sededispositivo = respuesta['sededispositivo'];
                var sede = new FormData();
                sede.append("sedeDispositivo", sededispositivo);

                $.ajax({
                    url: "ajax/consultores.ajax.php",
                    method: "POST",
                    data: sede,
                    cache: false,
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    success: function(res){
                        //var s= document.getElementById('selectConsultores');
                        //s.options[s.options.length]= new Option('Texto', "1");

                        var selectoption = [];
                        function rellenarSelect(){
                            res.forEach(e => {
                                selectoption.push('<option value="'+e['idconsultor']+'">'+e['nombreconsultor']+'</option>');
                            });

                            return selectoption;
                        }

                        $('#modalAsignarDispositivo .mostrarSelect').html(
                            '<select class="form-control choices-single form-select is-invalid" id="selectConsultores" name="responsableDispositivo" required>'+
                                '<option value=""></option>'+
                                rellenarSelect() + 
                            '</select>'
                        );

                        //Aplicar el formato con buscador del select de asignación de dispositivo
                        new Choices(document.querySelector(".choices-single"));
                        
                    }
                })

            }
        })
    })
})

//__________________________________________________________________________________________
//Mostrar información antes de RECUPERAR un dispositivo
$(".tablaDispositivos").on("click", ".btnRecuperarDispositivo", function(){
    var idDispositivoRecuperar = $(this).attr("idDispositivo");
    var consultorResposable = $(this).attr("consultor");
    var datos4 = new FormData();
    datos4.append("idDispositivoRecuperar", idDispositivoRecuperar);
    datos4.append("consultorResposable", consultorResposable);

    $.ajax({
        url: "ajax/dispositivos.ajax.php",
        method: "POST",
        data: datos4,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(resultado){
            var respuesta = resultado[0];
            var accesorios = JSON.parse(respuesta["accesorios"]);

            //Mostrar solo los accesorios que corresponen al tipo de dispositivo
            if(respuesta["tipodispositivo"] == "Telefono"){
                $(".recuperarAccesoriosMovil").parent().show();
                $(".recuperarAccesoriosLaptop").hide();
                $(".accesorioLapizR").hide();

                if(accesorios.Cubo == "1"){$("#modalRecuperarDispositivo #checkCubo").parent().show();} else{$(" #modalRecuperarDispositivo #checkCubo").parent().hide();}
                if(accesorios.Cable == "1"){$("#modalRecuperarDispositivo #checkCable").parent().show();} else{$(" #modalRecuperarDispositivo #checkCable").parent().hide();}
                if(accesorios.Funda == "1"){$("#modalRecuperarDispositivo #checkFunda").parent().show();} else{$(" #modalRecuperarDispositivo #checkFunda").parent().hide();}
                if(accesorios.Powerbank == "1"){$("#modalRecuperarDispositivo #checkPowerbank").parent().show();} else{$(" #modalRecuperarDispositivo #checkPowerbank").parent().hide();}

            } else if(respuesta["tipodispositivo"] == "Tablet"){
                $(".recuperarAccesoriosMovil").show();
                $(".accesorioLapizR").show();
                $(".recuperarAccesoriosLaptop").hide();

                if(accesorios.Cubo == "1"){$("#modalRecuperarDispositivo #checkCubo").parent().show();} else{$(" #modalRecuperarDispositivo #checkCubo").parent().hide();}
                if(accesorios.Cable == "1"){$("#modalRecuperarDispositivo #checkCable").parent().show();} else{$(" #modalRecuperarDispositivo #checkCable").parent().hide();}
                if(accesorios.Funda == "1"){$("#modalRecuperarDispositivo #checkFunda").parent().show();} else{$(" #modalRecuperarDispositivo #checkFunda").parent().hide();}
                if(accesorios.Lapiz == "1"){$("#modalRecuperarDispositivo #checkLapiz").parent().show();} else{$(" #modalRecuperarDispositivo #checkLapiz").parent().hide();}
                if(accesorios.Powerbank == "1"){$("#modalRecuperarDispositivo #checkPowerbank").parent().show();} else{$(" #modalRecuperarDispositivo #checkPowerbank").parent().hide();}


            } else if(respuesta["tipodispositivo"] == "Laptop"){
                $(".recuperarAccesoriosMovil").parent().hide();
                $(".accesorioLapizR").parent().hide();
                $(".recuperarAccesoriosLaptop").show();

                if(accesorios.Maletin == "1"){$("#modalRecuperarDispositivo #checkMaletin").parent().show();} else{$(" #modalRecuperarDispositivo #checkMaletin").parent().hide();}
                if(accesorios.Cargador == "1"){$("#modalRecuperarDispositivo #checkCargador").parent().show();} else{$(" #modalRecuperarDispositivo #checkCargador").parent().hide();}
                if(accesorios.Mouse == "1"){$("#modalRecuperarDispositivo #checkMouse").parent().show();} else{$(" #modalRecuperarDispositivo #checkMouse").parent().hide();}
                if(accesorios.Mousepad == "1"){$("#modalRecuperarDispositivo #checkMousepad").parent().show();} else{$(" #modalRecuperarDispositivo #checkMousepad").parent().hide();}

            }
            
            
            //Mostrar información en la ventana de Recuperar el dispositivo
            $("#responsableRecuperar").text(resultado[1]["nombreconsultor"]);
            $("#responsableActual").val(resultado[1]["idconsultor"]);

            $("#modalRecuperarDispositivo .idDispositivoRecuperar").val(respuesta['iddispositivo']);
            $("#modalRecuperarDispositivo .detalleRecuperarTipo").text(respuesta['tipodispositivo']);
            $("#modalRecuperarDispositivo .detalleRecuperarMarca").text(respuesta['marcadispositivo']);
            $("#modalRecuperarDispositivo .detalleRecuperarModelo").text(respuesta['modelodispositivo']);

            if(respuesta["imeidispositivo"]){
                $("#modalRecuperarDispositivo .detalleRecuperarIMEI").parent().show();
                $("#modalRecuperarDispositivo .detalleRecuperarIMEI").text(respuesta['imeidispositivo']);
            }else{
                $("#modalRecuperarDispositivo .detalleRecuperarIMEI").parent().hide();
            }

            if(respuesta["respuesta['telefonodispositivo']"]){
                $("#modalRecuperarDispositivo .detalleRecuperarTelefono").parent().show();
                $("#modalRecuperarDispositivo .detalleRecuperarTelefono").text(respuesta['telefonodispositivo']);
            }else{
                $("#modalRecuperarDispositivo .detalleRecuperarTelefono").parent().hide();
            }
 
            $("#modalRecuperarDispositivo .detalleRecuperarSerie").text(respuesta['seriedispositivo']);
            $("#modalRecuperarDispositivo .detalleRecuperarSede").text(respuesta['sededispositivo']);
            $("#modalRecuperarDispositivo .detalleRecuperarFecha").text(respuesta['fecharegistro']);

        }
    })
    
})


//__________________________________________________________________________________________
//Eliminar dispositivo 
$(".tablaDispositivos").on("click", ".btnEliminarDispositivo", function(){
    Swal.fire({
        title: "Eliminar dispositivo",
        text: "¿Está seguro que desea eliminar este dispositivo?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
            var idEliminarDispositivo = $(this).attr("idEliminarDispositivo");

            var datos = new FormData();
            datos.append("idEliminarDispositivo", idEliminarDispositivo);

            $.ajax({
                url: "ajax/dispositivos.ajax.php",
                method: "POST",
                data: datos,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(respuesta){
                    Swal.fire({
                        title: respuesta.titulo,
                        text: respuesta.mensaje,
                        icon: respuesta.icono,
                        showConfirmButton: false,
                        timer: 1500
                      });

                      table.ajax.reload();
                }
            })
        }
      });

});

//__________________________________________________________________________________________
// VALIDACIÓN DE CAMPOS PARA NUEVO REGISTRO
(function () {
    'use strict'

        //Resetear formularios de modal, en cuanto el modal se oculte
        $("#modalDispositivos").on("hidden.bs.modal", function () {
            $(this).find('form')[0].reset();
        });

        //Limpiar modal cuando se oculte
        $("#modalAsignarDispositivo").on("hidden.bs.modal", function () {
            $(this).find('form')[0].reset();
        });

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms).forEach(function (form) {
      function handleButtonClick(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }

        form.addEventListener('submit', handleButtonClick);

        function handleModalClose(){
          form.classList.remove('was-validated');
        }

        document.getElementById('modalDispositivos').addEventListener('hidden.bs.modal', handleModalClose);
      })
  })();

//-----------------------------------------------------------------------------------------------------------
/* Actualizar Scroll */
function actualizarScrollDispositivos(){
    $('#modalVerDetalleDispositivo').modal('handleUpdate');
    $('#modalVerDetalleDispositivo').scrollTop(1);

    $('#modalVerDetalleDispositivo').scroll(function() {
        var scrollPosition = $(this).scrollTop();
        /* console.log("Posición del scroll: " + scrollPosition); */

        if(scrollPosition < 1){
            $('#modalVerDetalleDispositivo').scrollTop(1);
        }
    });
}