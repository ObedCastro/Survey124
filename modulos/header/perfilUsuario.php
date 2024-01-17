<div class="card" style="width: 18rem;">
  <?php
    echo '<img style="width: 10rem; margin: auto; border-radius: 100px;" src="'.$_SESSION["foto"].'/'.$_SESSION["usuario"].'.jpg" class="card-img-top imgPerfil" alt="...">';
  ?>
  <div class="card-body">
    <h6 class="card-title mb-0"><?php echo $_SESSION['nombre']; ?></h6>
    <p class="card-title"><?php echo $_SESSION['email']; ?></p>
    <p class="text-xs mb-2"><strong>Cargo:</strong> <?php echo $_SESSION['cargo']; ?></p>
    <p class="text-xs"><strong>Perfil:</strong> <?php echo strtoupper($_SESSION['perfil']); ?></p>
  </div>

  <!--<ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>-->

  <div class="card-body text-center pt-2">
    <a href="salir" class=" btn btn-outline-danger">Cerrar sesión</a>
  </div>
</div>
 