<div class="modal fade" id="modalEditarConsultores" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalEditarConsultoresLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalEditarConsultoresLabel">Modificar información de Consultor</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="" method="post" class="needs-validation">
          <div class="mb-3 row">
            <div class="col-md-4">
              <input type="hidden" id="idEditarConsultor" name="idConsultor" value="">
              <label for="editarTipoConsultor" class="form-label">Tipo</label>
              <select class="form-select" aria-label="Default select example" id="editarTipoConsultor" name="editarTipoConsultor">
                <option value="Telefono">Telefono</option>
                <option value="Tablet">Tablet</option>
                <option value="Laptop">Laptop</option>
              </select>
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-4">
              <label for="marcaConsultor" class="form-label">Marca</label>
              <select class="form-select" aria-label="Default select example" id="marcaConsultor" name="marcaConsultor">
                <option value="Samsung">Samsung</option>
                <option value="HP">HP</option>
                <option value="Lenovo">Lenovo</option>
              </select>
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-4">
              <label for="modeloConsultor" class="form-label">Modelo</label>
              <select class="form-select" aria-label="Default select example" id="modeloConsultor" name="modeloConsultor">
                <option value="Galaxy A34">Galaxy A34</option>
                <option value="Galaxy A33">Galaxy A33</option>
                <option value="Tab S9">Tab S9</option>
                <option value="640 G9">640 G9</option>
              </select>
              <div class="valid-feedback"></div>
            </div>
          </div>
        

          <div class="mb-3 row">
            <div class="col-md-3">
              <label for="imeiConsultor" class="form-label">IMEI</label>
              <input type="text" class="form-control" placeholder="Ingrese el IMEI" id="imeiConsultor" name="imeiConsultor" maxlength="15">
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-3">
              <label for="serieConsultor" class="form-label">Serie</label>
              <input type="text" class="form-control" placeholder="Ingrese la serie" id="serieConsultor" name="serieConsultor">
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-3">
              <label for="telefonoConsultor" class="form-label">Teléfono</label>
              <input type="text" class="form-control" placeholder="Ingrese el teléfono" id="telefonoConsultor" name="telefonoConsultor">
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-3">
              <label for="sedeConsultor" class="form-label">Sede</label>
              <select class="form-select" aria-label="Default select example" id="sedeConsultor" name="sedeConsultor">
                <option value="1">San Miguel</option>
                <option value="2">La Unión</option>
                <option value="3">Morazán</option>
              </select>
              <div class="valid-feedback"></div>
            </div>
          </div>

          <div class="row">
            <div class="form-floating">
              <textarea class="form-control" placeholder="Leave a comment here" id="comentarioConsultor" name="comentarioConsultor" style="height: 100px"></textarea>
              <label for="comentarioConsultor">Comentarios</label>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      

      <?php
        //$modificarConsultor = new ControladorConsultores();
        //$modificarConsultor->ctrModificarConsultor();
        ?>
      </div>
    </div>
  </div>
</div>