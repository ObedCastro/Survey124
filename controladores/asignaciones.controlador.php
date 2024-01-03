<?php


class ControladorAsignaciones{


     //ASIGNAR DISPOSITIVO
     static public function ctrAsignarDispositivo($id, $res, $accesorios){
        $tabla = "dispositivos";

        $respuesta = ModeloAsignaciones::mdlAsignarDispositivo($tabla, $id, $res, $accesorios);

        /*$item = "iddispositivo";
        $infodispositivo = ModeloDispositivos::mdlMostrarDispositivos($tabla, $item, $id);
        $infoconsultor = ModeloConsultores::mdlMostrarConsultores("consultores", "idconsultor", $res);
        */
        return $respuesta;

    }

}
