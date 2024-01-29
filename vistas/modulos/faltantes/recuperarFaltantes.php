<!-- MODAL DE DISPOSITIVOS -->

<div class="modal fade" id="modalRecuperarFaltantes" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalRecuperarFaltantesLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalRecuperarFaltantesLabel">Recuperar accesorios</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

      <form method="POST" id="formularioRecuperarAccesorios" class="requires-validation" novalidate>
        <input type="hidden" name="recuperar" value="1">
        <div class="modal-body">
            <div class="row checkAccesorios">
                <div class="form-check col-md-6" id="checkCubo">
                    <label class="form-check-label">Cubo de carga
                        <input class="form-check-input" type="checkbox" name="checkCubo">
                    </label>
                </div>
                <div class="form-check col-md-6" id="checkCable">
                    <label class="form-check-label">Cable de cargador
                        <input class="form-check-input" type="checkbox" name="checkCable">
                    </label>
                </div>
                <div class="form-check col-md-6" id="checkFunda">
                    <label class="form-check-label">Funda protectora
                        <input class="form-check-input" type="checkbox" name="checkFunda">
                    </label>
                </div>
                <div class="form-check col-md-6" id="checkLapiz">
                    <label class="form-check-label">Lápiz óptico
                        <input class="form-check-input" type="checkbox" name="checkLapiz">
                    </label>
                </div>
                <div class="form-check col-md-6" id="checkPowerbank">
                    <label class="form-check-label">Powerbank
                        <input class="form-check-input" type="checkbox" name="checkPowerbank">
                    </label>
                </div>

                <div class="form-check col-md-6" id="checkMaletin">
                    <label class="form-check-label">Maletín de laptop
                        <input class="form-check-input" type="checkbox" name="checkMaletin">
                    </label>
                </div>
                <div class="form-check col-md-6" id="checkCargador">
                    <label class="form-check-label">Cargador de laptop
                        <input class="form-check-input" type="checkbox" name="checkCargador">
                    </label>
                </div>
                <div class="form-check col-md-6" id="checkMouse">
                    <label class="form-check-label">Mouse
                        <input class="form-check-input" type="checkbox" name="checkMouse">
                    </label>
                </div>
                <div class="form-check col-md-6" id="checkMousepad">
                    <label class="form-check-label">Mousepad
                        <input class="form-check-input" type="checkbox" name="checkMousepad">
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 d-flex">
                    <?php
                        date_default_timezone_set('America/El_Salvador');
                        $fechahoy = date("Y-m-d");
                        echo '<div class="col-md-3"><label class="form-label" for="fechaAsignacion">Fecha asignación: </label></div>
                        <div class="col-md-3"><input type="date" class="form-control" name="fechaAsignacion" id="fechaAsignacion" value="'.$fechahoy.'"></div>';
                    ?>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary btnRecuperarAccesorios" name="recuperar">Recuperar</button>
        </div>

      </form>

    </div>
  </div>
</div>


<script>
    
</script>