<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey124</title>

    <?php
    /* Para mostrar la ruta estática */
      $url = Rutas::mdlRuta();
      /* $url = "https://db7b-216-194-101-1.ngrok-free.app/Survey124/"; */
    ?>

    <link rel="icon" type="image/jpg" href="<?php echo $url; ?>vistas/assets/img/favicon.ico"/>

    <!-- Fuentes e iconos -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <!-- Nucleo Icons -->
    <link href="<?php echo $url; ?>vistas/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?php echo $url; ?>vistas/assets/css/nucleo-svg.css" rel="stylesheet" />
    
    <!-- Estilos de la plantilla -->
    <link id="pagestyle" href="<?php echo $url; ?>vistas/assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
    
    <!-- Datatables -->
    <link href="<?php echo $url; ?>vistas/assets/css/datatables/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="<?php echo $url; ?>vistas/assets/css/datatables/fixedHeader.dataTables.min.css" rel="stylesheet" />
    <link href="<?php echo $url; ?>vistas/assets/css/datatables/buttons.bootstrap5.min.css" rel="stylesheet" />
    
    <!-- Alertas -->
    <link href="<?php echo $url; ?>vistas/assets/css/sweetalert2.min.css" rel="stylesheet" />

    <!-- Select con buscador -->
    <link href="<?php echo $url; ?>vistas/assets/css/choices.min.css" rel="stylesheet" />

    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/gestorDispositivos.css">
    <link rel="stylesheet" href="<?php echo $url; ?>vistas/css/gestorWiki.css">

</head>
<body class="g-sidenav-show bg-gray-100">

  <script>
    var localhost = "http://localhost/Survey124/";
    /* var localhost = "https://db7b-216-194-101-1.ngrok-free.app/Survey124/"; */
  </script>

  <?php

      if(isset($_SESSION["validarSesion"]) && $_SESSION["validarSesion"] == "ok"){

          include "modulos/aside.php";

          echo '<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">';
              include "modulos/header.php";

              $ruta = explode("/", $_GET["ruta"]);

              if(isset($ruta[0])){
                  if($ruta[0] == "inicio" ||
                    $ruta[0] == "dispositivos" ||
                    $ruta[0] == "consultores" ||
                    $ruta[0] == "administradores" ||
                    $ruta[0] == "faltantes" ||
                    $ruta[0] == "wiki" ||
                    $ruta[0] == "salir"){
                      include "modulos/".$ruta[0].".php";
                  } else{
                      echo "Error 404";
                  }

              } else if(isset($ruta[1])){
                include "modulos/".$ruta[0].".php";
              }

              include "modulos/footer.php";
          echo '</div>';

      }else{
          include "modulos/login.php";
      }

  ?>


  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  
  <!-- Bootstrap 5.3.7 + Popper -->
  <script src="<?php echo $url; ?>vistas/assets/js/core/bootstrap.bundle.min.js"></script>

  <!-- Datatables -->
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/datatables/dataTables.buttons.min.js"></script>
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/datatables/buttons.bootstrap5.min.js"></script>
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/datatables/jszip.min.js"></script>
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/datatables/pdfmake.min.js"></script>
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/datatables/vfs_fonts.js"></script>
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/datatables/buttons.html5.min.js"></script>
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/datatables/buttons.print.min.js"></script>
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/datatables/buttons.colVis.min.js"></script>
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/datatables/dataTables.fixedHeader.min.js"></script>

  <!-- Scrollbar -->
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/smooth-scrollbar.min.js"></script>
    
  <!-- Font Awesome Icons -->
  <script src="<?php echo $url; ?>vistas/assets/js/fontawesome.js"></script>

  <!-- Gráficas -->
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/chartjs.min.js"></script>

  <!-- Alertas -->
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/sweetalert2.all.min.js"></script>

  <!-- Select con buscador -->
  <script src="<?php echo $url; ?>vistas/assets/js/plugins/choices.min.js"></script>


 <!--  SCRIPTS PERSONALIZADOS -->
 <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

 <?php

  if(isset($_SESSION["validarSesion"]) && $_SESSION["validarSesion"] == "ok"){
    echo '<script src="'.$url.'vistas/js/header.js"></script>';
    
    if($ruta[0] == "inicio"){
      echo '<script src="'.$url.'vistas/js/inicio.js"></script>';
    } else if($ruta[0] == "dispositivos"){
      echo '<script src="'.$url.'vistas/js/gestorDispositivos.js"></script>';
    } else if($ruta[0] == "consultores"){
      echo '<script src="'.$url.'vistas/js/gestorConsultores.js"></script>';
    } else if($ruta[0] == "administradores"){
      echo '<script src="'.$url.'vistas/js/gestorAdministradores.js"></script>';
    } else if($ruta[0] == "faltantes"){
      echo '<script src="'.$url.'vistas/js/gestorFaltantes.js"></script>';
    } else if($ruta[0] == "wiki"){
      echo '<script src="'.$url.'vistas/js/gestorWiki.js"></script>';
    }
    
    echo '<script src="'.$url.'vistas/assets/js/soft-ui-dashboard.js"></script>';
  }
 ?>

</body>
</html>
