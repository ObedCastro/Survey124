<?php

require_once "../controladores/faltantes.controlador.php";
require_once "../modelos/faltantes.modelo.php";

class TablaFaltantes{

    public function mostrarTablaFaltantes(){
        $item = null;
        $valor = null;

        $faltantes = ControladorFaltantes::ctrMostrarFaltantes($item, $valor);

        echo json_encode(array("data"=> $faltantes));
    }

}


$activar = new TablaFaltantes();
$activar->mostrarTablaFaltantes();