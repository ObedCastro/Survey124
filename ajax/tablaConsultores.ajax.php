<?php

require_once "../controladores/consultores.controlador.php";
require_once "../modelos/consultores.modelo.php";

class TablaConsultores{

    public function mostrarTablaConsultores(){
        $item = null;
        $valor = null;

        $consultores = ControladorConsultores::ctrMostrarConsultores($item, $valor);

        $datosJson = '{
            "data": [';

            for($i=0; $i<count($consultores); $i++){

                $nombreConsultor = "<span class='text-secondary text-xs font-weight-bold'>".$consultores[$i]['nombreconsultor']."</span>";
                $duiConsultor = "<span class='text-secondary text-xs font-weight-bold'>".$consultores[$i]['duiconsultor']."</span>";
                $cargoConsultor = "<span class='text-secondary text-xs font-weight-bold'>".$consultores[$i]['cargoconsultor']."</span>";
                $contactoConsultor = "<span class='text-secondary text-xs font-weight-bold'>".$consultores[$i]['contactoconsultor']."</span>";
                $sedeConsultor = "<span class='text-secondary text-xs font-weight-bold'>".$consultores[$i]['sedeconsultor']."</span>";
                $fechaRegistro = "<span class='text-secondary text-xs font-weight-bold'>".$consultores[$i]['fecharegistroconsultor']."</span>";
                $acciones = "<ul class='navbar-nav justify-content-end'>".
                                "<li class='nav-item dropdown pe-2 d-flex align-items-center'>".
                                    "<div class='nav-link text-body p-0'>".
                                    "<button idConsultor='".$consultores[$i]['idconsultor']."' type='button' class='btn btn-default p-1 btn-lg rounded-circle btnMostrarConsultores mb-0' data-bs-toggle='modal' data-bs-target='#modalVerDetalleConsultor'><i class='fa fa-eye  fs-6 p-1'></i></button>".
                                    "<button idEditarConsultor='".$consultores[$i]['idconsultor']."' type='button' class='btn btn-secondary p-1 btn-lg rounded-circle btnEditarConsultor mb-0' data-bs-toggle='modal' data-bs-target='#modalEditarConsultores'><i class='fa fa-pencil  fs-6 p-1'></i></button>".
                                    "<button idEliminarConsultor='".$consultores[$i]['idconsultor']."' type='button' class='btn btn-warning p-1 btn-lg rounded-circle mb-0'><i class='fa fa-trash  fs-6 p-1'></i></button>".
                                    "</div>".
                                "</li>".
                            "</ul>";

                $datosJson .= '[
                    "'.$nombreConsultor.'",
                    "'.$duiConsultor.'",
                    "'.$cargoConsultor.'",
                    "'.$contactoConsultor.'",
                    "'.$sedeConsultor.'",
                    "'.$fechaRegistro.'",
                    "'.$acciones.'"
                ],';
            }

            $datosJson = substr($datosJson, 0, -1);
            $datosJson .= ']
        }';

        echo $datosJson;
    }

}


$activar = new TablaConsultores();
$activar->mostrarTablaConsultores();