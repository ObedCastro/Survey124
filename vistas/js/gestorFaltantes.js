// Formatting function for row details - modify as you need
function format(d) {
    // `d` is the original data object for the row
    var aen = JSON.parse(d.entregado);
    var are = JSON.parse(d.recuperado);

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
        '<dd>Este es el comentario</dd>' +
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
        },
        { 
            data: 'imei',
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
                  download: 'open'
              },
              {
                  extend: 'excelHtml5',
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