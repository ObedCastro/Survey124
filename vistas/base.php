<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Survey124</title>
    <link rel="icon" type="image/jpg" href="vistas/assets/img/favicon.ico"/>

    <!-- Fonts and icons -->
    <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <!-- Nucleo Icons -->
    <link href="vistas/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="vistas/assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="vistas/assets/css/nucleo-svg.css" rel="stylesheet" />
    <link id="pagestyle" href="vistas/assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />

    <!-- CSS DATATABLES -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.3/css/fixedHeader.dataTables.min.css">

    <!-- CSS ALERTAS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.css">

    <!-- ESTILOS PERSONALIZADOS -->
    <link rel="stylesheet" href="vistas/css/gestorDispositivos.css">
    <link rel="stylesheet" href="vistas/css/gestorWiki.css">

    <!-- CSS DATATABLE BOOTSTRAP 5 -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

    <!-- JS DATATABLES -->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <!--<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>-->
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.3/js/dataTables.fixedHeader.min.js"></script>

    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>-->

    <!-- GRÁFICOS -->
    <script src="vistas/assets/js/plugins/chartjs.min.js"></script>

    <!-- JS ALERTAS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js"></script>

    <!-- SELECT CON BUSCADOR -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/styles/choices.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/choices.js@9.0.1/public/assets/scripts/choices.min.js"></script>

</head>
<body class="g-sidenav-show bg-gray-100">



<?php

    session_start();
    if(isset($_SESSION["validarSesion"]) && $_SESSION["validarSesion"] == "ok"){

        include "modulos/aside.php";

        echo '<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y">';
            include "modulos/header.php";

            if(isset($_GET["ruta"])){
                if($_GET["ruta"] == "inicio" ||
                   $_GET["ruta"] == "dispositivos" ||
                   $_GET["ruta"] == "consultores" ||
                   $_GET["ruta"] == "administradores" ||
                   $_GET["ruta"] == "faltantes" ||
                   $_GET["ruta"] == "wiki" ||
                   $_GET["ruta"] == "salir"){
                    include "modulos/".$_GET["ruta"].".php";
                } else{
                    echo "Error 404";
                }
            }

            include "modulos/footer.php";
        echo '</div>';

    }else{
        include "modulos/login.php";
    }

?>




  <script src="vistas/assets/js/core/popper.min.js"></script>
  <script src="vistas/assets/js/core/bootstrap.min.js"></script>
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>-->
  <script src="vistas/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="vistas/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="vistas/assets/js/soft-ui-dashboard.js"></script>
  

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>



</body>
</html>
