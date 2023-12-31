<!-- MODAL DE CONSULTORES -->
<div class="modal fade" id="modalVerDetalleConsultor" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalVerDetalleConsultorLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="container">   
        
          <div class="card">
            <div class="card-header pb-0 px-3 d-flex justify-content-between">
              <h6 class="mb-0">Información del consultor</h6>
                <span type="button" style="color: grey;" data-bs-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></span>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                <div class="row">
                  <div class="col-md-6">
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                      <div class="d-flex flex-column">
                        <h6 class="mb-3 text-sm">DETALLES</h6>
                        <span class="mb-2 text-xs">Nombre de consultor: <span id="mostrarNombreConsultor" class="text-dark font-weight-bold ms-sm-2"></span></span>
                        <span class="mb-2 text-xs">Dui: <span id="mostrarDuiConsultor" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                        <span class="mb-2 text-xs">Cargo: <span id="mostrarCargoConsultor" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                        <span class="mb-2 text-xs">Contacto: <span id="mostrarContactoConsultor" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                        <span class="mb-2 text-xs">Sede: <span id="mostrarSedeConsultor" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                        <span class="mb-2 text-xs">Fecha: <span id="mostrarFechaConsultor" class="text-dark ms-sm-2 font-weight-bold"></span></span>
                      </div>
                    </li>
                  </div>
                </div>

                <div class="row">
                  <div class="form-floating">
                    <textarea disabled class="form-control" placeholder="Leave a comment here" id="mostrarComentarioConsultor" style="height: 100px"></textarea>
                    <label for="mostrarComentarioConsultor">Comentario</label>
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



