<div class="col-md-12">
  <div class="card h-100">
    <div class="card-header pb-0">
      <h6>ÚLTIMOS MOVIMIENTOS</h6>
    </div>

    <?php
      $movimientos = ControladorInicio::ctrMostrarUltimosMovimientos();
    ?>

    <div class="card-body p-3">
      <div class="timeline timeline-one-side">

        <?php 

          foreach($movimientos as $movimiento){

            $sede = ControladorSedes::ctrMostrarSedes("idsede", $movimiento["sede_id"]);
            $infoDispositivo = ControladorDispositivos::ctrMostrarDispositivos("iddispositivo", $movimiento["dispositivo_id"]);

            $nombreCompleto = $movimiento["nombre_asignador"];
            $nombre = explode(" ", $nombreCompleto);

            switch ($movimiento["tipo_dispositivo"]) {
              case "Laptop": $i = "ni-laptop"; break;
              case "Telefono": $i = "ni-mobile-button"; break;
              case "Tablet": $i = "ni-tablet-button"; break;
              default: ""; 
            }

                      if($movimiento["fecha_asignacion"] != "" && $movimiento["fecha_recepcion"] == ""){
                        echo '<div class="timeline-block mb-3">
                                <span class="timeline-step"><i class="ni '.$i.' text-success text-gradient"></i></span>
                                <div class="timeline-content">
                                  <h6 class="text-dark text-sm font-weight-bold mb-0">Asignación</h6>
                                  <p class="text-muted text-xs mt-1 mb-0">'.$nombre[0].' ha realizado asignación de <span class="font-weight-bold">'.$movimiento["tipo_dispositivo"].'</span> con IMEI <span class="font-weight-bold">'.$infoDispositivo["imeidispositivo"].'</span> de la sede '.$sede["nombresede"].'</p>
                                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">'.$movimiento["fecha_asignacion"].'</p>
                                </div>
                              </div>';
                      } else if($movimiento["fecha_asignacion"] != "" && $movimiento["fecha_recepcion"] != ""){
                        echo '<div class="timeline-block mb-3">
                                <span class="timeline-step"><i class="ni '.$i.' text-danger text-gradient"></i></span>
                                <div class="timeline-content">
                                  <h6 class="text-dark text-sm font-weight-bold mb-0">Recepción</h6>
                                  <p class="text-muted text-xs mt-1 mb-0">'.$nombre[0].' ha realizado la recepción de <span class="font-weight-bold">'.$movimiento["tipo_dispositivo"].'</span> con IMEI <span class="font-weight-bold">'.$infoDispositivo["imeidispositivo"].'</span> de la sede '.$sede["nombresede"].'</p>
                                  <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">'.$movimiento["fecha_recepcion"].'</p>
                                </div>
                              </div>';
                      }

          }

        ?>
        
      </div>
    </div>
    

  </div>
</div>



