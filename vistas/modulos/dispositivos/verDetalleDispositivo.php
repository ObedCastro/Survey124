<!-- MODAL DE DISPOSITIVOS -->
<!-- Modal -->
<div class="modal fade" id="modalVerDetalleDispositivo" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalVerDetalleDispositivoLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="container">   
        
          <div class="card">
            <div class="card-header pb-0 px-3 d-flex justify-content-between">
              <h6 class="mb-0">Información del dispositivo</h6>
                <span type="button" style="color: grey;" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></span>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                <div class="row">
                <div class="col-md-6">
                  <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="mb-3 text-sm">DETALLES</h6>
                      <span class="mb-2 text-xs">Tipo de dispositivo: <span id="mostrarTipoDispositivo" class="text-dark font-weight-bold ms-sm-2"></span></span>
                      <span class="mb-2 text-xs">Marca: <span id="mostrarMarcaDispositivo" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      <span class="mb-2 text-xs">Modelo: <span id="mostrarModeloDispositivo" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      <span class="mb-2 text-xs">IMEI: <span id="mostrarImeiDispositivo" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      <span class="mb-2 text-xs">Serie: <span id="mostrarSerieDispositivo" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      <span class="mb-2 text-xs">Teléfono: <span id="mostrarTelefonoDispositivo" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      <span class="mb-2 text-xs">Responsable: <span id="mostrarResponsableDispositivo" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                    </div>
                  </li>

                  <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                      <span class="mb-2 text-xs">Fecha de registro: <span id="fechaRegistro" class="text-dark font-weight-bold ms-sm-2"></span></span>
                      <span class="mb-2 text-xs">Fecha de última modificación <span id="FechaModificacion" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                    </div>
                  </li>
                </div>

                <div class="col-md-6">
                  <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="mb-3 text-sm">Accesorios</h6>
                      <span class="mb-2 text-xs"><i class="fa fa-check"></i> Cubo de carga <span id="checkCubo" class="text-dark font-weight-bold ms-sm-2"></span></span>
                      <span class="mb-2 text-xs"><i class="fa fa-check"></i> Cable de cargador <span id="checkCable" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      <span class="mb-2 text-xs"><i class="fa fa-check"></i> Lápiz óptico <span id="checkLapiz" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      <span class="mb-2 text-xs"><i class="fa fa-check"></i> Funda <span id="checkFunda" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      <span class="mb-2 text-xs"><i class="fa fa-check"></i> Powerbank <span id="checkPowerbank"   class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      <span class="mb-2 text-xs"><i class="fa fa-check"></i> Cargador <span id="checkCargadorLaptop" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      <span class="mb-2 text-xs"><i class="fa fa-check"></i> Maletín <span id="checkMaletin" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      <span class="mb-2 text-xs"><i class="fa fa-check"></i> Mouse <span id="checkMouse" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      <!--<span class="mb-2 text-xs"><i class="fa fa-check"></i> Mousepad <span class="text-dark ms-sm-2 font-weight-bold"></span></span>-->
                    </div>
                  </li>
                </div>
                </div>
              </ul>

            </div>
          </div>

        </div>
      </div>

      
    </div>
  </div>
</div>



