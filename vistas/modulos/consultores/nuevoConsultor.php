<div class="modal fade" id="modalConsultores" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalConsultoresLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h1 class="modal-title fs-5 text-white" id="modalConsultoresLabel">Registrar nuevo consultor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <span class="text-secondary text-xxs">Los campos con <span class="text-danger">*</span> son obligatorios.</span>
        <form action="" method="post" class="needs-validation" id="formNuevoConsultor" novalidate>
          <input type="hidden" name="nuevo" value="1">

          <div class="mb-3 row">
            <div class="col-md-6">
              <label for="nombreConsultor" class="form-label">Nombre <span class="text-danger">*</span></label>
              <input type="text" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode == 32)" placeholder="Ingrese nombre" id="nombreConsultor" name="nombreConsultor" minlength="10" maxlength="50" required>
              <div class="invalid-feedback">El nombre es requerido (Entre 10 y 50 caracteres).</div>
            </div>
            <div class="col-md-6">
              <label for="duiConsultor" class="form-label">DUI</label>
              <input type="text" class="form-control" pattern="^[0-9]{9}$" placeholder="Ingrese DUI sin guión" id="duiConsultor" name="duiConsultor" minlength maxlength="9">
              <div class="invalid-feedback">El formato de DUI, no es válido.</div>
            </div>
          </div>

          <div class="mb-3 row">
            <div class="col-md-6">
              <label for="cargoConsultor" class="form-label">Cargo <span class="text-danger">*</span></label>
              <input type="text" class="form-control" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode == 32)" placeholder="Ingrese el cargo" id="cargoConsultor" name="cargoConsultor" required>
              <div class="invalid-feedback">Debe colocar un cargo para el consultor.</div>
            </div>
            <div class="col-md-3">
              <label for="contactoConsultor" class="form-label">Contacto <span class="text-danger">*</span></label>
              <input type="text" pattern="^[0-9]{8}$" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" placeholder="Ejemplo: 00000000" class="form-control" id="contactoConsultor" name="contactoConsultor" minlength="8" maxlength="8" required>
              <div class="invalid-feedback">El contacto es requerido.</div>
            </div>
            <div class="col-md-3">
              <label for="sedeConsultor" class="form-label">Sede <span class="text-danger">*</span></label>
              <select class="form-select" aria-label="Default select example" id="sedeConsultor" name="sedeConsultor" required>
                <option value=""></option>
                <?php 
                  $sedes = ControladorSedes::ctrMostrarSedes(null, null);
                  foreach ($sedes as $key => $value) {
                    echo '<option value="'.$value["idsede"].'">'.$value["nombresede"].' '.$value["departamentosede"].'</option>';
                  }
                ?>
              </select>
              <div class="invalid-feedback">Seleccione la sede a la que pertenece el consultor.</div>
            </div>
          </div>

          <div class="mb-3 row">
            <div class="col-md-3">
              <label for="fechaRegistroConsultor" class="form-label">Fecha</label>
              <?php
                date_default_timezone_set('America/El_Salvador');
                $fechahoy = date("Y-m-d");
                echo '<input type="text" class="form-control" value="'.$fechahoy.'" id="fechaRegistroConsultor" name="fechaRegistroConsultor" readonly>';
              ?>
              <div class="invalid-feedback"></div>
            </div>
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>

        <?php
          /* $registrarConsultor = new ControladorConsultores();
          $registrarConsultor->ctrRegistrarConsultor(); */
        ?>

      </div>
    </div>
  </div>
</div>
