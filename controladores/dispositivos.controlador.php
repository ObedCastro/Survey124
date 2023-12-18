<?php

class ControladorDispositivos{

    static public function ctrMostrarDispositivos(){
        $tabla = "dispositivos";
        $datos = ModeloDispositivos::mdlMostrarDispositivos($tabla);

        return $datos;
    }

}