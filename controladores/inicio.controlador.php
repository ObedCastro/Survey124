<?php

class ControladorInicio{

    static public function ctrMostrarDispositivosAsignados(){
        $tabla = "dispositivos";
        $datos = ModeloInicio::mdlMostrarDispositivosAsignados($tabla);

        return $datos;
    }

}