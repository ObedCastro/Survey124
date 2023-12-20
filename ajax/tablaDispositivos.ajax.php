<?php

require_once "../controladores/dispositivos.controlador.php";
require_once "../modelos/dispositivos.modelo.php";

class TablaDispositivos{

    //Mostrar la tabla de dispositivos
    public function mostrarTabla(){
        $item = null;
        $valor = null;
    
        $dispositivos = ControladorDispositivos::ctrMostrarDispositivos($item, $valor);
         
        $datosJson = '{
            "data": [';
            
            for($i=0; $i<count($dispositivos); $i++){

                $tipoDispositivo = "<div class='d-flex justify-content-evenly'><div><button ideDispositivo='".$dispositivos[$i]['iddispositivo']."' type='button' class='btn btn-success btn-circle btnEditarDispositivo mb-0' data-bs-toggle='modal' data-bs-target='#modalDispositivos'><i class='fa fa-address-card-o' aria-hidden='true'></i></button></div><div class='d-flex flex-column justify-content-center'><h6 class='mb-0 text-sm'>".$dispositivos[$i]['tipodispositivo']."</h6><p class='text-xs text-secondary mb-0'>john@creative-tim.com</p></div></div>";
                $marcaDispositivo = "<p class='text-xs font-weight-bold mb-0'>".$dispositivos[$i]['marcadispositivo']."</p><p class='text-xs text-secondary mb-0'>Organization</p>";
                
                $tdispositivo = $dispositivos[$i]['tipodispositivo'];
                if($tdispositivo == "Telefono"){
                    $colorElemento = "bg-gradient-success";
                } else if($tdispositivo == "Tablet"){
                    $colorElemento = "bg-gradient-warning";
                } else if($tdispositivo == "Laptop"){
                    $colorElemento = "bg-gradient-danger";
                }

                $modeloDispositivo = "<span class='badge badge-sm ".$colorElemento."'>".$dispositivos[$i]['modelodispositivo']."</span>";
                $telefonoDispositivo = "<span class='text-secondary text-xs font-weight-bold'>".$dispositivos[$i]['telefonodispositivo']."</span>";
                $resposableDispositivo = "<span class='text-secondary text-xs font-weight-bold'>".$dispositivos[$i]['responsabledispositivo']."</span>";
                $acciones = "<ul class='navbar-nav justify-content-end'>".
                                "<li class='nav-item dropdown pe-2 d-flex align-items-center'>".
                                    "<div class='nav-link text-body p-0'>".
                                    "<button idDispositivo='".$dispositivos[$i]['iddispositivo']."' type='button' class='btn btn-default btn-circle btnMostrarDispositivos mb-0' data-bs-toggle='modal' data-bs-target='#modalVerDetalleDispositivo'><i class='fa fa-eye'></i></button>".
                                    "<button idDispositivo='".$dispositivos[$i]['iddispositivo']."' type='button' class='btn btn-secondary btn-circle mb-0'><i class='fa fa-list'></i></button>".
                                    "<button idDispositivo='".$dispositivos[$i]['iddispositivo']."' type='button' class='btn btn-warning btn-circle mb-0'><i class='fa fa-trash'></i></button>".
                                    "</div>".
                                "</li>".
                            "</ul>";        
 
                $datosJson .= '[
                            "'.$tipoDispositivo.'",
                            "'.$marcaDispositivo.'",
                            "'.$modeloDispositivo.'",
                            "'.$telefonoDispositivo.'",
                            "'.$resposableDispositivo.'",
                            "'.$acciones.'"
                ],';
            }

            $datosJson = substr($datosJson, 0, -1);
                $datosJson .= ']
            }';

        echo $datosJson;
        }
}

$activar = new TablaDispositivos();
$activar->mostrarTabla();

