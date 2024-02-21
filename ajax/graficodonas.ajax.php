<?php

require_once "../controladores/inicio.controlador.php";
require_once "../modelos/inicio.modelo.php";

class AjaxGraficoDonas{

    public function ajaxMostrarGraficoDonas(){
        $resultado = ControladorInicio::ctrMostrarGraficoDonas();

        echo json_encode($resultado);

    }

}

$mostrarGraficoDonas = new AjaxGraficoDonas();
$mostrarGraficoDonas->ajaxMostrarGraficoDonas();