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
                    title: "Error, no se ha podido registrar el dispositivo. Compruebe que su información sea correcta.",
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