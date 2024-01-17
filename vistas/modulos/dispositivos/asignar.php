<!-- MODAL DE DISPOSITIVOS -->

<div class="modal fade" id="modalAsignarDispositivo" data-bs-backdrop="static" tabindex="-1" aria-labelledby="modalAsignarDispositivoLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <form method="POST" id="formularioAsignacion" class="requires-validation" novalidate>

        <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalAsignarDispositivoLabel">Asignar dispositivo</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <div class="mb-3 row">
                <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                        <div class="d-flex flex-column">
                            <h6 class="mb-3 text-sm">Detalle del dispositivo</h6>
                            <input type="hidden" class="idDispositivoAsignar" name="idDispositivoAsignar">
                            <span class="mb-2 text-xs">Tipo: <span class="text-dark font-weight-bold ms-sm-2 detalleAsignarTipo"></span></span>
                            <span class="mb-2 text-xs">Marca: <span class="text-dark ms-sm-2 font-weight-bold detalleAsignarMarca"></span></span>
                            <span class="mb-2 text-xs">Modelo: <span class="text-dark ms-sm-2 font-weight-bold detalleAsignarModelo"></span></span>
                            <span class="mb-2 text-xs">IMEI: <span class="text-dark ms-sm-2 font-weight-bold detalleAsignarIMEI"></span></span>
                            <span class="mb-2 text-xs">Serie: <span class="text-dark ms-sm-2 font-weight-bold detalleAsignarSerie"></span></span>
                            <span class="mb-2 text-xs">Teléfono: <span class="text-dark ms-sm-2 font-weight-bold detalleAsignarTelefono"></span></span>
                            <span class="mb-2 text-xs">Ubicación: <span class="text-dark ms-sm-2 font-weight-bold detalleAsignarSede"></span></span>
                            <span class="mb-2 text-xs">Registrado en: <span class="text-dark ms-sm-2 font-weight-bold detalleAsignarFecha"></span></span>
                        </div>
                    </li>
                </ul>

                </div>

                <div class="col-md-6">
                    <label for="selectConsultores" class="form-label selectConsultores">Consultor responsable</label>
                    <div class="mostrarSelect">

                    </div>
                    <!--<select class="form-control choices-single form-select is-invalid" id="selectConsultores" name="responsableDispositivo" required>
                        <option selected disabled value=""></option>

                        <?php
                            /*$item = null;
                            $valor = null;
                            $consultores = ControladorConsultores::ctrMostrarConsultores($item, $valor);

                            foreach ($consultores as $consultor) {
                                echo '<option value="'.$consultor["idconsultor"].'">'.$consultor["nombreconsultor"].'</option>';
                            }*/
                        ?>
                    </select>-->

                    <div class="row">
                        <div class="col-md-6 accesoriosMovil">
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

                        <div class="col-md-6 accesoriosLaptop">
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

            </div>

        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <input type="submit" class="btn btn-primary btnNuevaAsignacion" name="asignar" value="Asignar">
        </div>

      </form>

    </div>
  </div>
</div>


<script>
    
</script>