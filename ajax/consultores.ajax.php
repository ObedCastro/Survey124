<?php

require_once "../controladores/consultores.controlador.php"; 
require_once "../modelos/consultores.modelo.php";

class AjaxConsultores { 

    public $ajaxConsultores;
    public function ajaxMostrarConsultores(){
        $item = "idconsultor";
        $valor = $this->ajaxConsultores;

        $respuesta = ControladorConsultores::ctrMostrarConsultores($item, $valor);
        echo json_encode($respuesta);
    }

    public $idEditarconsultor;
    public function ajaxEditarConsultor(){ 
        $item = "idconsultor";
        $valor = $this->idEditarConsultor;

        $respuesta = ControladorConsultores::ctrMostrarconsultores($item, $valor);
        echo json_encode($respuesta);
    }

}


//Comprobar si se esta recibiendo el dato
if(isset($_POST["idConsultor"])){
    $mostrar = new AjaxConsultores();
    $mostrar->ajaxConsultores = $_POST["idConsultor"];
    $mostrar->ajaxMostrarConsultores();
}

//PARA MODIFICAR LA INFORMACIÓN DE UN CONSULTOR
if(isset($_POST["idEditarConsultor"])){
    $editar = new AjaxConsultores();
    $editar->idEditarConsultor = $_POST["idEditarConsultor"];
    $editar->ajaxEditarConsultor();
}