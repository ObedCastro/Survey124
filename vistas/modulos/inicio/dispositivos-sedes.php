<div class="col-lg-4">
  <div class="card z-index-2">
    <div class="card-header pb-0">
      <h6>Dispositivos por sede</h6>
      <p class="text-sm">
        <span class="text-secondary">Muestra la cantidad de dispositivos por cada sede.</span>
      </p>
    </div>
    <div class="card-body p-3">
      <div class="chart display: flex; justify-content: space-between;">
        <canvas id="chart-doughnut" class="chart-canvas" height="300"></canvas>
      </div>
    </div>
  </div>
</div>

<div class="col-lg-3">
  <div class="card z-index-2">
    <div class="card-header pb-0">
      <h6>Dispositivos por tipo</h6>
    </div>

    <div class="card-body p-3">

      <select class="form-select" aria-label="Default select example" id="selectMostrarPorSede">
        <?php
          $sedes = ControladorSedes::ctrMostrarSedes(null, null);
          foreach ($sedes as $key => $value) {
            echo '<option value="'.$value["idsede"].'">'.$value["nombresede"].' '.$value["departamentosede"].'</option>';
          }
        ?>
      </select>

      <!-- Muestra dispositivos por sede -->
      <div class="row mt-3 mostrarProgress">
        <!-- Contenido se rellena desde jquery -->
      </div>
    </div>
  </div>
</div>