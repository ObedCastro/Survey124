<div class="modal fade" id="modalConsultores" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalConsultoresLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalConsultoresLabel">Registrar nuevo Consultor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" class="needs-validation">

          <div class="mb-3 row">
            <div class="col-md-6">
              <label for="nombreConsultor" class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Ingrese nombre" id="nombreConsultor" name="nombreConsultor" maxlength="50">
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-6">
              <label for="duiConsultor" class="form-label">DUI</label>
              <input type="text" class="form-control" placeholder="Ingrese DUI" id="duiConsultor" name="duiConsultor">
              <div class="valid-feedback"></div>
            </div>
          </div>

          <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="cargoConsultor" class="form-label">Cargo</label>
                    <input type="text" class="form-control" placeholder="Ingrese el cargo" id="cargoConsultor" name="cargoConsultor">
                    <div class="valid-feedback"></div>
                </div>
                <div class="col-md-3">
                    <label for="contactoConsultor" class="form-label">Contacto</label>
                    <input type="text" class="form-control" placeholder="Contacto del consultor" id="contactoConsultor" name="contactoConsultor">
                    <div class="valid-feedback"></div>
                </div>
                <div class="col-md-3">
                    <label for="sedeConsultor" class="form-label">Sede</label>
                    <select class="form-select" aria-label="Default select example" id="sedeConsultor" name="sedeConsultor">
                        <option value=""></option>
                        <option value="1">San Miguel</option>
                        <option value="2">La Unión</option>
                        <option value="3">Morazán</option>
                    </select>
                    <div class="valid-feedback"></div>
                </div>
          </div>

          <div class="mb-3 row">
                <div class="col-md-3">
                    <label for="fechaRegistroConsultor" class="form-label">Fecha</label>
                    <?php
                        date_default_timezone_set('America/El_Salvador');
                        $fechahoy = date("Y-m-d");
                        echo '<input type="text" class="form-control" placeholder="Ingrese el teléfono" value="'.$fechahoy.'" id="fechaRegistroConsultor" name="fechaRegistroConsultor" readonly>';
                    ?>
                    <div class="valid-feedback"></div>
                </div>
          </div>


          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>

        <?php
        /*  $registrarConsultor = new ControladorConsultores();
          $registrarConsultor->ctrRegistrarConsultor();*/
        ?>

      </div>
    </div>
  </div>
</div>
