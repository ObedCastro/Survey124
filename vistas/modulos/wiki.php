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
                                        <p class="mb-0 mx-2 text-xs text-primary"><strong>'.$nombre[0]." ".$nombre[2].'</strong></p>
                                        <p class="mt-0 mb-0 mx-2 text-xxs">'.$reporta["cargo"].'</p>
                                    </div>
                                </div>
                                <p class="mt-2 mb-0 mx-2 text-xxs">'.substr($wiki["tituloproblema"], 0, 50).'...</p>
                            </div>
                            <div class="card-body border-top">
                                <p class="text-center text-xxs aboutscroll">
                                    '.substr($wiki["descripcionproblema"], 0, 50).'...<span style="cursor:pointer;" class="text-primary mostrarRespuestas" idWiki="'.$wiki["idwiki"].'" data-bs-toggle="modal" data-bs-target="#modalRespuestasWiki"><strong>Ver más</strong></span style="cursor:pointer;">
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

<?php
    /* Modal para nueva entrada */
    include "vistas/modulos/wiki/nuevaEntrada.php";
    
    /* Modal para mostrar respuestas */
    include "vistas/modulos/wiki/respuestas.php";

?>

