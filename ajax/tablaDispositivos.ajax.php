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
                $marcaDispositivo = "<p class='text-xs mb-0'>".$dispositivos[$i]['marcadispositivo']."</p>";

                //Comprobar el estado del dispositivo
                $edispositivo = $dispositivos[$i]['estadodispositivo'];
                if($edispositivo == "1"){
                    $colorElemento = "bg-light text-dark";
                    $textoMostrar = "Disponible";
                    $boton = "btnAsignarDispositivo";
                    $modal = "data-bs-toggle='modal' data-bs-target='#modalAsignarDispositivo'";
                } else if($edispositivo == "2"){
                    $colorElemento = "alert-success";
                    $textoMostrar = "Asignado";
                    $boton = "btnRecuperarDispositivo";
                    $modal = "data-bs-toggle='modal' data-bs-target='#modalRecuperarDispositivo'";
                } else if($edispositivo == "3"){
                    $colorElemento = "alert-danger";
                    $textoMostrar = "Dañado";
                    $boton = "";
                    $modal = "";
                }

                $modeloDispositivo = "<span class='text-secondary text-xs'>".$dispositivos[$i]['modelodispositivo']."</span>";
                
                if($dispositivos[$i]['imeidispositivo']){
                    $imeiDispositivo = "<span class='text-secondary text-xs'>".$dispositivos[$i]['imeidispositivo']."</span>";
                } else{
                    $imeiDispositivo = "<span class='text-secondary text-xs'>".$dispositivos[$i]['seriedispositivo']."</span>";
                }

                $telefonoDispositivo = "<span class='text-secondary text-xs'>".$dispositivos[$i]['telefonodispositivo']."</span>";
                
                $sedeDispositivo = "<span class='text-secondary text-xs'>".$dispositivos[$i]['sede']."</span>";

                $estadodispositivo = "<span idDispositivo='".$dispositivos[$i]['iddispositivo']."' consultor='".$dispositivos[$i]['responsabledispositivo']."' style='cursor:pointer;' ".$modal." class='".$boton." badge badge-sm ".$colorElemento."'><span data-bs-toggle='tooltip' data-bs-placement='top' title='ASIGNAR/RECEPCIONAR'>".$textoMostrar."</span></span>";

                //Obtener el nombre del responsable del dispoaisivo
                $respuesta2 = ControladorConsultores::ctrMostrarConsultores("idconsultor", $dispositivos[$i]["responsabledispositivo"]);

                if($respuesta2 > 0){
                    $consultor = $respuesta2["nombreconsultor"];
                } else{
                    $consultor = "--------------";
                }
                $resposableDispositivo = "<span class='text-secondary text-xs font-weight-bold'>".$consultor."</span>";
                $acciones = "<ul class='navbar-nav justify-content-evenly'>".
                                "<li class='nav-item pe-2 d-flex justify-content-center'>".
                                    "<div class='nav-link text-body p-0'>".
                                    "<a idDispositivo='".$dispositivos[$i]['iddispositivo']."' style='cursor:pointer;' class='text-secondary p-1 btnMostrarDispositivos mb-0' data-bs-toggle='modal' data-bs-target='#modalVerDetalleDispositivo'><i class='fa fa-eye fs-6 p-1' data-bs-toggle='tooltip' data-bs-placement='top' title='Ver más información'></i></a>".
                                    "<a idEditarDispositivo='".$dispositivos[$i]['iddispositivo']."' style='cursor:pointer;' class='text-secondary p-1 btnEditarDispositivo mb-0' data-bs-toggle='modal' data-bs-target='#modalEditarDispositivos'><i class='fa fa-pencil fs-6 p-1' data-bs-toggle='tooltip' data-bs-placement='top' title='Modificar la información'></i></a>".
                                    "<a idEliminarDispositivo='".$dispositivos[$i]['iddispositivo']."' style='cursor:pointer;' class='text-secondary p-1 btnEliminarDispositivo mb-0'><i class='fa fa-trash fs-6 p-1' data-bs-toggle='tooltip' data-bs-placement='top' title='Eliminar dispositivo'></i></a>".
                                    "</div>".
                                "</li>".
                            "</ul>";

                $datosJson .= '[
                            "'.$tipoDispositivo.'",
                            "'.$marcaDispositivo.'",
                            "'.$modeloDispositivo.'",
                            "'.$imeiDispositivo.'",
                            "'.$telefonoDispositivo.'",
                            "'.$sedeDispositivo.'",
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
