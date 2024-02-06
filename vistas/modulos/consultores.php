<div class="container-fluid py-2">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Administrar Consultores</h6>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modalConsultores">
              <i class="fa fa-plus me-sm-1 cursor-pointer" aria-hidden="true"></i>
                Nuevo Consultor
              </button>
            </div>

            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive px-4">
                <table id="datatableConsultores" class="table align-items-center mb-0 tablaConsultores">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">DUI</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cargo</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Contacto</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sede</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Registrado en</th>
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

<?php
  //MODAL PARA REGISTRAR NUEVO Consultor
  include "vistas/modulos/consultores/nuevoConsultor.php";

  //MODAL PARA MODIFICAR INFORMACIÓN DEL Consultor
  include "vistas/modulos/consultores/modificarConsultor.php";
  

  //include "vistas/modulos/consultores/verDetalleConsultor.php";
?>

<!-- <script src="vistas/js/gestorConsultores.js"></script> -->
