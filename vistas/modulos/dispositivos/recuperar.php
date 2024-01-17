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
                        <div class="col-md-6 recuperarAccesoriosMovil">

                            <div class="form-check">
                                <label class="form-check-label">Cubo de carga
                                    <input class="form-check-input" type="checkbox" name="checkCubo" id="checkCubo">
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">Cable de cargador
                                    <input class="form-check-input" type="checkbox" name="checkCable" id="checkCable">
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">Funda protectora
                                    <input class="form-check-input" type="checkbox" name="checkFunda" id="checkFunda">
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">Lápiz óptico
                                    <input class="form-check-input" type="checkbox" name="checkLapiz" id="checkLapiz">
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">Powerbank
                                    <input class="form-check-input" type="checkbox" name="checkPowerbank" id="checkPowerbank">
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6 recuperarAccesoriosLaptop">
                            <div class="form-check">
                                <label class="form-check-label">Maletín de laptop
                                    <input class="form-check-input" type="checkbox" name="checkMaletin" id="checkMaletin">
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">Cargador de laptop
                                    <input class="form-check-input" type="checkbox" name="checkCargador" id="checkCargador">
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">Mouse
                                    <input class="form-check-input" type="checkbox" name="checkMouse" id="checkMouse">
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">Mousepad
                                    <input class="form-check-input" type="checkbox" name="checkMousepad" id="checkMousepad">
                                </label>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row container">
                <p class="text-secondary text-center text-xs mb-0">¿En qué condición se recibe el dispositivo?</p>
                <div class="col-md-12 radiosEstado">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="condicionDispositivo" id="condicionDispositivo1" value="option1" checked>
                        <label class="form-check-label" for="condicionDispositivo1">
                            Buen estado
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="condicionDispositivo" id="condicionDispositivo2" value="option2">
                        <label class="form-check-label" for="condicionDispositivo2">
                            Dañado
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="condicionDispositivo" id="condicionDispositivo3" value="option3">
                        <label class="form-check-label" for="condicionDispositivo3">
                            Robo o Extravío
                        </label>
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
