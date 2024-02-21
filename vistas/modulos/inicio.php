
<?php
  echo '<div class="container-fluid py-2">';

    include "inicio/info-relevante.php";

    echo '<div class="row mt-4">';
      include "inicio/dispositivos-modelos.php";
      include "inicio/dispositivos-sedes.php";
      echo '</div>';
    
    echo '<div class="row mt-4">';
      include "inicio/dispositivos-asignaciones.php";
    echo '</div>';

    echo '<div class="row my-4">';
      include "inicio/ultimos-movimientos.php";
    echo '</div>';

  echo '</div>';

 