<?php

session_start();

require_once "../controladores/wiki.controlador.php";
require_once "../modelos/wiki.modelo.php";
require_once "../controladores/administradores.controlador.php";
require_once "../modelos/administradores.modelo.php";

class AjaxWiki{

    public function ajaxNuevaEntrada(){
        if(isset($_POST["iTituloProblema"])){
            $datos = array(
                "titulo" => $_POST["iTituloProblema"],
                "descripcion" => $_POST["taDescripcionProblema"],
                "solucion" => $_POST["taSolucionProblema"],
                "reporta" => $_SESSION["id"]
            );

            $respuesta = ControladorWiki::ctrNuevaentrada($datos);

            echo json_encode($respuesta);

        } else{
            echo json_encode(array("mensaje" => "No se colocó el título de la entrada"));
        }
    }
    
    //PARA NUEVA COLABORACIÓN
    public $idWikiColabora;
    public function ajaxNuevaColaboracion(){

        $datos = array(
            "contenido" => $_POST["taColaboracion"],
            "colaborador" => $_SESSION["id"],
            "idwiki" => $this->idWikiColabora
        );

        $respuesta = ControladorWiki::ctrNuevacolaboracion($datos);

        if($respuesta == "ok"){
            $persona = ControladorAdministradores::ctrMostrarAdministradores("id", $_SESSION["id"]);

            $arr = array(
                "colaboracion" => $_POST["taColaboracion"],
                "colaborador" => $persona["nombre"],
                "cargo" => $persona["cargo"],
                "usuario" => $persona["usuario"]
            );
        }

        echo json_encode($arr);
    }

    //PARA MOSTRAR RESPUESTAS
    public $idWiki;
    public function ajaxMostrarRespuestas(){
        $item = "idwiki";
        $valor = $this->idWiki;

        $respuesta = ControladorWiki::ctrMostrarRespuestas($item, $valor);

        echo json_encode($respuesta);

    }

}

//PARA REGISTRAR NUEVA ENTRADA
if(isset($_POST["nuevaEntradaWiki"])){
    $nuevaEntrada = new AjaxWiki();
    $nuevaEntrada->ajaxNuevaEntrada();
}

//PARA MOSTRAR LAS RESPUESTAS
if(isset($_POST["idWiki"])){
    $mostrarRespuestas = new AjaxWiki();
    $mostrarRespuestas->idWiki = $_POST["idWiki"];
    $mostrarRespuestas->ajaxMostrarRespuestas();
}

//PARA MOSTRAR LAS RESPUESTAS
if(isset($_POST["idWikiColabora"])){
    $colaboracion = new AjaxWiki();
    $colaboracion->idWikiColabora = $_POST["idWikiColabora"];
    $colaboracion->ajaxNuevaColaboracion();
}