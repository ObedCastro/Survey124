<div class="modal fade" id="modalEditarDispositivos" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalEditarDispositivosLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h1 class="modal-title fs-5 text-white" id="modalEditarDispositivosLabel">Modificar información de dispositivo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="text-secondary text-xxs">Los campos con <span class="text-danger">*</span> son obligatorios.</span>
        <form action="" method="post" class="needs-validation" id="formModificarDispositivo" novalidate>
          <div class="mb-3 row">
            <div class="col-md-4">
              <input type="hidden" id="idEditarDispositivo_" name="idEditarDispositivo_" value="">
              <label for="editarTipoDispositivo" class="form-label">Tipo <span class="text-danger text xxs">*</span></label>
              <select class="form-select" aria-label="Default select example" id="editarTipoDispositivo" name="editarTipoDispositivo" required>
              <?php
                  $tipos = ControladorTipos::ctrMostrarTipos();
                  foreach ($tipos as $key => $value) {
                    echo '<option value="'.$value["nombretipo"].'">'.$value["nombretipo"].'</option>';
                  }
                ?>
              </select>
              <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
            <div class="col-md-4">
              <label for="editarMarcaDispositivo" class="form-label">Marca <span class="text-danger text xxs">*</span></label>
              <select class="form-select" aria-label="Default select example" id="editarMarcaDispositivo" name="editarMarcaDispositivo" required>
              <?php
                  $marcas = ControladorMarcas::ctrMostrarMarcas();
                  foreach ($marcas as $key => $value) {
                    echo '<option value="'.$value["nombremarca"].'">'.$value["nombremarca"].'</option>';
                  }
                ?>
              </select>
              <div class="invalid-feedback">Debe seleccionar la marca.</div>
            </div>
            <div class="col-md-4">
              <label for="editarModeloDispositivo" class="form-label">Modelo <span class="text-danger text xxs">*</span></label>
              <select class="form-select" aria-label="Default select example" id="editarModeloDispositivo" name="editarModeloDispositivo" required>
              <?php
                  $modelos = ControladorModelos::ctrMostrarModelos();
                  foreach ($modelos as $key => $value) {
                    echo '<option value="'.$value["nombremodelo"].'">'.$value["nombremodelo"].'</option>';
                  }
                ?>
              </select>
              <div class="invalid-feedback">Este campo es requerido</div>
            </div>
          </div>


          <div class="mb-3 row">
            <div class="col-md-3">
              <label for="editarImeiDispositivo" class="form-label">IMEI</label>
              <input type="text" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" class="form-control" placeholder="Ingrese el IMEI" id="editarImeiDispositivo" name="editarImeiDispositivo" minlength="15" maxlength="15">
              <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-3">
              <label for="editarSerieDispositivo" class="form-label">Serie <span class="text-danger text xxs">*</span></label>
              <input type="text" onkeyup="mayus(this);" maxlength="15" class="form-control" placeholder="Ingrese la serie" id="editarSerieDispositivo" name="editarSerieDispositivo" required>
              <div class="invalid-feedback">Este campo es requerido</div>
            </div>
            <div class="col-md-3">
              <label for="editarTelefonoDispositivo" class="form-label">Teléfono</label>
              <input type="text" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" class="form-control" placeholder="Ingrese el teléfono" id="editarTelefonoDispositivo" name="editarTelefonoDispositivo" minlength="8" maxlength="11">
              <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-3">
              <label for="editarSedeDispositivo" class="form-label">Sede <span class="text-danger text xxs">*</span></label>
              <select class="form-select" aria-label="Default select example" id="editarSedeDispositivo" name="editarSedeDispositivo" required>
              <?php
                  $sedes = ControladorSedes::ctrMostrarSedes(null, null);
                  foreach ($sedes as $key => $value) {
                    echo '<option value="'.$value["idsede"].'">'.$value["nombresede"].' '.$value["departamentosede"].'</option>';
                  }
                ?>
              </select>
              <div class="invalid-feedback">Este campo es requerido</div>
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
      </div>
    </div>
  </div>
</div>