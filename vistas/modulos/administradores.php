<div class="container-fluid py-2">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Administradores</h6>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalNuevoAdmin">
              <i class="fa fa-plus me-sm-1 cursor-pointer" aria-hidden="true"></i>
                Nuevo Administrador
              </button>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive px-4">
                <table id="datatableAdmin" class="table align-items-center mb-0 tablaAdmin">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Usuario</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cargo</th>
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




<!-- MODAL PARA REGISTRAR UN NUEVO ADMINISTRADOR -->
<div class="modal fade" id="modalNuevoAdmin" tabindex="-1" aria-labelledby="modalNuevoAdminLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalNuevoAdminLabel">Agregar nuevo administrador</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="POST" id="formularioNuevoAdmin">
          <input type="hidden" name="nuevo" value="nuevo">
          <div class="row">
            <div class="mb-3 col-md-6">
              <label for="nombreAdmin" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombreAdmin" name="nombreAdmin" required>
            </div>
            <div class="mb-3 col-md-6">
              <label for="emailAdmin" class="form-label">Email</label>
              <input type="email" class="form-control" id="emailAdmin" name="emailAdmin" required>
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col-md-4">
              <label for="usuarioAdmin" class="form-label">Usuario</label>
              <input type="text" class="form-control" id="usuarioAdmin" name="usuarioAdmin" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3 col-md-4">
              <label for="passwordAdmin" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="passwordAdmin" name="passwordAdmin" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3 col-md-4">
              <label for="perfilAdmin" class="form-label">Perfil</label>
              <input type="text" class="form-control" id="perfilAdmin" name="perfilAdmin" aria-describedby="emailHelp" required>
            </div>
          </div>
          <div class="mb-3">
            <label for="cargoAdmin" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="cargoAdmin" name="cargoAdmin" required>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary" name="opcion">Guardar</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>


<!-- MODAL PARA MODIFICAR LA INFORMACIÓN DE ADMINISTRADOR -->
<div class="modal fade" id="modalEditarAdmin" tabindex="-1" aria-labelledby="modalEditarAdminLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalEditarAdminLabel">Modificar información de administrador</h5>
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
          <div class="mb-3">
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






<!-- <script src="vistas/js/gestorAdministradores.js"></script> -->
