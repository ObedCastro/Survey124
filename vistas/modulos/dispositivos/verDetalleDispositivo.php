<!-- MODAL DE DISPOSITIVOS -->
<!-- Modal -->
<div class="modal fade" id="modalVerDetalleDispositivo" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalVerDetalleDispositivoLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalVerDetalleDispositivoLabel">INFORMACIÓN DEL DISPOSITIVO</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <div class="container">     
            
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th class="text-end col-md-4" scope="col">CARACTERISTICA</th>
                <th class="text-start col-md-8" scope="col">DETALLE</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="text-end"><h6>Tipo de dispositivo:</h6></th>
                <td class="text-start"><h6 id="mostrarTipoDispositivo"></h6></td>
              </tr>
              <tr>
                <th class="text-end">Marca:</th>
                <td class="text-start" id="mostrarMarcaDispositivo">Samsung</td>
              </tr>
              <tr>
                <th class="text-end">Modelo:</th>
                <td class="text-start"  id="mostrarModeloDispositivo"></td>
              </tr>
              <tr>
                <th class="text-end">IMEI:</th>
                <td class="text-start" id="mostrarImeiDispositivo"></td>
              </tr>
              <tr>
                <th class="text-end">Serie:</th>
                <td class="text-start" id="mostrarSerieDispositivo"></td>
              </tr>
              <tr>
                <th class="text-end">Línea:</th>
                <td class="text-start" id="mostrarTelefonoDispositivo"></td>
              </tr>
              <tr>
                <th class="text-end">Asignado a:</th>
                <td class="text-start" id="mostrarResponsableDispositivo"></td>
              </tr>
              <tr>
                <th class="text-end">Accesorios incluidos:</th>
                <td class="text-start">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkCubo" disabled>
                        <label class="form-check-label" for="checkCubo">Cubo de carga</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkCable" disabled>
                        <label class="form-check-label" for="checkCable">Cable de cargador</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkLapiz" disabled>
                        <label class="form-check-label" for="checkLapiz">Lapiz optico</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="checkPowerbank" disabled>
                        <label class="form-check-label" for="checkPowerbank">Powerbank</label>
                      </div>
                    </div>

                    <div class="col-md-7">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="checkFunda" disabled>
                          <label class="form-check-label" for="checkFunda">Funda</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="checkCargadorLaptop" disabled>
                          <label class="form-check-label" for="checkCargadorLaptop">Cargador de laptop</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="checkMaletin" disabled>
                          <label class="form-check-label" for="checkMaletin">Maletin</label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="checkMouse" disabled>
                          <label class="form-check-label" for="checkMouse">Mouse</label>
                        </div>
                    </div>
                  </div>
                  
                </td>
              </tr>
              <tr>
                <th class="text-end">Fecha de registro:</th>
                <td class="text-start" id="mostrarFechaRegistro"></td>
              </tr>
              <tr>
                <th class="text-end">Fecha de última modificación:</th>
                <td class="text-start" id="mostrarFechaEdicion"></td>
              </tr>
            </tbody>
          </table>  

        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>