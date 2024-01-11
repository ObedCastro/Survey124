<?php

class ControladorFaltantes{

    static public function ctrMostrarFaltantes($item, $valor){
        $tabla = "registros";

        $faltantes = ModeloFaltantes::mdlMostrarFaltantes($tabla, $item, $valor);
        return $faltantes;
    }

}