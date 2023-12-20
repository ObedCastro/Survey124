<?php

require_once "../controladores/dispositivos.controlador.php";
require_once "../modelos/dispositivos.modelo.php";

class AjaxDispositivos{

    public $idDispositivo;
    public function ajaxMostrarDispositivo(){
        $item = "iddispositivo";
        $valor = $this->idDispositivo;

        $respuesta = ControladorDispositivos::ctrMostrarDispositivos($item, $valor);
        echo json_encode($respuesta);
    }

}


//Comprobando si se ha recibido el valor id, pasarlo en la variable y ejecutar el metodo
if(isset($_POST["idDispositivo"])){
    $mostrar = new AjaxDispositivos();
    $mostrar->idDispositivo = $_POST["idDispositivo"];
    $mostrar->ajaxMostrarDispositivo();

}