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

                $tipoDispositivo = "<div class='d-flex justify-content-evenly'><div><button ideDispositivo='".$dispositivos[$i]['iddispositivo']."' type='button' class='btn btn-success btn-circle mb-0'><i class='fa fa-address-card-o' aria-hidden='true'></i></button></div><div class='d-flex flex-column justify-content-center'><h6 class='mb-0 text-sm'>".$dispositivos[$i]['tipodispositivo']."</h6></div></div>";
                $marcaDispositivo = "<p class='text-xs font-weight-bold mb-0'>".$dispositivos[$i]['marcadispositivo']."</p>";
                
                //Comprobar el estado del dispositivo
                $edispositivo = $dispositivos[$i]['estadodispositivo'];
                if($edispositivo == "1"){
                    $colorElemento = "bg-light text-dark";
                    $textoMostrar = "Disponible";
                } else if($edispositivo == "2"){
                    $colorElemento = "alert-success";
                    $textoMostrar = "Asignado";
                } else if($edispositivo == "3"){
                    $colorElemento = "alert-danger";
                    $textoMostrar = "Dañado";
                }

                $modeloDispositivo = "<span class='text-secondary text-xs'>".$dispositivos[$i]['modelodispositivo']."</span>";

                if($dispositivos[$i]['imeidispositivo']){
                    $imeiDispositivo = "<span class='text-secondary text-xs font-weight-bold'>".$dispositivos[$i]['imeidispositivo']."</span>";
                } else{
                    $imeiDispositivo = "<span class='text-secondary text-xs font-weight-bold'>".$dispositivos[$i]['seriedispositivo']."</span>";
                }
                
                $telefonoDispositivo = "<span class='text-secondary text-xs font-weight-bold'>".$dispositivos[$i]['telefonodispositivo']."</span>";

                $estadodispositivo = "<span class='badge badge-sm ".$colorElemento."'>".$textoMostrar."</span>";

                $resposableDispositivo = "<span class='text-secondary text-xs font-weight-bold'>".$dispositivos[$i]['responsabledispositivo']."</span>";
                $acciones = "<ul class='navbar-nav justify-content-end'>".
                                "<li class='nav-item dropdown pe-2 d-flex align-items-center'>".
                                    "<div class='nav-link text-body p-0'>".
                                    "<button idDispositivo='".$dispositivos[$i]['iddispositivo']."' type='button' class='btn btn-default btn-circle btnMostrarDispositivos mb-0' data-bs-toggle='modal' data-bs-target='#modalVerDetalleDispositivo'><i class='fa fa-eye'></i></button>".
                                    "<button idEditarDispositivo='".$dispositivos[$i]['iddispositivo']."' type='button' class='btn btn-secondary btn-circle btnEditarDispositivo mb-0' data-bs-toggle='modal' data-bs-target='#modalEditarDispositivos'><i class='fa fa-pencil'></i></button>".
                                    "<button idEliminarDispositivo='".$dispositivos[$i]['iddispositivo']."' type='button' class='btn btn-warning btn-circle mb-0'><i class='fa fa-trash'></i></button>".
                                    "</div>".
                                "</li>".
                            "</ul>";        
 
                $datosJson .= '[
                            "'.$tipoDispositivo.'",
                            "'.$marcaDispositivo.'",
                            "'.$modeloDispositivo.'",
                            "'.$imeiDispositivo.'",
                            "'.$telefonoDispositivo.'",
                            "'.$estadodispositivo.'",
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

