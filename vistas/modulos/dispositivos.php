
<div class="container-fluid py-2">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Administrar dispositivos</h6>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-primary btnNuevoDispositivo" data-bs-toggle="modal" data-bs-target="#modalDispositivos">
              <i class="fa fa-plus me-sm-1 cursor-pointer" aria-hidden="true"></i>
                Nuevo dispositivo
              </button>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive px-4">
                <table id="datatable" class="table align-items-center mb-0 tablaDispositivos display" style="width:100%">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dispositivo</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Marca</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Modelo</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IMEI/SERIE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Teléfono</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sede</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ESTADO</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Responsable</th>
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

<?php
  /* Modal para registro de nuevos dispositivos */
  include "vistas/modulos/dispositivos/nuevoDispositivo.php";
  
  /* Modal para modificar información de dispositivos */
  include "vistas/modulos/dispositivos/modificarDispositivo.php";
?>






<?php
  include "vistas/modulos/dispositivos/verDetalleDispositivo.php";

  include "vistas/modulos/dispositivos/asignar.php";
  include "vistas/modulos/dispositivos/recuperar.php";
?>

<!-- <script src="vistas/js/gestorDispositivos.js"></script> -->



<!-- <script>

  $("#modalAsignarDispositivo").on("hidden.bs.modal", function () {
    $(this).find('form')[0].reset();
  });

 // Example starter JavaScript for disabling form submissions if there are invalid fields
 (function () {
    'use strict'

      //Resetear formularios de modal, en cuanto el modal se oculte
      $("#modalDispositivos").on("hidden.bs.modal", function () {
        $(this).find('form')[0].reset();
      });

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function (form) {
      const boton = document.querySelector(".btnNuevoRegistro");

      function handleButtonClick(event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }

          form.classList.add('was-validated');
        }

        boton.addEventListener('click', handleButtonClick);

        function handleModalClose(){
          form.classList.remove('was-validated');
        }

        document.getElementById('modalDispositivos').addEventListener('hidden.bs.modal', handleModalClose);
      })
  })()

</script> -->
