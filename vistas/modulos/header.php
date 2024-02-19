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
              <a href="javascript:;" class="nav-link text-body p-0 dropdownCambioPassword" id="dropdownCambioPassword" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["nombre"]; ?></span>
                  <?php
                    echo '<img style="width: 3rem; margin: auto; border-radius: 100px;" src="'.$url.$_SESSION["foto"].'/'.$_SESSION["usuario"].'.jpg" class="card-img-top imgPerfil" alt="Foto de perfil">';
                  ?>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->


    <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
      <div class="offcanvas-header">
        <p class="offcanvas-title text-center" id="offcanvasScrollingLabel" style="width:100%">Información de usuario</p>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa fa-times text-danger" aria-hidden="true"></i></button>
      </div>
      <div class="offcanvas-body text-center d-flex justify-content-center">
        <?php include "header/perfilUsuario.php"; ?>
      </div>
    </div>
