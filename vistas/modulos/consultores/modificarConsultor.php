<div class="modal fade" id="modalEditarConsultores" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalEditarConsultoresLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalEditarConsultoresLabel">Modificar información de Consultor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form method="post" class="needs-validation" id="formEditarConsultor" novalidate>      

          <div class="mb-3 row">
            <div class="col-md-6">
              <input type="hidden" id="idEditarConsultor" name="idEditarConsultor">
              <label for="editarNombreConsultor" class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Ingrese nombre" id="editarNombreConsultor" name="editarNombreConsultor" maxlength="50" required>
              <div class="invalid-feedback">El nombre es requerido.</div>
            </div>
            <div class="col-md-6">
              <label for="editarDuiConsultor" class="form-label">DUI</label>
              <input type="text" class="form-control" placeholder="Ingrese DUI" id="editarDuiConsultor" name="editarDuiConsultor">
            </div>
          </div>

          <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="editarCargoConsultor" class="form-label">Cargo</label>
                    <input type="text" class="form-control" placeholder="Ingrese el cargo" id="editarCargoConsultor" name="editarCargoConsultor" required>
                    <div class="invalid-feedback"></div>
                </div>
                <div class="col-md-3">
                    <label for="editarContactoConsultor" class="form-label">Contacto</label>
                    <input type="text" class="form-control" placeholder="Contacto del consultor" id="editarContactoConsultor" name="editarContactoConsultor">
                </div>
                <div class="col-md-3">
                    <label for="editarSedeConsultor" class="form-label">Sede</label>
                    <select class="form-select" aria-label="Default select example" id="editarSedeConsultor" name="editarSedeConsultor" required>
                        <option value=""></option>
                        <?php 
                          $sedes = ControladorSedes::ctrMostrarSedes(null, null);
                          foreach ($sedes as $key => $value) {
                            echo '<option value="'.$value["idsede"].'">'.$value["nombresede"].' '.$value["departamentosede"].'</option>';
                          }
                        ?>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>
          </div>            

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
        <?php
          /* $modificarConsultor = new ControladorConsultores();
          $modificarConsultor->ctrModificarConsultor(); */
        ?>
      </div>
    </div>
  </div>
</div>