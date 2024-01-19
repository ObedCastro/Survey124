<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <?php
          include "header/migasDePan.php";
        ?>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">              
              <!--<input type="text" class="form-control" placeholder="Type here...">-->
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            

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