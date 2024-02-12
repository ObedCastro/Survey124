<div class="modal fade" id="modalNuevoAdmin" tabindex="-1" aria-labelledby="modalNuevoAdminLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h1 class="modal-title fs-5 text-white" id="modalNuevoAdminLabel">Registrar nuevo administrador</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="POST" id="formularioNuevoAdmin" class="needs-validation" novalidate>
          <input type="hidden" name="nuevo" value="nuevo">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="nombreAdmin" class="form-label">Nombre <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="nombreAdmin" name="nombreAdmin" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || event.charCode == 32)" minlength="10" maxlength="50" required>
              <div class="invalid-feedback">El nombre es requerido</div>
            </div>
            <div class="mb-3 col-md-6">
              <label for="emailAdmin" class="form-label">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" id="emailAdmin" name="emailAdmin" required>
              <div class="invalid-feedback">El email es requerido</div>
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col-md-4">
              <label for="usuarioAdmin" class="form-label">Usuario <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="usuarioAdmin" name="usuarioAdmin" onkeypress="return (event.charCode >= 65 && event.charCode <= 90" minlength="3" maxlength="15" aria-describedby="emailHelp" required>
              <div class="invalid-feedback">Debe colocar el usuario</div>
            </div>
            <div class="mb-3 col-md-4">
              <label for="passwordAdmin" class="form-label">Contraseña <span class="text-danger">*</span></label>
              <input type="password" class="form-control" id="passwordAdmin" name="passwordAdmin" aria-describedby="emailHelp" required>
              <div class="invalid-feedback">Contraseña obligatoria</div>
            </div>
            <div class="mb-3 col-md-4">
              <label for="perfilAdmin" class="form-label">Perfil <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="perfilAdmin" name="perfilAdmin" onkeypress="return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122))" minlength="5" maxlength="25" aria-describedby="emailHelp" required>
              <div class="invalid-feedback">Defina el perfil para el usuario</div>
            </div>
          </div>
          <div class="mb-5">
            <label for="cargoAdmin" class="form-label">Cargo <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="cargoAdmin" name="cargoAdmin" required>
            <div class="invalid-feedback">El cargo es requerido</div>
          </div>

          <div class="text-end">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" name="opcion">Guardar</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>