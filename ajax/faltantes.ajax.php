<?php

require_once "../controladores/faltantes.controlador.php";
require_once "../modelos/faltantes.modelo.php";

class AjaxFaltantes{

    public $idRegistro;
    public function ajaxAccesoriosMostrarFaltantes(){
        $item = "id";
        $valor = $this->idRegistro;
        $respuesta = ControladorFaltantes::ctrMostrarAccesoriosFaltantes($item, $valor);

        echo json_encode($respuesta);
    }

    public function ajaxRecuperarAccesorios(){
        $item = "id";
        $valor = $_POST["idAccRecuperar"];
        $accesorios = array(
            "Cubo" => isset($_POST["checkCubo"]) ? "1" : "0",
            "Cable" => isset($_POST["checkCable"]) ? "1" : "0",
            "Funda" => isset($_POST["checkFunda"]) ? "1" : "0",
            "Lapiz" => isset($_POST["checkLapiz"]) ? "1" : "0",
            "Powerbank" => isset($_POST["checkPowerbank"]) ? "1" : "0",
            "Maletin" => isset($_POST["checkMaletin"]) ? "1" : "0",
            "Cargador" => isset($_POST["checkCargador"]) ? "1" : "0",
            "Mouse" => isset($_POST["checkMouse"]) ? "1" : "0",
            "Mousepad" => isset($_POST["checkMousepad"]) ? "1" : "0"
        );

        $respuesta = ControladorFaltantes::ctrRecuperarFaltantes($item, $valor, $accesorios);
        
        echo json_encode($respuesta);
    }

}

if(isset($_POST["idregistro"])){
    $mostrar = new AjaxFaltantes();
    $mostrar->idRegistro = $_POST["idregistro"];
    $mostrar->ajaxAccesoriosMostrarFaltantes();
}

if(isset($_POST["recuperar"])){
    $recuperar = new AjaxFaltantes();
    $recuperar->ajaxRecuperarAccesorios();
}