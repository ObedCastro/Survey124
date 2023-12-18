
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Administrar dispositivos</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive px-4">
                <table id="datatable" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Dispositivo</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Marca</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Modelo</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Teléfono</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Responsable</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
                      $dispositivos = ControladorDispositivos::ctrMostrarDispositivos();
                      foreach ($dispositivos as $dispositivo) {
                        echo '<tr>
                                <td>
                                  <div class="d-flex px-2 py-1">
                                    <div>
                                      <img src="vistas/assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                      <h6 class="mb-0 text-sm">'.$dispositivo['tipodispositivo'].'</h6>
                                      <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  <p class="text-xs font-weight-bold mb-0">'.$dispositivo['marcadispositivo'].'</p>
                                  <p class="text-xs text-secondary mb-0">Organization</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                  <span class="badge badge-sm bg-gradient-success">'.$dispositivo['modelodispositivo'].'</span>
                                </td>
                                <td class="align-middle text-center">
                                  <span class="text-secondary text-xs font-weight-bold">'.$dispositivo['telefonodispositivo'].'</span>
                                </td>
                                <td class="align-middle">
                                  <span class="text-secondary text-xs font-weight-bold">'.$dispositivo['responsabledispositivo'].'</span>
                                </td>
                              </tr>';
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>