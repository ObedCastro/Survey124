<!-- Navbar --> 
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <?php
          include "header/migasDePan.php";
        ?>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav justify-content-xl-end justify-content-lg-between justify-content-sm-between collapseAside" style="width:100%"> 
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>

            <!-- Informacion de perfil de usuario -->
            <li class="nav-item dropdown dropdown-toggle pe-2 d-flex align-items-center navPerfil">
              <a href="javascript:;" class="nav-link text-body p-0 dropdownCambioPassword" id="dropdownCambioPassword" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]; ?></span>
                  <?php
                    echo '<img style="width: 3rem; margin: auto; border-radius: 100px;" src="'.$_SESSION["foto"].'/'.$_SESSION["usuario"].'.jpg" class="card-img-top imgPerfil" alt="Foto de perfil">';
                  ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" id="dropPerfil" aria-labelledby="dropdownCambioPassword">
                <?php
                  include "header/perfilUsuario.php";
                ?>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->



    <script>
      $('.dropdown-menu').on('click', function (e) {
        e.stopPropagation();
      }); 
    </script>


<script src="vistas/js/header.js"></script> 