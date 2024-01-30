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
        <input type="hidden" name="idAccRecuperar" id="idAccRecuperar">
        <div class="modal-body">
            <div class="row checkAccesorios">
                <div class="form-check col-md-6">
                    <label class="form-check-label" id="checkCuboR">Cubo de carga
                        <input class="form-check-input" type="checkbox" name="checkCubo">
                    </label>
                </div>
                <div class="form-check col-md-6">
                    <label class="form-check-label" id="checkCableR">Cable de cargador
                        <input class="form-check-input" type="checkbox" name="checkCable">
                    </label>
                </div>
                <div class="form-check col-md-6">
                    <label class="form-check-label" id="checkFundaR">Funda protectora
                        <input class="form-check-input" type="checkbox" name="checkFunda">
                    </label>
                </div>
                <div class="form-check col-md-6">
                    <label class="form-check-label" id="checkLapizR">Lápiz óptico
                        <input class="form-check-input" type="checkbox" name="checkLapiz">
                    </label>
                </div>
                <div class="form-check col-md-6">
                    <label class="form-check-label" id="checkPowerbankR">Powerbank
                        <input class="form-check-input" type="checkbox" name="checkPowerbank">
                    </label>
                </div>

                <div class="form-check col-md-6">
                    <label class="form-check-label" id="checkMaletinR">Maletín de laptop
                        <input class="form-check-input" type="checkbox" name="checkMaletin">
                    </label>
                </div>
                <div class="form-check col-md-6">
                    <label class="form-check-label" id="checkCargadorR">Cargador de laptop
                        <input class="form-check-input" type="checkbox" name="checkCargador">
                    </label>
                </div>
                <div class="form-check col-md-6">
                    <label class="form-check-label" id="checkMouseR">Mouse
                        <input class="form-check-input" type="checkbox" name="checkMouse">
                    </label>
                </div>
                <div class="form-check col-md-6">
                    <label class="form-check-label" id="checkMousepadR">Mousepad
                        <input class="form-check-input" type="checkbox" name="checkMousepad">
                    </label>
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
