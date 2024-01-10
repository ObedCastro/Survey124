<?php

require_once "../controladores/inicio.controlador.php";
require_once "../modelos/inicio.modelo.php";

class AjaxGraficoBarras{

    public function ajaxMostrarGraficoBarras(){
        $resultado = ControladorInicio::ctrMostrarGraficoBarras();
    
        echo json_encode($resultado);
      }

}

$mostrarGraficoBarras = new AjaxGraficoBarras();
$mostrarGraficoBarras->ajaxMostrarGraficoBarras();