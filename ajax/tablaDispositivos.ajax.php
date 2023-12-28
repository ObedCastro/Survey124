<?php

require_once "../controladores/dispositivos.controlador.php";
require_once "../controladores/consultores.controlador.php";

require_once "../modelos/dispositivos.modelo.php";
require_once "../modelos/consultores.modelo.php";

class TablaDispositivos{

    //Mostrar la tabla de dispositivos
    public function mostrarTabla(){
        $item = null;
        $valor = null;
    
        $dispositivos = ControladorDispositivos::ctrMostrarDispositivos($item, $valor);
         
        $datosJson = '{
            "data": [';
            
            for($i=0; $i<count($dispositivos); $i++){

                $tipoDispositivo = "<div class='d-flex justify-content-evenly'><div class='d-flex flex-column justify-content-center'><h6 class='mb-0 text-sm'>".$dispositivos[$i]['tipodispositivo']."</h6></div></div>";
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
                    $imeiDispositivo = "<span idDispositivo='".$dispositivos[$i]['iddispositivo']."' style='cursor:pointer;' class='text-secondary text-xs font-weight-bold btnAsignarDispositivo' data-bs-toggle='modal' data-bs-target='#modalAsignarDispositivo'>".$dispositivos[$i]['imeidispositivo']."</span>";
                } else{
                    $imeiDispositivo = "<span idDispositivo='".$dispositivos[$i]['iddispositivo']."' style='cursor:pointer;' class='text-secondary text-xs font-weight-bold btnAsignarDispositivo' data-bs-toggle='modal' data-bs-target='#modalAsignarDispositivo'>".$dispositivos[$i]['seriedispositivo']."</span>";
                }
                
                $telefonoDispositivo = "<span class='text-secondary text-xs font-weight-bold'>".$dispositivos[$i]['telefonodispositivo']."</span>";

                $estadodispositivo = "<span class='badge badge-sm ".$colorElemento."'>".$textoMostrar."</span>";

                //Obtener el nombre del responsable del dispoaisivo
                $respuesta2 = ControladorConsultores::ctrMostrarConsultores("idconsultor", $dispositivos[$i]["responsabledispositivo"]);

                if($respuesta2 > 0){
                    $consultor = $respuesta2["nombreconsultor"];
                } else{
                    $consultor = "ASIGNAR";
                }
                $resposableDispositivo = "<span class='text-secondary text-xs font-weight-bold'>".$consultor."</span>";
                $acciones = "<ul class='navbar-nav justify-content-end'>".
                                "<li class='nav-item dropdown pe-2 d-flex align-items-center'>".
                                    "<div class='nav-link text-body p-0'>".
                                    "<button idDispositivo='".$dispositivos[$i]['iddispositivo']."' type='button' class='btn btn-default p-1 btn-lg rounded-circle btnMostrarDispositivos mb-0' data-bs-toggle='modal' data-bs-target='#modalVerDetalleDispositivo'><i class='fa fa-eye fs-6 p-1'></i></button>".
                                    "<button idEditarDispositivo='".$dispositivos[$i]['iddispositivo']."' type='button' class='btn btn-secondary p-1 btn-lg rounded-circle btnEditarDispositivo mb-0' data-bs-toggle='modal' data-bs-target='#modalEditarDispositivos'><i class='fa fa-pencil fs-6 p-1'></i></button>".
                                    "<button idEliminarDispositivo='".$dispositivos[$i]['iddispositivo']."' type='button' class='btn btn-warning p-1 btn-lg rounded-circle btnEliminarDispositivo mb-0' data-bs-toggle='modal' data-bs-target='#modalEliminarDispositivo'><i class='fa fa-trash fs-6 p-1'></i></button>".
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

