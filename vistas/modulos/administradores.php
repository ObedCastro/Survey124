<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Administradores</h6>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalNuevoAdmin">
              <i class="fa fa-plus me-sm-1 cursor-pointer" aria-hidden="true"></i>
                Nuevo Administrador
              </button>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive px-4">
                <table id="datatableAdmin" class="table align-items-center mb-0 tablaAdmin">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acción</th>
                    </tr>
                  </thead>

                  <!--<tbody>
                  </tbody>-->

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




<!-- Modal -->
<div class="modal fade" id="modalNuevoAdmin" tabindex="-1" aria-labelledby="modalNuevoAdminLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalNuevoAdminLabel">Agregar nuevo administrador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="POST" id="formularioNuevoAdmin">
          <div class="mb-3">
            <label for="nombreAdmin" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreAdmin" name="nombreAdmin" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="emailAdmin" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailAdmin" name="emailAdmin">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <input type="submit" class="btn btn-primary" value="Guardar" name="opcion">
          </div>
        </form>

      </div>
    </div>
  </div>
</div>






<script type="text/javascript">


  //Traducir datatable
  $(document).ready(function(){ 
    var tablaAdmin = $('#datatableAdmin').DataTable({
        "ajax": "ajax/tablaAdmin.ajax.php",
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

    //REALIZAR NUEVO REGISTRO
    $( "#formularioNuevoAdmin" ).on( "submit", function( event ) {
      event.preventDefault();
      let datos = $("#formularioNuevoAdmin").serialize();

      $.ajax({
        url: 'ajax/administradores.ajax.php',
        method: "POST",
        dataType: "json",
        data: datos,
        success: function(respuesta){
          tablaAdmin.ajax.reload();
          $("#modalNuevoAdmin #nombreAdmin").val("");
          $("#modalNuevoAdmin #emailAdmin").val("");
          $("#modalNuevoAdmin").modal('hide');
        },
        error: function(error){
          console.log("Error: "+error)
        }
      })
    })

  })



</script>
