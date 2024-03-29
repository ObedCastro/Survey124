<main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">SURVEY124</h3>
                  <p class="mb-0">Iniciar sesion</p>
                </div>
                <div class="card-body">
                  <form method="post" role="form">
                    <label>Usuario</label>
                    <div class="mb-3">
                      <input name="ingUsuario" type="usuario" class="form-control" placeholder="Ingrese usuario" aria-label="Usuario" aria-describedby="usuario-addon">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input name="ingPassword" type="password" class="form-control" placeholder="Contrasena" aria-label="Password" aria-describedby="password-addon">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Ingresar</button>
                    </div>

                    <?php
                        $login = new ControladorAdministradores();
                        $login->ctrIngresarAdministradores();
                    ?>

                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    He olvidado mi
                    <a href="javascript:;" class="text-info text-gradient font-weight-bold">contrasena</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('vistas//assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> GITI Oriente
          </p>
        </div>
      </div>
    </div>
  </footer>