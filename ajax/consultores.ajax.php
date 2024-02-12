<?php
 
require_once "../controladores/consultores.controlador.php"; 
require_once "../modelos/consultores.modelo.php";

class AjaxConsultores { 

    public $ajaxConsultores;
    public function ajaxMostrarConsultores(){
        $item = "idconsultor";
        $valor = $this->ajaxConsultores;

        $respuesta = ControladorConsultores::ctrMostrarConsultores($item, $valor);
        echo json_encode($respuesta);
    }

    //PARA REGISTRAR NUEVO CONSULTOR
    public function ajaxNuevoConsultor(){
        if(isset($_POST["nombreConsultor"]) && isset($_POST["cargoConsultor"]) && isset($_POST["sedeConsultor"])){
            if(!empty($_POST["nombreConsultor"] && !empty($_POST["cargoConsultor"]) && !empty($_POST["sedeConsultor"]))){
                $datos = array(
                    "nombre" => $_POST["nombreConsultor"],
                    "dui" => $_POST["duiConsultor"],
                    "cargo" => $_POST["cargoConsultor"],
                    "contacto" => $_POST["contactoConsultor"],
                    "sede" => $_POST["sedeConsultor"],
                    "fecha" => $_POST["fechaRegistroConsultor"]
                );
    
                $respuesta = ControladorConsultores::ctrRegistrarConsultor($datos);
    
                echo json_encode($respuesta);
            }

        }
    }

    //PARA MOSTRAR LA INFORMACIÓN ANTES DE EDITAR
    public $idEditarconsultor;
    public function ajaxMostrarConsultor(){ 
        $item = "idconsultor";
        $valor = $this->idEditarConsultor;

        $respuesta = ControladorConsultores::ctrMostrarconsultores($item, $valor);
        echo json_encode($respuesta);
    }

    //PARA MODIFICAR LA INFORMACIÓN DEL CONSULTOR
    public function ajaxEditarConsultor(){
        if(isset($_POST["idEditarConsultor"]) && isset($_POST["editarNombreConsultor"]) && isset($_POST["editarCargoConsultor"]) && isset($_POST["editarSedeConsultor"])){
            if(!empty($_POST["idEditarConsultor"]) && !empty($_POST["editarNombreConsultor"]) && !empty($_POST["editarCargoConsultor"]) && !empty($_POST["editarSedeConsultor"])){
                $id = $_POST["idEditarConsultor"];
                $datos = array(
                    "nombre"=>$_POST["editarNombreConsultor"],
                    "dui"=>$_POST["editarDuiConsultor"],
                    "contacto"=>$_POST["editarContactoConsultor"],
                    "cargo"=>$_POST["editarCargoConsultor"],
                    "sede"=>$_POST["editarSedeConsultor"]
                );

                $respuesta = ControladorConsultores::ctrModificarConsultor($id, $datos);

                echo json_encode($respuesta);
            }
        }
    }

    public $sedeConsultor;
    public function ajaxMostrarConsultoresSede(){
        $item = "sedeconsultor";
        $valor = $this->sedeConsultor;

        $respuesta = ControladorConsultores::ctrMostrarConsultoresSede($item, $valor);
        echo json_encode($respuesta);
    }

    public $idEliminarConsultor;
    public function ajaxEliminarConsultor(){
        $item = "idconsultor";
        $valor = $this->idEliminarConsultor;

        $respuesta = ControladorConsultores::ctrEliminarConsultor($item, $valor);
        echo json_encode($respuesta);
    }

}


//Comprobar si se esta recibiendo el dato
if(isset($_POST["idConsultor"])){
    $mostrar = new AjaxConsultores();
    $mostrar->ajaxConsultores = $_POST["idConsultor"];
    $mostrar->ajaxMostrarConsultores();
}

//PARA MOSTRAR LA INFORMACIÓN DEL CONSULTOR, ANTES DE MODIFICAR
if(isset($_POST["idEditarMostrar"])){
    $mostrarInfo = new AjaxConsultores();
    $mostrarInfo->idEditarConsultor = $_POST["idEditarMostrar"];
    $mostrarInfo->ajaxMostrarConsultor();
}

//PARA EDITAR LA INFORMACIÓN DE CONSULTOR
if(isset($_POST["idEditarConsultor"])){
    $editar = new AjaxConsultores();
    $editar->ajaxEditarConsultor();
}

//PARA REGISTRAR UN NUEVO CONSULTOR
if(isset($_POST["nuevo"])){
    $nuevo = new AjaxConsultores();
    $nuevo->ajaxNuevoConsultor();
}

//PARA MOSTRAR LAS SEDES EN SELECT
if(isset($_POST["sedeDispositivo"])){
    $sede = new AjaxConsultores();
    $sede->sedeConsultor = $_POST["sedeDispositivo"];
    $sede->ajaxMostrarConsultoresSede();
}

//PARA ELIMINAR CONSULTOR
if(isset($_POST["idEliminarConsultor"])){
    $eliminar = new AjaxConsultores();
    $eliminar->idEliminarConsultor = $_POST["idEliminarConsultor"];
    $eliminar->ajaxEliminarConsultor();
}
