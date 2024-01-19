

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



<!-- MODAL DE NUEVO DISPOSITIVOS -->
<div class="modal fade" id="modalDispositivos" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalDispositivosLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h1 class="modal-title fs-5 text-white" id="modalDispositivosLabel">Registrar nuevo dispositivo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" class="needs-validation" id="formNuevoDispositivo" novalidate>
          <input type="hidden" name="nuevo" value="nuevo">
          <div class="mb-3 row">
            <div class="col-md-4">
              <label for="tipoDispositivo" class="form-label">Tipo</label>
              <select class="form-select" aria-label="Default select example" id="tipoDispositivo" name="tipoDispositivo" required>
                <option value=""></option>
                <?php
                  $tipos = ControladorTipos::ctrMostrarTipos();
                  foreach ($tipos as $key => $value) {
                    echo '<option value="'.$value["nombretipo"].'">'.$value["nombretipo"].'</option>';
                  }
                ?>
              </select>
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">Debe seleccionar el tipo de dispositivo</div>
            </div>
            <div class="col-md-4">
              <label for="marcaDispositivo" class="form-label">Marca</label>
              <select class="form-select" aria-label="Default select example" id="marcaDispositivo" name="marcaDispositivo" required>
                <option value=""></option>
                <?php
                  $marcas = ControladorMarcas::ctrMostrarMarcas();
                  foreach ($marcas as $key => $value) {
                    echo '<option value="'.$value["nombremarca"].'">'.$value["nombremarca"].'</option>';
                  }
                ?>
              </select>
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">Debe seleccionar marca de dispositivo</div>
            </div>
            <div class="col-md-4">
              <label for="modeloDispositivo" class="form-label">Modelo</label>
              <select class="form-select" aria-label="Default select example" id="modeloDispositivo" name="modeloDispositivo" required>
                <option value=""></option>
                <?php
                  $modelos = ControladorModelos::ctrMostrarModelos();
                  foreach ($modelos as $key => $value) {
                    echo '<option value="'.$value["nombremodelo"].'">'.$value["nombremodelo"].'</option>';
                  }
                ?>
              </select>
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">Debe seleccionar el modelo de dispositivo</div>
            </div>
          </div>


          <div class="mb-3 row">
            <div class="col-md-3 mostrarInputImei">
              <label for="imeiDispositivo" class="form-label">IMEI</label>
              <input type="text" class="form-control" placeholder="Ingrese el IMEI" id="imeiDispositivo" name="imeiDispositivo" minlength="15" maxlength="15" required>
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">El IMEI es requerido (15 dígitos)</div>
            </div>
            <div class="col-md-3">
              <label for="serieDispositivo" class="form-label">Serie</label>
              <input onkeyup="mayus(this);" type="text" class="form-control" placeholder="Ingrese la serie" id="serieDispositivo" name="serieDispositivo" maxlength="15" required>
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">La serie del dispositivo es requerida</div>
            </div>
            <div class="col-md-3">
              <label for="telefonoDispositivo" class="form-label mostrarInputTelefono">Teléfono</label>
              <input type="text" class="form-control" placeholder="Ingrese el teléfono" id="telefonoDispositivo" name="telefonoDispositivo" minlength="8" maxlength="11" required>
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">Debe agregar el teléfono del dispositivo (Min 8 dígitos)</div>
            </div>
            <div class="col-md-3">
              <label for="sedeDispositivo" class="form-label">Sede</label>
              <select class="form-select" aria-label="Default select example" id="sedeDispositivo" name="sedeDispositivo" required>
                <option value=""></option> 
                <?php
                  $sedes = ControladorSedes::ctrMostrarSedes(null, null);
                  foreach ($sedes as $key => $value) {
                    echo '<option value="'.$value["idsede"].'">'.$value["nombresede"].' '.$value["departamentosede"].'</option>';
                  }
                ?>
              </select>
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">Debe seleccionar la sede del dispositivo</div>
            </div>
          </div>

            <?php
              date_default_timezone_set('America/El_Salvador');
              $fechahoy = date("Y-m-d");
              echo '<p class="text-xs mt-5">Realizando registro en: <strong>'.$fechahoy.'</strong></p>';
            ?>
            <input name="fechaRegistro" type="hidden" value="<?php echo $fechahoy ?>">

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary cancelarevento" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary btnNuevoRegistro">Guardar</button>
          </div>
        </form>

        <?php
          //$registrarDispositivo = new ControladorDispositivos();
          //$registrarDispositivo->ctrRegistrarDispositivo();
        ?>

      </div>
    </div>
  </div>
</div>


<script>
 
</script>












<!-- MODAL PARA MODIFICAR INFORMACIÓN DEL DISPOSITIVO -->
<div class="modal fade" id="modalEditarDispositivos" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalEditarDispositivosLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalEditarDispositivosLabel">Modificar información de dispositivo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="" method="post" class="needs-validation" id="formModificarDispositivo">
          <div class="mb-3 row">
            <div class="col-md-4">
              <input type="hidden" id="idEditarDispositivo_" name="idEditarDispositivo_" value="">
              <label for="editarTipoDispositivo" class="form-label">Tipo</label>
              <select class="form-select" aria-label="Default select example" id="editarTipoDispositivo" name="editarTipoDispositivo">
              <?php
                  $tipos = ControladorTipos::ctrMostrarTipos();
                  foreach ($tipos as $key => $value) {
                    echo '<option value="'.$value["nombretipo"].'">'.$value["nombretipo"].'</option>';
                  }
                ?>
              </select>
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-4">
              <label for="marcaDispositivo" class="form-label">Marca</label>
              <select class="form-select" aria-label="Default select example" id="marcaDispositivo" name="marcaDispositivo">
              <?php
                  $marcas = ControladorMarcas::ctrMostrarMarcas();
                  foreach ($marcas as $key => $value) {
                    echo '<option value="'.$value["nombremarca"].'">'.$value["nombremarca"].'</option>';
                  }
                ?>
              </select>
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-4">
              <label for="modeloDispositivo" class="form-label">Modelo</label>
              <select class="form-select" aria-label="Default select example" id="modeloDispositivo" name="modeloDispositivo">
              <?php
                  $modelos = ControladorModelos::ctrMostrarModelos();
                  foreach ($modelos as $key => $value) {
                    echo '<option value="'.$value["nombremodelo"].'">'.$value["nombremodelo"].'</option>';
                  }
                ?>
              </select>
              <div class="valid-feedback"></div>
            </div>
          </div>


          <div class="mb-3 row">
            <div class="col-md-3">
              <label for="imeiDispositivo" class="form-label">IMEI</label>
              <input type="text" class="form-control" placeholder="Ingrese el IMEI" id="imeiDispositivo" name="imeiDispositivo" maxlength="15">
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-3">
              <label for="serieDispositivo" class="form-label">Serie</label>
              <input type="text" class="form-control" placeholder="Ingrese la serie" id="serieDispositivo" name="serieDispositivo">
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-3">
              <label for="telefonoDispositivo" class="form-label">Teléfono</label>
              <input type="text" class="form-control" placeholder="Ingrese el teléfono" id="telefonoDispositivo" name="telefonoDispositivo">
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-3">
              <label for="sedeDispositivo" class="form-label">Sede</label>
              <select class="form-select" aria-label="Default select example" id="sedeDispositivo" name="sedeDispositivo">
              <?php
                  $sedes = ControladorSedes::ctrMostrarSedes(null, null);
                  foreach ($sedes as $key => $value) {
                    echo '<option value="'.$value["idsede"].'">'.$value["nombresede"].' '.$value["departamentosede"].'</option>';
                  }
                ?>
              </select>
              <div class="valid-feedback"></div>
            </div>
          </div>

          <div class="row">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="comentarioDispositivo" name="comentarioDispositivo" style="height: 100px"></textarea>
              <label for="comentarioDispositivo">Comentarios</label>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>


      <?php
          /*$modificarDispositivo = new ControladorDispositivos();
          $modificarDispositivo->ctrModificarDispositivo();*/
        ?>
      </div>
    </div>
  </div>
</div>






<?php
  include "vistas/modulos/dispositivos/verDetalleDispositivo.php";

  include "vistas/modulos/dispositivos/asignar.php";
  include "vistas/modulos/dispositivos/recuperar.php";
?>

<script src="vistas/js/gestorDispositivos.js"></script>



<script>

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

</script>
