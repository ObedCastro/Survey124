 //Traducir datatable
 //$(document).ready(function(){ 
  
    let tablaAdmin = new DataTable('#datatableAdmin', {
        ajax: 'ajax/tablaAdmin.ajax.php',
        columns: [
          {
            data: 'nombre',
            render: function (data) {
              return '<span class="text-secondary text-xs font-weight-bold">'+data+'</span>';
            }
          },
          {
            data: 'email',
            render: function (data) {
              return '<span class="text-secondary text-xs font-weight-bold">'+data+'</span>';
            }
          },
          {
            data: 'usuario',
            render: function (data) {
              return '<span class="text-secondary text-xs font-weight-bold">'+data+'</span>';
            }
          },
          {
            data: 'cargo',
            render: function (data) {
              return '<span class="text-secondary text-xs font-weight-bold">'+data+'</span>';
            }
          },
          {
            data: 'id',
            render: function (data) {
              return '<ul class="navbar-nav justify-content-end">'+
                        '<li class="nav-item dropdown pe-2 d-flex align-items-center">'+
                          '<div class="nav-link text-body p-0">'+
                          '<a idEditarAdmin_="' + data + '" class="p-1 btn-lg mb-0 text-secondary btnEditarAdmin" data-bs-toggle="modal" data-bs-target="#modalEditarAdmin" style="cursor:pointer;"><i class="fa fa-pencil fs-6 p-1" data-bs-toggle="tooltip" title="Parámetro para Tooltip: ' + data + '"></i></a>'+
                          '</div>'+
                        '</li>'+
                      '</ul>';
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
    });
 
    //REALIZAR NUEVO REGISTRO
    $("#formularioNuevoAdmin").on( "submit", function( event ) {
      event.preventDefault();
      let datos = $("#formularioNuevoAdmin").serialize();

      $.ajax({
        url: 'ajax/administradores.ajax.php',
        method: "POST",
        dataType: "json",
        data: datos,
        success: function(respuesta){
          $("#modalNuevoAdmin").modal('hide');
          Swal.fire({
            position: "center",
            icon: "success",
            title: respuesta.mensaje,
            showConfirmButton: false,
            timer: 1500
          });

          tablaAdmin.ajax.reload();
        },
        error: function(error){
          console.log("Error: "+error)
        }
      })
    })

  //})


  //--------------------------------------------------------------------------------------------------------
  //PARA MODIFICAR LA INFORMACIÓN DEL ADMINISTRADOR
  //Muestra la información antes de modificarla
  $("#datatableAdmin").on("click", ".btnEditarAdmin", function(){
    var idEditarAdmin_ = $(this).attr("idEditarAdmin_");

    var dato = new FormData();
    dato.append("idEditarAdmin_", idEditarAdmin_);

    $.ajax({
      url: 'ajax/administradores.ajax.php',
      method: "POST",
      dataType: "json",
      cache: false,
      contentType: false,
      processData: false,
      data: dato,
      success: function(respuesta){
        $("#idEditarAdmin").val(respuesta.id);
        $("#editarNombreAdmin").val(respuesta.nombre);
        $("#editarEmailAdmin").val(respuesta.email);
        $("#editarUsuarioAdmin").val(respuesta.usuario);
        $("#editarPerfilAdmin").val(respuesta.perfil);
        $("#editarCargoAdmin").val(respuesta.cargo);
      }
    })

  })

  //-------------------------------------------------------------------------------------------------


  //------------------------------------------------------------------------------------------------
  //Modifica la información
  $("#formularioEditarAdmin").on("submit", function(e){
    e.preventDefault();

    var datos = $("#formularioEditarAdmin").serialize();
    //console.log(datos);

    $.ajax({
      url: 'ajax/administradores.ajax.php',
      method: "POST",
      dataType: "json",
      data: datos,
      success: function(respuesta){
        $("#modalEditarAdmin").modal('hide');
        Swal.fire({
          position: "center",
          icon: "success",
          title: respuesta.mensaje,
          showConfirmButton: false,
          timer: 1500
        });

        tablaAdmin.ajax.reload();
      }
    })

  })

  //--------------------------------------------------------------------------------------------------------

  //Resetear formularios de modal, en cuanto el modal se oculte
  $("#modalNuevoAdmin").on("hidden.bs.modal", function () {
    $(this).find('form')[0].reset();
  });

  $("#modalEditarAdmin").on("hidden.bs.modal", function () {
    $(this).find('form')[0].reset();
  });


  //VALIDACIONES PARA NUEVO REGISTRO
  // VALIDACIÓN DE CAMPOS PARA NUEVO REGISTRO
(function () {
  'use strict'

    //Resetear formularios de modal, en cuanto el modal se oculte
    $("#modalNuevoAdmin").on("hidden.bs.modal", function () {
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

      document.getElementById('modalNuevoAdmin').addEventListener('hidden.bs.modal', handleModalClose);
    })
})();