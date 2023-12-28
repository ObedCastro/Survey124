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

    public $idEditarDispositivo;
    public function ajaxEditarDispositivo(){
        $item = "iddispositivo";
        $valor = $this->idEditarDispositivo;

        $respuesta = ControladorDispositivos::ctrMostrarDispositivos($item, $valor);
        echo json_encode($respuesta);
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

//PARA EDITAR LA INFORMACIÓN DEL DISPOSITIVO
if(isset($_POST["idEditarDispositivo"])){
    $editar = new AjaxDispositivos();
    $editar->idEditarDispositivo = $_POST["idEditarDispositivo"];
    $editar->ajaxEditarDispositivo();
}

//PARA ELIMINAR DISPOSITIVO
if(isset($_POST["idEliminarDispositivo"])){
    $editar = new AjaxDispositivos();
    $editar->idEliminarDispositivo = $_POST["idEliminarDispositivo"];
    $editar->eliminarDispositivo();
}

