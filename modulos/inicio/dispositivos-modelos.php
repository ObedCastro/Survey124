
<div class="col-lg-5 mb-lg-0 mb-4">
  <div class="card z-index-2">
  <h6 class="ms-2 mt-4 mb-0"> Dispositivos por modelo </h6>
    <div class="card-body p-3">
      <div class="bg-gradient-dark border-radius-lg py-3 pe-1 mb-3">
        <div class="chart">
          <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
        </div>
      </div>
      <h6 class="ms-2 mt-4 mb-0"> Dispositivos por departamentos </h6>
      <div class="container border-radius-lg">
        <div class="row">
          
          <?php
            $dispositivosDepartamento = ControladorInicio::ctrMostrarDispositivosDepartamento();
            $colorIcon = array("bg-gradient-primary", "bg-gradient-success", "bg-gradient-warning", "bg-gradient-danger");

            foreach ($dispositivosDepartamento as $key => $value) {
              echo '<div class="col-3 py-3 ps-0">
                <div class="d-flex mb-2">
                  <div class="icon icon-shape icon-xxs shadow border-radius-sm '.$colorIcon[$key].' text-center me-2 d-flex align-items-center justify-content-center">
                  <svg width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <title>office</title> <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Rounded-Icons" transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero"> <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)"> <g id="office" transform="translate(153.000000, 2.000000)"> <path class="color-background" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" id="Path" opacity="0.6"></path> <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path> </g> </g> </g> </g> </svg>
                  </div>
    
                </div>
                <p class="text-xs mt-1 mb-0 font-weight-bold">'.$value["departamento"].'</p>
                <h4 class="font-weight-bolder">'.$value["total"].'</h4>
                <div class="progress w-75">
                  <div class="progress-bar bg-dark w-'.$value["total"].'" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>';
              
            }
          ?>
          
        </div>
      </div>
    </div>
  </div>
</div>