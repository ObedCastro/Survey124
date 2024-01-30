// Formatting function for row details - modify as you need
function format(d) {
    // `d` is the original data object for the row
    var aen = JSON.parse(d.entregado);
    var are = JSON.parse(d.recuperado);
    var comentario = (d.comentario != null) ? d.comentario : "Sin comentario";

    var acc_entregados = "";
    var acc_devueltos = "";
    for(var key in aen){
        if(aen.hasOwnProperty(key)){
            if(aen[key] == "1"){
                acc_entregados += '<dd class="mb-0 badge bg-primary" style="margin-right: 5px;">'+key+'</dd>';
            }
        }
    } 
    
    for(var key in are){
        if(are.hasOwnProperty(key)){
            if(are[key] == "1"){
                acc_devueltos += '<dd class="mb-0 badge bg-success" style="margin-right: 5px;">'+key+'</dd>';
            }
        }
    }

    return (
        '<dl>' +
        '<dt>Accesorios entregados:</dt>' +
        acc_entregados +
        '<br><br><dt>Accesorios devueltos:</dt>' +
        acc_devueltos +
        '<br><br><dt>Comentario:</dt>' +
        '<dd>'+comentario+'</dd>' +
        '</dl>'
    );
}



//Traducir datatable
let tabla = new DataTable('#datatableFaltantes', {
    ajax: 'ajax/tablaFaltantes.ajax.php',
    columns: [
        {
            className: 'dt-control',
            orderable: false,
            data: null,
            defaultContent: ''
        },
        { 
            data: 'consultor',
            render: function (data, type) {
                return '<span class="text-xs">'+data+'</span>';
            }
        },
        { 
            data: 'sede',
            render: function (data, type) {
                return '<span class="text-xs">'+data+'</span>';
            }
        },{ 
            data: 'dispositivo',
            render: function (data, type) {
                return '<span class="text-xs">'+data+'</span>';
            }
        },
        { 
            data: 'serie',
            render: function (data, type) {                
                return '<span class="text-xs">'+data+'</span>';
            }
        }, 
        { 
            data: 'fecha_asignacion',
            render: function (data, type) {
                return '<span class="text-xs">'+data+'</span>';
            }
        },
        { 
            data: 'fecha_recepcion',
            render: function (data, type) {
                return '<span class="text-xs">'+data+'</span>';
            }
        },
        { 
            data: 'acc',
            render: function (data, type) {
                var datos = JSON.parse(data);
                var acc_ent = datos[0];
                var acc_rec = datos[1];

                var array = [];
                Object.entries(acc_ent).forEach(function(entry){
                    var key = entry[0];

                    if(entry[1] != acc_rec[key]){
                        array.push(key);
                    }

                });

                var datosTexto = array.toString();

                return '<span class="text-xs">'+datosTexto+'</span>';
            }
        },
        {
            data: 'idregistro',
            render: function (data) {
                return '<span onclick="recuperarFaltantes('+data+')" class="text-xs btnRecuperarFaltante" id="'+data+'" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#modalRecuperarFaltantes"><i class="fa fa-cogs" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Recuperar accesorios faltantes"></i></span>';
            }
        },
    ],
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
                titleAttr: 'PDF',
                text: '<i class="fa fa-file-pdf-o" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Exportar a PDF"></i>',
                download: 'open'
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

// Add event listener for opening and closing details
tabla.on('click', 'td.dt-control', function (e) {
    let tr = e.target.closest('tr');
    let row = tabla.row(tr);
 
    if (row.child.isShown()) {
        // This row is already open - close it
        row.child.hide();
    }
    else {
        // Open this row
        row.child(format(row.data())).show();
    }
});

//------------------------------------------------------------------------------------------------------------
//PARA RECUPERAR LOS ACCESORIOS QUE QUEDARON PENDIENTES DE ENTREGAR POR PARTE DE LOS CONSULTORES

    function recuperarFaltantes(id){
        $("#modalRecuperarFaltantes .form-check").hide();
        $("#formularioRecuperarAccesorios")[0].reset()
    
        var dato = new FormData();
        dato.append("idregistro", id);
    
        $.ajax({
            url: "ajax/faltantes.ajax.php",
            method: "POST",
            data: dato,
            cache: false,
            contentType: false,
            processData: false,
            dataType: "json",
            success: function(respuesta){

                $("#idAccRecuperar").val(respuesta.id);
    
                Object.entries(JSON.parse(respuesta.accesorios_entregados)).forEach(function(entry){
                    var key = entry[0];
                    
                    if(entry[1] != JSON.parse(respuesta.accesorios_recuperados)[key]){
                        $("#modalRecuperarFaltantes #check"+entry[0]+"R").parent().show();
                        $("#modalRecuperarFaltantes #check"+entry[0]+"R >input").removeAttr("checked", true);
                        //$("#modalRecuperarFaltantes #check"+entry[0]+"R >input").removeAttr("disabled", true);
                    } else if(entry[1] == "1"){
                        $("#modalRecuperarFaltantes #check"+entry[0]+"R").parent().show();
                        $("#modalRecuperarFaltantes #check"+entry[0]+"R >input").attr("checked", true);
                        $("#modalRecuperarFaltantes #check"+entry[0]+"R >input").attr("onclick", "return deshabilitarCheckbox()");
                        //$("#modalRecuperarFaltantes #check"+entry[0]+"R >input").attr("disabled", true);
                    }
                    
                });
            }
        })
    }



//-----------------------------------------------------------------------------------------------
$("#formularioRecuperarAccesorios").on("submit", function(e){
    e.preventDefault();

    var datos = $("#formularioRecuperarAccesorios").serialize();

    $.ajax({
        url: "ajax/faltantes.ajax.php",
        method: "POST",
        data: datos,
        dataType: "json",
        success: function(respuesta){
            Swal.fire({
                title: respuesta.titulo,
                text: respuesta.mensaje,
                icon: respuesta.icono,
                showConfirmButton: false,
                timer: 1500
              });

            $("#modalRecuperarFaltantes").modal("hide");

            tabla.ajax.reload();
        }
    })
})




function deshabilitarCheckbox(){
    return false;
}