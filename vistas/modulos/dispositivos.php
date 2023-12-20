<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Administrar dispositivos</h6>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalDispositivos">
              <i class="fa fa-plus me-sm-1 cursor-pointer" aria-hidden="true"></i>
                Nuevo dispositivo
              </button>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive px-4">
                <table id="datatable" class="table align-items-center mb-0 tablaDispositivos">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dispositivo</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Marca</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Modelo</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Teléfono</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Responsable</th>
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



<!-- MODAL DE DISPOSITIVOS -->
<!-- Modal -->
<div class="modal fade" id="modalDispositivos" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalDispositivosLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalDispositivosLabel">Registrar nuevo dispositivo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" class="needs-validation">
          <div class="mb-3 row">
            <div class="col-md-4">
              <label for="tipoDispositivo" class="form-label">Tipo</label>
              <select class="form-select" aria-label="Default select example" id="tipoDispositivo" name="tipoDispositivo">
                <option value=""></option>
                <option value="Telefono">Telefono</option>
                <option value="Tablet">Tablet</option>
                <option value="Laptop">Laptop</option>
              </select>
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-4">
              <label for="marcaDispositivo" class="form-label">Marca</label>
              <select class="form-select" aria-label="Default select example" id="marcaDispositivo" name="marcaDispositivo">
                <option value="Samsung">Samsung</option>
                <option value="HP">HP</option>
                <option value="Lenovo">Lenovo</option>
              </select>
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-4">
              <label for="modeloDispositivo" class="form-label">Modelo</label>
              <select class="form-select" aria-label="Default select example" id="modeloDispositivo" name="modeloDispositivo">
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
              <label for="imeiDispositivo" class="form-label">IMEI</label>
              <input type="text" class="form-control" placeholder="Ingrese el IMEI" id="imeiDispositivo" name="imeiDispositivo" maxlength="15">
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-3">
              <label for="serieDispositivo" class="form-label">Serie</label>
              <input type="text" class="form-control" placeholder="Ingrese la serie" id="serieDispositivo" name="serieDispositivo">
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-3">
              <label for="telefonoDispositivo" class="form-label">Teléfono</label>
              <input type="text" class="form-control" placeholder="Ingrese el teléfono" id="telefonoDispositivo" name="telefonoDispositivo">
              <div class="valid-feedback"></div>
            </div>
            <div class="col-md-3">
              <label for="sedeDispositivo" class="form-label">Sede</label>
              <select class="form-select" aria-label="Default select example" id="sedeDispositivo" name="sedeDispositivo">
                <option value="1">San Miguel</option>
                <option value="2">La Unión</option>
                <option value="3">Morazán</option>
              </select>
              <div class="valid-feedback"></div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>

        <?php
          $registrarDispositivo = new ControladorDispositivos();
          $registrarDispositivo->ctrRegistrarDispositivo();
        ?>

      </div>
    </div>
  </div>
</div>












<!-- MODAL PARA MODIFICAR INFORMACIÓN DEL DISPOSITIVO -->
<div class="modal fade" id="modalEditarDispositivos" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalEditarDispositivosLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalEditarDispositivosLabel">Modificar información de dispositivo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form class="row g-4">
        <div class="col-md-4">
          <div class="form-outline" data-mdb-input-init>
            <input type="text" class="form-control is-valid" id="validationServer01" value="" required />
            <label for="validationServer01" class="form-label">First name</label>
            <div class="valid-feedback">Looks good!</div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-outline" data-mdb-input-init>
            <input type="text" class="form-control is-valid" id="validationServer02" value="" required />
            <label for="validationServer02" class="form-label">Last name</label>
            <div class="valid-feedback">Looks good!</div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="input-group form-outline" data-mdb-input-init>
            <span class="input-group-text" id="inputGroupPrepend3">@</span>
            <input
              type="text"
              class="form-control is-invalid"
              id="validationServerUsername"
              aria-describedby="inputGroupPrepend3"
              required
            />
            <label for="validationServerUsername" class="form-label">Username</label>
            <div class="invalid-feedback">Please choose a username.</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-outline" data-mdb-input-init>
            <input type="text" class="form-control is-invalid" id="validationServer03" required />
            <label for="validationServer03" class="form-label">City</label>
            <div class="invalid-feedback">Please provide a valid city.</div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-outline" data-mdb-input-init>
            <input type="text" class="form-control is-invalid" id="validationServer05" required />
            <label for="validationServer05" class="form-label">Zip</label>
            <div class="invalid-feedback">Please provide a valid zip.</div>
          </div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required />
            <label class="form-check-label" for="invalidCheck3">Agree to terms and conditions</label>
            <div class="invalid-feedback">You must agree before submitting.</div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit" data-mdb-ripple-init>Submit form</button>
        </div>
      </form>

      </div>
    </div>
  </div>
</div>













<?php
  include "vistas/modulos/dispositivos/verDetalleDispositivo.php";
?>

<script src="vistas/js/gestorDispositivos.js"></script>

