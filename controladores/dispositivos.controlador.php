<?php

class ControladorDispositivos{

    static public function ctrMostrarDispositivos($item, $valor){
        $tabla = "dispositivos";
        $datos = ModeloDispositivos::mdlMostrarDispositivos($tabla, $item, $valor);

        return $datos;
    }


    //REGISTRAR NUEVO DISPOSITIVOS
    static public function ctrRegistrarDispositivo(){
        if(isset($_POST["tipoDispositivo"])){
            if($_POST["tipoDispositivo"] == "Telefono" || $_POST["tipoDispositivo"] == "Tablet" || $_POST["tipoDispositivo"] == "Laptop"){
                $datos = array(
                    "tipo"=>$_POST["tipoDispositivo"],
                    "marca"=>$_POST["marcaDispositivo"],
                    "modelo"=>$_POST["modeloDispositivo"],
                    "imei"=>$_POST["imeiDispositivo"],
                    "serie"=>$_POST["serieDispositivo"],
                    "telefono"=>$_POST["telefonoDispositivo"],
                    "sede"=>$_POST["sedeDispositivo"]
                );

                $respuesta = ModeloDispositivos::mdlRegistrarDispositivo("dispositivos", $datos);

                if($respuesta == "ok"){
                    echo '<script>
                        Swal.fire({
                            type: "success",
                            icon: "success",
                            title: "El dispositivo se registró correctamente.",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"                            
                        }).then(function(result){
                            window.location = "dispositivos";
                        })
                        </script>';
                }

            } else{
                echo '<script>
                Swal.fire({
                    type: "error",
                    icon: "error",
                    title: "Error, no se ha podido registrar el dispositivo. Intente nuevamente",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                    
                })
                </script>';

                return;
            }

        } else{
            
        }
    }

    
    //MODIFICAR DISPOSITIVO 
    static public function ctrModificarDispositivo(){
        if(isset($_POST["editarTipoDispositivo"])){
            if($_POST["editarTipoDispositivo"] == "Telefono" || $_POST["editarTipoDispositivo"] == "Tablet" || $_POST["editarTipoDispositivo"] == "Laptop"){
                $id = $_POST["idDispositivo"];
                $datos = array(
                    "tipo"=>$_POST["editarTipoDispositivo"],
                    "marca"=>$_POST["marcaDispositivo"],
                    "modelo"=>$_POST["modeloDispositivo"],
                    "imei"=>$_POST["imeiDispositivo"],
                    "serie"=>$_POST["serieDispositivo"],
                    "telefono"=>$_POST["telefonoDispositivo"],
                    "sede"=>$_POST["sedeDispositivo"],
                    "comentario"=>$_POST["comentarioDispositivo"]
                );

                $respuesta = ModeloDispositivos::mdlModificarDispositivo($id, "dispositivos", $datos);

                if($respuesta == "ok"){
                    echo '<script>
                        Swal.fire({
                            type: "success",
                            icon: "success",
                            title: "La información del dispositivo se modificó correctamente.",
                            showConfirmButton: true,
                            confirmButtonText: "Cerrar"                            
                        }).then(function(result){
                            window.location = "dispositivos";
                        })
                        </script>';
                }

            } else{
                echo '<script>
                Swal.fire({
                    type: "error",
                    icon: "error",
                    title: "Error, no se ha podido registrar el dispositivo. Intente nuevamente",
                    showConfirmButton: true,
                    confirmButtonText: "Cerrar"
                    
                })
                </script>';

                return;
            }

        } else{
            
        }
    }

}
