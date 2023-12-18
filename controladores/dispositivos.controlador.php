<?php

class ControladorDispositivos{

    static public function ctrMostrarDispositivos($item, $valor){
        $tabla = "dispositivos";
        $datos = ModeloDispositivos::mdlMostrarDispositivos($tabla, $item, $valor);

        return $datos;
    }

}