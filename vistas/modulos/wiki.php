<?php
  $ruta = explode("/", $_GET["ruta"]);
?>

<div class="container">

    <div class="row">
        <div class="col-md-3 d-flex">
            <button style="width:100%;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalNuevaEntradaWiki"><i class="fa fa-plus" aria-hidden="true"></i> Nueva entrada</button>
        </div>
        <div class="col-md-9 mb-2">            
            <!-- <form action="vistas/modulos/wiki.php" method="post" id="buscadorWiki">
                <div class="input-group">
                    <button class="input-group-text"><i class="fa fa-search"></i></button>
                    <input type="text" class="form-control" placeholder="Buscar..." name="busqueda">
                </div>
            </form> -->
        </div>
    </div>

    <div class="row">
        <?php

            if(isset($ruta[1])){
                $max = 8;
                $base = ($ruta[1] - 1)*$max;
            } else{
                $ruta[1] = 1;
                $base = 0;
                $max = 8;
            }

            $wikis = ControladorWiki::ctrMostrarWiki(null, null, $base, $max);
            
            foreach ($wikis as $key => $wiki) {
                $reporta = ControladorAdministradores::ctrMostrarAdministradores("id", $wiki["reportaproblema"]);
                $nombre = explode(" ", $reporta["nombre"]);
                echo '<div class="col-sm-12 col-md-6 col-lg-3 mb-3">
                        <div class="card cardWiki">
                            <div class="p-4 pb-2">
                                <div class="d-flex flex-row wrap">
                                    <div class=""><img src="'.$url.'vistas/assets/img/'.$reporta["usuario"].'.jpg" alt="user" class="rounded-circle" width="30" /></div>
                                    <div class="pl-4">
                                        <p class="mb-0 mx-2">'.$nombre[0]." ".$nombre[2].'</p>
                                        <p class="mt-0 mb-0 mx-2 text-xs">'.$reporta["cargo"].'</p>
                                    </div>
                                </div>
                                <p class="mt-2 mb-0 mx-2 text-xs">'.substr($wiki["tituloproblema"], 0, 25).'...</p>
                            </div>
                            <div class="card-body border-top">
                                <p class="text-center text-xs aboutscroll">
                                    '.substr($wiki["descripcionproblema"], 0, 25).'...<span style="cursor:pointer;" class="text-primary mostrarRespuestas" idWiki="'.$wiki["idwiki"].'" data-bs-toggle="modal" data-bs-target="#modalRespuestasWiki"><strong>Ver más</strong></span style="cursor:pointer;">
                                </p>
                            </div>
                        </div>
                    </div>';
            }
        ?>
    </div>

    <!-- Paginación -->
    <nav aria-label="Page navigation">
        <ul class="pagination d-flex justify-content-center mt-4">
            <?php
                $elementos = ControladorWiki::ctrMostrarWiki(null, null, null, null);
                
                $total = count($elementos);
                $totalPag = (int) ceil($total/$max);

                $pagAnterior = ($ruta[1] > 1) ? ($ruta[1]-1) : 1 ;
                $pagSiguiente = ($ruta[1] < $totalPag) ? ($ruta[1]+1) : $ruta[1] ;
                
                $deshabilitarAnt = ($ruta[1] == 1) ? "disabled" : "";
                $deshabilitarSig = ($ruta[1] == $totalPag) ? "disabled" : "";
                
                if($totalPag > 2){
                    echo '<li class="page-item"><a class="page-link '.$deshabilitarAnt.'" href="'.$url.$ruta[0]."/".$pagAnterior.'"><i class="fa fa-backward" aria-hidden="true"></i></a></li>';

                    for ($i=1; $i <= $totalPag ; $i++) { 
                        $activo = ($i == $ruta[1]) ? "activePaginacion" : "";
                        echo '<li class="page-item"><a class="page-link '.$activo.'" href="'.$url.$ruta[0]."/".$i.'">'.$i.'</a></li>';
                    }

                    echo '<li class="page-item"><a class="page-link '.$deshabilitarSig.'" href="'.$url.$ruta[0]."/".$pagSiguiente.'"><i class="fa fa-forward" aria-hidden="true"></i></a></li>';

                } else{
                    for ($i=1; $i <= 2 ; $i++) { 
                        $activo = ($i == $ruta[1]) ? "activePaginacion" : "";
                        echo '<li class="page-item"><a class="page-link '.$activo.'" href="'.$url.$ruta[0]."/".$i.'">'.$i.'</a></li>';
                    }
                }

                if(isset($_POST["busqueda"])){
                    echo json_encode(array("busqueda" => $_POST["busqueda"]));
                }

            ?>
        </ul>
    </nav>

</div>

<!-- MODAL PARA NUEVA ENTRADA -->
<div class="modal fade" id="modalNuevaEntradaWiki" tabindex="-1" aria-labelledby="modalNuevaEntradaWikiLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalNuevaEntradaWikiLabel">Nueva entrada</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="post" id="formNuevaEntradaWiki">
            <input type="hidden" name="nuevaEntradaWiki" value="1">
            <div class="mb-3 row">
                <label class="form-label col-md-12">Título
                    <input type="text" class="form-control" id="iTituloProblema" name="iTituloProblema" required>
                </label>
            </div>
            <div class="mb-2 row">
                <label class="form-label col-md-12">Descripción
                    <textarea class="form-control" placeholder="Dé una descripión sobre el problema" name="taDescripcionProblema" id="taDescripcionProblema" required></textarea>
                </label>
            </div>

            <div class="accordion" id="accordionSolucion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                    <a class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <u style="cursor:pointer;">Agregar la solución</u>
                    </a>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse mb-0" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body mt-0">
                            <div class="mb-3 row">
                                <label class="form-label col-md-12">Solución
                                    <textarea class="form-control" placeholder="Describa la solución para este problema" name="taSolucionProblema" id="taSolucionProblema"></textarea>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-end">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>

<!-- MODAL PARA MOSTRAR LAS RESPUESTAS -->
<div class="modal fade" id="modalRespuestasWiki" tabindex="-1" aria-labelledby="modalRespuestasWikiLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content respuestas">
      <div class="modal-header text-center bg-primary">
        <h5 class="modal-title text-white" id="modalRespuestasWikiLabel">RESPUESTAS</h5>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
      </div>
      <div class="modal-body bodyModal">
        
        <div class="container text-center">
            <div class="container encabezadoProblema">
                <p class="text-lg tituloProblema mb-0"></p>
                <p class="descripcionProblema text-xs"></p>
            </div>
            <div class="container">
                <p class="mb-0 badge text-bg-secondary text-white">SOLUCIÓN PROPUESTA</p>
                <div class="container solucionpropuesta">
                    <p class="text-xs solucionProblema mt-2"></p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="text-center">
                <p class="text-primary">Otros aportes <i class="fa fa-arrow-down" aria-hidden="true"></i></p>
            </div>
            <div class="how-section1">
                
            </div>

            <form method="post" id="formNuevaColaboracion">
                <input type="hidden" name="idWikiColabora" id="idWikiColabora">
                <div class="mb-2 row">
                    <label class="form-label col-md-12">Dar un aporte
                        <textarea class="form-control" placeholder="Dé una descripión sobre el problema" name="taColaboracion" id="taColaboracion" required></textarea>
                    </label>
                </div>
                <div class="text-end">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
      </div>

      
    </div>
  </div>
</div>

<!-- <script src="<?php echo $url; ?>vistas/js/gestorWiki.js"></script> -->

