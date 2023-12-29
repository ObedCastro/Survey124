<?php

require_once "../controladores/administradores.controlador.php";
require_once "../modelos/administradores.modelo.php";

class TablaAdministradores{

    public function mostrarAdministradores(){

        $admin = ControladorAdministradores::ctrMostrarAdministradores();

        $datosJson = '{
            "data": [';

            for($i=0; $i<count($admin); $i++){

                $nombre = "<span class='text-secondary text-xs font-weight-bold'>".$admin[$i]['nombre']."</span>";
                $email = "<span class='text-secondary text-xs font-weight-bold'>".$admin[$i]['email']."</span>";
                $acciones = "<ul class='navbar-nav justify-content-end'>".
                                "<li class='nav-item dropdown pe-2 d-flex align-items-center'>".
                                    "<div class='nav-link text-body p-0'>".
                                    "<button idAdmin='".$admin[$i]['id']."' type='button' class='btn btn-default p-1 btn-lg rounded-circle mb-0'><i class='fa fa-eye  fs-6 p-1'></i></button>".
                                    "<button idAdmin='".$admin[$i]['id']."' type='button' class='btn btn-secondary p-1 btn-lg rounded-circle mb-0'><i class='fa fa-pencil  fs-6 p-1'></i></button>".
                                    "<button idAdmin='".$admin[$i]['id']."' type='button' class='btn btn-warning p-1 btn-lg rounded-circle mb-0'><i class='fa fa-trash  fs-6 p-1'></i></button>".
                                    "</div>".
                                "</li>".
                            "</ul>";

                $datosJson .= '[
                    "'.$nombre.'",
                    "'.$email.'",
                    "'.$acciones.'"
                ],';
            }

            $datosJson = substr($datosJson, 0, -1);
            $datosJson .= ']
        }';

        echo $datosJson;
    }

}


$activar = new TablaAdministradores();
$activar->mostrarAdministradores();
