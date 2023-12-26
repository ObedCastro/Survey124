<?php

require_once "../controladores/consultores.controlador.php";
require_once "../modelos/consultores.modelo.php";

class ajaxConsultores {

    public $ajaxConsultores;
    public function ajaxMostrarConsultores(){
        $item = "idconsultor";
        $valor = $this->$ajaxConsultores;

        $respuesta = ControladorConsultores::ctrMostrarConsultores($item, $valor);
        echo json_encode($respuesta);
    }

}


//Comprobar si se esta recibiendo el dato
if(isset($_POST["idConsultor"])){
    
}