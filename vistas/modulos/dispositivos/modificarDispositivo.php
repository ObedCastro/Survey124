<div class="modal fade" id="modalEditarDispositivos" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalEditarDispositivosLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalEditarDispositivosLabel">Modificar información de dispositivo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="" method="post" class="needs-validation" id="formModificarDispositivo" novalidate>
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
              <div class="invalid-feedback">Este campo es obligatorio</div>
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
              <div class="invalid-feedback">Debe seleccionar la marca.</div>
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
              <div class="invalid-feedback">Este campo es requerido</div>
            </div>
          </div>


          <div class="mb-3 row">
            <div class="col-md-3">
              <label for="imeiDispositivo" class="form-label">IMEI</label>
              <input type="text" class="form-control" placeholder="Ingrese el IMEI" id="imeiDispositivo" name="imeiDispositivo" maxlength="15">
              <div class="invalid-feedback"></div>
            </div>
            <div class="col-md-3">
              <label for="serieDispositivo" class="form-label">Serie</label>
              <input type="text" class="form-control" placeholder="Ingrese la serie" id="serieDispositivo" name="serieDispositivo">
              <div class="invalid-feedback">Este campo es requerido</div>
            </div>
            <div class="col-md-3">
              <label for="telefonoDispositivo" class="form-label">Teléfono</label>
              <input type="text" class="form-control" placeholder="Ingrese el teléfono" id="telefonoDispositivo" name="telefonoDispositivo">
              <div class="invalid-feedback"></div>
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