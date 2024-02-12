<?php

require_once "../controladores/dispositivos.controlador.php";
require_once "../controladores/inicio.controlador.php";

require_once "../modelos/dispositivos.modelo.php";
require_once "../modelos/inicio.modelo.php";


class AjaxDispositivos{

    public $idDispositivo;
    public function ajaxMostrarDispositivo(){
        $item = "iddispositivo";
        $valor = $this->idDispositivo;

        $respuesta = ControladorDispositivos::ctrMostrarDispositivos($item, $valor);
        $ultimosMovimientos = ControladorInicio::ctrMostrarUltimosMovimientos("dispositivo_id", $valor);

        echo json_encode(array($respuesta, $ultimosMovimientos));
    }

    public $idDispositivoRecuperar;
    public function ajaxMostrarDispositivoRecuperar(){
        $item = "iddispositivo";
        $consultor = $_POST["consultorResposable"];
        $valor = $this->idDispositivoRecuperar;

        $respuesta = ControladorDispositivos::ctrMostrarDispositivoRecuperar($item, $valor, $consultor);
        echo json_encode($respuesta);
    }

    //REGISTRA UN NUEVO DISPOSITIVO
    public function ajaxRegistrarNuevoDispositivo(){
        if(isset($_POST["tipoDispositivo"]) && !empty($_POST["tipoDispositivo"]) && isset($_POST["marcaDispositivo"]) && !empty($_POST["marcaDispositivo"]) && isset($_POST["modeloDispositivo"]) && !empty($_POST["modeloDispositivo"])){
            if($_POST["tipoDispositivo"] != "Laptop"){
                $datos = array(
                    "tipo"=>$_POST["tipoDispositivo"],
                    "marca"=>$_POST["marcaDispositivo"],
                    "modelo"=>$_POST["modeloDispositivo"],
                    "imei"=>$_POST["imeiDispositivo"],
                    "serie"=>$_POST["serieDispositivo"],
                    "telefono"=>$_POST["telefonoDispositivo"],
                    "sede"=>$_POST["sedeDispositivo"],
                    "fecha"=>$_POST["fechaRegistro"]
                );                
            }else{
                $datos = array(
                    "tipo"=>$_POST["tipoDispositivo"],
                    "marca"=>$_POST["marcaDispositivo"],
                    "modelo"=>$_POST["modeloDispositivo"],
                    "serie"=>$_POST["serieDispositivo"],
                    "sede"=>$_POST["sedeDispositivo"],
                    "fecha"=>$_POST["fechaRegistro"]
                ); 
            }

            $accesorios = array(
                "Cubo"=>"0",
                "Cable"=>"0",
                "Funda"=>"0",
                "Lapiz"=>"0",
                "Powerbank"=>"0",
                "Maletin"=>"0",
                "Cargador"=>"0",
                "Mouse"=>"0",
                "Mousepad"=>"0"
            );


            $respuesta = ControladorDispositivos::ctrRegistrarDispositivo($datos, $accesorios);
            echo json_encode($respuesta);  
        }
        
    }

    //MUESTRA LA INFORMACIÓN DEL DISPOSITIVO, ANTES DE MODIFICARLO
    public $idEditarDispositivo;
    public function ajaxEditarDispositivo(){
        $item = "iddispositivo";
        $valor = $this->idEditarDispositivo;

        $respuesta = ControladorDispositivos::ctrMostrarDispositivos($item, $valor);
        echo json_encode($respuesta);
    }

    //MODIFICA LA INFORMACIÓN DEL DISPOSITIVO
    public $idDispositivoModificar;
    public function ajaxModificarInfoDispositivo(){
        $item = "iddispositivo";
        $valor = $this->idDispositivoModificar;

        if(isset($_POST["editarTipoDispositivo"]) && !empty($_POST["editarTipoDispositivo"]) && isset($_POST["editarMarcaDispositivo"]) && !empty($_POST["editarMarcaDispositivo"]) && isset($_POST["editarModeloDispositivo"]) && !empty($_POST["editarModeloDispositivo"]) && isset($_POST["editarSerieDispositivo"]) && !empty($_POST["editarSerieDispositivo"]) && isset($_POST["editarSedeDispositivo"]) && !empty($_POST["editarSedeDispositivo"])){
            if($_POST["editarTipoDispositivo"] == "Telefono" || $_POST["editarTipoDispositivo"] == "Tablet" || $_POST["editarTipoDispositivo"] == "Laptop"){

                $imei = empty($_POST["editarImeiDispositivo"]) ? null : $_POST["editarImeiDispositivo"];
                
                $datos = array(
                    "tipo"=>$_POST["editarTipoDispositivo"],
                    "marca"=>$_POST["editarMarcaDispositivo"],
                    "modelo"=>$_POST["editarModeloDispositivo"],
                    "imei"=>$imei,
                    "serie"=>$_POST["editarSerieDispositivo"],
                    "telefono"=>$_POST["editarTelefonoDispositivo"],
                    "sede"=>$_POST["editarSedeDispositivo"],
                    "comentario"=>$_POST["comentarioDispositivo"]
                );
            }

            $respuesta = ControladorDispositivos::ctrModificarDispositivo($item, $valor, $datos);
            echo json_encode($respuesta);
        }

    }

    public $idEliminarDispositivo;
    public function eliminarDispositivo(){
        $item = "iddispositivo";
        $valor = $this->idEliminarDispositivo;

        $respuesta = ControladorDispositivos::ctrEliminarDispositivo($item, $valor);

        echo json_encode($respuesta);
    }

}


//Comprobando si se ha recibido el valor id, pasarlo en la variable y ejecutar el metodo
if(isset($_POST["idDispositivo"])){
    $mostrar = new AjaxDispositivos();
    $mostrar->idDispositivo = $_POST["idDispositivo"];
    $mostrar->ajaxMostrarDispositivo();
}

//PARA MOSTRAR LA INFORMACION DEL DISPOSITIVO A RECUPERAR
if(isset($_POST["idDispositivoRecuperar"])){
    $recuperar = new AjaxDispositivos();
    $recuperar->idDispositivoRecuperar = $_POST["idDispositivoRecuperar"];
    $recuperar->ajaxMostrarDispositivoRecuperar();
}

//PARA REGISTRAR NUEVO DISPOSITIVO
if(isset($_POST["nuevo"])){
    $registrar = new AjaxDispositivos();
    $registrar->ajaxRegistrarNuevoDispositivo();
}

//MUESTRA LA INFORMACIÓN DEL DISPOSITIVO ANTES DE MODIFICARLA
if(isset($_POST["idEditarDispositivo"])){
    $editar = new AjaxDispositivos();
    $editar->idEditarDispositivo = $_POST["idEditarDispositivo"];
    $editar->ajaxEditarDispositivo();
}

//MODIFICA LA INFORMACIÓN DEL DISPOSITIVO
if(isset($_POST["idEditarDispositivo_"])){
    $modificar = new AjaxDispositivos();
    $modificar->idDispositivoModificar = $_POST["idEditarDispositivo_"];
    $modificar->ajaxModificarInfoDispositivo();
}

//PARA ELIMINAR DISPOSITIVO
if(isset($_POST["idEliminarDispositivo"])){
    $eliminar = new AjaxDispositivos();
    $eliminar->idEliminarDispositivo = $_POST["idEliminarDispositivo"];
    $eliminar->eliminarDispositivo();
}

