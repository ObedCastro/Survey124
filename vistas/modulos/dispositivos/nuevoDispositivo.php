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
              <label for="tipoDispositivo" class="form-label">Tipo <span class="text-danger">*</span></label>
              <select class="form-select" aria-label="Default select example" id="tipoDispositivo" name="tipoDispositivo" required>
                <option value=""></option>
                <?php
                  $tipos = ControladorTipos::ctrMostrarTipos();
                  foreach ($tipos as $key => $value) {
                    echo '<option value="'.$value["nombretipo"].'">'.$value["nombretipo"].'</option>';
                  }
                ?>
              </select>
              <div class="invalid-feedback">Debe seleccionar el tipo de dispositivo</div>
            </div>
            <div class="col-md-4">
              <label for="marcaDispositivo" class="form-label">Marca <span class="text-danger">*</span></label>
              <select class="form-select" aria-label="Default select example" id="marcaDispositivo" name="marcaDispositivo" required>
                <option value=""></option>
                <?php
                  $marcas = ControladorMarcas::ctrMostrarMarcas();
                  foreach ($marcas as $key => $value) {
                    echo '<option value="'.$value["nombremarca"].'">'.$value["nombremarca"].'</option>';
                  }
                ?>
              </select>
              <div class="invalid-feedback">Debe seleccionar marca de dispositivo</div>
            </div>
            <div class="col-md-4">
              <label for="modeloDispositivo" class="form-label">Modelo <span class="text-danger">*</span></label>
              <select class="form-select" aria-label="Default select example" id="modeloDispositivo" name="modeloDispositivo" required>
                <option value=""></option>
                <?php
                  $modelos = ControladorModelos::ctrMostrarModelos();
                  foreach ($modelos as $key => $value) {
                    echo '<option value="'.$value["nombremodelo"].'">'.$value["nombremodelo"].'</option>';
                  }
                ?>
              </select>
              <div class="invalid-feedback">Debe seleccionar el modelo de dispositivo</div>
            </div>
          </div>


          <div class="mb-3 row">
            <div class="col-md-3 mostrarInputImei">
              <label for="imeiDispositivo" class="form-label">IMEI</label>
              <input type="text" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" class="form-control" placeholder="Ingrese el IMEI" id="imeiDispositivo" name="imeiDispositivo" minlength="15" maxlength="15">
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">El IMEI es requerido (15 dígitos)</div>
            </div>
            <div class="col-md-3">
              <label for="serieDispositivo" class="form-label">Serie <span class="text-danger">*</span></label>
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
              <label for="sedeDispositivo" class="form-label">Sede <span class="text-danger">*</span></label>
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
            <button type="submit" class="btn btn-primary btnNuevoRegistro">Guardar</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>