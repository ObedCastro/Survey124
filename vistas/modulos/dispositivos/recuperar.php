<!-- MODAL DE DISPOSITIVOS -->

<div class="modal fade" id="modalRecuperarDispositivo" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalRecuperarDispositivoLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <form method="POST" id="formularioRecuperar">

        <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalRecuperarDispositivoLabel">Recuperar dispositivo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <div class="mb-3 row">
                <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">Detalle del dispositivo</h6>
                            <input type="hidden" class="idDispositivoRecuperar" name="idDispositivoRecuperar">
                            <span class="mb-2 text-xs">Tipo: <span class="text-dark font-weight-bold ms-sm-2 detalleRecuperarTipo"></span></span>
                            <span class="mb-2 text-xs">Marca: <span class="text-dark ms-sm-2 font-weight-bold detalleRecuperarMarca"></span></span>
                            <span class="mb-2 text-xs">Modelo: <span class="text-dark ms-sm-2 font-weight-bold detalleRecuperarModelo"></span></span>
                            <span class="mb-2 text-xs">IMEI: <span class="text-dark ms-sm-2 font-weight-bold detalleRecuperarIMEI"></span></span>
                            <span class="mb-2 text-xs">Serie: <span class="text-dark ms-sm-2 font-weight-bold detalleRecuperarSerie"></span></span>
                            <span class="mb-2 text-xs">Teléfono: <span class="text-dark ms-sm-2 font-weight-bold detalleRecuperarTelefono"></span></span>
                            <span class="mb-2 text-xs">Ubicación: <span class="text-dark ms-sm-2 font-weight-bold detalleRecuperarSede"></span></span>
                            <span class="mb-2 text-xs">Registrado en: <span class="text-dark ms-sm-2 font-weight-bold detalleRecuperarFecha"></span></span>
                            <span class="mb-2 text-xs">Más información: <span class="text-dark ms-sm-2 font-weight-bold detalleRecuperarComentario"></span></span>
                            <?php
                                date_default_timezone_set('America/El_Salvador');
                                $fechahoy = date("d-m-Y");
                                echo '<span class="mb-2 text-xs">Fecha de asignación: <span class="text-dark ms-sm-2 font-weight-bold">'.$fechahoy.'</span></span>';
                            ?>
                        </div>
                    </li>
                </ul>

                </div>

                <div class="col-md-6">
                    <label class="form-label">Actualmente asignado a:</label>
                    <span id="responsableRecuperar" class="text-primary"></span>
                    <input type="hidden" name="responsableActual" id="responsableActual">
                    <br><br>

                    <div class="row">
                        <p>Accesorios que entrega:</p>
                        <div class="col-md-6">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkCubo" id="checkCubo">
                                <label class="form-check-label" for="checkCubo">Cubo de carga</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkCable" id="checkCable">
                                <label class="form-check-label" for="checkCable">Cable de cargador</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkFunda" id="checkFunda">
                                <label class="form-check-label" for="checkFunda">Funda protectora</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkLapiz" id="checkLapiz">
                                <label class="form-check-label" for="checkLapiz">Lápiz óptico</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkPowerbank" id="checkPowerbank">
                                <label class="form-check-label" for="checkPowerbank">Powerbank</label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkMaletin" id="checkMaletin">
                                <label class="form-check-label" for="checkMaletin">Maletín de laptop</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkCargador" id="checkCargador">
                                <label class="form-check-label" for="checkCargador">Cargador de laptop</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkMouse" id="checkMouse">
                                <label class="form-check-label" for="checkMouse">Mouse</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="checkMousepad" id="checkMousepad">
                                <label class="form-check-label" for="checkMousepad">Mousepad</label>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Escribir un comentario" name="comentarioRecuperar" id="comentarioRecuperar" style="height: 100px"></textarea>
                    <label for="comentarioRecuperar">Comentario</label>
                </div>
            </div>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <input type="submit" class="btn btn-primary btnRecuperar" name="recuperar" value="Recuperar">
        </div>

      </form>

    </div>
  </div>
</div>
