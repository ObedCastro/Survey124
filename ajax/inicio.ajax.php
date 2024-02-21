<?php

require_once "../controladores/inicio.controlador.php";
require_once "../modelos/inicio.modelo.php";

class AjaxInicio{

    public $idSede;
    public function ajaxMostrarDispositivosSede(){
        $item = "idsede";
        $valor = $this->idSede;
        $respuesta = ControladorInicio::ctrMostrarDispositivosSede($item, $valor);

        echo json_encode($respuesta);
    }

}

if(isset($_POST["sede"]) && $_POST["sede"] != ""){
    $mostrar = new AjaxInicio();
    $mostrar->idSede = $_POST["sede"];
    $mostrar->ajaxMostrarDispositivosSede();
}