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

                $tipoDispositivo = "<div class='d-flex px-2 py-1'><div><img src='vistas/assets/img/team-2.jpg' class='avatar avatar-sm me-3' alt='user1'></div><div class='d-flex flex-column justify-content-center'><h6 class='mb-0 text-sm'>".$dispositivos[$i]['tipodispositivo']."</h6><p class='text-xs text-secondary mb-0'>john@creative-tim.com</p></div></div>";
                $marcaDispositivo = "<p class='text-xs font-weight-bold mb-0'>".$dispositivos[$i]['marcadispositivo']."</p><p class='text-xs text-secondary mb-0'>Organization</p>";
                
                if($dispositivos[$i]['modelodispositivo'] == "Galaxy A33"){
                    $colorElemento = "bg-gradient-success";
                } else if($dispositivos[$i]['modelodispositivo'] == "Galaxy A34"){
                    $colorElemento = "bg-gradient-warning";
                }

                $modeloDispositivo = "<span class='badge badge-sm ".$colorElemento."'>".$dispositivos[$i]['modelodispositivo']."</span>";
                $telefonoDispositivo = "<span class='text-secondary text-xs font-weight-bold'>".$dispositivos[$i]['telefonodispositivo']."</span>";
                $resposableDispositivo = "<span class='text-secondary text-xs font-weight-bold'>".$dispositivos[$i]['responsabledispositivo']."</span>";
                $acciones = "<ul class='navbar-nav justify-content-end'>".
                                "<li class='nav-item dropdown pe-2 d-flex align-items-center'>".
                                "<a href='javascript:;' class='nav-link text-body p-0' id='dropdownMenuButton'>".
                                    "<i class='fa fa-eye me-sm-1 cursor-pointer'></i>".
                                    "<i class='fa fa-edit me-sm-1 cursor-pointer'></i>".
                                    "<i class='fa fa-trash me-sm-1 cursor-pointer btn-outline-danger'></i>".
                                "</a>".
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