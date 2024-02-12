<div class="modal fade" id="modalEditarAdmin" tabindex="-1" aria-labelledby="modalEditarAdminLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h1 class="modal-title fs-5 text-white" id="modalEditarAdminLabel">Modificar información del administrador</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="POST" id="formularioEditarAdmin">
          <input type="hidden" name="idEditarAdmin" id="idEditarAdmin">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="editarNombreAdmin" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="editarNombreAdmin" name="editarNombreAdmin" required>
            </div>
            <div class="mb-3 col-md-6">
              <label for="editarEmailAdmin" class="form-label">Email</label>
              <input type="email" class="form-control" id="editarEmailAdmin" name="editarEmailAdmin" required>
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col-md-4">
              <label for="editarUsuarioAdmin" class="form-label">Usuario</label>
              <input type="text" class="form-control" id="editarUsuarioAdmin" name="editarUsuarioAdmin" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3 col-md-4">
              <label for="editarPasswordAdmin" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="editarPasswordAdmin" name="editarPasswordAdmin" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-md-4">
              <label for="editarPerfilAdmin" class="form-label">Perfil</label>
              <input type="text" class="form-control" id="editarPerfilAdmin" name="editarPerfilAdmin" aria-describedby="emailHelp" required>
            </div>
          </div>
          <div class="mb-5">
            <label for="editarCargoAdmin" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="editarCargoAdmin" name="editarCargoAdmin" required>
          </div>

          <div class="mt-5 text-end">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" name="opcionE">Modificar</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>