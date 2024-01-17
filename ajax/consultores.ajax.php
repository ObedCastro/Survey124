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

    public $sedeConsultor;
    public function ajaxMostrarConsultoresSede(){
        $item = "sedeconsultor";
        $valor = $this->sedeConsultor;

        $respuesta = ControladorConsultores::ctrMostrarConsultoresSede($item, $valor);
        echo json_encode($respuesta);
    }

    public $idEliminarConsultor;
    public function ajaxEliminarConsultor(){
        $item = "idconsultor";
        $valor = $this->idEliminarConsultor;

        $respuesta = ControladorConsultores::ctrEliminarConsultor($item, $valor);
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

//PARA MOSTRAR LAS SEDES EN SELECT
if(isset($_POST["sedeDispositivo"])){
    $sede = new AjaxConsultores();
    $sede->sedeConsultor = $_POST["sedeDispositivo"];
    $sede->ajaxMostrarConsultoresSede();
}

//PARA ELIMINAR CONSULTOR
if(isset($_POST["idEliminarConsultor"])){
    $eliminar = new AjaxConsultores();
    $eliminar->idEliminarConsultor = $_POST["idEliminarConsultor"];
    $eliminar->ajaxEliminarConsultor();
}