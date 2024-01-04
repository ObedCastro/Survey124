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

    public $idDispositivoRecuperar;
    public function ajaxMostrarDispositivoRecuperar(){
        $item = "iddispositivo";
        $consultor = $_POST["consultorResposable"];
        $valor = $this->idDispositivoRecuperar;

        $respuesta = ControladorDispositivos::ctrMostrarDispositivoRecuperar($item, $valor, $consultor);
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

    /*public function ajaxAsignarDispositivo(){

      if(isset($_POST["idDispositivoAsignar"]) && isset($_POST["responsableDispositivo"])){
        $id = $_POST["idDispositivoAsignar"];
        $res = $_POST["responsableDispositivo"];

        $datos = array(
            "Cubo"=>isset($_POST["checkCubo"]) == "on" ? "1" : "0",
            "Cable"=>isset($_POST["checkCable"]) == "on" ? "1" : "0",
            "Funda"=>isset($_POST["checkFunda"]) == "on" ? "1" : "0",
            "Lapiz"=>isset($_POST["checkLapiz"]) == "on" ? "1" : "0",
            "Powerbank"=>isset($_POST["checkPowerbank"]) == "on" ? "1" : "0",
            "Maletin"=>isset($_POST["checkMaletin"]) == "on" ? "1" : "0",
            "Cargador"=>isset($_POST["checkCargador"]) == "on" ? "1" : "0",
            "Mouse"=>isset($_POST["checkMouse"]) == "on" ? "1" : "0",
            "Mousepad"=>isset($_POST["checkMousepad"]) == "on" ? "1" : "0"
        );

        $accesorios = json_encode($datos);

        $respuesta = ControladorDispositivos::ctrAsignarDispositivo($id, $res, $accesorios);

        echo json_encode($respuesta);
      }

    }*/

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

//PARA ASIGNAR DISPOSITIVO
/*if(!isset($_POST["asignar"])){
  $asignar = new AjaxDispositivos();
  $asignar->ajaxAsignarDispositivo();
}*/
