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
        
        echo json_encode(array("mensaje" => "Accesorios recuperados"));
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