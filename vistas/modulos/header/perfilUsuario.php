<div>
  <?php
    echo '<img style="width: 7rem; margin: auto; border-radius: 100px;" src="'.$url.$_SESSION["foto"].'/'.$_SESSION["usuario"].'.jpg" class="card-img-top imgPerfil" alt="...">';
  ?>
  
    <h6 class="card-title mb-0"><?php echo $_SESSION['nombre']; ?></h6>
    <p class="card-title"><?php echo $_SESSION['email']; ?></p>
    <p class="text-xs mb-2"><strong>Cargo:</strong> <?php echo $_SESSION['cargo']; ?></p>
    <p class="text-xs"><strong>Perfil:</strong> <?php echo strtoupper($_SESSION['perfil']); ?></p>
 

    <div class="accordion" id="accordionPassword">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Cambiar mi contraseña
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse cambiarPassword" aria-labelledby="headingOne" data-bs-parent="#accordionPassword">
          <form method="post" id="formCambioPassword">
            <input type="hidden" name="idAdmin" value="<?php echo $_SESSION["id"]; ?>">
            <div>
              <label for="anteriorPassword" class="form-label">Contraseña anterior</label>
              <input type="password" class="form-control" placeholder="Contraseña anterior" id="anteriorPassword" name="anteriorPassword">
            </div>
            <div>
              <label for="nuevaPassword" class="form-label">Nueva contraseña</label>
              <input type="password" class="form-control" placeholder="Nueva contraseña" id="nuevaPassword" name="nuevaPassword">
            </div>
            <div>
              <label for="repetirPassword" class="form-label">Repetir nueva contraseña</label>
              <input type="password" class="form-control" placeholder="Repetir contraseña" id="repetirPassword">
            </div>

            <p class="text-danger text-xxs mensajeError"></p>

            <div class="text-center mt-2">
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>

          <!-- CONTENIDO QUE NO SE MEUSTRA -->
          <div class="d-none">
            <button class="btn bg-gradient-primary w-100 px-3 mb-2 active disabled" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
            <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2 disabled" data-class="bg-white" onclick="sidebarType(this)">White</button>
            </div>
          <div class="d-none form-check form-switch ps-0">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)" checked="true">
          </div>

        </div>
      </div>
    </div>

  <div class="text-center pt-2">
    <a href="salir" class=" btn btn-outline-danger">Cerrar sesión</a>
  </div>
</div>
 


<script>

  //LIMPIAR CAMPOS DE CAMBIO DE CONTRASEÑA
  const myOffcanvas = document.getElementById('offcanvasScrolling')
  myOffcanvas.addEventListener('hidden.bs.offcanvas', event => {
    $("#anteriorPassword").val("");
      $("#nuevaPassword").val("");
      $("#repetirPassword").val("");
      $(".mensajeError").text("");
      $("#accordionPassword .collapse").collapse("hide");
    })
</script>
