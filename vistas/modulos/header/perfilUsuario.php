<div class="card" style="width: 18rem;">
  <img src="vistas/assets/img/team-3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_SESSION['nombre']; ?></h5>
    <p class="card-text"><?php echo $_SESSION['perfil']; ?></p>
  </div>

  <!--<ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>-->

  <div class="card-body">
    <a href="salir" class=" btn btn-outline-danger">Cerrar sesión</a>
  </div>
</div>